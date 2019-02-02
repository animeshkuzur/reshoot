<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	protected $fillable = [
        'transactionHash', 'amount', 'timestamp',
    ];

    public function user(){
    	return $this->belongsTo('User');
    }

    public function photos(){
    	return $this->belongsToMany('Photo','transaction_details');
    }
}
