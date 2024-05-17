<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillDetails extends Model
{
    protected $table = 'billdetails';
    public $incrementing = false; 
    protected $primaryKey = ['bill_id', 'food_id']; 
    public $timestamps = false; 

    protected $fillable = [
        'bill_id', 'food_id', 'item_qty'
    ];
}
