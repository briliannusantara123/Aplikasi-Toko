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
            <h1><marquee>Transaksi Toko Muhidin&Maymunah</marquee></h1>
          </div>

        </section>
                  <div class="right">
                    
                  <div class="section-body">
                    <div class="row">
                      <div class="col-12 col-md-6 col-lg-6">
                          <a href="" class="btn btn-icon icon-left btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="for fa-edit"></i>Transaksi</a> 
                      </div>
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
                    <br>
                
                  </div>
                   
                </div>
                <div class="panel-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode Transaksi</th>
                        <th>Nama Barang</th>
                        <th>User</th>
                        <th>Jumlah Beli</th>
                        <th>Total Harga</th>
                        <th>Tanggal Beli</th>
                        
                        
                        <th>Aksi</th>
                      </tr>
                    </thead>
                   <tbody>
                      @foreach($data_transaksi as $e=>$transaksi)
                      <tr>
                        <td>{{$e+1}}</td>
                        <td>{{$transaksi->kd_transaksi}}</td>
                        <td>{{$transaksi->nama_barangs->nama_barang}}</td>
                        <td>{{$transaksi->user}}</td>
                        <td>{{$transaksi->jumlah_beli}}</td>
                        <td>Rp. {{number_format($transaksi->total_harga,0) }}</td>
                        <td>{{ date('d F Y',strtotime($transaksi->tanggal_beli)) }}</td>
                       <td>
                         
                          <a href="/transaksi/{{$transaksi->id}}/delete" class="btn btn-danger btn-sm" onclick ="return confirm('yakin akan menghapus data?')">Hapus</a>
                        
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <form action="/transaksi/create" method="POST">
              {{csrf_field()}}
  
  <div class="form-group">
    <label for="exampleInputEmail1">Kode Transaksi</label>
    <input name="kd_transaksi"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Barang</label>
    <select name="nama_barang" class="form-control" id="exampleFormControlSelect1">
      @foreach($barang as $barang)
      <option value="{{$barang->id}}-{{$barang->nama_barang}}">{{$barang->nama_barang}}</option>
      @endforeach
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">User</label>
    <input name="user"type="text" value="{{auth()->user()->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Jumlah Beli</label>
    <input name="jumlah_beli"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Beli</label>
    <input name="tanggal_beli"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
<div class="modal-footer">
  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Submit</button>


</form>
 
@stop