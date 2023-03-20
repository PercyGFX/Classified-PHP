<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\user;
use Session;
use App\Models\vehicle_ad;

class UserController extends Controller
{



  //index view

  function index(){

    $vehicle_ad = vehicle_ad::OrderBy('id','desc')->paginate(10);
   

    return view('index' , ["vehicle_ad" => $vehicle_ad]);
  }
    
// login view
  function login()
  {

    return view('login');
  }

  // login function

  function userlogin(Request $req){

   //login validation
$req->validate([
   'phone' => 'required',
   'token' => 'required'
]);

  //save in to variables
  $phone = $req->input('phone');
  $token = $req->input('token');

  //curl firebase api and get response

  $api_key = "AIzaSyCCifumMfBcy8ugxcED55JZdDcuSh35HgM";

  
  $curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://identitytoolkit.googleapis.com/v1/accounts:lookup?key=" . $api_key . "&idToken=" . $token,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_HTTPHEADER => array(
        "Content-length:0"
    )
));

$response = curl_exec($curl);

curl_close($curl);

//check user available or not in database

$response = json_decode($response, true);

if (isset($response['users'][0]['phoneNumber']) && $response['users'][0]['phoneNumber'] == $phone) {
   
$result = user::where('phone_number', $phone)->first();

if ($result) {
    // phone number found and matches
    session(['phone_number' => $phone]);
    return redirect('/');
} else {
    // phone number not available in database. insert it
    user::insert([
        'phone_number' => $phone,
        'created_at' => now(),
        'updated_at' => now()      ]);

    session(['phone_number' => $phone]);
    return redirect('/');
    
}


} else {
    // phone number not found or doesn't match
    return redirect('/login')->with('error', 'Phone number not found or doesn\'t match');
}

  }


  function logout()
{
  session::pull('phone_number');
  return redirect('/');
}




}
