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
        Schema::create('aggregator_payment_method', function (Blueprint $table) {
            $table->foreignId('aggregator_id')->references('id')->on('aggregators');
            $table->foreignId('payment_method_id')->references('id')->on('payment_methods');
            $table->primary(['aggregator_id', 'payment_method_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aggregator_payment_method');
    }
};
