<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Brand;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {           
        $products = Product::get();

        // LOG::INFO($products);
        foreach ($products as $product) {
            // LOG::INFO($product->brand);
        }
        
        return view('home', ['products' => $products]);
    }

    // public function checkout($id)
    // {
    //     $product = products::find($id);
    //     $buy = Product::add(['id' => $product->id, 'name' => $product->product_name, 'qty' => $product->quantity_available, 'price' => $product->selling_price]);
    //     return view('$buy.checkout',[
    //         'data' => $buy
    //     ]);
    // }
}
