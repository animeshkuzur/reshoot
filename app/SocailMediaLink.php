<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocailMediaLink extends Model
{
    protected $fillable = [
        'account_name', 'link',
    ];

    public function user(){
    	return $this->belongsTo('User');
    }
}
