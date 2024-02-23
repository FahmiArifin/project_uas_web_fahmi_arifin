<!DOCTYPE html>
<html>
<head>
    <title>Pesan Keanggotaan</title>
    <style>
        .container {
            text-align: center;
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Status Penerimaan Anggota</h1>
        <?php
        $status = $_GET['status'];

        if ($status == 1) {
            echo "<p>Anda telah diterima sebagai anggota.</p>";
        } else if ($status == 0) {
            echo "<p>Pendaftaran Anda masih diproses.</p>";
        } else {
            echo "<p>Data tidak ditemukan di database.</p>";
        }
        ?>
        <button onclick="window.close()">Oke</button>
    </div>

    <script>
        window.onload = function() {
            window.setTimeout(function() {
                window.close();
            }, 5000); // Menutup jendela setelah 5 detik
        };
    </script>
</body>
</html>