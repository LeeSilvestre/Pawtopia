<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function billdetails()
    {
        return $this->hasMany(Billdetail::class);
    }
}
