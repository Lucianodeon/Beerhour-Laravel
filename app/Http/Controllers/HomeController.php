<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postModelo;
use App\User;

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
    public function users()
{
    $users = User::get();
    return view('users', compact('users'));
}


/**
 * Show the application of itsolutionstuff.com.
 *
 * @return \Illuminate\Http\Response
 */
public function user($id)
{
    $user = User::find($id);
    return view('usersView', compact('user'));
}


/**
 * Show the application of itsolutionstuff.com.
 *
 * @return \Illuminate\Http\Response
 */
public function ajaxRequest(Request $request){


    $user = User::find($request->user_id);
    $response = auth()->user()->toggleFollow($user);


    return response()->json(['success'=>$response]);
}


}
