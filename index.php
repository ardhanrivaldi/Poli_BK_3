<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistem Temu Janji Poliklinik</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/poliardhan/dist/css/welcome_styles.css">
</head>

<body>
   <!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #9FA6B2;">
    <div class="container px-5">
        <a class="navbar-brand" href="index.php">Poliklinik Udinus</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <?php 
        if (isset($_GET['page'])) {
            if ($_GET['page'] === 'loginAdmin') {
                include_once ('./loginAdmin.php');
            } else if ($_GET['page'] === 'loginDokter') {
                include_once ('./loginDokter.php');
            } else if ($_GET['page'] === 'loginPasien') {
                include_once ('./loginPasien.php');
            } else {
                include($_GET['page'] . ".php");
            }
        } else {
    ?>
        <!-- Header -->
<header class="bg-secondary">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8 text-center">
                <h1 class="display-4 text-white fw-bold">Selamat datang di Poliklinik Udinus</h1>
                <p class="lead text-white-50">Sistem Temu Janji Pasien - Dokter untuk kenyamanan Anda.</p>
            </div>
        </div>
    </div>
</header>
   <!-- Features section-->
<section class="py-5 border-bottom text-center" id="features">
    <div class="container px-5 my-5">
        <div class="row g-5">
            <!-- Feature - Login Sebagai Admin -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card h-100 border-primary">
                    <div class="card-body p-4">
                        <div class="feature bg-primary bg-secondary text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                        <h2 class="h4 fw-bolder">Login Sebagai Admin</h2>
                        <p>Apabila Anda adalah seorang Admin, silahkan Login terlebih dahulu untuk mengelola data website!</p>
                        <a class="text-decoration-none" href="index.php?page=loginAdmin">
                            Klik Link Berikut
                            <i class="bi bi-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Feature - Login Sebagai Dokter -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card h-100 border-primary">
                    <div class="card-body p-4">
                        <div class="feature bg-primary bg-secondary text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                        <h2 class="h4 fw-bolder">Login Sebagai Dokter</h2>
                        <p>Apabila Anda adalah seorang Dokter, silahkan Login terlebih dahulu untuk memulai melayani Pasien!</p>
                        <a class="text-decoration-none" href="index.php?page=loginDokter">
                            Klik Link Berikut
                            <i class="bi bi-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Feature - Login Sebagai Pasien -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card h-100 border-primary">
                    <div class="card-body p-4">
                        <div class="feature bg-primary bg-secondary text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                        <h2 class="h4 fw-bolder">Login Sebagai Pasien</h2>
                        <p>Apabila Anda adalah seorang Pasien, silahkan Login terlebih dahulu untuk mulai menggunakan layanan kami!</p>
                        <a class="text-decoration-none" href="index.php?page=loginPasien">
                            Klik Link Berikut
                            <i class="bi bi-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


   <!-- Footer-->
<footer class="main-footer py-3" style="background-color: #dcdcdc; color: #333;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <strong>&copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="https://bengkelkoding.dinus.ac.id/" style="color: #333;">Bengkel Koding</a>.
                </strong>
                All rights reserved.
            </div>
            <div class="col-lg-6 text-lg-end">
                <span class="d-none d-sm-inline-block">
                    <b>Version</b> 1.0.0
                </span>
            </div>
        </div>
    </div>
</footer>
    <?php
        }
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>