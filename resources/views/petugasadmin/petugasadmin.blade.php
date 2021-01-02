@extends('adminlte')

@section('content_petugasadmin')

<p align = "right"><form action="/petugasadmin/cari" method="GET" >
    <input type="text" name="cari" placeholder="Cari Petugas Admin .." value="{{ old('cari') }}">
    <input type="submit" value="CARI">
  </form></p>

     <center><h1>Data Petugas Admin</h1></center>
    <a href="/petugasadmin/tambahpetugasadmin" class="btn btn-success">+Tambahkan Data Petugas Admin</a>
    <div class = "table1">
  <table cellspacing='0'>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Petugas Admin</th>
        <th>Nama Petugas Admin</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Kota Tinggal</th>
        <th>No. Telp</th>
        <th>Navigasi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($petugasadmin as $p)

    <tr>
      <center>
      <td>{{ $p->ID_PETUGAS }}</td>
      <td>{{ $p->NAMA_PETUGAS }}</td>
      <td>{{ $p->email}}</td>
      <td>{{ $p->ALAMAT }}</td>
      <td>{{ $p->KOTA_TINGGAL }}</td>
      <td>{{ $p->NO_TLP }}</td>
      <td>
        <a href="/petugasadmin/edit/{{ $p->ID_PETUGAS }}" class="btn btn-info">Edit</a>
        |
        <a href="/petugasadmin/softdel/{{ $p->ID_PETUGAS }}" class="btn btn-info">Hapus</a>
      </td>
      </center>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection