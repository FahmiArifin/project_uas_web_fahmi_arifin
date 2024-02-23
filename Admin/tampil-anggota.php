<?php require 'header.php'; ?>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">
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
        <h1>Data Anggota</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

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
                <th>Id anggota</th><th>Nama</th><th>No Handphone</th><th>Tempat Lahir</th><th>Tanggal Lahir</th><th>Jenis Kelamin</th><th>ALamat</th><th>Email</th><th>Agama</th>
                <th>
                
                            <a href="input-anggota.php" class="btn btn-info">
                                <i class="glyphicon glyphicon-plus"></i>
                            </a>
                                   
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from anggota order by anggota_id ASC");
            
        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['anggota_id']?></td>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['no_hp']?></td>
                <td><?php echo $row['tempat_lahir']?></td>
                <td><?php echo $row['tanggal_lahir']?></td>
                <td><?php echo $row['jenis_kelamin']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['agama']?></td>
                <td>
                

<a href="edit-anggota.php?id=<?php echo $row['anggota_id']?>">
    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
</a>

<a href="hapus-anggota.php?id=<?php echo $row['anggota_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
</a>
<a href="aktifkan-anggota.php?id=<?php echo $row['anggota_id']?>" onclick=" return confirm('Anda yakin mengaktifkan ?')">
    <button class="btn btn-xs btn-warning glyphicon glyphicon-book"></button>
</a>


                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        <a href="index.php">
                    <button class="btn btn-info glyphicon glyphicon-chevron-left"></button> Kembali
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
<?php require 'footer.php'; ?>
</body>
</html> 