@extends('adminltepasien')

@section('content')

        <h2><p class="text-dark">Update Pasien</p></h2>
            <br/>
                <a href="/pasien1" class="btn btn-warning">kembali</a>
            <br/>
            <br/>
            @foreach($pasien as $pasien)
            <form action="/pasien1/update" method="get">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Pasien</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ID_PASIEN" required="required" value="{{$pasien->ID_PASIEN}}"disabled="disabled">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pasien</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="NAMA_PASIEN" required="required" value="{{$pasien->NAMA_PASIEN}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="TGL_LAHIR" required="required" value="{{$pasien->TGL_LAHIR}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="TEMPAT_LAHIR" required="required" value="{{$pasien->TEMPAT_LAHIR}}">
                </div>
                <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin (isi L/P)</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="JENIS_KELAMIN" required="required" value="{{$pasien->JENIS_KELAMIN}}">
                </div> -->
                <div class="form-group">
                <label for="exampleInputEmail1">Jenis Kelamin</label>
                <input type="radio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="JENIS_KELAMIN" value="L">
                <label for="L">Laki-laki</label>
                <input type="radio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="JENIS_KELAMIN" value="P">
                <label for="P">Perempuan</label>
                <small id="emailHelp" class="form-text text-muted">(*Kolom Harus Di Isi)</small>
                <div class="form-group">
                </div>
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ALAMAT" required="required" value="{{$pasien->ALAMAT}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kota Tinggal</label>
                    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="KOTA_TINGGAL" required="required" value="{{$pasien->KOTA_TINGGAL}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nomer Telepon</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="NO_TLP" required="required" value="{{$pasien->NO_TLP}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Pekerjaan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="PEKERJAAN" required="required" value="{{$pasien->PEKERJAAN}}">
                </div>
                
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @endforeach
@endsection