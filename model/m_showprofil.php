<?php
	include ("config.php");
	class m_showprofil{
		public function showprofil(){
			session_start();
			global $koneksi;
			$id = $_SESSION['SESS_MEMBER_ID'];
			$result3 = $koneksi->query("SELECT * FROM userdb WHERE username = '$id'");
			while($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC))
			{ 
				$namalengkap=$row3['nama'];
				$username=$row3['username'];
				$email=$row3['email'];
				$noHp=$row3['noHp'];
				$foto=$row3['fotoProfil'];
				$idLine=$row3['idLine'];
			}//header("location: v_showprofil.php");
		}
	}
?>