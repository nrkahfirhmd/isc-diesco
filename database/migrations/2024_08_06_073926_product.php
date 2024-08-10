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
        Schema::create('product', function (Blueprint $table) {
            $table->string('id_product')->primary();
            $table->string('id_vendor');
            $table->string('nama');
            $table->integer('kategori');
            $table->string('harga');
            $table->text('deskripsi');
            $table->mediumText('banner');
        });
    }
};
