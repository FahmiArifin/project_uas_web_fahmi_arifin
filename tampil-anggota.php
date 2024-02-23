<?php require 'header.php'; ?>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="DataTables/datatables.min.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Data Anggota</h1>
            <?php

            if (@$_GET['pesan'] == "inputBerhasil") {
            ?>
                <div class="alert alert-success">
                    Penyimpanan Berhasil!
                </div>
            <?php
            }

            ?>

            <?php

            if (@$_GET['pesan'] == "hapusBerhasil") {
            ?>
                <div class="alert alert-success">
                    Data Berhasil Dihapus!
                </div>
            <?php
            }

            ?>

            <?php

            if (@$_GET['pesan'] == "editBerhasil") {
            ?>
                <div class="alert alert-success">
                    Perubahan Berhasil!
                </div>
            <?php
            }

            ?>

            <table id="dataTables" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id anggota</th>
                        <th>Nama</th>
                        <th>No Handphone</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Agama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include "koneksi.php";
                    $sql = $koneksi->query("select * from anggota where status = 1 order by anggota_id ASC");

                    while ($row = $sql->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $row['anggota_id'] ?></td>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['no_hp'] ?></td>
                            <td><?php echo $row['tempat_lahir'] ?></td>
                            <td><?php echo $row['tanggal_lahir'] ?></td>
                            <td><?php echo $row['jenis_kelamin'] ?></td>
                            <td><?php echo $row['alamat'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['agama'] ?></td>
                            <td>
  
                            </td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>

            <a href="index.php" class="btn btn-info">
                <span class="glyphicon glyphicon-chevron-left"></span> Kembali
            </a>

            <a href="cek-anggota.php" class="btn btn-primary">
                Cek Keanggotaan
            </a>
        </div>
    </div>
</div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="DataTables/datatables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#dataTables').DataTable();
    });
</script>
<?php require 'footer.php'; ?>
</body>
</html>
