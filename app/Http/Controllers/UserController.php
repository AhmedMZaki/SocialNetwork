<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{

  public function getDashboard(){
    return view('dashboard');
  }
  //user sign up function
  public function PostSignUp(Request $request){
    // optaining user info
    $first_name=$request['first_name'];
    $email=$request['email'];
    //solve this mistak sign in error because of password does not matches
    $password=bcrypt($request['password']);
    //$password=$request['password'];
    $user=new User();
    $user->first_name=$first_name;
    $user->email=$email;
    $user->password=$password;
    $user->save();
    return redirect('/dashboard');
  }


// user sign in function
  public function PostSignIn(Request $request){
    $dataAttempt = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );
  //  if(Auth::attempt(['email'=>$request['email'],'password'=>bcrypt($request['password'])])){
    if(Auth::attempt($dataAttempt)){
      return redirect()->home();
    } else {
        return redirect()->back();
    }


  }


}
