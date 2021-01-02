<!DOCTYPE html>
<html>
<head>
	<title>Masukkan Data Dokter</title>
</head>
<body>
 
	<form action="/formulir/proses" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      	ID :
		<input type="text" name="id_obat"> <br/>
      	Kategori Obat :
		<input type="text" name="kategori_obat"> <br/>
		Nama :
		<input type="text" name="nama_dokter"> <br/>
		Bentuk Obat :
		<input type="text" name="bentuk_obat"> <br/>
		Tgl Kadaluarsa :
		<input type="text" name="tgl_kadaluarsa"> <br/>
		Harga Obat :
		<input type="text" name="harga_obat"> <br/>
		<input type="submit" value="Simpan">
	</form>
 
</body>
</html>