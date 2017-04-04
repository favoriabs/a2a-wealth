<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    public function cooperative(){
        return $this->belongsTo('App\Cooperative');
    }
    
    protected $casts = [
        'crop_packages' => 'array',
        'non_crop_packages' => 'array',
    ];
}
