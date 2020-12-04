<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CetakbarangController extends Controller
{
    public function index()
    {
   $data_cetakbarang=\App\Cetakbarang::all();
   $merek= \App\Merek::all();
   $data_barang=\App\Barang::all();
        
        return view('cetakbarang.index',['data_cetakbarang' => $data_cetakbarang,'merek'=>$merek,'data_barang'=>$data_barang]);
    }
}
