<html>
	<head>
		<title>Post</title>
	</head>
	<body>
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
				<tr>
					<td valign="top"><div align="left">User : </div></td>
					<td valign="top"><?php echo $view['username'] ?></td>
				</tr>
			</table>
			<br>
			<?php endforeach; ?>
		</form>
	</body>
</html>