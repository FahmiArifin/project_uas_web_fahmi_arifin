<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['user_id'];
$username=$_POST['username'];
$password=$_POST['password'];
$new_password=md5($_POST['password']);
$email=$_POST['email'];

$sql=$koneksi->query("select * from pengguna where user_id='$id'");
$row=$sql->fetch_assoc();

if($row['password']==$password){

  $ubah=$koneksi->query("update pengguna username='$username', email='$email' where user_id='$id'");

} else{

  $ubah=$koneksi->query("update pengguna set username='$username', email='$email', password='$new_password' where user_id='$id'");

}

if($ubah==true){

  echo"<script>alert('Update profile sukses');document.location.href='profile.php';</script>";
} else{
  echo"<script>alert('Update profile gagal');document.location.href='profile.php';</script>";
}

?>