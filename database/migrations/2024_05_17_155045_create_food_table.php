<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->increments('food_id');
            $table->string('food_name')->nullable();
            $table->string('food_star')->nullable();
            $table->string('food_vote')->nullable();
            $table->string('food_price')->nullable();
            $table->string('food_discount')->nullable();
            $table->string('food_desc')->nullable();
            $table->string('food_status')->nullable();
            $table->string('food_type')->nullable();
            $table->string('food_category')->nullable();
            $table->string('food_src')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('food');
    }
}
