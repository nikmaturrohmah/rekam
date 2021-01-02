@extends('adminlte')

@section('tambah_rekammedis')

    <div class="container">
      <div class="row">
        <div class="col-10">
        <h2><a>Rekam Medis</a></h2>
  <h3> Data Rekam Medis </h3>
 
  <a href="/rekammedis"> Kembali</a>
  
  <br/>
  <br/>
 
  <form action="/rekammedis/simpan" method="post">
    {{ csrf_field() }}
    <label for="ID_PETUGAS">NAMA PETUGAS : </label><br>
                  <select name="ID_PETUGAS" id="ID_PETUGAS" class="form-control">
                    <option>NAMA PETUGAS </option>
                    @foreach($petugas_admin as $pe)
                    <option value ="{{ $pe->ID_PETUGAS}}"> {{ $pe->NAMA_PETUGAS}} </option>
                    @endforeach
                  </select><br/>
     <label for="ID_PASIEN">NAMA PASIEN : </label><br>
                  <select name="ID_PASIEN" id="ID_PASIEN" class="form-control">
                    <option>NAMA PASIEN</option>
                    @foreach($pasien as $p)
                    <option value ="{{ $p->ID_PASIEN}}"> {{ $p->NAMA_PASIEN}} </option>
                    @endforeach
                  </select><br/>
     <label for="ID_DOKTER">NAMA DOKTER : </label><br>
                  <select name="ID_DOKTER" id="ID_PETUGAS" class="form-control">
                    <option>NAMA DOKTER </option>
                    @foreach($dokter as $d)
                    <option value ="{{ $d->ID_DOKTER}}"> {{ $d->NAMA_DOKTER}} </option>
                    @endforeach
                  </select><br/>
                  <label/>
    TGL PERIKSA : <input type="date" name="TGL_PERIKSA" value = "" required="required"> <br/>
    DIAGNOSA : <input type="text" name="DIAGNOSA" value = "" required="required"> <br/>
    KETERANGAN : <input type="text" name="KETERANGAN" value = "" required="required"> <br/>
    BIAYA JASA : <input type="text" name="BIAYA_JASA" value = "" required="required"> <br/>
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