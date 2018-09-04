<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\ShippingCountry;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ShippingCountryController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function country(Request $request)
    {
    	$countries = ShippingCountry::where('country', $request->countries)->first();
    	// Log::info ($countries);
    	$value = $countries->shipping_fee;

    	return response()->json(['msg' => $value, 'country' => $countries->country]);
    }
}
