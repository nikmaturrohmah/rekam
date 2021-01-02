<!DOCTYPE html>
<html>
<head>
	<title>Masukkan Data Petugas Admin Anda</title>
</head>
<body>
 
	<form action="/formulir/proses" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
      	Nama :
		<input type="text" name="namaptgs"> <br/>
		Alamat :
		<input type="text" name="alamatptgs"> <br/>
		Kota Tinggal :
		<input type="text" name="kotatinggalptgs"> <br/>
		No Telepon :
		<input type="text" name="notlpptgs"> <br/>
		<input type="submit" value="Simpan">
	</form>
 
</body>
</html>