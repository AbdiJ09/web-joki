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
        Schema::table('service_classics', function (Blueprint $table) {
            $table->string('invoice_code')->unique();
            $table->string('select_joki');
            $table->string('order');
            $table->string('whastapp');
            $table->string('payment');
            $table->string('price');
            $table->string('status')->default('pending');
            $table->string('image')->nullable();
            $table->timestamp('payment_expiry')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_classics', function (Blueprint $table) {
            //
        });
    }
};
