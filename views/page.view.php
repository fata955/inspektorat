<?php
include '../componentsub/header.comp.php';
include '../componentsub/navbar.comp.php';

$request = $_SERVER['REQUEST_URI'];
$judul = substr($request, 9);

?>

<body class="about-page">
    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="container">
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current"><?= $judul; ?></li>
                    </ol>
                </nav>
                <!-- <h1>About</h1> -->
            </div>
        </div><!-- End Page Title -->

        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <!-- Blog Posts Section -->
                    <section id="blog-posts" class="blog-posts section">
                        <div class="container" data-aos="fade-up" data-aos-delay="100">

                            <div class="row gy-4">
                                 <img src="../assets/img/about.jpg" class="img-fluid" alt="">
                           
                                <div class="col-lg-12 order-2 order-lg-1 content">
                                    <h3>MENGENAL GRATIFIKASI</h3> <br>
                                    <p>
                                        <b>Gratifikasi</b> adalah semua pemberian yang diterima oleh Pegawai Negeri atau
                                        Penyelenggara Negara (Pn/PN). Oleh karena itu gratifikasi memiliki arti yang netral,
                                        sehingga tidak semua gratifikasi merupakan hal yang dilarang atau sesuatu yang salah.
                                    </p>
                                    <p style="font-size: larger;">Mengapa gratifikasi itu dilarang?</p>
                                    <p>
                                        Gratifikasi pada dasarnya adalah “suap yang tertunda” atau sering juga disebut “suap terselubung”.
                                        <b>Pegawai negeri atau penyelenggara negara (Pn/PN)</b> yang terbiasa menerima gratifikasi terlarang lama
                                        kelamaan dapat terjerumus melakukan korupsi bentuk lain, seperti suap, pemerasan dan korupsi lainnya.
                                        Sehingga gratifikasi dianggap sebagai akar korupsi.
                                    </p>
                                    Kriteria gratifikasi yang dilarang, yaitu :
                                    <ul>
                                        <li><i class="bi bi-check2-all"></i> <span>Gratifikasi yang diterima berhubungan dengan jabatan;
                                                .</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>Penerimaan tersebut dilarang oleh peraturan yang berlaku, bertentangan dengan kode etik,
                                                memiliki konflik kepentingan atau merupakan penerimaan yang tidak patut / tidak wajar.</span></li>
                                        <!-- <li><i class="bi bi-check2-all"></i> <span>Program Perumusan Kebijakan, Pendampingan dan Asistensi.</span></li> -->
                                    </ul>
                                    <p>
                                        Gratifikasi tersebut dilarang karena dapat mendorong Pn/PN bersikap tidak obyektif,
                                        tidak adil dan tidak profesional. Sehingga Pn/PN tidak dapat melaksanakan tugasnya dengan baik.
                                    </p>
                                    <p style="font-size: larger;">Apa yang menjadi dasar pengaturan gratifikasi bagi Pn/PN?</p>

                                    <p>
                                        Gratifikasi merupakan salah satu jenis tindak pidana korupsi baru yang diatur dalam <b>Pasal 12B dan 12C UU Tipikor sejak tahun 2001</b>. Namun,
                                        jika penerima gratifikasi melaporkan pada Unit Pengendalian Gratifikasi (UPG) / KPK paling lambat 30 hari kerja, maka Pn/PN dibebaskan
                                        dari ancaman pidana gratifikasi.
                                    </p>

                                    <p>Berikut adalah pasal yang mengatur tentang gratifikasi:</p>
                                </div>
                            </div>
                        </div>

                    </section><!-- /Blog Posts Section -->


                </div>
                <div class="col-lg-4 sidebar">

                    <div class="widgets-container">

                        <!-- Search Widget -->
                        <div class="search-widget widget-item">

                            <h3 class="widget-title">Search</h3>
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>

                        </div><!--/Search Widget -->

                        <!-- Categories Widget -->
                        <div class="categories-widget widget-item">

                            <h3 class="widget-title">Categories</h3>
                            <ul class="mt-3">
                                <li><a href="#">General <span>(25)</span></a></li>
                                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                <li><a href="#">Travel <span>(5)</span></a></li>
                                <li><a href="#">Design <span>(22)</span></a></li>
                                <li><a href="#">Creative <span>(8)</span></a></li>
                                <li><a href="#">Educaion <span>(14)</span></a></li>
                            </ul>

                        </div><!--/Categories Widget -->

                        <!-- Recent Posts Widget -->
                        <div class="recent-posts-widget widget-item">

                            <h3 class="widget-title">Recent Posts</h3>

                            <div class="post-item">
                                <img src="assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a href="blog-details.html">Nihil blanditiis at in nihil autem</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div><!-- End recent post item-->

                            <div class="post-item">
                                <img src="assets/img/blog/blog-recent-2.jpg" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div><!-- End recent post item-->

                            <div class="post-item">
                                <img src="assets/img/blog/blog-recent-3.jpg" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div><!-- End recent post item-->

                            <div class="post-item">
                                <img src="assets/img/blog/blog-recent-4.jpg" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div><!-- End recent post item-->

                            <div class="post-item">
                                <img src="assets/img/blog/blog-recent-5.jpg" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div><!-- End recent post item-->

                        </div><!--/Recent Posts Widget -->

                        <!-- Tags Widget -->
                        <div class="tags-widget widget-item">

                            <h3 class="widget-title">Tags</h3>
                            <ul>
                                <li><a href="#">App</a></li>
                                <li><a href="#">IT</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Mac</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Studio</a></li>
                                <li><a href="#">Smart</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>

                        </div><!--/Tags Widget -->

                    </div>

                </div>
            </div>
    </main>

    <?php
    include '../componentsub/footer.comp.php';
    ?>