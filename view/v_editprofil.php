<html>
	<head>
		<title>Edit Profile</title>
	</head>
	<body>
		<form method="post" enctype="multipart/form-data" action="#"> 
			<?php $i=0;
			foreach($edit as $edit): ?>
			Nama Lengkap : <input type="text" name="nama" value="<?php echo $edit['nama'] ?>" required><br></br>
			Password : <input type="password" name="password" required><br></br>
			Konfirm Password : <input type="password" name="password2" required><br></br>
			Email : <input type="text" name="email" value="<?php echo $edit['email'] ?>" required><br></br>
			Nomor Handphone : <input type="text" name="noHp" value="<?php echo $edit['noHp'] ?>" required><br></br>
			ID Line : <input type="text" name="idline" value="<?php echo $edit['idLine'] ?>" required><br></br>
			Foto Profil : <input type="file" name="foto" id="foto" /><br></br>
			<input class="submit" type="submit" name="simpan" value="Simpan">
			<input class="submit" type="reset" name="batal" value="Batal">
			Kembali? <a href="http://localhost/RPL/index.php/c_profil/index">Halaman Profil
			<?php endforeach; ?>
		</form>
	</body>
</html>