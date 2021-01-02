@extends('adminlte')

@section('content_rekammedis')

<p align = "right"><form action="/rekammedis/cari" method="GET" >
    <input type="text" name="cari" placeholder="Cari Rekam Medis .." value="{{ old('cari') }}">
    <input type="submit" value="CARI">
  </form></p>

      <center><h1>Data Rekam Medis</h1></center>
    <a href="/rekammedis/tambah" class="btn btn-success">+Tambahkan Rekam Medis</a>
    <div class = "table1">
  <table cellspacing='0'>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Rekam Medis</th>
        <th>NAMA Petugas</th>
        <th>NAMA Pasien</th>
        <th>NAMA Dokter</th>
        <th>Tgl Periksa</th>
        <th>Diagnosa</th>
        <th>Keterangan</th>
        <th>Biaya Jasa</th>
        <th>Navigasi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($rekammedis as $rm)

    <tr>
      <center>
        <td>{{ $rm->ID_REKAM_MEDIS}}</td>
        <td>{{ $rm->petugas_admin->NAMA_PETUGAS}}</td>
        <td>{{ $rm->pasien->NAMA_PASIEN}}</td>
        <td>{{ $rm->dokter->NAMA_DOKTER}}</td>
        <td>{{ $rm->TGL_PERIKSA}}</td>
        <td>{{ $rm->DIAGNOSA}}</td>
        <td>{{ $rm->KETERANGAN}}</td>
        <td>{{ $rm->BIAYA_JASA}}</td>
      <td>
        <a href="/rekammedis/edit/{{$rm->ID_REKAM_MEDIS}}" class="btn btn-info">Edit</a>
        |
        <a href="/rekammedis/softdel/{{$rm->ID_REKAM_MEDIS}}" class="btn btn-info">Hapus</a>
      </td>
      </center>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection