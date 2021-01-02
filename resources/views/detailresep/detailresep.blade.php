@extends('adminlte')

@section('content_detailresep')
<center><h1>Data Detail Resep</h1></center>
    <a href="/detailresep/tambah" class="btn btn-success">+Tambahkan Detail Resep</a>
    <div class = "table1">
  <table cellspacing='0'>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Obat</th>
        <th>ID Resep Obat</th>
        <th>Tgl Detail Resep</th>
        <th>Navigasi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($detailresep as $de)

    <tr>
      <center>
        <td>{{ $de -> ID_OBAT }}</td>
        <td>{{ $de -> ID_RESEP }}</td>
        <td>{{ $de-> TGL_DETAIL_RESEP }}</td>
      <td>
        <a href="/detailresep/edit/{{$de->ID_RESEP}}" class="btn btn-info">Edit</a>
        |
        <a href="/detailresep/hapus/{{$de->ID_RESEP}}" class="btn btn-info">Hapus</a>
      </td>
      </center>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection