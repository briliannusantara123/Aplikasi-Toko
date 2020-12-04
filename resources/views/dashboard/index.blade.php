			<style type="text/css">
     body{
      background-image: url(../assets/img/bg.jpg);
      background-size: cover;
     } 
     .sapaan{
      color: white;
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
                  <h3 class="panel-title"></h3>
                  <div class="right">
                    
                
                  </div>
                   
                </div>
                            
        <section class="section">
          <div class="section-header">
            <h1><marquee>Selamat Datang Di Dashboard Toko M&M</marquee></h1>
          </div>
        </section>
      </div>
                <br>
              </div>

          </div> 
        </div>
      <div class="login-brand">
              <img src="../assets/img/logo.png" alt="logo" width="200" class="shadow-dark rounded-circle">
              <br>
              <br>
              <div class="sapaan">Hi, {{auth()->user()->name}}</div></a>
            </div>

      </div>
    </div>
  </div>


</form>
@stop
