@extends('adminlte')

@section('content_obat')


<p align = "right"><form action="/obat/cari" method="GET" >
    <input type="text" name="cari" placeholder="Cari Obat .." value="{{ old('cari') }}">
    <input type="submit" value="CARI">
  </form></p>

 <center><h1>Data Obat</h1></center>
    <a href="/obat/tambahobat" class="btn btn-success">+ Tambah Data Obat</a>
    <div class = "table1">
  <table cellspacing='0'>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Obat</th>
        <th>Kategori Obat</th>
        <th>Nama Obat</th>
        <th>Bentuk Obat</th>
        <th>Tanggal Kadaluarsa</th>
        <th>Harga Obat</th>
        <th>Navigasi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($obat as $r)

    <tr>
      <center>
      <td>{{ $r->ID_OBAT }}</td>
      <td>{{ $r->KATEGORI_OBAT }}</td>
      <td>{{ $r->NAMA_OBAT }}</td>
      <td>{{ $r->BENTUK_OBAT }}</td>
      <td>{{ $r->TGL_KADALUARSA }}</td>
      <td>{{ $r->HARGA_OBAT }}</td>
      <td>
        <a href="/obat/edit/{{ $r->ID_OBAT }}" class="btn btn-info">Edit</a>
        |
        <a href="/obat/softdel/{{ $r->ID_OBAT }}" class="btn btn-info">Hapus</a>
      </td>
      </center>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection