<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<!doctype HTML>
<html>
<head>
    <title>Form Edit Anggota</title>

<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-anggota.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from anggota where anggota_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="anggota_id">Anggota_id</label>
                        <input type="hidden" name="anggota_id" value="<?php echo $row['anggota_id']?>" class="form-control">
                        <input type="number" name="anggota_id" value="<?php echo $row['anggota_id']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor Handphone</label>
                        <input type="number" name="no_hp" value="<?php echo $row['no_hp']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="<?php echo $row['jenis_kelamin']?>" selected><?php echo $row['jenis_kelamin']?></option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <textarea name="email" class="form-control"><?php echo $row['email']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select name="agama" class="form-control">
                            <option value="">Pilih Agama</option>
                            <option value="Islam"<?php if($row['agama'] == 'Islam') echo ' selected'?>>Islam</option>
                            <option value="Kristen"<?php if($row['agama'] == 'Kristen') echo ' selected'?>>Kristen</option>
                            <option value="Katolik"<?php if($row['agama'] == 'Katolik') echo ' selected'?>>Katolik</option>
                            <option value="Hindu"<?php if($row['agama'] == 'Hindu') echo ' selected'?>>Hindu</option>
                            <option value="Buddha"<?php if($row['agama'] == 'Buddha') echo ' selected'?>>Buddha</option>
                            <option value="Konghucu"<?php if($row['agama'] == 'Konghucu') echo ' selected'?>>Konghucu</option>
                        </select>
                    </div>
               

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

</body>
</html>