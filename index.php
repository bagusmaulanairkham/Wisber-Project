<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Dashboard - WISBER Bootstrap Template</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />
  <!--Bootstraps-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

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
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
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
              Admin</span> </a><!-- End Profile Iamge Icon -->

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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kunjungan Wisatawan di Kota Jember</h5>

              <!-- Line Chart -->
              <div id="kunjunganChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#kunjunganChart"), {
                    series: [{
                      name: "Wisatawan",
                      data: [10, 41, 35, 51, 49, 62],
                    }, ],
                    chart: {
                      height: 350,
                      type: "line",
                      zoom: {
                        enabled: false,
                      },
                    },
                    dataLabels: {
                      enabled: false,
                    },
                    stroke: {
                      curve: "straight",
                    },
                    grid: {
                      row: {
                        colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
                        opacity: 0.5,
                      },
                    },
                    xaxis: {
                      categories: [
                        "2017",
                        "2018",
                        "2019",
                        "2020",
                        "2021",
                        "2022",
                      ],
                    },
                  }).render();
                });
              </script>
              <!-- End Line Chart -->
            </div>
          </div>
        </div>

        <div class="col col-md-4">
          <div class="card recent-sales overflow-auto">
            <div class="card-body ">
              <h5 class="card-title">Notifikasi </h5>
              <div class="news overflowAuto">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" class="rounded-circle" alt="LogoDesa">
                  <h4><a href="#">Wisata</a></h4>
                  <p>permintaan validasi wisata dari <span>Desa Gumukmas</span></p>
                </div>
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" class="rounded-circle" alt="LogoDesa">
                  <h4><a href="#">Pengaduan</a></h4>
                  <p>Pengaduan dari <span>Desa Gumukmas</span></p>
                </div>

              </div><!-- End sidebar recent posts-->
            </div>
          </div>
        </div>
      </div>

      <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
      <div class="row">
        <div class="col col-md-4">
          <div class="card recent-sales overflow-auto">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item" href="#">Tahun Kemarin</a></li>
                <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Wisata</h5>
              <!-- Line Chart -->
              <div id="reportsChart2"></div>
              <script>
                // Data
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#reportsChart2"), {
                    series: [{
                      name: "Data Ajuan Potensi Wisata",
                      data: [31, 40, 28, 51, 42, 82],
                    }, ],
                    chart: {
                      height: 200,
                      type: "area",
                      toolbar: {
                        show: false,
                      },
                    },
                    markers: {
                      size: 4,
                    },
                    colors: ["#4154f1", "#2eca6a", "#ff771d"],
                    fill: {
                      type: "gradient",
                      gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.3,
                        opacityTo: 0.4,
                        stops: [0, 90, 100],
                      },
                    },
                    dataLabels: {
                      enabled: false,
                    },
                    stroke: {
                      curve: "smooth",
                      width: 2,
                    },
                    xaxis: {
                      type: "date",
                      categories: ["Jun", "Jul", "Agu", "Sep", "Okt", "Nov"],
                    },
                    tooltip: {
                      x: {
                        format: "MM",
                      },
                    },
                  }).render();
                });
              </script>
            </div>
          </div>
        </div>

        <div class="col col-md-4">
          <div class="card recent-sales overflow-auto">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item" href="#">Tahun Kemarin</a></li>
                <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Pengaduan</h5>
              <!-- Line Chart -->
              <div id="reportsChart3"></div>
              <script>
                // Data
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#reportsChart3"), {
                    series: [{
                      name: "Data Pengaduan",
                      data: [31, 40, 28, 51, 42, 82],
                    }, ],
                    chart: {
                      height: 200,
                      type: "area",
                      toolbar: {
                        show: false,
                      },
                    },
                    markers: {
                      size: 4,
                    },
                    colors: ["#4154f1", "#2eca6a", "#ff771d"],
                    fill: {
                      type: "gradient",
                      gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.3,
                        opacityTo: 0.4,
                        stops: [0, 90, 100],
                      },
                    },
                    dataLabels: {
                      enabled: false,
                    },
                    stroke: {
                      curve: "smooth",
                      width: 2,
                    },
                    xaxis: {
                      type: "date",
                      categories: ["Jun", "Jul", "Agu", "Sep", "Okt", "Nov"],
                    },
                    tooltip: {
                      x: {
                        format: "MM",
                      },
                    },
                  }).render();
                });
              </script>
            </div>
          </div>
        </div>

        <div class="col col-md-4">
          <div class="card recent-sales overflow-auto">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item" href="#">Tahun Kemarin</a></li>
                <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Desa </h5>
              <!-- Line Chart -->
              <div id="reportsChart4"></div>
              <script>
                // Data
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#reportsChart4"), {
                    series: [{
                      name: "Data Desa",
                      data: [31, 40, 28, 51, 42, 82],
                    }, ],
                    chart: {
                      height: 200,
                      type: "area",
                      toolbar: {
                        show: false,
                      },
                    },
                    markers: {
                      size: 4,
                    },
                    colors: ["#4154f1", "#2eca6a", "#ff771d"],
                    fill: {
                      type: "gradient",
                      gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.3,
                        opacityTo: 0.4,
                        stops: [0, 90, 100],
                      },
                    },
                    dataLabels: {
                      enabled: false,
                    },
                    stroke: {
                      curve: "smooth",
                      width: 2,
                    },
                    xaxis: {
                      type: "date",
                      categories: ["Jun", "Jul", "Agu", "Sep", "Okt", "Nov"],
                    },
                    tooltip: {
                      x: {
                        format: "MM",
                      },
                    },
                  }).render();
                });
              </script>
            </div>
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

  <!--Bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

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