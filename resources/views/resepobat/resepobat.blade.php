@extends('adminlte')

@section('content_resepobat')

<p align = "right"><form action="/resepobat/cari" method="GET" >
    <input type="text" name="cari" placeholder="Cari Resep Obat .." value="{{ old('cari') }}">
    <input type="submit" value="CARI">
  </form></p>

<center><h1>Data Resep Obat</h1></center>
    <a href="resepobat/tambah" class="btn btn-success">+Tambahkan Resep Obat</a>
    <div class = "table1">
  <table cellspacing='0'>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Resep</th>
        <th>ID Rekam Medis</th>
        <th>Nama Obat</th>
        <th>Jumlah</th>
        <th>Navigasi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($resepobat as $ro)

    <tr>
      <center>
      <td>{{ $ro->ID_RESEP }}</td>
      <td>{{ $ro->rekam_medis->ID_REKAM_MEDIS }}</td>
      <td>{{ $ro->obat->NAMA_OBAT}}</td>
      <td>{{ $ro->JUMLAH }}</td>
      <td>
        <a href="resepobat/edit/{{$ro->ID_RESEP}}" class="btn btn-info">Edit</a>
        |
        <a href="resepobat/softdel/{{$ro->ID_RESEP}}" class="btn btn-info">Hapus</a>
      </td>
      </center>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection