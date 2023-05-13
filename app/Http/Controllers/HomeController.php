<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){
        return view('pages.homepage');
    }
    public function classics(){
        return view('pages.classics');
    }
    public function adventure(){
        return view('pages.adventure');
    }
    public function computer(){
        return view('pages.computer');
    }
    public function mystery(){
        return view('pages.mystery');
    }
    public function horror(){
        return view('pages.horror');
    }
    public function about(){
        return view('pages.about');
    }
    public function help(){
        return view('pages.help');
    }
    public function clarification(){
        return view('pages.clarification');
    }
    public function bookinfo(){
        return view('pages.bookinfo');
    }


    public function deneme(){
        return view('pages.deneme');
    }

}
