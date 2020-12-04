<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
     	protected $table ='barang';
    	protected $fillable =['kd_barang','nama_barang','merek','distributor','tanggal_masuk','harga_barang','stok_barang','keterangan'];
}
