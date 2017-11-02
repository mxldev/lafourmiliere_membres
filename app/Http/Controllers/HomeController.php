<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth'); 
    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
         if(!Auth::check()) {
             return view('welcome');
         } elseif(Auth::user()->ismember()) {
             return redirect()->route('dashboard');
         } else {
            return redirect()->route('inscription');   
         }
     }

    public function dashboard() {
        return view('member.dashboard');
    }
}
