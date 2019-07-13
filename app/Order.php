<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone',
        'product_id',
        'quantity',
        'note',
        'status',
    ];
}
