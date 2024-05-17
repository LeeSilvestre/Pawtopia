<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('food_id');
            $table->integer('item_qty')->nullable();
            $table->primary(['user_id', 'food_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
