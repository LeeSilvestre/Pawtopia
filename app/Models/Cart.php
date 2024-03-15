<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function supply()
    {
        return $this->belongsTo(Supply::class);
    }
}
