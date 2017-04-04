<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \Cartalyst\Sentinel\Users\EloquentUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'user_name', 'first_name', 'last_name', 'phone_number', 'agent_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $loginNames = [
        'email', 'user_name'
    ];
    
    public function products(){
        return $this->hasMany('App\Product');
    }
}
