<?php
session_start();
if (!isset($_GET['action'])) die("<div style='text-align:center'><h2>Tidak Bisa Ente Akses Actionnya Tidak Ada</h2></div>");
if ($_SESSION == null) {
  die("<div style='text-align:center'><h2>Tidak Bisa Ente Akses Langsung</h2></div>");
} else {
  if ($_GET["action"] === "") {
    die("<div style='text-align:center'><h2>Tidak Bisa Actionnya Tidak Ada</h2></div>");
  }

  $username = $_SESSION['username'];
  include '../../../lib/dbh.inc.php';



  if ($_GET["action"] === "fetchData") {
    $sql = "select * from tb_pegawai limit 0,500 ";
    $result = mysqli_query($koneksi, $sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $data[] = $row;
    }
    mysqli_close($koneksi);
    header('Content-Type: application/json');
    echo json_encode([
      "data" => $data
    ]);
  }

  if ($_GET["action"] === "insertData") {
    // if (!empty($_POST["judul_berita"]) && !empty($_POST["isi"]) && !empty($_POST["status"] && !empty($_POST["tanggal"])) != 0) {
    $nama = $_POST["namapegawai"];
    $tempat = $_POST["tl1"];
    $tanggal = $_POST["tl2"];
    $kelamin = $_POST["jeniskelamin"];
    $agama = $_POST["agama"];
    $nip = $_POST["nippegawai"];
    $jabatan = $_POST["jabatan"];
    $pangkat = $_POST["pangkat"];
    $status = $_POST["status"];
    $urutan = $_POST["urutan"];


    $name     = $_FILES['filegambar']['name'];
    $masalah  = $_FILES['filegambar']['error'];
    $ukuran   = $_FILES['filegambar']['size'];
    $asal     = $_FILES['filegambar']['tmp_name'];

    if ($asal == "") {
      echo json_encode([
        "statusCode" => 404,
        "message" => "Data gambar masih kosong"
      ]);
    } else {
      copy($asal, "../../imagepegawai/" . $name);
      $query  = "INSERT INTO tb_pegawai (nama,tempat,tanggal,jk,nip,pangkat,jabatan,gambar,status,urutan,agama) VALUES('$nama','$tempat','$tanggal','$kelamin','$nip','$pangkat','$jabatan','$name','$status','$urutan','$agama')";
      $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    }
    if ($result) {
      echo json_encode([
        "statusCode" => 200,
        "message" => "Data Berhasil tersimpan"
      ]);
      // header("Location: /admin/carousel");
      exit();
    }
  }


  if ($_GET["action"] === "fetchIsi") {
    $id = $_POST["id"];
    $sql = "SELECT isi as isihalaman FROM tb_pegawai WHERE id='$id'";
    $result = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($result) > 0) {
      $data = mysqli_fetch_assoc($result);
      header("Content-Type: application/json");
      echo json_encode([
        "statusCode" => 200,
        "data" => $data
      ]);
    } else {
      echo json_encode([
        "statusCode" => 404,
        "message" => "No user found with this id 😓"
      ]);
    }
    mysqli_close($koneksi);
  }

  if ($_GET["action"] === "fetchSingle") {
    $id = $_POST["id"];
    $sql = "SELECT * FROM tb_pegawai WHERE id='$id'";
    $result = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($result) > 0) {
      $data = mysqli_fetch_assoc($result);
      header("Content-Type: application/json");
      echo json_encode([
        "statusCode" => 200,
        "data" => $data
      ]);
    } else {
      echo json_encode([
        "statusCode" => 404,
        "message" => "No user found with this id 😓"
      ]);
    }
    mysqli_close($koneksi);
  }

  // function to update data
  if ($_GET["action"] === "updateData") {
    $id = $_POST["id"];
    $nama = $_POST["namapegawai1"];
    $tempat = $_POST["tl11"];
    $tanggal = $_POST["tl21"];
    $kelamin = $_POST["jeniskelamin1"];
    $agama = $_POST["agama1"];
    $nip = $_POST["nippegawai1"];
    $jabatan = $_POST["jabatan1"];
    $pangkat = $_POST["pangkat1"];
    $status = $_POST["status1"];
    $urutan = $_POST["urutan1"];


    $original_name = $_FILES['filegambar11']['name'];
    // $masalah  = $_FILES['filegambar']['error'];
    $ukuran   = $_FILES['filegambar11']['size'];
    $asal     = $_FILES['filegambar11']['tmp_name'];
    // $email = mysqli_real_escape_string($conn, $_POST["email"]);
    // $country = mysqli_real_escape_string($conn, $_POST["country"]);
    // $gender = mysqli_real_escape_string($conn, $_POST["gender"]);

    if ($asal == "") {
      $kirim = mysqli_query($koneksi, "UPDATE tb_pegawai SET nama='$nama',tempat='$tempat', tanggal='$tanggal',jk='$kelamin',nip='$nip',pangkat='$pangkat',jabatan='$jabatan',status='$status',urutan='$urutan',agama='$agama' WHERE id=$id") or die(mysqli_error($koneksi));
    } else {
      $data = mysqli_fetch_array(mysqli_query($koneksi, "select * from tb_pegawai where id=$id"));
      if ($data['gambar'] != "") unlink("../../imagepegawai/$data[gambar]");

      $edit = move_uploaded_file($asal, "../../imagepegawai/$original_name");
      $sql1 = "UPDATE tb_pegawai SET nama='$nama',tempat='$tempat', tanggal='$tanggal',jk='$kelamin',nip='$nip',pangkat='$pangkat',jabatan='$jabatan',gambar='$original_name',status='$status',urutan='$urutan',agama='$agama' WHERE id=$id";
      $kirim = mysqli_query($koneksi, $sql1) or die(mysqli_error($koneksi));
    }

    // if ($_FILES["filegambar"]["size"] != 0) {
    //   // rename the image before saving to database
    //   //   $original_name = $_FILES["filegambar"]["name"];
    //   $new_name = time() . "." . pathinfo($original_name, PATHINFO_EXTENSION);
    //   move_uploaded_file($_FILES["filegambar"]["tmp_name"], "../../imagehalaman" . $new_name);
    //   // remove the old image from uploads directory
    //   unlink("../../imagehalaman/" . $original_name);
    // } else {
    //   $new_name = mysqli_real_escape_string($koneksi, $original_name);
    // }
    // $sql = "UPDATE halaman SET judul='$judul',isi='$isi', gambar='$new_name',nama_link='$nama_link' WHERE id=$id";
    if ($kirim) {
      echo json_encode([
        "statusCode" => 200,
        "message" => "Data updated successfully 😀"
      ]);
      header("Location: /admin/pegawai");
      exit();
    } else {
      echo json_encode([
        "statusCode" => 500,
        "message" => "Failed to update data 😓"
      ]);
      header("Location: /admin/pegawai");
      exit();
    }
    mysqli_close($koneksi);
  }



  // function to delete data
  if ($_GET["action"] === "deleteData") {
    $id = $_POST["id"];
    // $delete_image = $_POST["delete_image"];
    $data = mysqli_fetch_array(mysqli_query($koneksi, "select * from tb_pegawai where id=$id"));
    if ($data['gambar'] != "") unlink("../../imagepegawai/" . $data['gambar']);
    $sql = "DELETE FROM tb_pegawai WHERE id=$id";

    if (mysqli_query($koneksi, $sql)) {
      // remove the image
      // unlink("uploads/" . $delete_image);
      echo json_encode([
        "statusCode" => 200,
        "message" => "Data deleted successfully 😀"
      ]);
    } else {
      echo json_encode([
        "statusCode" => 500,
        "message" => "Failed to delete data 😓"
      ]);
    }
  }
}
// include '../../../lib/dbh.inc.php';
