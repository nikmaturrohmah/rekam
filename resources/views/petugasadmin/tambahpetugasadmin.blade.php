@extends('adminlte')

@section('content_petugasadmin')
        <h2><p class="text-dark">Tambah Data Petugas Admin</p></h2>
            <br/>
                <a href="/petugasadmin" class="btn btn-warning">kembali</a>
            <br/>
            <br/>
            
            <form action="/petugasadmin/simpan" method="get">
                {{ csrf_field() }}
                <!-- <div class="form-group">
                    <label for="exampleInputEmail1">ID Petugas Admin</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ID_PETUGAS" required="required">
                </div> -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Petugas Admin</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="NAMA_PETUGAS" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required="required">
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
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @endsection
