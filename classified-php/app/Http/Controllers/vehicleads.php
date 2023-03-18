<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicle_ad;
use App\Models\user;
use App\Models\image;
use Session;
use Intervention\Image\Facades\Image as InterventionImage;
	

class vehicleads extends Controller
{
    
    function sellvehicle() {
        return view('sellvehicle');
    }


    function savesellvehicle(Request $req){

        //validate fields
        $req->validate([
           
            'type' => 'required',
            'condition' => 'required',
            'make' => 'required',
            'model' => 'required',
            'myear' => 'required|numeric',            
            'price' => 'required|numeric',
            'transmission' => 'required',
            'fuel' => 'required',
            'ecapacity' => 'required|numeric',
            'mileage' => 'required|numeric',
            'description' => 'required',
            'mainimage' => 'required | mimes:jpeg,jpg,png|max:5048',
            'image*' => 'mimes:jpeg,jpg,png,gif|max:5048',
            'name' => 'required|max:100',
            'location' => 'required',
            
        ]);





//save fields to the database
        
        $user_id = user::where('phone_number', session('phone_number'))->first()->id;



        $data = array(
            'vehicle_type' => $req->input('type'),
            'user_id' => $user_id,//session('user_id'),
            'vehicle_condition' => $req->input('condition'),
            'vehicle_make' => $req->input('make'),
            'vehicle_model' => $req->input('model'),
            'vehicle_year' => $req->input('myear'),
            'price' => $req->input('price'),
            'transmission' => $req->input('transmission'),
            'fuel_type' => $req->input('fuel'),
            'engine_capacity' => $req->input('ecapacity'),
            'mileage' => $req->input('mileage'),
            'description' => $req->input('description'),
            'name' => $req->input('name'),
            'phone_number' => session('phone_number'),
            'location' => $req->input('location'),
        );

        $vehicleAd = vehicle_ad::create($data);
        $vehicleAdId = $vehicleAd->id;
        $phone_number = session('phone_number');

//save images

$file = $req->file('mainimage');

// Create an instance of the image from the uploaded file
$image = InterventionImage::make($file);

// Reduce the quality of the image to 75% and save it in JPEG format
$image->encode('jpg', 75);
$image->encode('png', 75);


$image->resize(1100, null, function ($constraint) {
    $constraint->aspectRatio();
});



$phone_number = substr($phone_number, 1);
$fileName = $phone_number . '_' . hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();

// Save the processed image to disk with the generated file name
$image->save('uploads/' . $fileName);

$image = new Image;

// Set the image file name and other properties
$image->image = $fileName;
$image->table_id = 0;  //vehiclesale table id is 0
$image->is_mainimage = 1;
$image->main_id = $vehicleAdId;

// Save the Image instance to the database
$image->save();

return redirect('viewvehicle/' . $vehicleAdId);

        



       
    }



    function viewvehicle($id) {
        $vehicle_ad = Vehicle_Ad::find($id);
        $image = $vehicle_ad->image()->where('is_mainimage', 1)->first();
        
        
       
        return view('viewvehicle', ['vehicle' => $vehicle_ad, 'image' => $image]);
    }
}
