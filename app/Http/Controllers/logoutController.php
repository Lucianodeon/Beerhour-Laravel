<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutController extends Controller
{
    public function logout(){

      session_start();
      session_destroy();
      return view("welcome");
      exit();
      

    }
}
