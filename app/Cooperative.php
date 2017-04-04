<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cooperative extends Model
{
    public function farmer(){
        return $this->hasMany('App\Faemer');
    }
}
