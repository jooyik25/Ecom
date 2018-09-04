<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Promotion;

class Promotion extends Model
{
    // The database table used by the model

    protected $table = 'promotion';

    //DEFINE RELATIONSHIPS
    //each promotion belongs to many products

    public function orders() {
    	return $this->belongsTo('Order', 'order_id', 'id');
    }

    
}
