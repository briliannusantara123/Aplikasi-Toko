<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanbarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporanbarang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kd_barang');
            $table->string('nama_barang');
            $table->string('stok_barang');
            $table->string('merek');
            $table->date('tanggal_masuk');
            $table->integer('harga_barang');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporanbarang');
    }
}
