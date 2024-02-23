<?php
// Include file koneksi
include "koneksi.php";

// Periksa apakah parameter id_puisi telah diterima
if (isset($_GET['id_puisi'])) {
    $id_puisi = $_GET['id_puisi'];

    // Query untuk mendapatkan data puisi berdasarkan id_puisi
    $query = "SELECT * FROM puisi WHERE id_puisi = '$id_puisi'";
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $judul_puisi = $row['judul_puisi'];
        $isi_puisi = $row['isi_puisi'];
        $pengarang_puisi = $row['pengarang_puisi'];
        $pembaca_puisi = $row['pembaca_puisi'];
    } else {
        echo "Puisi tidak ditemukan";
        exit;
    }
} else {
    echo "ID Puisi tidak ditemukan";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Puisi</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Edit Puisi</h2>
        <form action="proses-edit-puisi.php" method="post">
            <input type="hidden" name="id_puisi" value="<?php echo $id_puisi; ?>">
            <div class="form-group">
                <label for="judul_puisi">Judul Puisi:</label>
                <input type="text" class="form-control" id="judul_puisi" name="judul_puisi" value="<?php echo $judul_puisi; ?>" required>
            </div>
            <div class="form-group">
                <label for="isi_puisi">Isi Puisi:</label>
                <textarea class="form-control" id="isi_puisi" name="isi_puisi" rows="5" required><?php echo $isi_puisi; ?></textarea>
            </div>
            <div class="form-group">
                <label for="pengarang_puisi">Pengarang Puisi:</label>
                <input type="text" class="form-control" id="pengarang_puisi" name="pengarang_puisi" value="<?php echo $pengarang_puisi; ?>" required>
            </div>
            <div class="form-group">
                <label for="pembaca_puisi">Pembaca Puisi:</label>
                <input type="text" class="form-control" id="pembaca_puisi" name="pembaca_puisi" value="<?php echo $pembaca_puisi; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="beranda.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
