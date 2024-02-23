<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
    exit;
  }
?>

<?php
include "../koneksi.php";

$id = $_POST['user_id'];

$nama = $koneksi->real_escape_string(trim($_FILES['foto']['name']));
$x = explode('.', $nama);
$ekstensi = strtolower(end($x));
$ukuran = $_FILES['foto']['size'];
$jenis_gambar = $_FILES['foto']['type'];
$file_tmp = $_FILES['foto']['tmp_name'];
$file_name = date("Y-m-d-G-i-s") . '.' . $ekstensi;

if ($ukuran <= 10000000) { // Ukuran file maksimal 10MB
    if ($nama != '') {
        if ($jenis_gambar == "image/jpeg" || $jenis_gambar == "image/jpg" || $jenis_gambar == "image/png") {
            // Pindahkan file yang diunggah ke direktori yang ditentukan
            move_uploaded_file($file_tmp, '../images/foto/' . $file_name);

            // Perbarui informasi foto pengguna di basis data
            $upload = $koneksi->query("UPDATE pengguna SET foto='$file_name' WHERE user_id='$id'");

            if ($upload == true) {
                echo "<script>alert('Upload foto sukses');document.location.href='edit-pengguna.php?id=$id';</script>";
            } else {
                echo "<script>alert('Upload foto gagal');document.location.href='edit-pengguna.php?id=$id';</script>";
            }
        } else {
            echo "<script>alert('Format file tidak diizinkan');document.location.href='edit-pengguna.php?id=$id';</script>";
        }
    } else {
        echo "<script>alert('Error, pilih file');document.location.href='edit-pengguna.php?id=$id';</script>";
    }
} else {
    echo "<script>alert('Error, ukuran file terlalu besar');document.location.href='edit-pengguna.php?id=$id';</script>";
}
?>
