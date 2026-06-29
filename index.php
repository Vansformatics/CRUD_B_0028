<?php
include "config/database.php";

$query = "SELECT * FROM menu ORDER BY id ASC";
$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Mie Ayam Cak Soe</title>
    <link rel='stylesheet' href='assets/css/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Pacifico&display=swap" rel="stylesheet">

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-sm">
        <div class="container">

            <a class="navbar-brand fw-bold" href="#">
                Mie Ayam Cak Soe
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#unggulan">Keunggulan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- Hero -->
    <section class="hero" id="home">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">

                    <h1>Kelezatan Yang selalu <span>Dirindukan</span></h1>

                    <p>Mie Ayam dengan Ayam Kecap Gurih, Mie yang Kenyal, 
                        Sayur yang Segar, Kripik yang Renyah, dan Kaldu yang Gurih.</p>

                    <a href="#menu" class="btn btn-success me-2">Lihat Menu</a>

                    <button class="btn btn-warning" id="darkButton">Dark Mode</button>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="assets/img/image.png" alt="Mie Ayam Cak Soe" class="img-fluid rounded" style="max-width: 100%;">
                </div>

            </div>
        </div>
    </section>

    <!-- Menu -->
    <section class="menu" id="menu">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Menu Kami</h2>
                <p>Pilihan Menu Favorit Pelanggan</p>
            </div>

            <div class="row g-4">

                <?php while($row = mysqli_fetch_assoc($result)){ ?>

                    <div class="col-md-6">
                        <div class="card h-100">
                            <img src="uploads/<?php echo $row['gambar']; ?>" class="card-img-top" style="max-height:300px; object-fit:cover;">

                            <div class="card-body">
                                <h3 class="text-center"><?php echo $row['nama_menu']; ?></h3>
                                <p><?php echo $row['deskripsi']; ?></p>
                                <h4>Rp <?php echo number_format($row['harga'],0,",","."); ?></h4>
                                <button class="btn btn-success pesanBtn">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>

                <?php 

                } 

                ?>

            </div>
        </div>
    </section>

    <!-- About -->
    <section class="py-5" id="about">
        <div class="container text-center">

            <h2>Tentang Kami</h2>

            <p>Mie Ayam Cak Soe adalah usaha kuliner yang menyajikan
                mie ayam dengan rasa khas rumahan.
            </p>

            <div class="row mt-4">

                <div class="col-md-4">
                    <div class="p-3 border rounded">
                        <h5>Bahan Berkualitas</h5>
                        <p>Menggunakan bahan-bahan segar dan berkualitas tinggi untuk memastikan rasa yang terbaik.</p>    
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3 border rounded">
                        <h5>Rasa Konsisten</h5>
                        <p>Kami berkomitmen untuk menyajikan mie ayam dengan rasa yang autentik dan konsisten.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3 border rounded">
                        <h5>Pelayanan Ramah</h5>
                        <p>Kami selalu siap memberikan pelayanan terbaik untuk setiap pelanggan.</p>
                        <br>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Keunggulan -->
    <section class="py-5 bg-light" id="unggulan">
        <div class="container">

            <div class="text-center mb-5">
                <h2>Keunggulan Kami</h2>
                <p>Mengapa Mie Ayam Cak Soe Menjadi Pilihan Utama?</p>
            </div>
            
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="p-4 border rounded h-100">
                        <h4>Bahan Segar dan Berkualitas</h4>
                        <p>
                            Menggunakan bahan-bahan segar dan berkualitas tinggi 
                            untuk memastikan rasa yang terbaik.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="p-4 border rounded h-100">
                        <h4>Harga Terjangkau</h4>
                        <p>
                            Kami menawarkan harga yang terjangkau 
                            tanpa mengorbankan kualitas rasa.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="p-4 border rounded h-100">
                        <h4>Pelayanan Ramah dan Cepat</h4>
                        <p>
                            Kami selalu siap memberikan pelayanan terbaik 
                            dengan cepat dan ramah untuk setiap pelanggan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistik -->
    <section class="py-5 bg-dark text-white text-center">
        <div class="container">

            <div class="row">

                <div class="col-md-4">
                    <h3>1000+</h3>
                    <p>Porsi Terjual</p>
                </div>

                <div class="col-md-4">
                    <h3>800+</h3>
                    <p>Pelanggan Puas</p>
                </div>
                
                 <div class="col-md-4">
                    <h3>10+</h3>
                    <p>Tahun Pengalaman</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section class="py-5 bg-light">
        <div class="container text-center">
            <h2>Testimoni Pelanggan</h2>
            <p>Apa Kata Mereka Tentang Mie Ayam Cak Soe?</p>

            <div class="card p-4 mt-4">
                <p>“Mie ayamnya enak banget dan porsinya pas.”</p>

                <h5>Dewi Ananda</h5>
            </div>

        </div>
    </section>

    <!-- Galeri -->
    <section class="py-5" id="gallery">
        <div class="container">

            <div class="text-center mb-4">
                <h2>Galeri Mie Ayam Cak Soe</h2>
            </div>

            <div class="row g-2">

                <div class="col-md-6 mb-4 center">
                    <img src="assets/img/image.png" alt="Mie Ayam Original" class="img-fluid rounded" style="max-height: 300px;">
                </div>

                <div class="col-md-6 mb-4 center">
                    <img src="assets/img/mie-ayam-ceker.jpeg" alt="Mie Ayam Ceker" class="img-fluid rounded" style="max-height: 300px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section class="py-5 bg-light" id="contact">
        <div class="container">

            <div class="text-center mb-4">
                <h2>Kontak Kami</h2>
                <p>Hubungi Kami untuk Pesanan dan Pertanyaan</p>
            </div>

            <div class="row">

                <div class="col-lg-6 mb-4">
                    <h5>Alamat</h5>
                    <p>Jl. KH.Syafi'i No.04 Desa Dahan Rejo Lor, Kecamatan Kebomas, Kabupaten Gresik, Jawa Timur, Indonesia</p>

                    <h5>No. Telepon</h5>
                    <p>0813-5844-4217</p>

                </div>

                <div class="col-lg-6">

                <form id="contactForm">

                    <input type="text" id="nama" class="form-control mb-3" placeholder="Nama">

                    <input type="email" class="form-control mb-3" placeholder="Email">

                    <textarea class="form-control mb-3" rows="4" placeholder="Pesan"></textarea>

                    <button class="btn btn-primary w-100">Kirim</button>

                </form>

            </div>

            </div>

        </div>
    </section>

    <footer class="bg-dark text-white text-center p-4">
        <p>© 2026 Mie Ayam Cak Soe.</p>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>