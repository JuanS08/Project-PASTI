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
        Schema::create('paket', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->decimal('berat', 8, 2);
            $table->decimal('harga', 10, 2);
            $table->string('kategori');
            $table->unsignedBigInteger('name_pengirim');
            $table->unsignedBigInteger('name_penerima');
            $table->text('deskripsi');
            $table->date('waktu_kedatangan')->nullable();
            $table->date('waktu_keberangkatan')->nullable();
            $table->timestamps();

            $table->foreign('name_pengirim')->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('name_penerima')->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket');
    }
};
