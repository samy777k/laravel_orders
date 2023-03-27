<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    public function item(){
        return $this->belongsTo('App\Models\Item');
    }
}
