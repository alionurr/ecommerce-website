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
        $data = Product::all();
        return view('products', ['products' => $data]);
    }
}
