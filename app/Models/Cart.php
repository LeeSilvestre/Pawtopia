<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart'; 
    protected $primaryKey = null; 
    public $incrementing = false;
    public $timestamps = false; 

    protected $fillable = [
        'user_id', 'food_id', 'item_qty'
    ];

    
}
