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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->startingValue(1000);
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('national_code', 10)->unique();
            $table->string('password');
            $table->string('image_url', 255)->nullable();
            $table->enum('role', ['operator', 'admin']);
            $table->enum('status', ['active', 'inactive']);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
