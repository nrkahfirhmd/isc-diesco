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
        Schema::create('customer', function (Blueprint $table) {
            $table->string('id_cust')->primary();
            $table->string('nama');
            $table->string('email');
            $table->string('no_telp');
            $table->binary('photo');
        });
    }
};
