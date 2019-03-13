<html>
	<head>
		<title>Post</title>
	</head>
	<body><center>
		<form method="GET">
			<?php $i=0;
			foreach($view as $view): ?>
			<table width="398" border="0" align="center" cellpadding="0">
				<tr>
					<td width="82" valign="top"><div align="left">Judul : </div></td>
					<td width="165" valign="top"><?php echo $view['judul'] ?></td>
				</tr>
				<tr>
					<td valign="top"><div align="left">Jenis : </div></td>
					<td valign="top"><?php echo $view['jenis'] ?></td>
				</tr>
				<tr>
					<td valign="top"><div align="left">Tema : </div></td>
					<td valign="top"><?php echo $view['tema'] ?></td>
				</tr>
				<tr>
					<td valign="top"><div align="left">Batas Waktu : </div></td>
					<td valign="top"><?php echo $view['waktu_batas'] ?></td>
				</tr>
				<tr>
					<td valign="top"><div align="left">Rincian : </div></td>
					<td valign="top"><?php echo $view['rincian'] ?></td>
				</tr>
			</table>
			<a href="http://localhost/RPL/index.php/c_post/editmypost?postid=<?php echo $view['id_post'] ?>" style="text-decoration:none;">
				<button class="button" type="button" name="edit">Edit</button>
			</a>
			<a href="http://localhost/RPL/index.php/c_post/deletemypost?postid=<?php echo $view['id_post'] ?>" style="text-decoration:none;" onclick="return confirm('Apakah anda yakin menghapusnya?')">
				<button class="button" type="button" name="delete">Delete</button>
			</a>
			<br>
			<br>
			<?php endforeach; ?>
			<a href="http://localhost/RPL/index.php/c_profil/index">Back</a>
		</form></center>
	</body>
</html>