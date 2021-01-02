@extends('adminltepasien')

@section('content_pasien')


<center><h1>Data Pasien</h1></center>
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
      </center>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection
