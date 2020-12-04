					

              
@extends('layouts.master')
@section('content')
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title lnr lnr-users">User</h3>
                  <div class="right">
                    
                  </div>
                   
                </div>
                <div class="panel-body">
                  <table class="table table-hover">
                   <thead>
											<tr>
												<th>Nama User</th>
												<th>Email</th>
												<th>Password</th>
												<th>Role</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											@foreach($data_user as $user)
											<tr>
												
												<td>{{$user->name}}</td>
												<td>{{$user->email}}</td>
												<td>{{$user->password}}</td>
                        <td>{{$user->role}}</td>
												<td>
													<a href="/user/{{$user->id}}/delete" class="btn btn-danger btn-sm" onclick ="return confirm('yakin akan menghapus data?')">Hapus</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				        <form action="/user/create" method="POST">
				      {{csrf_field()}}
  
  
  <div class="form-group">
    <label for="exampleInputEmail1">Nama User</label>
    <input name="name"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input name="email"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input name="password"type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
 <div class="form-group">
    <label for="exampleInputEmail1">Role</label>
    <input name="role"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  
<div class="modal-footer">
	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	<button type="submit" class="btn btn-primary">Submit</button>


</form>
@stop

