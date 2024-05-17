<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillstatusTable extends Migration
{
    public function up()
    {
        Schema::create('billstatus', function (Blueprint $table) {
            $table->integer('bill_id')->primary();
            $table->integer('user_id')->nullable();
            $table->string('bill_phone')->nullable();
            $table->text('bill_address')->nullable();
            $table->string('bill_when')->nullable();
            $table->string('bill_method')->nullable();
            $table->integer('bill_discount')->nullable();
            $table->integer('bill_delivery')->nullable();
            $table->integer('bill_total')->nullable();
            $table->string('bill_paid')->nullable();
            $table->integer('bill_status')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('billstatus');
    }
}
