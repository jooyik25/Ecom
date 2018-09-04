<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index(Request $request)
    {
    	// dd($request->all());    
        LOG::INFO ($request);
    	$product = Product::where('id', $request->Buy_Now)->first();        
        // $products = Product::where('product_name', $request->product_name)->get();
        // $products = Product::where('selling_price', $request->selling_price)->get();
        // LOG::INFO ($products);

    	return view('checkout',['product' => $product, 'quantity' => $request->qty_value]);
    }

    



    

    

}
