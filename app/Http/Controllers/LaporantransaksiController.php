<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporantransaksi;

class LaporantransaksiController extends Controller
{
      public function index()
    {
   $data_laporantransaksi=\App\Laporantransaksi::all();
   $user= \App\User::all();
   $data_transaksi=\App\Transaksi::all();     
        
        return view('laporantransaksi.index',['data_laporantransaksi' => $data_laporantransaksi,'user'=> $user,'data_transaksi'=>$data_transaksi]);
    }
     public function cetak()
    {
   $data_laporantransaksi=\App\Laporantransaksi::all();
   $user= \App\User::all();
   $data_transaksi=\App\Transaksi::all();     
        
        return view('laporantransaksi.cetak',['data_laporantransaksi' => $data_laporantransaksi,'user'=> $user,'data_transaksi'=>$data_transaksi]);
    }
    public function periode(Request $request)
    {
    	try{
    	
    	$dari=$request->dari;
    	$sampai=$request->sampai;
    	$title="Laporan barang dari $dari sampai $sampai";
   		$data_barang=\App\Barang::all();
    	$data_laporantransaksi=Laporantransaksi::whereDate('tanggal_beli','>=',$dari)->whereDate('tanggal_beli','<=',$sampai)->orderBy('tanggal_beli','desc')->get();
    	 return view('laporantransaksi.index',['data_laporantransaksi' => $data_laporantransaksi,'data_barang'=>$data_barang]);
    	}catch(\Exception $e){
    	\Session::flash('gagal',$e->getMessage());
    	return redirect()->back();
    	}
    }
}
