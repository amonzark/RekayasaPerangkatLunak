<?php
include ("config.php");

class m_profil {
	public function showprofil() {
		global $koneksi;
		$id = $_SESSION['SESS_MEMBER_ID'];
		$rs = $koneksi->query("SELECT * FROM userdb WHERE username = '$id'");
		$rows = array();

		while($row = $rs->fetch_assoc()) {
			$rows[] = $row;
		}
		$this->hasil = $rows;
		return $this->hasil;
	}	


	public function editprofil() {
		global $koneksi;
		$id = $_SESSION['SESS_MEMBER_ID'];
		if(@$_POST['simpan'] && $_POST['password'] == $_POST['password2']) {
			$nama = $koneksi->real_escape_string($_POST['nama']);
			$password = $koneksi->real_escape_string($_POST['password']);
			$email1 = $koneksi->real_escape_string($_POST['email']);
			$noHp1 = $koneksi->real_escape_string($_POST['noHp']);
			$idLine1 = $koneksi->real_escape_string($_POST['idline']);
			$foto = $_FILES['foto']['name'];
			$koneksi->query("UPDATE userdb SET nama='$nama', password='$password', email='$email1', noHp='$noHp1', idline='$idLine1', fotoProfil = '$foto' WHERE username='$id'");
			//upload foto
			$target = "foto/".basename($_FILES['foto']['name']);
			if(move_uploaded_file($_FILES['foto']['tmp_name'], $target)) {
				echo '<script language="javascript">';
				echo 'alert("Profil berhasil diedit")';
				echo '</script>';
				echo "The file ".  basename( $_FILES['foto']['name']). " terupload";
			} else if(@$_POST['simpan']) {
				echo '<script language="javascript">';
				echo 'alert("Profil berhasil diedit")';
				echo '</script>';
			} else {
				echo '<script language="javascript">';
				echo 'alert("Terjadi error disaat mengunggah file, coba lagi!")';
				echo '</script>';
			}
		} else if(@$_POST['simpan'] && $_POST['password'] !== $_POST['password2']) {
			echo '<script language="javascript">';
			echo 'alert("Password dan Konfirm Password anda salah")';
			echo '</script>';
		}
		$rs = $koneksi->query("SELECT * FROM userdb WHERE username = '$id'");
		$rows = array();

		while($row = $rs->fetch_assoc()) {
			$rows[] = $row;
		}
		$this->hasil = $rows;
		return $this->hasil;
	}
}
?>
