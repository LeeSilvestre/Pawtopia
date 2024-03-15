<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('user_email')->unique();
            $table->string('user_phone')->nullable();
            $table->string('user_houseno')->nullable();
            $table->string('user_street')->nullable();
            $table->string('user_brgy')->nullable();
            $table->string('user_city')->nullable();
            $table->string('user_province')->nullable();
            $table->string('user_password');
            $table->date('user_birth')->nullable();
            $table->string('verification_token')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
