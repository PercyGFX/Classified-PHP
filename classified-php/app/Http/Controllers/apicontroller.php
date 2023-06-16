<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicle_ad;
use App\Models\image;
use Validator;

class apicontroller extends Controller
{


    function getallvehicles(){

         $vehicles = vehicle_ad::orderBy("id", "desc")->with('image')->get();
         return response()->json($vehicles);
         
    }


    function postvehicle(request $req){

        $rules = array(
       
            'vehicle_type' => 'required',
            'transmission' => 'required',          
            
        );
        
        $image = $req->input('image.0.image');

        $validate = Validator::make($req->all() , $rules);

        if ($validate->fails()){

            return $validate->errors();
        }
        else {

            return  "suceess";
        }
    }


}



