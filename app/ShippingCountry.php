<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingCountry extends Model
{
    // The database table used by the model

    protected $table = 'shipping_country';

    // DEFINE RELATIONSHIPS
    // each shipping country belongs to many products

    public function orders() {
    	return $this->hasMany('Order');
    }

}
