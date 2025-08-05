<?php
// include '../../../lib/dbh.inc.php';
include '../../../lib/dbh.inc.php';



if ($_GET["action"] === "fetchData") {
  $sql = "SELECT * FROM carousel";
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
  // if (!empty($_POST["judul"]) && !empty($_POST["filegambar"]) != 0) {
  $judul = mysqli_real_escape_string($koneksi, $_POST["judul"]);
  // $filegambar = mysqli_real_escape_string($koneksi, $_POST["filegambar"]);
  // $nama = $_POST['nama'];

  $name     = $_FILES['filegambar']['name'];
  $masalah  = $_FILES['filegambar']['error'];
  $ukuran   = $_FILES['filegambar']['size'];
  $asal     = $_FILES['filegambar']['tmp_name'];

  $format = pathinfo($name, PATHINFO_EXTENSION);

  if ($masalah === 0) {

    if ($ukuran < 5000000) {

      if ($format === 'jpg' || $format === 'png' || $format === 'jpeg') {
        move_uploaded_file($asal, "../../uploads/$name");
        $query  = "INSERT INTO carousel(judul,gambar) VALUES('$judul','$name')";
        $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
        if ($result) {
          echo json_encode([
            "statusCode" => 200,
            "message" => "Data Berhasil tersimpan"
          ]);
        } else {
          echo json_encode([
            "statusCode" => 404,
            "message" => "Data Gagal Tersimpan"
          ]);
        }
      } else {
        echo json_encode([
          "statusCode" => 500,
          "message" => "File Yang Dimasukan Harus JPG atau PNG"
        ]);
        // echo "<script>alert('File Yang Dimasukan Harus JPG atau PNG');</script>";
      }
    } else {
      echo json_encode([
        "statusCode" => 501,
        "message" => "File Yang Dimasukan Terlalu Besar"
      ]);
      // echo "<script>alert('File Yang Dimasukan Terlalu Besar');</script>";
    }
  } else {
    echo json_encode([
        "statusCode" => 600,
        "message" => "Ada Masalah Saat Menambah Gambar"
      ]);
    // echo "<script>alert('Ada Masalah Saat Menambah Gambar');</script>";
  }
  // }else{
  //  echo json_encode([
  //       "statusCode" => 400,
  //       "message" => "Please fill all the required fields 🙏"
  //     ]);
  // }

}

if ($_GET["action"] === "fetchSingle") {
  $id = $_POST["id"];
  $sql = "SELECT * FROM carousel WHERE id='$id'";
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

