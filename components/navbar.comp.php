<?php
include_once 'lib/dbh.inc.php';
?>
<header id="header" class="header sticky-top">
  <!-- <div class="topbar d-flex align-items-center dark-background">
    <div
      class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>0852 4554 1215</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </div> -->
  <!-- End Top Bar -->
  <div class="branding text-dark" style="background-image: url('assets/img/kelor.png'); background-size: 20%">
    <div class="container position-relative d-flex align-items-center justify-content-center">
      <a href="/inspektorat" class="logo d-flex align-items-center">
        <img src="assets/img/palu.png" alt="" />
        <h1 class="sitename">Inspektorat Daerah Kota Palu<br /></h1>
      </a>


    </div>
  </div>


  <div class="branding text-dark">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <!-- <a href="/inspektorat" class="logo d-flex align-items-center">
        <img src="assets/img/palu.png" alt="" />
        <h1 class="sitename">Inspektorat Daerah Kota Palu<br /></h1>
      </a> -->
      <form action="" method="post">


        <nav id="navmenu" class="navmenu">

          <ul>
            <?php
            $menu = mysqli_query($koneksi, "SELECT * FROM menu order by urutan");
            while ($data = mysqli_fetch_array($menu)) {
              $submenu = mysqli_query($koneksi, "SELECT * FROM submenu where id_menu='$data[id]'");
              $jmlsub = mysqli_num_rows($submenu);
              if ($jmlsub < 1) {
            ?>
                <li class="active"><a href="<?= $data['link']; ?>"><?= $data['judul']; ?></a></li>
              <?php
              } else {
              ?>

                <li class="dropdown">
                  <a href="<?= $data['link']; ?>"><span><?= $data['judul']; ?></span>
                    <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <?php
                    while ($datasub = mysqli_fetch_array($submenu)) {
                    ?>


                      <li><a href="<?= $datasub['link']; ?>" name="judul"><?= $datasub['judul']; ?></a></li>
                    <?php
                    }
                    ?>
                  </ul>
                </li>
                <!-- <li><a href="/inspektorat/contact">Survei</a></li> -->
            <?php
              }
            }

            ?>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </form>
    </div>
  </div>
</header>