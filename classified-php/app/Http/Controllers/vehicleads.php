<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            //'phonenumber' => 'required',
            'location' => 'required',
            
        ]);

        echo "validation success";

        $data = array(
            'type' => $req->input('type'),
            'condition' => $req->input('condition'),
            'make' => $req->input('make'),
            'model' => $req->input('model'),
            'myear' => $req->input('myear'),
            'price' => $req->input('price'),
            'transmission' => $req->input('transmission'),
            'fuel' => $req->input('fuel'),
            'ecapacity' => $req->input('ecapacity'),
            'mileage' => $req->input('mileage'),
            'description' => $req->input('description'),
            'name' => $req->input('name'),
            'phonenumber' => $req->input('phonenumber'),
            'location' => $req->input('location'),
        );

        echo "<pre>";
        echo print_r($data);
        echo "</pre>";
    }
}
