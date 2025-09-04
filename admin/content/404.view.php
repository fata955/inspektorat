<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: /admin/login");
  exit();
}
// include 'component/header.view.php';

// include 'component/pengaturantampilan.view.php';

?>


  

    <div class="page error-bg" id="particles-js">
        <!-- Start::error-page -->
        <div class="main-error-wrapper page-h" style="text-align: center; margin-top:250px">
            <!-- <img src="../assets/images/media/pngs/1.png" class="error-page-img" alt="error"> -->
            <h2 class="title">Ada Kesalahan Anda Mengakses </h2>
            <h6 class="sub_title">Cek Bae-Bae Linknya</h6><a class="btn btn-outline-danger" href="/admin">Back to Home</a>
        </div>
    </div>


  <?php
    // include 'component/footer.view.php';
    ?>
