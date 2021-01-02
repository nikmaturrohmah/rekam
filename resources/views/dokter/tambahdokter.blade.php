@extends('adminlte')

@section('content_dokter')
<!DOCTYPE html>
<html>
	<h2><p class="text-dark">Tambah Data Dokter</p></h2>
 	<br>
	<a href="/dokter" class="btn btn-warning">Kembali</a>
	<br/>
    <form action="simpan" method="get">
		{{ csrf_field() }}
		<!-- <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ID_DOKTER" required="required">
        </div> -->
		<div class="form-group">
                    <label for="exampleInputEmail1">Nama Dokter</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="NAMA_DOKTER" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ALAMAT" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kota Tinggal</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="KOTA_TINGGAL" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">No Telp</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="NO_TLP" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Spesialis</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ASPESIALISASI" required="required">
                </div>
   
		<button type="submit" class="btn btn-primary">Submit</button>
        </form>
 
</html>
@endsection