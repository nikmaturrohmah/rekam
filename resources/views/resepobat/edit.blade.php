@extends('adminlte')

@section('content_resepobat')

    <div class="container">
      <div class="row">
        <div class="col-10">
        <h2><a>Rekam Medis</a></h2>
  <h3> Data Resep Obat </h3>
 
  <a href="/resepobat"> Kembali</a>
  
  <br/>
  <br/>

 
  <form action="/resepobat/update/{{$resepobat->ID_RESEP}}" method="post">
        {{ csrf_field() }}
    <label for="ID_RESEP">ID_RESEP : </label><br>
                  <select name="ID_RESEP" id="ID_RESEP" class="form-control" disabled="disabled">
                    <option>ID RESEP </option>
                  </select><br/>
                  <?php $selectedvalue=$resepobat->ID_REKAM_MEDIS ?>
     <label for="ID_REKAM_MEDIS">ID REKAM MEDIS : </label><br>
                  <select name="ID_REKAM_MEDIS" id="ID_REKAM_MEDIS" class="form-control">
                    @foreach($rekammedis as $d)
                    <option value ="{{ $d->ID_REKAM_MEDIS}}"> {{ $d->ID_REKAM_MEDIS}} </option>
                    @endforeach
                  </select><br/>
     <label for="ID_OBAT">NAMA OBAT : </label><br>
                  <select name="ID_OBAT" id="ID_OBAT" class="form-control">
                    @foreach($obat as $d)
                    <option value ="{{ $d->ID_OBAT}}"> {{ $d->NAMA_OBAT}} </option>
                    @endforeach
                  </select><br/>
    JUMLAH : <input type="text" name="JUMLAH" value = "{{$resepobat->JUMLAH}}" required="required"> <br/>
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