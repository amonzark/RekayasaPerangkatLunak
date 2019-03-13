<html>
	<head>
    	<title>Pencarian</title>
	</head>
	<body>
 		<form action="http://localhost/RPL/index.php/c_post/search" method="GET">
    		<input type="text" name="query" />
    		<input type="submit" value="Cari" />
		</form>
		<?php 
			if(isset($output)){
				print("$output");
			}
		?>
		<br>
		<a href="http://localhost/RPL/index.php/c_halutama/index">Kembali</a>
	</body>
</html>