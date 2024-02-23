<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Komunitas</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">

    <style>
    /* Navbar */
    .navbar {
  background: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
}

.navbar a {
  text-transform: uppercase;
  letter-spacing: 1px;
}


    .logo {
  width: 20px; /* Sesuaikan lebar logo */
  margin-right: 30px; /* Sesuaikan jarak antara logo dan teks */
}
body, html {
    width: 100%;
    margin: 0;
    padding: 20;
    overflow-x: hidden;
  }
  .container {
    position: relative; /* Menambahkan ini */
    width: 100%;
    margin: auto;
    font-family: 'Roboto', sans-serif;
    overflow-x: auto;
}

h1 {
        font-size: 36px;
        font-weight: bold;
        color: #333;
        text-align: center;
        margin-top: 50px;
        margin-bottom: 30px;
        text-transform: uppercase;
    }


       /* Gaya untuk paragraf konten */
       p {
        color: #666;
        font-size: 16px;
        line-height: 1.6;
        text-align: justify;
    }

    /* Gaya untuk carousel */
    .carousel-item img {
        width: 100%;
        height: 400px; /* Sesuaikan tinggi gambar carousel */
        object-fit: cover;
    }

    /* Gaya untuk judul item list-group */
    .list-group-item h2 {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }
   /* Gaya untuk subjudul item list-group */
    .list-group-item h3 {
        font-size: 20px;
        font-weight: bold;
        color: #007bff;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    /* Gaya untuk teks deskripsi item list-group */
    .list-group-item p {
        color: #666;
        font-size: 16px;
        line-height: 1.6;
    }

    /* Gaya untuk tombol di item list-group */
    .list-group-item a {
        display: inline-block;
        margin-top: 15px;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .list-group-item a:hover {
        background-color: #0056b3;
    }
 /* Gaya untuk card pada kolom kanan */
 .card {
        margin-bottom: 20px;
    }

    /* Gaya untuk judul card */
    .card-title {
        font-size: 20px;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }

    /* Gaya untuk teks deskripsi card */
    .card-text {
        color: #666;
        font-size: 16px;
        line-height: 1.6;
    }

    /* Gaya untuk foto pada card */
    .card-img-top {
        width: 100%;
        height: auto;
    }

.event-list {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory; /* Mengaktifkan scroll snap secara horizontal */
}

.event {
    flex: 0 0 auto;
    width: 300px;
    margin-right: 20px;
    scroll-snap-align: start; /* Menyentuh elemen ini saat menggulir */
}
.event h2 {
    color: #007bff;
    margin-bottom: 10px;
}

.event p {
    color: #666;
    line-height: 1.6;
}

.event a {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 50px;
    transition: background-color 0.3s ease;
}

.event a:hover {
    background-color: #0056b3;
}
.scroll-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 2rem;
    background: none;
    border: none;
    cursor: pointer;
}

#scrollLeft {
    left: 10px;
}

#scrollRight {
    right: 10px;
}.scroll-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 2rem;
    background: none;
    border: none;
    cursor: pointer;
}

#scrollLeft {
    left: -10px;
}

#scrollRight {
    right: -10px;
}
h1 {
  font-size: 36px;
  font-weight: 700;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 2px;
  background: linear-gradient(to right, #b534a2, #0789d9);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

@media (max-width: 768px) {
  h1 {
    font-size: 24px;
  }
}
</style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="logo.jpeg" width="30" height="30" class="d-inline-block align-top" alt="Tech Inclusion Logo">
      Tech Inclusion
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
      aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php"><i class="bi bi-house-door"></i> Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Tentang-Kami.php"><i class="bi bi-person"></i> Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Artikel-Kami.php"><i class="bi bi-newspaper"></i> Artikel Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Forum.php"><i class="bi bi-chat-square-dots"></i> Forum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="input-anggota.php"><i class="bi bi-info-circle"></i> Pendaftaran </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil-anggota.php"><i class="bi bi-people"></i> Anggota</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Konten halaman web Anda di sini -->
</body>

</html>
