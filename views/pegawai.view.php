<?php
include 'components/header.comp.php';
include 'components/navbar.comp.php';

?>

<body class="index-page">

    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="container">
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Team</li>
                    </ol>
                </nav>
                <h1>Team</h1>
            </div>
        </div><!-- End Page Title -->

        <!-- Team Section -->
        <section id="team" class="team section">

            <div class="container">

                <div class="row gy-4">
                        <?php 
                        $sql = mysqli_query($koneksi, "SELECT * FROM tb_pegawai where urutan='1' ") or die(mysqli_error($koneksi));
                        $hitung = mysqli_num_rows($sql);
                        if (!empty($hitung)) {
                            while ($data = mysqli_fetch_array($sql)) {
                            $isi = $data['nama'];
                            $jabatan = mysqli_fetch_array(mysqli_query($koneksi,"SELECT nama_jabatan from jabatan where id='$data[jabatan]'"));
                            $pangkat = mysqli_fetch_array(mysqli_query($koneksi,"SELECT jenis,golongan,ruang from pangkat where id='$data[pangkat]'"));
                            
                        ?>
                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="../admin/imagepegawai/<?=$data['gambar']?>" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4><?=$data['nama'];?></h4>
                                <span><?=$jabatan['nama_jabatan'];?></span>
                                <p>Pangkat : <?=$pangkat['jenis'],  '&nbsp;','/', '&nbsp;' .$pangkat['golongan'], '.' . $pangkat['ruang'];?></p>
                                <p>TTL <?=$data['tempat'], ',' . $data['tanggal'];?></p>
                                 <!-- <p> Agama:  <?=$data['agama'];?></p> -->
                                <!-- <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div> -->
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                        <?php
                            }
                        }else{
                                
                        ?>
                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>KOSONG</h4>
                                <span>KOSONG</span>
                                <p>KOSONG</p>
                              
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                    <?php
                }
                ?>
                </div>
                <br>
                <div class="row gy-4">
                    <?php 
                        $sql = mysqli_query($koneksi, "SELECT a.nama,a.tempat,a.tanggal,a.jk,a.agama,a.nip,a.gambar,b.jenis,b.golongan,b.ruang,c.nama_jabatan FROM tb_pegawai a, pangkat b, jabatan c where a.pangkat=b.id AND a.jabatan=c.id AND  urutan > 1 order by urutan asc") or die(mysqli_error($koneksi));
                        $hitung = mysqli_num_rows($sql);
                        if (!empty($hitung)) {
                            while ($data = mysqli_fetch_array($sql)) {                          
                            
                        ?>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="../admin/imagepegawai/<?=$data['gambar']?>" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4><?=$data['nama'];?></h4>
                                <span><?=$data['nama_jabatan'];?></span>
                                <p>Pangkat : <?=$data['jenis'],'&nbsp;','/', '&nbsp;' . $data['golongan'], '.' . $data['ruang'];?></p>
                                <p>TTL <?=$data['tempat'], ',' . $data['tanggal'];?></p>
                                 <!-- <p> Agama:  <?=$data['agama'];?></p> -->
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                        <?php
                            }
                        }else{
                                
                        ?>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>KOSONG</h4>
                                <span>KOSONG</span>
                                <p>KOSONG</p>
                              
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                    <?php
                }
                ?>
                    
                </div>

            </div>

        </section><!-- /Team Section -->

    </main>



    <?php
    include 'components/footer.comp.php';
    ?>