<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillStatus extends Model
{
    protected $table = 'billstatus';
    protected $primaryKey = 'bill_id'; 
    public $timestamps = false; 

    protected $fillable = [
        'user_id', 'bill_phone', 'bill_address', 'bill_when', 'bill_method', 'bill_discount', 'bill_delivery', 'bill_total','bill_status', 'bill_paid', 
    ];

    // 
}
