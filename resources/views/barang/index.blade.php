  <style type="text/css">
    .modal-body{
      background-color: rgba(42, 107, 212,10);
    }  
    </style>      							
@extends('layouts.master')
@section('content')

  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                <section class="section">
          <div class="section-header">
            <h1><marquee>Data Barang Toko Muhidin&Maymunah</marquee></h1>
          </div>

        </section>
                  <div class="section-body">
                    <div class="row">
                      <div class="col-12 col-md-6 col-lg-6">
                          <a href="" class="btn fa fa-plus btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="for "></i>Tambah Data Barang</a> 
                          @if($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                          @endforeach
                        </ul>
                      </div>
                      @endif
                      </div>
                    </div>
                    <br>
                   
                <div class="panel-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Kode Barang</th>
                       <th>Nama Barang</th>
                        <th>Merek</th>
                        <th>Distributor</th>
                        <th>Tanggal Masuk</th>
                        <th>Harga Barang</th>
                        <th>Stok Barang</th>
                        <th>Keterangan</th>
                        
                        <th>Aksi</th>
                      </tr>
                    </thead>
                   <tbody>
                      @foreach($data_barang as $barang)
                      <tr>
                        <td>{{$barang->kd_barang}}</td>
                        <td>{{$barang->nama_barang}}</td>
                        <td>{{$barang->merek}}</td>
                        <td>{{$barang->distributor}}</td>
                        <td>{{ date('d F Y',strtotime($barang->tanggal_masuk)) }}</td>
                        <td>Rp. {{number_format($barang->harga_barang,0) }}</td>
                        <td>{{$barang->stok_barang}}</td>
                        <td>{{$barang->keterangan}}</td>
                        <td><a href="/barang/{{$barang->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                         
                          <a href="/barang/{{$barang->id}}/delete" class="btn btn-danger btn-sm" onclick ="return confirm('yakin akan menghapus data?')">Hapus</a>
                         
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <form action="/barang/create" method="POST">
              {{csrf_field()}}
  
  <div class="form-group">
    <label for="exampleInputEmail1">Kode Barang</label>
    <input name="kd_barang"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Barang</label>
    <input name="nama_barang"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Merek</label>
    <select name="merek" class="form-control" id="exampleFormControlSelect1">
      @foreach($merek as $merek)
      <option value="{{$merek->merek}}">{{$merek->merek}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Distributor</label>
    <select name="distributor" class="form-control" id="exampleFormControlSelect1">
      @foreach($distributor as $distributor)
      <option value="{{$distributor->distributor}}">{{$distributor->distributor}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Masuk</label>
    <input name="tanggal_masuk"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Harga Barang</label>
    <input name="harga_barang"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Stok Barang</label>
    <input name="stok_barang"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Keterangan</label>
    <textarea name="keterangan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
  </div>
<div class="modal-footer">
  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Submit</button>


</form>


@stop
