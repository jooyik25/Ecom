<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Promotion;
use Illuminate\Support\Facades\Log;


class PromotionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function code(Request $request)
    {
       $promotion = Promotion::where('promotion_code', $request->promotion_code)->first();
       		if($promotion->type == "percent") {       		
       		$value = $promotion->percent_off;       		
       		}else{
       		$value = $promotion->value;
       		}
        // if (!$promotion) {
        // 	return response()->json(['message' => 'Invalid coupon code. Please try again.']);
        // }        

       return response()->json(['message' => $value, 'type' => $promotion->type]);
    }
}
