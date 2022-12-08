<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="css/beranda.css">
            <!-- Swiper CSS -->
            <link rel="stylesheet" href="css/css/swiper-bundle.min.css">

            <!-- CSS -->
            <link rel="stylesheet" href="css/css/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <img src="images/logo.png">
      <span class="logo_name">WISBER</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Beranda</span>
          </a>
        </li>
        <li>
          <a href="new_data.html">
            <i class='bx bx-box' ></i>
            <span class="links_name">New Data</span>
          </a>
        </li>
        <li>
          <a href="data_list.html">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Data List</span>
          </a>
        </li>
        <li>
          <a href="pengaduan.html">
            <i class='bx bx-message-alt-edit' ></i>
            <span class="links_name">Pengaduan</span>
          </a>
        </li>
        <li>
          <a href="pengaturan/overview.html">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Pengaturan
            </span>
          </a>
        </li>
        <li class="log_out">
          <a href="login.html">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Keluar</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard"></span>
      </div>
      <!-- <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div> -->
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">User</span>
        <!-- <i class='bx bx-chevron-down' ></i> -->
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Kunjungan Wisatawan</div>
            <div class="number">40,876</div>
            <div class="indicator">
              <!-- <i class='bx bx-up-arrow-alt'></i> -->
              <span class="text"></span>
            </div>
          </div>
          <i class='bx bx-bar-chart-alt-2 cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">News Update</div>
            <div class="button">Notifikasi</div>
          </div>
          <i class='bx bxs-notification cart two' ></i>
        </div>
      </div>
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">List Wisata di Kecamatan Wuluhan/div>
          <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/profile1.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">Wisata 1</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile2.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">Wisata 2</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile3.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">Wisata 3</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile4.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">Wisata 4</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile5.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">Wisata 5</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
        </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>

    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
</html>

