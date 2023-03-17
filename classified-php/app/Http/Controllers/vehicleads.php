<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicle_ad;
use App\Models\user;

use Session;

class vehicleads extends Controller
{
    
    function sellvehicle() {
        return view('sellvehicle');
    }


    function savesellvehicle(Request $req){

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
            'mainimage' => 'required | mimes:jpeg,jpg,png|max:2048',
            'image*' => 'mimes:jpeg,jpg,png,gif|max:2048',
            'name' => 'required|max:100',
            'location' => 'required',
            
        ]);

        
        $user_id = user::where('phone_number', session('phone_number'))->first()->id;



        $data = array(
            'vehicle_type' => $req->input('type'),
            'user_id' => $user_id,//session('user_id'),
            'image' => 'image',	  // chnage this to image
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

        vehicle_ad::create($data);

        echo "<pre>";
        echo print_r($data);
        echo "</pre>";
    }
}
