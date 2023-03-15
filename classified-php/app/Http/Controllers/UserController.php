<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    
// login view
  function login()
  {

    return view('login');
  }

  // login function

  function userlogin(Request $req){

    //login validation
  //$req->validate([
 //   'phone' => 'required|regex:/[0-9]{10}/|digits:10',
  //]);

  
  $phone = $req->input('phone');
  $token = $req->input('token');


 echo $phone . "<br>";
 echo $token . "<br>";



  }

  function register()
  {
    return view('register');
  }





}
