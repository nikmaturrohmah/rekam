@extends('adminlte')

@section('content_obat')
        <h2><p class="text-dark">Tambah Data Obat</p></h2>
            <br/>
                <a href="/obat" class="btn btn-warning">Kembali</a>
            <br/>
            <form action="/obat/simpan" method="get">
                {{ csrf_field() }}
               <!--  <div class="form-group">
                    <label for="exampleInputEmail1">ID Obat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ID_OBAT" required="required">
                </div> -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Obat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="KATEGORI_OBAT" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Obat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="NAMA_OBAT" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Bentuk Obat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="BENTUK_OBAT" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Kadaluarsa</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="TGL_KADALUARSA" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Harga Obat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="HARGA_OBAT" required="required">
                </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
@endsection