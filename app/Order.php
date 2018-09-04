<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // The database table used by the model

    protected $table = 'orders';

    //DEFINE RELATIONSHIPS

    public function shipping_country() {
    	return $this->hasMany('ShippingCountry');
    }

    public function customer() {
    	return $this->hasMany('Customer');
    }

    public function promotion() {
    	return $this->hasOne('Promotion');
    }

    public function products() {
    	return $this->hasMany('Product');
    }

    public function orders_product() {
    	return $this->hasMany('OrderProduct');
    }
}
