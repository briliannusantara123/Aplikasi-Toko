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
                  <h3 class="panel-title">Update Data Merek</h3>
                </div>
                <div class="panel-body">
                  <form action="/merek/{{$merek->id}}/update" method="POST">
              {{csrf_field()}}
   
  <div class="form-group">
    <label for="exampleInputEmail1">Kode Merek</label>
    <input name="tanggal_masuk"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{$merek->kd_merek}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Merek</label>
    <input name="merek"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{$merek->merek}}">
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
