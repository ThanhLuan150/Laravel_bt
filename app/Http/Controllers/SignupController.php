<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use Illuminate\Http\Request;
use Requests;
class SignupController extends Controller
{
  public function index(){
    return view('signup');
  }
  public function displayInfor(SignupRequest $Request){
    $user =[
        'name' =>$name =$Request ->input('name'),
        'age'=> $age =$Request ->input('age'),
        'date'=>$date =$Request ->input('date'),
        'phone'=>$phone =$Request ->input('phone'),
        'web'=>$web =$Request ->input('web'),
        'address'=>$address =$Request->input('address')
    ];
    return view('signup') ->with('user',$user);
  }
}
