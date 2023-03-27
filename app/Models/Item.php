<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "items";

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
    // public function order(){
    //     return $this->hasMany('App\Models\Order');
    // }
}
