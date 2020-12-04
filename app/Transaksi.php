<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
     protected $table ='transaksi';
   		 protected $fillable =['kd_transaksi',
            'nama_barang',
            'user',
            'jumlah_beli',
            'total_harga',
            'tanggal_beli',];

     public function nama_barangs(){
     	return $this->belongsTo('App\Barang','nama_barang','id');
     }
}
