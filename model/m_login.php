<?php 
include ("config.php");

class m_login{
	public function login(){
		if(isset($_POST['username'])){
			global $koneksi;
		$username = $_POST['username'];
		$password = $_POST['password'];
	
		$sql = "SELECT * FROM userdb WHERE username='".$username."' AND password='".$password."' limit 1";
	
		$result=$koneksi->query($sql);
	
			if(mysqli_num_rows($result)==1){
				session_start();
				$data = $result->fetch_array(MYSQLI_ASSOC);
				$_SESSION['SESS_MEMBER_ID']= $data['username'];
				$_SESSION['SESS_MEMBER_ID_NUMB'] = $data['id_user'];
				echo '<script language="javascript">';
				echo 'alert("Selamat Datang")';
				echo '</script>';
				header("Location:http://localhost/RPL/index.php/c_profil");
			}else {
				echo '<script language="javascript">';
				echo 'alert("Password anda salah")';
				echo '</script>';
				header("Location:http://localhost/RPL/index.php/c_login");
			}
		}
	}
}
?>
