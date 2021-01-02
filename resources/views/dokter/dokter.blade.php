@extends('adminlte')

@section('content_dokter')

<p align = "right"><form action="/dokter/cari" method="GET" >
    <input type="text" name="cari" placeholder="Cari Dokter .." value="{{ old('cari') }}">
    <input type="submit" value="CARI">
  </form></p>

     <center><h1>Data Dokter</h1></center>
    <a href="/dokter/tambahdokter" class="btn btn-success">+Tambahkan Data Dokter</a>
    <div class = "table1">
  <table cellspacing='0'>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Dokter</th>
        <th>Nama Dokter</th>
        <th>Alamat</th>
        <th>Kota Tinggal</th>
        <th>No tlpn</th>
        <th>Spesialis</th>
        <th>Navigasi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($dokter as $d)

    <tr>
      <center>
      <td>{{ $d->ID_DOKTER }}</td>
      <td>{{ $d->NAMA_DOKTER }}</td>
      <td>{{ $d->ALAMAT }}</td>
      <td>{{ $d->KOTA_TINGGAL }}</td>
      <td>{{ $d->NO_TLP }}</td>
      <td>{{ $d->ASPESIALISASI }}</td>
      <td>
        <a href="/dokter/edit/{{ $d->ID_DOKTER }}" class="btn btn-info">Edit</a>
        |
        <a href="/dokter/softdel/{{ $d->ID_DOKTER }}" class="btn btn-info">Hapus</a>
      </td>
      </center>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection