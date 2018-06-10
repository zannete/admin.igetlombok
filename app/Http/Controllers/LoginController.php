<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Admin;

class LoginController extends Controller{
  public function index(){
    return view("pages.login");
  }

  public function login(Request $request){
    $credentials = $request->input("validation");

    if(Auth::attempt($credentials)){
      return redirect("/");
    }
    return redirect("/login");
  }
}
