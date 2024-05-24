<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'food';
    protected $primaryKey = 'food_id';
    public $timestamps = false; 
    protected $fillable = [
        'food_name', 'food_star', 'food_vote', 'food_price', 'food_discount',
         'food_desc', 'food_status', 'food_type', 'food_category', 'food_src', 'food_qty'
    ];

}

