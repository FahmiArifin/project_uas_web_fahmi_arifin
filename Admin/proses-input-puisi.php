<?php
// Include file koneksi
include "koneksi.php";

// Periksa apakah data POST yang dibutuhkan telah diterima
if (isset($_POST['judul_puisi']) && isset($_POST['isi_puisi']) && isset($_FILES['audio_puisi']) && isset($_POST['pengarang_puisi']) && isset($_POST['pembaca_puisi'])) {
    // Dapatkan data dari POST
    $judul_puisi = $koneksi->real_escape_string($_POST['judul_puisi']);
    $isi_puisi = $koneksi->real_escape_string($_POST['isi_puisi']);
    $pengarang_puisi = $koneksi->real_escape_string($_POST['pengarang_puisi']);
    $pembaca_puisi = $koneksi->real_escape_string($_POST['pembaca_puisi']);

    // Proses file audio puisi
    $audio_puisi = $_FILES['audio_puisi'];
    $audio_puisi_name = $audio_puisi['name'];
    $audio_puisi_tmp = $audio_puisi['tmp_name'];
    $audio_puisi_size = $audio_puisi['size'];
    $audio_puisi_error = $audio_puisi['error'];

    // Periksa apakah file audio berhasil diunggah
    if ($audio_puisi_error === 0) {
        // Direktori penyimpanan file audio
        $upload_dir = 'audio_puisi/';
        // Nama file audio yang disimpan di server
        $audio_puisi_path = $upload_dir . $audio_puisi_name;

        // Pindahkan file audio yang diunggah ke direktori penyimpanan
        if (move_uploaded_file($audio_puisi_tmp, $audio_puisi_path)) {
            // Query untuk menyimpan data puisi ke database
            $query = "INSERT INTO puisi (judul_puisi, isi_puisi, audio_puisi, pengarang_puisi, pembaca_puisi) VALUES ('$judul_puisi', '$isi_puisi', '$audio_puisi_path', '$pengarang_puisi', '$pembaca_puisi')";

            // Eksekusi query
            if ($koneksi->query($query) === TRUE) {
                // Redirect ke halaman beranda dengan pesan sukses
                header("location: beranda.php?pesan=inputBerhasil");
                exit;
            } else {
                echo "Error: " . $query . "<br>" . $koneksi->error;
            }
        } else {
            echo "Gagal mengunggah file audio.";
        }
    } else {
        echo "Terjadi kesalahan dalam mengunggah file audio.";
    }

    // Tutup koneksi database
    $koneksi->close();
} else {
    echo "Data tidak lengkap";
}
?>
