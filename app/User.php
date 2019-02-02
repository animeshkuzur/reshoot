<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'verified',
    ];

    public function cover(){
        return $this->hasOne('UserCover');
    }

    public function photos(){
        return $this->hasMany('Photo');
    }

    public function logs(){
        return $this->hasMany('UserLog');
    }

    public function detail(){
        return $this->hasOne('UserDetail');
    }

    public function socialmedialinks(){
        return $this->hasMany('SocailMediaLink');
    }

    public function cart(){
        return $this->hasOne('Cart');
    }

    public function preferences(){
        return $this->hasOne('UserPreference');
    }

    public function transactions(){
        return $this->hasMany('Transaction');
    }

}
