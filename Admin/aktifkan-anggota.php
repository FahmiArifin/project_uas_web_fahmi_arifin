<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$id=$_GET['id'];

include "../koneksi.php";

$hapus=$koneksi->query("update anggota set status = 1 where anggota_id='$id'");

if($hapus==true){

    header("location:tampil-anggota.php?pesan=uotadeBerhasil");

} else{
    echo "Error";
}


?>