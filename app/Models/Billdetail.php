<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billdetail extends Model
{
    public function billstatus()
    {
        return $this->belongsTo(Billstatus::class);
    }

    public function supply()
    {
        return $this->belongsTo(Supply::class);
    }
}
