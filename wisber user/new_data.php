<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="css/new_data.css">
            <!-- CSS -->
            <link rel="stylesheet" href="css/form.css">
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
          <a href="#" class="active">
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
      <div class="sales-boxes">
        <div class="recent-sales box">
          <!-- <div class="container"> -->
            <div class="title">New Data</div>
            <div class="content">
              <form action="data_list.html">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Nama Wisata</span>
                    <input type="text" name="nama_wisata" placeholder="Masukkan Nama Wisata" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Kategori</span>
                    <select class="select" name="kategori" placeholder="Kategori" required>
                      <option>-</option>
                      <option>Pantai</option>
                      <option>Kolam Renang</option>
                    </select>
                  </div>
                  <div class="input-box">
                    <span class="details">Alamat</span>
                    <input type="text" name="alamat" placeholder="Masukkan Alamat" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Luas</span>
                    <input type="text" name="luas" placeholder="Masukkan Luas" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Penanggung Jawab</span>
                    <input type="text" name="pj" placeholder="Masukkan Penanggung Jawab" required>
                  </div>
                </div>
                <div class="user-details">
                <div class="input-box">
                  <span class="details">Tarif : Weekday</span>
                  <div class="details">Dewasa</div>
                  <input class="select" name="tarif1-anak" placeholder="Tarif Weekday" required>
                  <div class="details">Anak-anak</div>
                  <input class="select" name="tarif1-dewasa" placeholder="Tarif Weekday" required>
                </div>
                <div class="input-box">
                  <span class="details">Tarif : Weekend</span>
                  <div class="details">Dewasa</div>
                  <input class="select" name="tarif2-anak" placeholder="Tarif Weekend" required>
                  <div class="details">Anak-anak</div>
                  <input class="select" name="tarif1-dewasa" placeholder="Tarif Weekend" required>
                </div>
                </div>
                <div class="gender-details">
                  <span class="gender-title">Tambah Foto</span>
                  <div><br>
                  <label class="button_img">
                    <input type="file" name="gambar" placeholder="Masukkan gambar" required />Pilih Foto
                  </label>
                </div>
                </div>
                <div class="button">
                  <label class="button2">
                    <input type="submit" value="Batal">
                  </label>
                  <label>
                    <input type="submit" value="Submit">
                  </label>
                </div>
              </form>
            <!-- </div> -->
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

