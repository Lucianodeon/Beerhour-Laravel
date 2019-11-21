<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postModelo;

class HomeController extends Controller


{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $posts=postModelo::all();
      
      return view('home',compact("posts"));

    }


}
