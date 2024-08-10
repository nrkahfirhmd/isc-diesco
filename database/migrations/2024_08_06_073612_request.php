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
        Schema::create('request', function (Blueprint $table) {
            $table->string('id_request')->primary();
            $table->string('id_product');
            $table->string('id_cust');
            $table->string('nama');
            $table->string('alamat');
            $table->text('deskripsi');
            $table->string('harga');
            $table->integer('status');
        });
    }
};
