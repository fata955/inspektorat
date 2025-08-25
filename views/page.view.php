<?php
include '../componentsub/header.comp.php';
include '../componentsub/navbar.comp.php';

$request = $_SERVER['REQUEST_URI'];
$judul = substr($request, 9);

$sql = mysqli_query($koneksi, "SELECT * FROM halaman where nama_link='$judul'") or die(mysqli_error($koneksi));
$hitung = mysqli_num_rows($sql);
if (!empty($hitung)) {
    $data = mysqli_fetch_array($sql);
    $isi = $data['judul'];
    $content =$data['isi'];
    $image = $data['gambar'];



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
                                    <img src="../admin/imagehalaman/<?= $image; ?>" class="img-fluid" alt="" width="100" height="50">

                                    <div class="col-lg-12 order-2 order-lg-1 content">
                                        <?php

                                        ?>
                                        <h3><?= $isi; ?></h3> <br>
                                        <p style="text-align: justify;">
                                            <?=
                                            htmlspecialchars_decode(htmlspecialchars_decode($content))
                                            //htmlspecialchars($isi, ENT_QUOTES, 'UTF-8');
                                            ?>
                                        </p>
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
                            <iframe width="250" height="150" 
                            src="https://www.youtube.com/embed/qxfQ8_Am3MA?si=yedvcQhTnOAIU2hD" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                                <!-- <h3 class="widget-title">Categories</h3>
                                <ul class="mt-3">
                                    <li><a href="#">General <span>(25)</span></a></li>
                                    <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                    <li><a href="#">Travel <span>(5)</span></a></li>
                                    <li><a href="#">Design <span>(22)</span></a></li>
                                    <li><a href="#">Creative <span>(8)</span></a></li>
                                    <li><a href="#">Educaion <span>(14)</span></a></li>
                                </ul> -->

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
} else {
    echo '<h2 class="m-5">Halaman Tidak Ditemukan</h2>';
}
    ?>