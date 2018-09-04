<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    // The database table used by the model

    protected $table = 'orders_product';

    // DEFINE RELATIONSHIPS
    // each order has many prodcuts
    
    public function products() {
    	return $this->belongsTo('Product');//this matches the eloquent model
    }

    public function orders() {
    	return $this->belongsTo('Order');
    }
}
