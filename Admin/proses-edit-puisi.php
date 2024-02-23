<?php
// Include file koneksi
include "koneksi.php";

// Periksa apakah data POST yang dibutuhkan telah diterima
if (isset($_POST['id_puisi']) && isset($_POST['judul_puisi']) && isset($_POST['isi_puisi']) && isset($_POST['pengarang_puisi']) && isset($_POST['pembaca_puisi'])) {
    // Dapatkan data dari POST
    $id_puisi = $koneksi->real_escape_string($_POST['id_puisi']);
    $judul_puisi = $koneksi->real_escape_string($_POST['judul_puisi']);
    $isi_puisi = $koneksi->real_escape_string($_POST['isi_puisi']);
    $pengarang_puisi = $koneksi->real_escape_string($_POST['pengarang_puisi']);
    $pembaca_puisi = $koneksi->real_escape_string($_POST['pembaca_puisi']);

    // Query untuk mengupdate data puisi
    $query = "UPDATE puisi SET judul_puisi='$judul_puisi', isi_puisi='$isi_puisi', pengarang_puisi='$pengarang_puisi', pembaca_puisi='$pembaca_puisi' WHERE id_puisi='$id_puisi'";

    if ($koneksi->query($query) === TRUE) {
        // Redirect ke halaman beranda dengan pesan sukses
        header("location: beranda.php?pesan=editBerhasil");
        exit;
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }

    // Tutup koneksi database
    $koneksi->close();
} else {
    echo "Data tidak lengkap";
}
?>
