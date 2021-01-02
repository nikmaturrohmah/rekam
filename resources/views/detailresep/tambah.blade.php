@extends('adminlte')

@section('content_tambah_detailresep')

    <div class="container">
      <div class="row">
        <div class="col-10">
        <h2><a>Rekam Medis</a></h2>
  <h3> Data Resep Obat </h3>
 
  <a href="/detailresep"> Kembali</a>
  
  <br/>
  <br/>
 
  <form action="/detailresep/simpan" method="post">
    {{ csrf_field() }}
    ID OBAT : <input type="text" name="ID_OBAT" value = "" required="required"> <br/>
    ID RESEP : <input type="text" name="ID_RESEP" value = "" required="required"> <br/>
    TGL DETAIL RESEP : <input type="date" name="TGL_DETAIL_RESEP" value = "" required="required"> <br/>
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
@endsection