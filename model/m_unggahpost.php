<?php
//session_start();
include ("config.php");

class m_unggahpost {
    public function m_unggahpost() {
        global $koneksi;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['submit'])) {
                $judul = $koneksi->real_escape_string($_POST['judulpost']);
                $jenis = $koneksi->real_escape_string($_POST['jenisproduk']);
                $tema = $koneksi->real_escape_string($_POST['tema']);
                $waktu_batas = $koneksi->real_escape_string($_POST['bataswaktu']);
                $rincian = $koneksi->real_escape_string($_POST['rincian']);
                
                $id=mysqli_query($koneksi, "SELECT id_user FROM userdb WHERE userdb.username = '" . $_SESSION['SESS_MEMBER_ID'] . "'");
                $count = $id->num_rows;
                if($count==0) {
                    $user_id='';
                } else {
                    while($row =$id->fetch_assoc())   {
                        $user_id = $row['id_user'];// This will store the publisher ID
                    }
                }

                $sql = "INSERT INTO postdb (judul, jenis, tema, waktu_batas, rincian, id_user) "
                . "VALUES ('$judul', '$jenis', '$tema', '$waktu_batas', '$rincian', '$user_id')";

                if ($koneksi->query($sql) === true) {
                    echo '<script language="javascript">';
                    echo 'alert("Post Request telah berhasil dibuat")';
                    echo '</script>';
                }
            }
        }
    }
}
?>