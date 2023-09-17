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
            $table->string('email');
            $table->string('password');
            $table->string('req_hero');
            $table->string('note', 60);
            $table->string('id_nick');
            $table->string('login');
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
