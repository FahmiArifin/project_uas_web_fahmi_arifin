<?php
// Include file koneksi
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Status Penerimaan Anggota</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .message-container {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .info {
            background-color: #d1ecf1;
            border-color: #bee5eb;
            color: #0c5460;
        }

        .danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center mt-5">Cek Status Penerimaan Anggota</h2>
            <?php
            // Periksa apakah data POST yang dibutuhkan telah diterima
            if (isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['no_hp'])) {
                // Dapatkan data dari POST
                $nama = $koneksi->real_escape_string($_POST['nama']);
                $email = $koneksi->real_escape_string($_POST['email']);
                $no_hp = $koneksi->real_escape_string($_POST['no_hp']);

                // Query untuk mendapatkan status anggota berdasarkan nama, email, dan no hp
                $query = "SELECT status FROM anggota WHERE nama = '$nama' AND email = '$email' AND no_hp = '$no_hp'";

                $result = $koneksi->query($query);

                // Periksa apakah query berhasil dieksekusi
                if ($result) {
                    // Periksa apakah ada data yang ditemukan
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $status = $row['status'];

                        // Tampilkan pesan status sesuai dengan nilai status
                        echo "<div class='message-container ";
                        if ($status == 1) {
                            echo "success'>Status Anggota: Diterima";
                        } elseif ($status == 0) {
                            echo "info'>Status Anggota: Diproses";
                        } else {
                            echo "danger'>Status Anggota: Tidak ditemukan";
                        }
                        echo "</div>";
                    } else {
                        echo "<div class='message-container danger'>Data tidak ditemukan</div>";
                    }
                } else {
                    echo "<div class='message-container danger'>Error dalam eksekusi query: " . $koneksi->error . "</div>";
                }

                // Tutup koneksi database
                $koneksi->close();
            } else {
                echo "<div class='message-container danger'>Data tidak lengkap</div>";
            }
            ?>
            <div class="text-center mt-3">
                <a href="index.php" class="btn btn-primary">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
