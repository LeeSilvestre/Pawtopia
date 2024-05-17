<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilldetailsTable extends Migration
{
    public function up()
    {
        Schema::create('billdetails', function (Blueprint $table) {
            $table->integer('bill_id');
            $table->integer('food_id');
            $table->integer('item_qty')->nullable();
            $table->primary(['bill_id', 'food_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('billdetails');
    }
}

