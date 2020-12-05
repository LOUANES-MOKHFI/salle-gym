<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     
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
        return view('visiteur.home.index');
    }

    public function about(){
        return view('visiteur.about.index');
    }
     public function contact(){
        return view('visiteur.contact');
    }
    public function planning(){
        return view('visiteur.planning');
    }
    public function activities(){
        return view('visiteur.activities');
    }
      public function gallerie(){
        return view('visiteur.gallerie');
    }
    
}
