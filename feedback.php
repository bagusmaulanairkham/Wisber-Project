<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>List Pengaduan - WISBER Bootstrap Template</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Favicons -->
    <link href="assets/img/logonavbar.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
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
            <a
              class="nav-link nav-profile d-flex align-items-center pe-0"
              href="#"
              data-bs-toggle="dropdown"
            >
              <img
                src="assets/img/profile-img.jpg"
                alt="Profile"
                class="rounded-circle"
              />
              <span class="d-none d-md-block ps-2">
                Admin</span
              > </a>
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
      <?php include ("sidebar.php") ?>
    </aside>

    <!-- Small modal -->
    <div class="container">
      <div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Log Out</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p><i class="fa fa-question-circle"></i>Apakah Anda yakin ingin keluar? <br /></p>
              <div class="actionsBtns d-flex justify-content-center">
                  <form action="/logout" method="post">
                      <input type="hidden" name="${_csrf.parameterName}" value="${_csrf.token}"/>
                      <input type="submit" class="btn btn-default btn-primary" data-dismiss="modal" value="Keluar" />                    
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Feedback</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Pengaduan</li>
            <li class="breadcrumb-item active">Feedback</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section dashboard">
        <div class="card recent-sales overflow-auto">
          <div class="card-body">
            <h5 class="card-title">Data Feedback Pengaduan</h5>

            <table class="table table-striped table-bordered datatable">
              <thead>
                <tr>
                  <th scope="col" class="text-center">Tanggal</th>
                  <th scope="col" class="text-center">User</th>
                  <th scope="col" class="text-center">Isi Pengaduan</th>
                  <th scope="col" class="text-center">Status</th>
                  <th scope="col" class="text-center">Feedback</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">22 November 2022</th>
                  <td class="text-center">Desa Pancakarya</td>
                  <td class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</td>
                  <td class="text-center">Diproses</td>
                  <td class="text-center">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="bi bi-eye"></i></a>
                  </td>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5 bold" id="exampleModalLabel">Detail Data Pengaduan</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">                        
                          <div class="row">
                            <div class="col">
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Tanggal</strong></label>
                                <p>22 November 2022</p>
                              </div>
                            </div>
                            <div class="col">
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><strong>User</strong></label>
                                <p>Desa Pancakarya</p>
                              </div>
                            </div>
                          </div>                        
                          <div class="mb-3">
                            <label for="exampleFormControlTextarea" class="form-label"><strong>Isi Pengaduan</strong></label>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio repellat expedita nam, 
                              nulla veritatis, aliquam debitis aperiam deleniti quia dolore placeat assumenda. Dicta aut 
                              accusantium rerum, consectetur impedit repellendus nam?</p>
                          </div>
                          <div class="mb-3">
                            <label for="buktiPengaduan" class="form-label"><strong>Bukti Pengaduan</strong></label>
                            <div class="row">
                              <img src="assets/img/logonav.png" id="buktiPengaduan">
                            </div>                              
                          </div>
                          <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Isi Feedback</strong></label>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus tenetur in molestiae facere.
                                   Sunt suscipit voluptate officia nisi omnis a aliquid in quasi eveniet vitae, dicta dignissimos laudantium eius debitis?</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>WISBER</span></strong
        >. All Rights Reserved
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

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
