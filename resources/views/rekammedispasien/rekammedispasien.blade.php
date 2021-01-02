@extends('adminltepasien')

@section('content_rekampasien')
      <center><h1>Data Rekam Medis</h1></center>
    <div class = "table1">
  <table cellspacing='0'>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>NO</th>
        <th>ID Rekam Medis Pasien</th>
        <th>NAMA Petugas Admin</th>
        <th>NAMA Pasien</th>
        <th>NAMA Dokter</th>
        <th>Tgl Periksa</th>
        <th>Diagnosa</th>
        <th>Keterangan</th>       
        <th>Biaya Jasa</th>
      </tr>
    </thead>
    <tbody>
      @foreach($rekammedispasien as $rm)

    <tr>
      <center>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{ $rm->ID_REKAM_MEDIS}}</td>
        <td>{{ $rm->NAMA_PETUGAS}}</td>
        <td>{{ $rm->NAMA_PASIEN}}</td>
        <td>{{ $rm->NAMA_DOKTER}}</td>
        <td>{{ $rm->TGL_PERIKSA}}</td>
        <td>{{ $rm->DIAGNOSA}}</td>
        <td>{{ $rm->KETERANGAN}}</td>
        <td>{{ $rm->BIAYA_JASA}}</td>
      </center>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection
 