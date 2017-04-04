<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function farmer(){
        return $this->belongsTo('App\User'); 
    }
}
