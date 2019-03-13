<html>
	<head>
		<title>Menu Awal</title>
	</head>
	<body>
	Halaman Utama <br>
		<form>
			<?php
			session_start();
			if(isset($_SESSION['SESS_MEMBER_ID'])) {
			?>
				<p><a href="http://localhost/RPL/index.php/c_profil">Profile</a></p>
				<p><a href="http://localhost/RPL/index.php/c_post/index">Search</a></p>
				<p><a href="http://localhost/RPL/index.php/c_unggahpost/index">Upload Post</a></p>
				<p><a href="http://localhost/RPL/index.php/c_login/logout">Logout</a></p>
			<?php
			} else if(!isset($_SESSION['SESS_MEMBER_ID'])) { ?>
				<p><a href="http://localhost/RPL/index.php/c_login/index">Login</a></p>
				<p><a href="http://localhost/RPL/index.php/c_register/index">SignUp</a></p>
				<p><a href="http://localhost/RPL/index.php/c_post/index">Search</a></p>
			<?php
			}
			?>
		</form>
	</body>
</html>