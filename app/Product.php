<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	protected $guarded = [];

    public function scopeHasActive($query) {
    	return $query->where('status','=','A');
    }	
    public function scopeHighPrice($query) {
    	return $query->where('price','<=',100);
    }		
    public function type() {
    	return $this->belongsTo('App\ProductType','product_type');
    }		
}
