@extends('adminlte')

@section('content_pasien')
        <h2><p class="text-dark">Tambah Data Pasien</p></h2>
            <br/>
                <a href="/pasien" class="btn btn-warning">kembali</a>
            <br/>
            <br/>
            <form action="/pasien/simpan" method="get">
                {{ csrf_field() }}
                <!-- <div class="form-group">
                    <label for="exampleInputEmail1">ID Pasien</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ID_PASIEN" required="required">
                </div> -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pasien</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="NAMA_PASIEN" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="TGL_LAHIR" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="TEMPAT_LAHIR" required="required">
                </div>
                <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin (isi L/P)</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="JENIS_KELAMIN" required="required">
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
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ALAMAT" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kota Tinggal</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="KOTA_TINGGAL" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nomer Telepon</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="NO_TLP" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Pekerjaan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="PEKERJAAN" required="required">
                </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
@endsection
