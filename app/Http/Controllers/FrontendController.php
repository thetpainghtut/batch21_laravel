<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;

class FrontendController extends Controller
{
    public function home($value='')
    {
        // $items = Item::orderBy('id','desc')->take(4)->get();

        $categories = Category::has('items')->get();
        return view('frontend.home',compact('categories'));
    }

    public function shop($value='')
    {
        $items = Item::all();
        return view('frontend.shop',compact('items'));
    }

    public function cart($value='')
    {
        return view('frontend.cart');
    }
}
