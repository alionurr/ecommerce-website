<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Showcase;
use Symfony\Component\Console\Input\Input;

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

    function productDetails($id)
    {
        $data = Product::find($id);
        //return $data;
        return view('product_details', ['product' => $data]);
    }

    function search(Request $req)
    {
        $data = Product::
        where('name', 'like', '%'.$req->input('search').'%')
        ->get();

        return view('search_results', ['products' => $data]);
    }
}
