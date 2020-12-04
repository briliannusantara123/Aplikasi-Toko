<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(Request $request)
    {   
        if ($request->has('cari')) {
            $data_barang = \App\Barang::where('nama_barang','LIKE','%'.$request->cari.'%')->paginate(5);    
        }else{
        $data_barang=\App\Barang::all();
        
    }
        $merek= \App\Merek::all();
        $distributor= \App\Distributor::all();
        
        return view('barang.index',['data_barang' => $data_barang,'merek' => $merek,'distributor'=>$distributor]);
    }
    public function create(Request $request)
    {
        $laporanbarang = new \App\Laporanbarang;
        $laporanbarang->kd_barang= $request->kd_barang;
        $laporanbarang->nama_barang= $request->nama_barang;
        $laporanbarang->stok_barang= $request->stok_barang;
        $laporanbarang->merek= $request->merek;
        $laporanbarang->tanggal_masuk= $request->tanggal_masuk;
        $laporanbarang->harga_barang= $request->harga_barang;
        $laporanbarang->save();
        $this->validate($request,[
            'kd_barang' => 'required',
            'nama_barang' => 'required',
            'merek' => 'required',
            'distributor' => 'required',
            'tanggal_masuk' => 'required',
            'harga_barang' => 'required',
            'stok_barang' => 'required',
            'keterangan' => 'required'
        ]);
        \App\Barang::create($request->all());
        return redirect('/barang')->with('sukses','data berhasil disimpan');
    }
    public function edit($id)
    {
        $barang = \App\Barang::find($id);
        $merek= \App\Merek::all();
        $distributor= \App\Distributor::all();
  
        return view('barang/edit',['barang' =>$barang,'merek' => $merek,'distributor'=>$distributor]);
    }
    public function update(Request $request,$id)
    {
        $barang = \App\Barang::find($id);
        $barang->update($request->all());
        return redirect('/barang');
    }
  public function delete($id)
    {
        $barang = \App\Barang::find($id);
        $barang->delete($barang);
        return redirect('/barang');
    }
}
