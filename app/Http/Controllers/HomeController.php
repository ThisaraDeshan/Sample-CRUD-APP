<?php

namespace App\Http\Controllers;

use App\Models\userDetails;
use Illuminate\Http\Request;

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
        $posts = userDetails::all();
        return view('home',compact('posts'));
    }

    public function addNewUser(){
        return view('addNewUser');
    }

    public function updateUser($id){
        $post = userDetails::findOrFail($id);

        return view('updateUser',compact('post'));
    }

}
