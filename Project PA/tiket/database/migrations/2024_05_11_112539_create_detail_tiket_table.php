<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTiketTable extends Migration
{
    public function up()
    {
        Schema::create('detail_tiket', function (Blueprint $table) {
            $table->id();
            $table->string('asal_keberangkatan');
            $table->string('tujuan_keberangkatan');
            $table->string('kelas');
            $table->decimal('harga', 10, 2);
            $table->string('metode_pembayaran');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_tiket');
    }
}
