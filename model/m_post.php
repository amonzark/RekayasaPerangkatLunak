<?php
include ("config.php");
class m_post {
	public function search() {
		global $koneksi;
		$output = '';
		if(isset($_GET['query'])) {
			$search = $_GET['query'];
			$result = $koneksi->query("SELECT postdb.*, userdb.username FROM postdb, userdb WHERE postdb.judul LIKE '%$search%' AND postdb.id_user = userdb.id_user");
			$count = mysqli_num_rows($result);
			if ($count == 0) {
				$output = 'Maaf post tidak ada';
			} else {
				while($row3 = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					$judul=$row3['judul'];
					$jenis=$row3['jenis'];
					$tema=$row3['tema'];
					$waktu_batas=$row3['waktu_batas'];
					$rincian=$row3['rincian'];

					$output .= "<div> <a href=http://localhost/RPL/index.php/c_post/viewpost?query=$judul> ".$judul."</a> </div>";
				}
			}
		}
		return $output;
	}

	public function viewpost() {
		global $koneksi;
		$judulsearch = $_GET['query'];
		if(isset($judulsearch)) {
			$rs = $koneksi->query("SELECT postdb.*, userdb.username FROM postdb, userdb WHERE postdb.judul LIKE '%$judulsearch%' AND postdb.id_user = userdb.id_user");
			$rows = array();
			while($row = $rs->fetch_assoc()) {
				$rows[] = $row;
			}
			$this->hasil = $rows;
			return $this->hasil;
		}
	}

	public function viewmypost() {
		global $koneksi;
		$id = $_SESSION['SESS_MEMBER_ID'];
		if(isset($_SESSION['SESS_MEMBER_ID'])) {
			$rs = $koneksi->query("SELECT postdb.* FROM postdb, userdb WHERE userdb.username = '$id' AND postdb.id_user = userdb.id_user");
			$rows = array();
			while($row = $rs->fetch_assoc()) {
				$rows[] = $row;
			}
			$this->hasil = $rows;
			return $this->hasil;
		}
	}

	public function editmypost($postid) {
		global $koneksi;
		$id_numb = $_SESSION['SESS_MEMBER_ID_NUMB'];
		$id = $_SESSION['SESS_MEMBER_ID'];
		if(@$_POST['submit']) {
			$judul = $koneksi->real_escape_string($_POST['judulpost']);
			$jenis = $koneksi->real_escape_string($_POST['jenisproduk']);
			$tema = $koneksi->real_escape_string($_POST['tema']);
			$waktu_batas = $koneksi->real_escape_string($_POST['bataswaktu']);
			$rincian = $koneksi->real_escape_string($_POST['rincian']);
			$koneksi->query("UPDATE postdb SET judul='$judul', jenis='$jenis', tema='$tema', waktu_batas='$waktu_batas', rincian='$rincian' WHERE id_post = '$postid' AND id_user = '$id_numb'");
			if(@$_POST['submit']) {
				echo '<script language="javascript">';
				echo 'alert("Post berhasil diedit")';
				echo '</script>';
			}
		}
		$rs = $koneksi->query("SELECT postdb.* FROM postdb, userdb WHERE postdb.id_post = '$postid' AND userdb.username = '$id' AND postdb.id_user = userdb.id_user");
		$rows = array();

		while($row = $rs->fetch_assoc()) {
			$rows[] = $row;
		}
		$this->hasil = $rows;
		return $this->hasil;
	}

	public function deletemypost($postid) {
		global $koneksi;
		$koneksi->query("DELETE FROM postdb WHERE id_post = '$postid'");
		if(@$_GET['postid']) {
			echo '<script language="javascript">';
			echo 'alert("Post berhasil dihapus")';
			echo '</script>';
		}
	}
}	
?>