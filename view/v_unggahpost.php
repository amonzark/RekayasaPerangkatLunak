<html>
    <head>
        <title>Registration</title>
    </head>
    <body><center>
        <div class="header">
            <h2>Register</h2>
        </div>

        <form method="post">
            <div class="input-group">
                <label>Judul Post</label><br>
                <input type="text" name="judulpost" placeholder="Judul Post" style="text-align: center;" required>
                <br>

                <label>Jenis Produk</label><br>
                <select name="jenisproduk">
                    <option value="design">Design</option>
                    <option value="product">Product</option>
                </select>
                <br>

                <label>Tema</label><br>
                <select name="tema">
                    <option value="plain">Plain</option>
                    <option value="cartoon">Cartoon</option>
                    <option value="anime">Anime</option>
                    <option value="classic">Classic</option>
                    <option value="modern">Modern</option>
                </select>
                <br>

                <label>Batas Waktu</label><br>
                <input type="date" name="bataswaktu" value="2018-10-31" min="2018-10-31" required>
                <br>

                <label>Rincian Kebutuhan</label><br>
                <textarea rows="5" cols="50" name="rincian" placeholder="Rincian Kebutuhan" required></textarea>
                <br>

                <button type="submit" class="btn" name="submit" id='unggah'>Unggah</button>
                <br>
                <br>
                <a href="http://localhost/RPL/index.php/c_halutama/index">Kembali</a>
            </div><!-- sesuaikan fungsi tombol buat lokasi nya -->
        </form></center>
    </body>
</html>