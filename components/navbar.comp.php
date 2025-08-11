<?php
include_once 'lib/dbh.inc.php';
?>
<header id="header" class="header sticky-top">

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
          <?php
            }
          }
          ?>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </div>
</header>