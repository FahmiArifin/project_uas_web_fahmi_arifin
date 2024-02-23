<?php
session_start();
if (empty($_SESSION['user_id']) || empty($_SESSION['username'])){
  header("location:../login.php");
  exit; // Memastikan agar skrip berhenti setelah header redirect
}
?>
<?php require 'header.php'; ?>
<style>
/* Styles CSS */
body {
    background-color: #f5f5f5;
    font-family: 'Open Sans', sans-serif;
}
h1 {
    font-size: 48px;
    font-weight: bold;
    color: #333;
    margin-top: 100px;
    margin-bottom: 50px;
    text-align: center;
}
.btn {
    margin-top: 20px;
    margin-right: 10px;
    margin-bottom: 20px;
    margin-left: 10px;
    padding-top: 20px;
    padding-right: 50px;
    padding-bottom: 20px;
    padding-left: 50px;
    font-size: 24px;
    font-weight: bold;
    border-radius: 30px;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: all 0.3s ease-in-out;
}
.btn:hover {
    transform: scale(1.1);
}
.btn-anggota {
    background-color: #2ecc71;
    color: #fff;
    border: none;
}
.btn-pengguna {
    background-color: #3498db;
    color: #fff;
    border: none;
}
.btn-logout {
    background-color: #e74c3c;
    color: #fff;
    border: none;
    float: right;
    margin-top: 50px;
    margin-right: 50px;
    padding-top: 10px;
    padding-right: 30px;
    padding-bottom: 10px;
    padding-left: 30px;
    font-size: 18px;
    font-weight: bold;
    border-radius: 20px;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: all 0.3s ease-in-out;
}
.btn-logout:hover {
    transform: scale(1.1);
}
.logo {
    display: block;
    margin: auto;
    margin-bottom: 50px;
    width: 200px;
}
.square-image {
    border-radius: 0;
  }

</style>

<h1>Welcome, <?php echo $_SESSION['username']; ?></h1>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-3">
      <!-- Foto Profil Pengguna -->
      <?php
        include "../koneksi.php";
        $user_id = $_SESSION['user_id'];
        $query = $koneksi->query("SELECT foto FROM pengguna WHERE user_id = '$user_id'");
        $data = $query->fetch_assoc();
        $foto = $data['foto'];
      ?>
      <img src="../images/foto/<?php echo $foto; ?>" alt="Foto Profil" class="img-fluid square-image">
    </div>
    <div class="col-md-9">
      <!-- Tombol dan Konten Lainnya -->
      <div class="row">
        <div class="col-md-6 mb-3">
          <a href="tampil-anggota.php" class="btn btn-block btn-anggota">Anggota</a>
        </div>
        <div class="col-md-6 mb-3">
          <a href="tampil-pengguna.php" class="btn btn-block btn-pengguna">Pengguna</a>
        </div>
      </div>
      <!-- Tombol Logout -->
      <div class="row">
        <div class="col-md-12">
          <a href="../logout.php" class="btn btn-block btn-logout">Logout</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Akhir konten halaman web -->

<!-- Script JS -->
</body>
</html>
