<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postModelo;
class profileController extends Controller

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
    public function index($id)
    {
      $posts=postModelo::where('id_user', $id)->get();
      return view('profile',compact("posts"));

    }
}
