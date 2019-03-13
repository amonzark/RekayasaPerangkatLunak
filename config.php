<?php

$host = "localhost"; //host yang kita pakai
$user = "root"; //root adalah user bawaan dari xampp
$pass = ""; //password bisa diisi sesuai yang agan pakai
$name = "rpl_projek_2018"; //nama database yang akan dikoneksikan

$koneksi = new mysqli($host, $user, $pass, $name) or die("Gagal terhubung ke database");