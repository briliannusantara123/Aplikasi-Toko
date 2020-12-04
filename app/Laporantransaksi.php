<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporantransaksi extends Model
{
    protected $table ='laporantransaksi';
    protected $fillable=['kd_transaksi','barang','user','jumlah_beli','total_harga','tanggal_beli'];
}
