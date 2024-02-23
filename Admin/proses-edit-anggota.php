<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['anggota_id'];
$nama=$_POST['nama'];
$no_hp=$_POST['no_hp'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$agama=$_POST['agama'] ;

$ubah=$koneksi->query("UPDATE anggota SET nama='$nama', no_hp='$no_hp', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', email='$email', agama='$agama' WHERE anggota_id='$id'");

if($ubah==true){

    header("location:tampil-anggota.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>