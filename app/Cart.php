<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	protected $fillable = [
        'hash',
    ];

	public function items(){
		return $this->belongsToMany('Photo','cart_items');
	}
}
