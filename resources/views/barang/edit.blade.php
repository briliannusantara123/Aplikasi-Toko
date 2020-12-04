<!DOCTYPE html>
<html>
<head>
  <title>Edit Data barang</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
  	.panel h3{
  		text-align: center;
  	}
  </style>
</head>
<body>
<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
<div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Update Data Barang</h3>
                </div>
                <div class="panel-body">
                  <form action="/barang/{{$barang->id}}/update" method="POST">
              {{csrf_field()}}
   <div class="form-group">
    <label for="exampleInputEmail1">Kode Barang</label>
    <input name="kode_barang"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{$barang->kd_barang}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Barang</label>
    <input name="nama_barang"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{$barang->nama_barang}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Merek</label>
    <select name="merek" class="form-control" id="exampleFormControlSelect1">
     @foreach($merek as $merek)
      <option value="{{$merek->merek}}"
        @if($barang->merek == $merek->merek)
        selected
        @endif>
        {{$merek->merek}}
      </option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Distributor</label>
    <select name="distributor" class="form-control" id="exampleFormControlSelect1">
     @foreach($distributor as $distributor)
      <option value="{{$distributor->distributor}}"
        @if($barang->distributor == $distributor->distributor)
        selected
        @endif>
        {{$distributor->distributor}}
      </option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Masuk</label>
    <input name="tanggal_masuk"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{$barang->tanggal_masuk}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Harga Barang</label>
    <input name="harga_barang"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{$barang->harga_barang}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Stok Barang</label>
    <input name="stok_barang"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{$barang->stok_barang}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Keterangan</label>
    <input name="keterangan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{$barang->keterangan}}">
  </div>
  
  <div class="modal-footer">
  
  <button type="submit" class="btn btn-warning">Update</button>

</div>
</form>
              </div>
              </div>
          </div> 
        </div>
      </div>
    </div>
  </div>

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
