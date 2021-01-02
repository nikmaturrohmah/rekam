@extends('adminlte')

@section('content_dokter')

        <h2>Update Dokter</h2>
            <br/>
                <a href="/dokter" class="btn btn-warning">kembali</a>
            <br/>
            <br/>
            @foreach($dokter as $d)
            <form action="/dokter/update/{{$d->ID_DOKTER}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ID_DOKTER" required="required" value="{{$d->ID_DOKTER}}" disabled="disabled">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="NAMA_DOKTER" required="required" value="{{$d->NAMA_DOKTER}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ALAMAT" required="required" value="{{$d->ALAMAT}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kota Tinggal</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="KOTA_TINGGAL" required="required" value="{{$d->KOTA_TINGGAL}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nomer Telepon</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="NO_TLP" required="required" value="{{$d->NO_TLP}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Spesialis</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ASPESIALISASI" required="required" value="{{$d->ASPESIALISASI}}">
                </div>
                
              <button type="submit" class="btn btn-primary">submit</button>
            </form>
            @endforeach
@endsection