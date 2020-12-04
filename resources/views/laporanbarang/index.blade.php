  <style type="text/css">
    .modal-body{
      background-color: rgba(42, 107, 212,10);
    }  
    </style>      							
@extends('layouts.master')
@section('content')
<style>
    table.static{
      position: relative;
      border: 1px solid #543535;
    }
  </style>

  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                  <section class="section">
          <div class="section-header">
            <h1><marquee>Laporan Barang Toko Muhidin & Maymunah</marquee></h1>
          </div>

        </section>

          <div class="section-body">
                    <div class="row">
                      <div class="col-12 col-md-6 col-lg-6">
                          <a href="/cetakbarang" class="btn fa fa-print btn-primary"><i class="for "></i>Cetak Laporan</a> 
                            <a href="" class="btn fa fa-filter btn-success" data-toggle="modal" data-target="#exampleModal"><i class="for "></i>Filter Laporan</a>
                      </div>
                    </div>
                    <br>
  <div class="form-grup">
    
    <table class="static" align="center" rules="all" border="1px" style="width:95%;">
      <tr>
      <td>No</td>
      <td>Kode Barang</td>
      <td>Barang</td>
      <td>Stok Barang</td>
      <td>Merek</td>
      <td>Harga Barang</td>
      <td>Tanggal Masuk</td>
      </tr>
      @foreach($data_barang as $laporanbarang)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$laporanbarang->kd_barang}}</td>
        <td>{{$laporanbarang->nama_barang}}</td>
        <td>{{$laporanbarang->stok_barang}}</td> 
        <td>{{$laporanbarang->merek}}</td>
        <td>Rp. {{number_format($laporanbarang->harga_barang,0) }}</td>
        <td>{{ date('d F Y',strtotime($laporanbarang->tanggal_masuk)) }}</td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Filter laporan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('/laporanbarang/periode')}}" method="get">
              {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Dari Harga Barang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Dari Harga Barang" name="jumlahstok1">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Sampai Harga Barang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sampai Harga Barang" name="jumlahstok2">

  </div>
    <div class="box-footer">  

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>  


@stop

