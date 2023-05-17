<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="background: wheat;">
      <img src="dist/img/rias.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" style="color: black; font-family: cursive;">Wedding Yuvi'en</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background: wheat;">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="profil.php" class="nav-link">
              <i class="nav-icon fas fa-user" style="color: black;"></i>
              <p style="color: black;">
                Profil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope" style="color: black;"></i>
              <p style="color: black;">
                Booking
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pesanan.php" class="nav-link">
                  <p style="color: black;">
                    pesanan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="persiapan.php" class="nav-link">
                  <p style="color: black;">
                    Persiapan
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="paket.php" class="nav-link">
              <i class="nav-icon fas fa-tshirt" style="color: black;"></i>
              <p style="color: black;">
                Paket
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="laporan.php" class="nav-link">
              <i class="nav-icon fas fa-money-bill" style="color: black;"></i>
              <p style="color: black;">
                Laporan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="hubungi.php" class="nav-link">
              <i class="nav-icon fas fa-address-card" style="color: black;"></i>
              <p style="color: black;">
                Hubungi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="testimoni.php" class="nav-link">
              <i class="nav-icon fas fa-address-card" style="color: black;"></i>
              <p style="color: black;">
                Testimoni
              </p>
            </a>
          </li>
          <?php 
            if (isset($_SESSION['level'])){
            if($_SESSION['level']=="superadmin"){?>
            <li class="nav-item">
            <a href="user.php"class="nav-link">
            <i class="nav-icon fas fa-user-cog" style="color: black;"></i>
            <p style="color: black;">  Pengaturan User  </p></a>
            </li> <?php }}?>
            <li class="nav-item">
            <a href="ubah_password.php" class="nav-link">
              <i class="nav-icon fas fa-user-lock" style="color: black;"></i>
              <p style="color: black;">
                Ubah Password
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt" style="color: black;"></i>
              <p style="color: black;">
                Sign Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>