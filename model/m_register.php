<?php
//session_start();
include ("config.php");

class m_register {
	public function m_register() {
		global $koneksi;
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if ($_POST['password'] == $_POST['confirmpassword'] && isset($_POST['submit'])) {
				$namalengkap = $koneksi->real_escape_string($_POST['namalengkap']);
				$username = $koneksi->real_escape_string($_POST['username']);
				$email = $koneksi->real_escape_string($_POST['email']);
				$password = $koneksi->real_escape_string($_POST['password']);
				$telpon = $koneksi->real_escape_string($_POST['telpon']);
				$idline = $koneksi->real_escape_string($_POST['idline']);

				$sql = "INSERT INTO userdb (nama, username, email, password, noHp, idLine) "
				. "VALUES ('$namalengkap', '$username', '$email', '$password', '$telpon', '$idline')";

				if ($koneksi->query($sql) === true) {
					echo '<script language="javascript">';
					echo 'alert("Registrasi anda berhasil")';
					echo '</script>';
					include 'controller/c_login.php';
				}
			} else if($_POST['password'] !== $_POST['confirmpassword'] && isset($_POST['submit'])) {
				echo '<script language="javascript">';
				echo 'alert("Password dan Konfirm Password anda tidak sama")';
				echo '</script>';
			}
		}
	}
}
?>