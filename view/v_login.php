<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<div class='box'>
			<h3 style="color: #FF4500; font-size: 40px; font-family: sans-serif; text-shadow: transparent; text-align: center;">Login</h3>
			<form action="http://localhost/RPL/index.php/c_login/login" class="form" method="POST">
				<center><table class="form">
				<tr>
					<td>
						<input type="text" name="username" placeholder="Username" style="text-align: center;" required>
					</td>
				</tr>
				<tr>
					<td>
						<input type="password" name="password" placeholder="Password" style="text-align: center;" required>
					</td>
				</tr>
				<tr>
					<td>
						<br>
						<center><input class="submit" type="submit" name="login" value="Login" ></center>
					</td>
				</tr>
				</table></center>
			</form>
			<td>
				<br>
				<center><p style="color : black">Belum punya akun? <a href="http://localhost/RPL/index.php/c_register/index">Register</a></center>
				<center><p style="color : black">Kembali ke Halaman Utama? <a href="http://localhost/RPL/">Kembali</a></center>
			</td>
		</div>
	</body>
</html>