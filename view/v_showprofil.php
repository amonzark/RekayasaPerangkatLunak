<html>
	<head>Profil</head>
	<body>
		<table width="398" border="0" align="center" cellpadding="0">
			<?php $i=0;
			foreach($show as $show): ?>
			<tr>
				<td height="26" colspan="2">Informasi Profil Anda </td>
				<td><div align="right"><a href="http://localhost/RPL/index.php/c_login/logout">logout</a></div></td>
			</tr>
			<tr>
				<td width="129" rowspan="5"><img src="http://localhost/RPL/foto/<?php echo $show['fotoProfil'] ?>" width="129" height="129" alt="no image found"/></td>
				<td width="82" valign="top"><div align="left">Nama Lengkap : </div></td>
				<td width="165" valign="top"><?php echo $show['nama'] ?></td>
			</tr>
			<tr>
				<td valign="top"><div align="left">Username : </div></td>
				<td valign="top"><?php echo $show['username'] ?></td>
			</tr>
			<tr>
				<td valign="top"><div align="left">Email : </div></td>
				<td valign="top"><?php echo $show['email'] ?></td>
			</tr>
			<tr>
				<td valign="top"><div align="left">ID Line : </div></td>
				<td valign="top"><?php echo $show['idLine'] ?></td>
			</tr>
			<tr>
				<td valign="top"><div align="left">Nomor Handphone : </div></td>
				<td valign="top"><?php echo $show['noHp'] ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
		<p align="center"><a href="http://localhost/RPL/index.php/c_profil/editprofil">Edit</a></p>
		<center><p style="color : black">Kembali ke Halaman Utama? <a href="http://localhost/RPL/index.php/c_halutama/index">Kembali</a></center>
		<center><a href="http://localhost/RPL/index.php/c_post/viewmypost">My Post</a></center>
	</body>
</html>