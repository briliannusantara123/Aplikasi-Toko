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
            <h1><marquee>Data Merek Toko Muhidin&Maymunah</marquee></h1>
          </div>

        </section>
                  <div class="section-body">
                    <div class="row">
                      <div class="col-12 col-md-6 col-lg-6">
                          <a href="" class="btn btn-icon icon-left btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="for fa-edit"></i>Tambah Data Merek</a> 
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
                   
                </div>
                <div class="panel-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Kode Barang</th>
                        <th>Merek</th>
                        
                        
                        <th>Aksi</th>
                      </tr>
                    </thead>
                   <tbody>
                      @foreach($data_merek as $merek)
                      <tr>
                        <td>{{$merek->kd_merek}}</td>
                        <td>{{$merek->merek}}</td>
                      
                        <td><a href="/merek/{{$merek->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                         
                          <a href="/merek/{{$merek->id}}/delete" class="btn btn-danger btn-sm" onclick ="return confirm('yakin akan menghapus data?')">Hapus</a>
                        
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Merek</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <form action="/merek/create" method="POST">
              {{csrf_field()}}
  
  <div class="form-group">
    <label for="exampleInputEmail1">Kode Merek</label>
    <input name="kd_merek"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Merek</label>
    <input name="merek"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
   
  
<div class="modal-footer">
  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Submit</button>


</form>
@stop
