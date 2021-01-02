<!DOCTYPE html>
<html>
<head>
	<title>Masukkan Data Dokter</title>
</head>
<body>
 
	<form action="/formulir/proses" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      	ID :
		<input type="text" name="id_dktr"> <br/>
      	Nama :
		<input type="text" name="nama_dokter"> <br/>
		Alamat :
		<input type="text" name="alamat_dokter"> <br/>
		Kota Tinggal :
		<input type="text" name="kotatinggaldktr"> <br/>
		No Telepon :
		<input type="text" name="notlpdktr"> <br/>
		Spesialis :
		<input type="text" name="spesialis"> <br/>
		<input type="submit" value="Simpan">
	</form>
 
</body>
</html>