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
        Schema::create('request_warehouses', function (Blueprint $table) {
            $table->id()->startingValue(1000);
            $table->foreignId('requester_id')->constrained('users');
            $table->foreignId('accepter_id')->nullable()->constrained('users');
            $table->foreignId('deliverer_id')->nullable()->constrained('users');
            $table->foreignId('receiver_id')->nullable()->constrained('users');
            $table->tinyInteger('is_requester_accept');
            $table->tinyInteger('is_accepter_accept');
            $table->tinyInteger('is_deliverer_accept');
            $table->tinyInteger('is_receiver_accept');
            $table->foreignId('rejecter_id')->nullable()->constrained('users');
            $table->text('reject_description')->nullable();
            $table->enum('status', ['requested', 'accepted', 'delivered', 'receivered','rejected','canceled']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_warehouses');
    }
};
