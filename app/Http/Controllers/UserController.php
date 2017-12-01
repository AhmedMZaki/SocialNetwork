<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class UserController extends Controller
{
  //user sign up function
  public function PostSignUp(Request $request){
    // optaining user info
    $first_name=$request['first_name'];
    $email=$request['email'];
    $password=bcrypt($request['password']);
  }
// user sign in function
  public function PostSignIn(Request $request){

  }
}
