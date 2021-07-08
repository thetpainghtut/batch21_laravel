<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('template.home');
    }

    public function about(){
        return view('template.about');
    }

    public function contact(){
        return view('template.contact');
    }

    public function post(){
        return view('template.post');
    }
}
