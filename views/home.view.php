<?php
include 'components/header.comp.php';
include 'components/navbar.comp.php';

?>

<body class="index-page">
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container-fluid">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
          <?php
          $sql = mysqli_query($koneksi, "SELECT * FROM carousel") or die(mysqli_error($koneksi));
          $no = 0;
          while ($data = mysqli_fetch_array($sql)) {
          ?>

            <div class="carousel-item active">

              <img class="img-responsive" src="../admin/uploads/<?= $data['gambar']; ?>" alt="" width="120" height="60">

            </div>

          <?php
            $no++;
          }
          ?>
          <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          </a>

          <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          </a>

        </div>
      </div>

      <div class="featured container">

        <div class="row gy-4">

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="featured-item position-relative">
              <div class="icon"><i class="bi bi-person-check"></i></div>
              <h4><a href="" class="stretched-link">Profesional</a></h4>
              <p>Memiliki kompetensi dan keahlian khusus di bidang pengawasan internal untuk menjalankan tugas secara efektif dan efisien</p>
            </div>
          </div><!-- End Featured Item -->

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="featured-item position-relative">
              <div class="icon"><i class="bi bi-hand-thumbs-up"></i></div>
              <h4><a href="" class="stretched-link">Berintegritas</a></h4>
              <p>Selalu bertindak jujur, transparan, dan mematuhi prinsip etika dalam menjalankan tugas pengawasan.</p>
            </div>
          </div><!-- End Featured Item -->

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="featured-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="" class="stretched-link">Independen</a></h4>
              <p>Menjalankan tugas tanpa adanya tekanan atau intervensi dari pihak lain, sehingga mampu memberikan penilaian yang objektif dan adil.</p>
            </div>
          </div><!-- End Featured Item -->

        </div>

      </div>

    </section><!-- /Hero Section -->



    <!-- About Section -->
    <section id="about" class="section about">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 order-2 order-lg-1 content">
            <h3>Tentang Kami</h3>
            <p>
              lembaga atau unit kerja yang bertugas melakukan pengawasan atau pemeriksaan secara independen terhadap berbagai kegiatan
              dan program yang dilakukan oleh instansi pemerintah atau swasta. Lembaga ini biasanya bertugas untuk memastikan kinerja, keuangan,
              dan kepatuhan terhadap aturan yang berlaku.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="container section-title" data-aos="fade-up">
          <!-- <h2>Statistik Pegawai</h2> -->
          <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas</p> -->
        </div><!-- End Section Title -->

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <!-- <i class="bi bi-emoji-smile"></i> -->
              <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>STRUKTURAL</strong> </p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <!-- <i class="bi bi-journal-richtext"></i> -->
              <span data-purecounter-start="0" data-purecounter-end="31" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>AUDITOR</strong></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <!-- <i class="bi bi-headset"></i> -->
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>PPUPD</strong></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <!-- <i class="bi bi-people"></i> -->
              <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>PELAKSANA</strong> </p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <div class="container">
        <div class="container section-title" data-aos="fade-up">
          <h2>Berita Terkini</h2>
          <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas</p> -->
        </div><!-- End Section Title -->

        <div class="row gy-4">

          <?php $sql = mysqli_query($koneksi, "SELECT * FROM berita ") or die(mysqli_error($koneksi));
          $hitung = mysqli_num_rows($sql);
          if (!empty($hitung)) {
            while ($data = mysqli_fetch_array($sql)) {
              $isi = $data['isi'];
              $judul = $data['judul_berita'];
              $user = $data['user'];
              $tanggal = $data['tanggal'];
              $image = $data['gambar'];
              $tampil_sebagian=substr($isi, 0, 50);
          ?>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="../admin/imageberita/<?=$image;?>" class="img-thumbnail" alt="" width="500" height="50">
              <a href="/berita/<?=$judul;?>" class="stretched-link">
                <h3><?=$judul;?></h3>
              </a>
              <p ><?=$tampil_sebagian;?></p>
              <a href="/berita/<?=$judul;?>" class="stretched-link"></a>

              <p class="position-absolute bottom-0 start-50 translate-middle-x">100 Views</p> <br>
              <div class="text-center"><a href="/berita/<?=$judul;?>" class="buy-btn">
                  <p>Baca Selengkapnya ... </p>
                </a></div>
            </div>

          </div><!-- End Service Item -->
          <?php
            }
          }else{
            echo "Data Tidak Ada";
          }
          ?>
    

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Clients Section -->
    <section id="clients" class="section clients">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Program Unggulan</h2>
        <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas</p> -->
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <!-- 
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div> -->

      </div>

    </section><!-- /Clients Section -->

  </main>

  <?php
  include 'components/footer.comp.php';
  ?>