<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporanbarang extends Model
{
    protected $table ='laporanbarang';
    protected $fillable =['kd_barang','nama_barang','merek','tanggal_masuk','harga_barang'];

    
}
