<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brand;

class Product extends Model
{
	// The database table use by the model
	protected $table = 'products';

    //DEFINE RELATIONSHIPS
    //each product has one brand

    public function brand() {
    	return $this->belongsTo('App\Brand', 'brand_id', 'id');//this matches the Eloquent model
    }

    public function orders_product() {
    	return $this->hasMany('OrderProduct');
    }
}
