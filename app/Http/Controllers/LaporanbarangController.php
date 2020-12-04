<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporanbarang;

class LaporanbarangController extends Controller
{
     public function index()
    {
   $data_laporanbarang=\App\Laporanbarang::all();
   $merek= \App\Merek::all();
   $data_barang=\App\Barang::all();
        
        return view('laporanbarang.index',['data_laporanbarang' => $data_laporanbarang,'merek'=>$merek,'data_barang'=>$data_barang]);
    }
    public function periode(Request $request)
    {
    	try{
    	
    	$hargabarang1=$request->hargabarang1;
    	$hargabarang2=$request->hargabarang2;
    	$merek= \App\Merek::all();
   		$data_barang=\App\Barang::all();
    	$data_laporanbarang=Laporanbarang::where('harga_barang','>=',$hargabarang1)->where('harga_barang','<=',$hargabarang2)->orderBy('harga_barang','desc')->get();
    	 return view('laporanbarang.index',['data_laporanbarang' => $data_laporanbarang,'merek'=>$merek,'data_barang'=>$data_barang]);
    	}catch(\Exception $e){
    	\Session::flash('gagal',$e->getMessage());
    	return redirect()->back();
    	}
    }
}
