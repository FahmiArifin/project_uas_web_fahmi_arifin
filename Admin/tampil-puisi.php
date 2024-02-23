<?php
// Include file koneksi
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Puisi</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        .card {
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
        }

        .card-body {
            min-height: 100px;
        }

        .audio-control {
            margin-top: 20px;
        }

        .btn-container {
            text-align: right;
        }

        .btn-edit {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Daftar Puisi</h2>
        <div class="btn-container">
            <a href="input-puisi.php" class="btn btn-primary">Tambah Puisi</a>
        </div>
        <div class="row">
            <?php
            // Query untuk mendapatkan data puisi
            $query = "SELECT * FROM puisi";
            $result = $koneksi->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <?php echo $row['judul_puisi']; ?>
                            </div>
                            <div class="card-body">
                                <p><?php echo $row['isi_puisi']; ?></p>
                            </div>
                            <div class="audio-control">
                                <audio controls>
                                    <source src="data:audio/mp3;base64,<?php echo base64_encode($row['audio_puisi']); ?>" type="audio/mp3">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                            <div class="card-footer">
                                <strong>Pengarang:</strong> <?php echo $row['pengarang_puisi']; ?><br>
                                <strong>Pembaca:</strong> <?php echo $row['pembaca_puisi']; ?><br>
                                <a href="edit-puisi.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-edit">Edit</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p>Tidak ada puisi.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
