<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\category;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function homepage(){
        $books=Book::all();
        return view('pages.homepage', compact('books'));
    }
    public function orders(){
        
        $orders = order::where('buyer',Auth::user()->id)->get();
        return view('pages.myorders',compact('orders'));
    }
    
    public function books(){
        $categories = category::all();
        $books = Book::all();
        return view('pages.books',compact('books','categories'));
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
