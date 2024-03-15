<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billstatus extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function billdetails()
    {
        return $this->hasMany(Billdetail::class);
    }
}
