<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function billstatuses()
    {
        return $this->hasMany(Billstatus::class);
    }
}
