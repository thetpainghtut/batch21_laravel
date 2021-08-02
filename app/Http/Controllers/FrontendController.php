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

    public function quickItem(Item $item)
    {
        return $item;
    }

    public function testing($value='')
    {
        $categories = Category::with('filterSubcategories')->get();
        // dd($categories);
        return view('frontend.testing',compact('categories'));
    }
}
