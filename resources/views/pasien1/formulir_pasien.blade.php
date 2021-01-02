<!DOCTYPE html>
<html>
<head>
	<title>Masukkan Data Pasien</title>
</head>
<body>
 
	<form action="/formulir/proses" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
      	Nama :
		<input type="text" name="namapsn"> <br/>
		Alamat :
		<input type="text" name="alamatpsn"> <br/>
		Kota Tinggal :
		<input type="text" name="kotatinggalpsn"> <br/>
		No Telepon :
		<input type="text" name="notlppsn"> <br/>
		<input type="submit" value="Simpan">
	</form>
 
</body>
</html>