<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_name')->nullable();
            $table->string('user_email')->nullable();
            $table->string('user_phone')->nullable();
            $table->string('user_password')->nullable();
            $table->string('user_birth')->nullable();
            $table->string('user_gender')->nullable();
            $table->string('verification_token')->nullable();
            $table->boolean('is_verified')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('user');
    }
}
