<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>List Data - WISBER Bootstrap Template</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/logonavbar.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logonavbar.png" alt="" />
                <span class="d-none d-lg-block">WISBER</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" />
                        <span class="d-none d-md-block ps-2">
                            Admin</span> </a>
                    <!-- End Profile Iamge Icon -->

                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->
            </ul>
        </nav>
        <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <aside id="sidebar" class="sidebar">
        <?php include("sidebar.php") ?>
    </aside>

    <!-- Small modal -->
    <div class="container">
        <?php include("logout.php") ?>
    </div>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>List Data</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Wisata</li>
                    <li class="breadcrumb-item"><a href="validasi.php">Validasi</a></li>
                    <li class="breadcrumb-item active">Detail Data</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">Data Potensi Wisata</h5>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><strong>ID User</strong></label>
                                <p class="border border-secondary rounded">1</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Nama Wisata</strong></label>
                                <p class="border border-secondary rounded">Wisata Bunga</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Alamat</strong></label>
                                <p class="border border-secondary rounded">DesaUmbulsari@gmail.co.id</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Kategori</strong></label>
                                <p class="border border-secondary rounded">Jalan Ahmad Yani</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Luas</strong></label>
                                <p class="border border-secondary rounded">1</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Penanggung Jawab</strong></label>
                                <p class="border border-secondary rounded">Desa Umbulsari</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <p class="fs-6"><strong>Weekday :</strong></p>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Dewasa</strong></label>
                                <p class="border border-secondary rounded">1</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Anak-Anak</strong></label>
                                <p class="border border-secondary rounded">Wisata Bunga</p>
                            </div>
                        </div>
                    </div>
                    <p class="fs-6"><strong>Weekend :</strong></p>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Dewasa</strong></label>
                                <p class="border border-secondary rounded">1</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Anak-Anak</strong></label>
                                <p class="border border-secondary rounded">Wisata Bunga</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <p class="fs-6"><strong>Fasilitas :</strong></p>
                    <div class="row">
                        <div class="col">            
                            <p class="fw-semibold"><i class="bi bi-badge-wc"></i> Toilet</p>
                            <p>Ya</p>
                        </div>
                        <div class="col">
                            <p class="fw-semibold"><i class="bi bi-trash"></i> Tempat Sampah</p>
                            <p>Ya</p>
                        </div>
                        <div class="col">            
                            <p class="fw-semibold"><i class="bi bi-person-heart"></i> Ramah Difabel</p>
                            <p>Ya</p>
                        </div>
                        <div class="col">
                            <p class="fw-semibold"><i class="bi bi-tree"></i> Ruang Hijau</p>
                            <p>Ya</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="fw-semibold"><i class="bi bi-moon-stars"></i> Tempat Ibadah</p>
                            <p>Ya</p>
                        </div>
                        <div class="col">
                        <p class="fw-semibold"><i class="bi bi-shop-window"></i> Akses Wisata</p>
                            <p>Ya</p>
                        </div>
                        <div class="col">
                            <p class="fw-semibold"><i class="fas fa-hamburger"></i> Food Court</p>
                            <p>Ya</p>
                        </div>
                        <div class="col">
                            <p class="fw-semibold"><i class="bi bi-wifi"></i> Wifi</p>
                            <p>Ya</p>
                        </div>
                    </div>
                    <p class="fs-6"><strong>Bukti :</strong></p>
                    <div class="row">
                        <div class="col">
                            <img src="assets/img/pantai-bg.jpg" alt="">
                        </div>
                        <div class="col">
                            <img src="assets/img/pantai-bg.jpg" alt="">
                        </div>
                        <div class="col">
                            <img src="assets/img/pantai-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
        </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>WISBER</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>