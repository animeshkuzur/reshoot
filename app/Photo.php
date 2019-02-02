<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'title', 'description', 'image', 'amount', 'hash'
    ];

    public function user(){
        return $this->belongsTo('User');
    }
}
