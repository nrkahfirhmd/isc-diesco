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
        Schema::create('vendor', function (Blueprint $table) {
            $table->string('id_vendor')->primary();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('no_telp')->unique();
            $table->mediumText('photo');
            $table->text('deskripsi');
            $table->boolean('pro');
            $table->float('rating');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
