<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="css/overview.css">
            <!-- CSS -->
            <link rel="stylesheet" href="form.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <img src="../images/logo.png">
      <span class="logo_name">WISBER</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="../beranda.html">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Beranda</span>
          </a>
        </li>
        <li>
          <a href="../new_data.html">
            <i class='bx bx-box' ></i>
            <span class="links_name">New Data</span>
          </a>
        </li>
        <li>
          <a href="../data_list.html">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Data List</span>
          </a>
        </li>
        <li>
          <a href="../pengaduan.html">
            <i class='bx bx-message-alt-edit' ></i>
            <span class="links_name">Pengaduan</span>
          </a>
        </li>
        <li>
          <a href="#" class="active">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Pengaturan
            </span>
          </a>
        </li>
        <li class="log_out">
          <a href="../login.html">
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
        <div class="top-sales box">
            <img src="alam.jpg">
            <ul class="top-sales-details">
              <li>
                <!-- <img src="images/sunglasses.jpg" alt=""> -->
                <span class="product">Wisata Hutan</span>
            </li>
            </ul>
          </div>
        <div class="recent-sales box">
            <div class="flex">
                <a href="overview.html" class="title2">Overview</a>
                <hr>
                <a href="edit_profile.html" class="title">Edit Profile</a>
                <hr>
                <a href="change_pass.html" class="title">Change Password</a>
            </div>
            <hr>
            <div>
              <div class="judul">Tentang</div>
            </div>
            <div>
              <p>Wisata hutan disini adalah satu tujuan Wisata
                yang menarik untuk dikunjungi Wisata hutan disini adalah satu tujuan Wisata
                yang menarik untuk dikunjungi 
              </p>
            </div>
            <div>
              <div class="judul">Profile Details</div>
            </div>
            <div class="detail">
              <span>Nama Desa : </span>
              <span>Dusuhmenek</span>
            </div>
            <div class="detail">
              <span>Jumlah Tempat Wisata : </span>
              <span>3</span>
            </div>
            <div class="detail">
              <span>Alamat Desa : </span>
              <span>Bengkuring jl duiran 4</span>
            </div>
            <div class="detail">
              <span>Email : </span>
              <span>user@gmail.com</span>
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

