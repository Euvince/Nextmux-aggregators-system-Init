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
        Schema::create('aggregator_country', function (Blueprint $table) {
            $table->foreignId('aggregator_id')->references('id')->on('aggregators');
            $table->foreignId('country_id')->references('id')->on('countries');
            $table->primary(['aggregator_id', 'country_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aggregator_country');
    }
};
