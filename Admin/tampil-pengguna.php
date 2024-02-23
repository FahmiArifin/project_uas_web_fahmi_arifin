<?php
session_start();
if (empty($_SESSION['user_id'])){
    header("location:../login.php");
    exit; // Pastikan agar skrip berhenti setelah header redirect
}
?>
<?php require 'header.php'; ?>

<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../DataTables/datatables.min.css" rel="stylesheet">

<style>
/* CSS untuk table */
.table-container {
    max-width: 100%;
    overflow-x: auto;
}

/* Optional: Style untuk table (sesuaikan dengan kebutuhan) */
.table {
    width: 100%;
    border-collapse: collapse;
}

.table th,
.table td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: left;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Data Pengguna</h1>

            <?php if(@$_GET['pesan']=="inputBerhasil"){ ?>
                <div class="alert alert-success">Penyimpanan Berhasil!</div>
            <?php } ?>

            <?php if(@$_GET['pesan']=="hapusBerhasil"){ ?>
                <div class="alert alert-success">Data Berhasil Dihapus!</div>
            <?php } ?>

            <?php if(@$_GET['pesan']=="editBerhasil"){ ?>
                <div class="alert alert-success">Perubahan Berhasil!</div>
            <?php } ?>

            <table id="dataTables" class="table table-bordered">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Last Login</th>
                        <th>Foto Profil</th>
                        <th>
                            <a href="input-pengguna.php" class="btn btn-info">
                                <i class="glyphicon glyphicon-plus"></i>
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../koneksi.php";
                    $sql = $koneksi->query("SELECT * FROM pengguna ORDER BY user_id ASC");

                    while($row = $sql->fetch_assoc()){ ?>
                        <tr>
                            <td><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['last_login']; ?></td>
                            <td><img src="../images/foto/<?php echo $row['foto']; ?>" width="50" height="50"></td>
                            <td>
                                <a href="edit-pengguna.php?id=<?php echo $row['user_id']; ?>">
                                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                                </a>
                                <a href="hapus-pengguna.php?id=<?php echo $row['user_id']; ?>" onclick="return confirm('Anda yakin menghapus data?')">
                                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="index.php" class="btn btn-info">
                <i class="glyphicon glyphicon-chevron-left"></i> Kembali
            </a>
        </div>
    </div>
</div>

<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../DataTables/datatables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTables').DataTable({
            "dom": '<"top"f>rt<"bottom"lip>',
        });
    });
</script>
