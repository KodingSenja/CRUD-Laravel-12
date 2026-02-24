{{-- resources/views/landing.blade.php --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Poppins&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: 'Playfair Display', serif;
        }

        .hero {
            background: url('https://source.unsplash.com/1600x900/?coffee') no-repeat center center;
            background-size: cover;
            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .btn-primary {
            background-color: #6f4e37;
            border: none;
        }

        .btn-primary:hover {
            background-color: #5a3c2b;
        }

        .menu-card img {
            height: 150px;
            object-fit: cover;
        }

        .gallery img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <!-- Hero Section -->
    <section class="hero">
        <div>
            <h1 class="display-4 fw-bold">Nama Coffee Shop</h1>
            <p class="lead">Nikmati Kopi Terbaik di Kota Anda</p>
            <a href="#menu" class="btn btn-primary btn-lg mt-3">Lihat Menu</a>
            <a href="https://wa.me/628123456789" class="btn btn-light btn-lg mt-3">Pesan via WhatsApp</a>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section class="container my-5" id="about">
        <h2 class="mb-4 text-center">Tentang Kami</h2>
        <p class="text-center">Coffee Shop kami berdiri sejak 2020, menghadirkan kopi specialty terbaik dengan suasana
            nyaman untuk semua pelanggan.</p>
    </section>

    <!-- Menu -->
    <section class="container my-5" id="menu">
        <h2 class="mb-4 text-center">Menu Unggulan</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card menu-card">
                    <img src="https://source.unsplash.com/400x300/?latte" class="card-img-top" alt="Latte">
                    <div class="card-body text-center">
                        <h5 class="card-title">Latte</h5>
                        <p class="card-text">Rp 25.000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card menu-card">
                    <img src="https://source.unsplash.com/400x300/?espresso" class="card-img-top" alt="Espresso">
                    <div class="card-body text-center">
                        <h5 class="card-title">Espresso</h5>
                        <p class="card-text">Rp 20.000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card menu-card">
                    <img src="https://source.unsplash.com/400x300/?cappuccino" class="card-img-top" alt="Cappuccino">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cappuccino</h5>
                        <p class="card-text">Rp 28.000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri -->
    <section class="container my-5" id="gallery">
        <h2 class="mb-4 text-center">Galeri</h2>
        <div class="row g-3 gallery">
            <div class="col-md-4"><img src="https://source.unsplash.com/400x300/?coffee-shop" alt="Galeri"></div>
            <div class="col-md-4"><img src="https://source.unsplash.com/400x300/?coffee-beans" alt="Galeri"></div>
            <div class="col-md-4"><img src="https://source.unsplash.com/400x300/?cafe-interior" alt="Galeri"></div>
        </div>
    </section>

    <!-- Lokasi & Jam Buka -->
    <section class="container my-5" id="contact">
        <h2 class="mb-4 text-center">Lokasi & Jam Buka</h2>
        <div class="row">
            <div class="col-md-6 mb-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!..." width="100%" height="250"
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <p><strong>Alamat:</strong> Jl. Contoh No. 123, Jakarta</p>
                <p><strong>Jam Buka:</strong> Senin – Minggu 08:00 – 20:00</p>
                <a href="https://wa.me/628123456789" class="btn btn-primary btn-lg mt-2">Pesan via WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        &copy; 2026 Coffee Shop. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
