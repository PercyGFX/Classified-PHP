<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
// login view
  function login()
  {

    return view('login');
  }

  // login function

  function userlogin(Request $req){

   echo $req["email"] . "<br>";
   echo md5($req["password"]);

  }

  function register()
  {
    return view('register');
  }





}
