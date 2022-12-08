<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="css/data_list.css">
            <!-- CSS -->
            <link rel="stylesheet" href="form.css">
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
          <a href="beranda.html">
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
          <a href="#" class="active">
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
      <div class="sales-boxes">
        <div class="recent-sales box">
            <div class="flex">
                <div class="title">Waiting List</div>
                <div class="title2">Tambah Data</div>
            </div>
            <div class="sales-details">
                <ul class="details">
                  <li class="topic">Nama</li>
                  <li><a href="#">Wisata 1</a></li>
                  <li><a href="#">Wisata 2</a></li>
                </ul>
                <ul class="details">
                <li class="topic">Kategori</li>
                <li><a href="#">Pantai</a></li>
                <li><a href="#">Pantai</a></li>
              </ul>
              <ul class="details">
                <li class="topic">Alamat</li>
                <li><a href="#">Jember Kota</a></li>
                <li><a href="#">Jember Kota</a></li>
              </ul>
              <ul class="details">
                <li class="topic">Luas</li>
                <li><a href="#">2 hektar</a></li>
                <li><a href="#">1 km</a></li>       
              </ul>
              <ul class="details">
                <li class="topic">Status</li>
                <li><a href="#">Waiting</a></li>
                <li><a href="#">Approved</a></li>       
              </ul>
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
