<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Barang;

class TransaksiController extends Controller
{
     public function index()
    {

        $data_transaksi=Transaksi::get();
        $barang=Barang::orderBy('nama_barang','desc')->get();

        
        return view('transaksi.index',compact('data_transaksi','barang'));
    }
    public function create(Request $request)
    {
        $barang = Barang::find($request->nama_barang);
        if($request->jumlah_beli > $barang->stok_barang){
            $data_transaksi=Transaksi::get();
            $barang=Barang::orderBy('nama_barang','asc')->get();
        
        session()->flash('warning', 'Stok Barang tidak cukup!');
        return view('/transaksi.index',compact('data_transaksi','barang'));
    }else{

        $this->validate($request,[
            'kd_transaksi'=>'required',
            'nama_barang'=>'required',
            'user'=>'required',
            'jumlah_beli'=>'required',
            'tanggal_beli'=>'required'
        ]);
       

        $data_transaksi['kd_transaksi']= $request->kd_transaksi;
        $data_transaksi['nama_barang']= $request->nama_barang;
        $data_transaksi['user']= $request->user;
        $data_transaksi['jumlah_beli']= $request->jumlah_beli;
        $data_transaksi['tanggal_beli']= $request->tanggal_beli;


        $harga=Barang::find($request->nama_barang);
        $harga_br = $harga->harga_barang;
        $jumlah_bl= $request->jumlah_beli;

        $total_harga= $harga_br * $jumlah_bl;

        $data_transaksi['total_harga'] = $total_harga;

         $laporantransaksi = new \App\Laporantransaksi;
        $laporantransaksi->kd_transaksi= $request->kd_transaksi;
        $laporantransaksi->nama_barang= $request->nama_barang;
        $laporantransaksi->jumlah_beli= $request->jumlah_beli;
        $laporantransaksi->total_harga= $total_harga;
        $laporantransaksi->tanggal_beli= $request->tanggal_beli;
        $laporantransaksi->save();

        session()->flash('sukses', 'Data berhasil di tambahkan');
        Transaksi::insert($data_transaksi);
        return redirect('/transaksi');

        
    }
}
    public function edit($id)
    {
        $transaksi = \App\Transaksi::find($id);
        $barang = \App\Barang::find($id);
  
        return view('transaksi/edit',['transaksi' =>$transaksi,'barang' => $barang]);
    }
    public function update(Request $request,$id)
    {
        $transaksi = \App\Transaksi::find($id);
        $transaksi->update($request->all());
        return redirect('/transaksi');
    }
  public function delete($id)
    {
        $transaksi = \App\Transaksi::find($id);
        $transaksi->delete($transaksi);
        return redirect('/transaksi');
    }
}
