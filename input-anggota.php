<?php require 'header.php'; ?>

<title>Form Pendaftaran Anggota - Komunitas Tech Inclusion</title>

<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center mb-4">Form Pendaftaran Anggota - Komunitas Tech Inclusion</h1>
            <?php
            // Tampilkan pesan jika ada
            if (isset($_SESSION['pesan'])) {
                echo '<div class="alert alert-success">' . $_SESSION['pesan'] . '</div>';
                // Hapus pesan dari sesi agar tidak tampil lagi setelah refresh
                unset($_SESSION['pesan']);
            }
            ?>
            
            <p class="text-justify">
                Bergabunglah dengan Komunitas Tech Inclusion dan jadilah bagian dari perubahan positif dalam dunia teknologi! Isi formulir di bawah ini untuk mendaftar sebagai anggota. Mari bersama-sama membangun lingkungan teknologi yang inklusif dan adil.
            </p>

            <form action="proses-input-anggota.php" method="POST">
                <div class="form-group">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" name="nama" class="form-control" required>
                    <small class="form-text text-muted">Masukkan nama lengkap Anda sesuai dengan identitas resmi.</small>
                </div>

                <div class="form-group">
                    <label for="no_hp">Nomor Handphone:</label>
                    <input type="number" name="no_hp" class="form-control" required>
                    <small class="form-text text-muted">Masukkan nomor handphone yang dapat dihubungi.</small>
                </div>

                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir:</label>
                    <input type="text" name="tempat_lahir" class="form-control" required>
                    <small class="form-text text-muted">Masukkan tempat lahir Anda.</small>
                </div>

                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                    <input type="date" name="tanggal_lahir" class="form-control" required>
                    <small class="form-text text-muted">Pilih tanggal lahir Anda.</small>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <select name="jenis_kelamin" class="form-control" required>
                        <option value="Laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <small class="form-text text-muted">Pilih jenis kelamin Anda.</small>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea name="alamat" class="form-control" required></textarea>
                    <small class="form-text text-muted">Masukkan alamat lengkap Anda.</small>
                </div>

                <div class="form-group">
                    <label for="agama">Agama:</label>
                    <select name="agama" class="form-control" required>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                    <small class="form-text text-muted">Pilih agama Anda.</small>
                </div>

                <div class="form-group">
                    <label for="email">Alamat Email:</label>
                    <input type="email" name="email" class="form-control" required>
                    <small class="form-text text-muted">Masukkan alamat email yang valid.</small>
                </div>

                <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>

<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
