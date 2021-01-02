@extends('dashboard')

@section('content_welcomeadmin')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  
<div class="wrapper">
  <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

  

    <!-- SEARCH FORM -->
   
    <!-- /.sidebar -->
  </aside>
  <div class="content">
               
            </div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="title m-b-md">
                    <center>
                      <br/>
                    <h1>Selamat Datang di Halaman Admin</h1>

                    <img class="col-lg-7 d-none d-lg-block" src="{{ asset('image//registrasi.jpg') }}" alt="" />
                  </center>
                </div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
@endsection