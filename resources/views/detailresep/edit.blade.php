<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Rekam Medis</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">

    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/rekammedis">Rekam Medis</a>
      </li>
      
        </a>
      </li>
    </ul>
  </div>
  </div>
</nav>

    <div class="container">
      <div class="row">
        <div class="col-10">
        <h2><a>Rekam Medis</a></h2>
  <h3> Data Rekam Medis </h3>
 
  <a href="/detailresep1"> Kembali</a>
  
  <br/>
  <br/>

 
  <form action="/detailresep/update/{{$detailresep->ID_RESEP}}" method="post">
    {{ csrf_field() }}
    ID OBAT : <input type="text" name="ID_OBAT" value = "{{$detailresep->ID_OBAT}}" required="required"><br/>
    ID RESEP : <input type="text" name="ID_RESEP" value = "{{$detailresep->ID_RESEP}}"required="required"> <br/>
    TGL DETAIL RESEP : <input type="text" name="TGL_DETAIL_RESEP" value = "{{$detailresep->TGL_DETAIL_RESEP}}" required="required"><br/>
    <input type="submit" value="Submit">
  </form>
  
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>