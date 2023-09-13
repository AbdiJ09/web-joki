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
        Schema::create('payment_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('joki_rank_id');
            $table->string('dana_number')->nullable();
            $table->string('ovo_number')->nullable();
            $table->string('gopay_number')->nullable();
            $table->timestamps();
            $table->foreign('joki_rank_id')->references('id')->on('joki_ranks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_details');
    }
};
