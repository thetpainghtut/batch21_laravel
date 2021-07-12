<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class PageController extends Controller
{
    public function home(){
        $items = Item::all(); // array of objects
        return view('template.home',compact('items'));
    }

    public function about(){
        return view('template.about');
    }

    public function contact(){
        return view('template.contact');
    }

    public function post($id){
        $item = Item::find($id); // object
        return view('template.post',compact('item'));
    }
}
