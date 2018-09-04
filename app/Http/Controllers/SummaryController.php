<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use App\Order;
use App\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;

class SummaryController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    	public function index(Request $request)
    	{
            // dd($request);
    		// $result = $this->store($request);

    		$product = Product::where('id', $request->Buy_Now)->first(); 
    		LOG::INFO($request);


    		return view('summary', ['product' => $product, 'quantity' => $request->qty_value, 'subtotal' => $request->subtotal, 'discount' => $request->discount, 
                        'shippingFee' => $request->shippingFee, 'total' => $request->total]);
    	}

    	// public function store($request){
		   //  $order = new Order;
		   //  // $order->id = $request->id;
		   //  $order->quantity = $request->quantity;
		   //  $order->total_price = $request->total_price;
		   //  $order->payment_type = $order->payment_type;
		   //  $order->shipping_country_id = $order->shipping_country_id;
		   //  $order->customer_id = $order->customer_id;
		   //  $order->products_id = $order->products_id;
		   //  $order->promotion_id = $order->promotion_id;		    
		   //  $order->save();

    	// }
}
