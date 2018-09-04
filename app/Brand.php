<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
	// The database table used by the model

	protected $table = 'brand';

	//	DEFINE RELATIONSHIPS
	//  each brand belongs to many products
    
    public function products() {
    	return $this->hasMany('App\Product', 'brand_id', 'id');
    }
}
