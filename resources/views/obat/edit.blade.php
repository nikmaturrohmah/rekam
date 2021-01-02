@extends('adminlte')

@section('content_obat')
        <h2>Update Obat</h2>
            <br/>
                <a href="/obat" class="btn btn-warning">kembali</a>
            <br/>
            <br/>
            @foreach($obat as $o)
            <form action="/obat/update/{{$o->ID_OBAT}}" method="get">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ID_OBAT" required="required" value="{{$o->ID_OBAT}}" disabled="disabled">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Obat</label>
                    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="KATEGORI_OBAT" required="required" value="{{$o->KATEGORI_OBAT}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="NAMA_OBAT" required="required" value="{{$o->NAMA_OBAT}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Bentuk Obat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="BENTUK_OBAT" required="required" value="{{$o->BENTUK_OBAT}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tgl Kadaluwarsa</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="TGL_KADALUARSA" required="required" value="{{$o->TGL_KADALUARSA}}">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Harga Obat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="HARGA_OBAT" required="required" value="{{$o->HARGA_OBAT}}">
                </div>
                
              <button type="submit" class="btn btn-primary">submit</button>
            </form>
            @endforeach
@endsection