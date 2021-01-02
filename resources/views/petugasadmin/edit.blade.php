@extends('adminlte')

@section('content_petugasadmin')
        <h2><p class="text-dark">Update Petugas Admin</p></h2>
            <br/>
                <a href="/petugasadmin" class="btn btn-warning">kembali</a>
            <br/>
            <br/>
            
            @foreach($petugasadmin as $c)
            <form action="/petugasadmin/update/{{$c->ID_PETUGAS}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Petugas Admin</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ID_PETUGAS" required="required" value="{{$c->ID_PETUGAS}}" disabled="disabled">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Petugas</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="NAMA_PETUGAS" required="required" value="{{$c->NAMA_PETUGAS}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required="required" value="{{$c->email}}" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ALAMAT" required="required" value="{{$c->ALAMAT}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kota Tinggal</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="KOTA_TINGGAL" required="required" value="{{$c->KOTA_TINGGAL}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nomer Telepon</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="NO_TLP" required="required" value="{{$c->NO_TLP}}">
                </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @endforeach

@endsection