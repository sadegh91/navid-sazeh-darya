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
        Schema::create('request_warehouse_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('request_id')->constrained('request_warehouses');
            $table->string('code', 50);
            $table->string('title', 255);
            $table->string('unit_type', 50);
            $table->string('quantity_request', 50);
            $table->string('quantity_receive', 50);
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_warehouse_details');
    }
};
