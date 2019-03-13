<html>
	<head>
		<title>Edit Profile</title>
	</head>
	<body><center>
		<form method="post" enctype="multipart/form-data" action="#">
            <?php $i=0;
			foreach($edit as $edit): ?>
            <div class="input-group">
                <label>Judul Post</label><br>
                <input type="text" name="judulpost" placeholder="Judul Post" value="<?php echo $edit['judul'] ?>" style="text-align: center;" required>
                <br>

                <label>Jenis Produk</label><br>
                <select name="jenisproduk">
                    <option value="<?php echo $edit['jenis'] ?>">Default</option>
                    <option value="design">Design</option>
                    <option value="product">Product</option>
                </select>
                <br>

                <label>Tema</label><br>
                <select name="tema">
                    <option value="<?php echo $edit['tema'] ?>">Default</option>
                    <option value="plain">Plain</option>
                    <option value="cartoon">Cartoon</option>
                    <option value="anime">Anime</option>
                    <option value="classic">Classic</option>
                    <option value="modern">Modern</option>
                </select>
                <br>

                <label>Batas Waktu</label><br>
                <input type="date" name="bataswaktu" value="<?php echo $edit['waktu_batas'] ?>" min="2018-10-31" required>
                <br>

                <label>Rincian Kebutuhan</label><br>
                <textarea rows="5" cols="50" name="rincian" placeholder="Rincian Kebutuhan" required><?php echo $edit['rincian'] ?></textarea>
                <br>

                <input class="submit" type="submit" name="submit" value="Edit">
            </div><!-- sesuaikan fungsi tombol buat lokasi nya -->
            <br>
            <?php endforeach; ?>
            <a href="http://localhost/RPL/index.php/c_post/viewmypost">Kembali</a>
		</form>
	</center></body>
</html>