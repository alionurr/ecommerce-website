<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Showcase;

class ProductController extends Controller
{
    function index()
    {
        $data = Product::limit(3)->get();
        $showcase = Showcase::all();
        $mostSelling = Product::where('amount','<=',90)->limit(2)->get();

        //return $data;
        return view('index', ['products' => $data , 'showcase' => $showcase , 'mostSelling' => $mostSelling]);
    }

    function products()
    {
        // this data for nav-tab(most popular)
        $data = Product::orderBy('amount', 'asc')->get();
        // this data2 for nav-tab(price high to low)
        $data2 = Product::orderBy('price', 'desc')->get();
        return view('products', ['products' => $data , 'products2' => $data2]);
    }
}
