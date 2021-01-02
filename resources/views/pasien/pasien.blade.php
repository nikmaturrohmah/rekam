@extends('adminlte')

@section('content_pasien')

<p align = "right"><form action="/pasien/cari" method="GET" >
    <input type="text" name="cari" placeholder="Cari Pasien .." value="{{ old('cari') }}">
    <input type="submit" value="CARI">
  </form></p>

<center><h1>Data Pasien</h1></center>
    <a href="/pasien/tambahpasien" class="btn btn-success">+Tambahkan Data Pasien</a>
    <div class = "table1">
  <table cellspacing='0'>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Id Pasien</th>
        <th>Nama Pasien</th>
        <th>Tgl Lahir</th>
        <th>Tempat Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Kota Tinggal</th>
        <th>No Telp</th>
        <th>Pekerjaan</th>
        <th>Navigasi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($pasien as $p)

    <tr>
      <center>
      <td>{{ $p->ID_PASIEN }}</td>
      <td>{{ $p->NAMA_PASIEN }}</td>
      <td>{{ $p->TGL_LAHIR }}</td>
      <td>{{ $p->TEMPAT_LAHIR }}</td>
      <td>{{ $p->JENIS_KELAMIN }}</td>
      <td>{{ $p->ALAMAT }}</td>
      <td>{{ $p->KOTA_TINGGAL }}</td>
      <td>{{ $p->NO_TLP }}</td>
      <td>{{ $p->PEKERJAAN }}</td>   
      <td>
        <a href="/pasien/edit/{{ $p->ID_PASIEN }}" class="btn btn-info">Edit</a>
        |
        <a href="/pasien/softdel/{{ $p->ID_PASIEN }}" class="btn btn-info">Hapus</a>
      </td>
      </center>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection
