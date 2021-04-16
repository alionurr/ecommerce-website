<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Showcase;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
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

    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();

            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }

    function cartList()
    {
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userId)
        ->select('products.*', 'cart.id as cart_id')
        ->get();

        $totalPrice = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userId)
        ->sum('products.price');

        return view('cart', ['products' => $products , 'total' => $totalPrice]);
    }

    function removeItem($id)
    {
        Cart::destroy($id);
        return redirect('/cart');
    }

    function orderNow()
    {
        $userId = Session::get('user')['id'];
        $totalPrice = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userId)
        ->sum('products.price');

        return view('ordernow', ['total' => $totalPrice]);
    }

    function orderInfo(Request $req)
    {
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();

        foreach ($allCart as $cart) {
            $order = new Order;
            $order->user_id = $cart->user_id;
            $order->product_id = $cart->product_id;
            $order->payment_method = $req->payment;
            $order->address = $req->address;
            $order->save();
        }
        Cart::where('user_id', $userId)->delete();
        return redirect('/');
    }
}
