<?php
include '../componentsub/header.comp.php';
include '../componentsub/navbar.comp.php';
?>

<body class="about-page">
    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="container">
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Dokumen</li>
                    </ol>
                </nav>
                <!-- <h1>About</h1> -->
            </div>
        </div><!-- End Page Title -->

        <!-- About Section -->
        <section id="about" class="section about">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <!-- <img src="../assets/img/about.jpg" class="img-fluid" alt=""> -->
                    </div>
                    <div class="col-lg-6 order-2 order-lg-1 content">
                        <h3>Dokumen</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Dokumen</th>
                                    <th scope="col">Tahun</th>
                                    <!-- <th scope="col">status</th> -->
                                    <th scope="col">Unduh/Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                 
                               <?php 
                        $sql = mysqli_query($koneksi, "SELECT * FROM dokumen  where status='aktif'") or die(mysqli_error($koneksi));
                        $hitung = mysqli_num_rows($sql);
                        $con = 1;
                        if (!empty($hitung)) {
                            while ($data = mysqli_fetch_array($sql)) {                          
                        ?>
                               <tr>
                                    <th scope="row"><?=$con;?></th>
                                    <td><?=$data['nama_dokumen'];?></td>
                                    <td><?=$data['tahun'];?></td>
                                    <td><a href="../admin/doc/<?=$data['dokumen'];?>">download</td>
                                </tr>
                        <?php
                            }
                            $con++;
                        }
                        
                        ?>
                        
                               
                            </tbody>
                        </table>
                        <!-- <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p> -->
                        <!-- <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                        </ul> -->
                        
                    </div>


                </div>

        </section><!-- /About Section -->
    </main>

    <?php
    include '../componentsub/footer.comp.php';
    ?>