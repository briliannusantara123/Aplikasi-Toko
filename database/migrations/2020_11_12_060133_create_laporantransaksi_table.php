<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporantransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporantransaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kd_transaksi');
            $table->string('nama_barang');
            $table->integer('jumlah_beli');
            $table->integer('total_harga');
            $table->date('tanggal_beli');
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
        Schema::dropIfExists('laporantransaksi');
    }
}
