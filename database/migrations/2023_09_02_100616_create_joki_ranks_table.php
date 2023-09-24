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
        Schema::create('joki_ranks', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pesanan')->unique();
            $table->string('email');
            $table->string('password');
            $table->string('id_and_nick');
            $table->string('login_via');
            $table->string('select_joki');
            $table->string('star_order');
            $table->string('whatsapp');
            $table->string('payment');
            $table->string('price');
            $table->string('status')->default('pending');
            $table->timestamp('payment_expiry')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joki_ranks');
    }
};
