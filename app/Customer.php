<?php

namespace App\Customer;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // The database table use by the model

    protected $table = 'customer';

    // DEFINE RELATIONSHIPS
    // each customer belongs to many orders

    public function orders() {
    	return this->belongsTo('Order');
    }
}
