<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$id=$_POST['anggota_id'];
$nama=$_POST['nama'];
$no_hp=$_POST['no_hp'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$agama=$_POST['agama'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into anggota(anggota_id,nama,no_hp,tempat_lahir,tanggal_lahir,jenis_kelamin,alamat,email,agama) 
                        values ('$id','$nama', '$no_hp', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$email', '$agama')");

if($simpan==true){

    header("location:tampil-anggota.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>