<!DOCTYPE HTML>
<html>
<head>
    <title>Cek Status Anggota</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Cek Status Penerimaan Anggota</h2>
                <form action="proses-cek-anggota.php" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor Handphone</label>
                        <input type="text" name="no_hp" class="form-control" required>
                    </div>
                    <input type="submit" name="cek_status" value="Cek Status" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
    <?php include 'footer.php'; ?>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>