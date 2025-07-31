<?php
include '../../../lib/dbh.inc.php';


if ($_GET["action"] === "fetchData") {
  $sql = "SELECT * FROM inspektorat.menu";
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

if ($_GET["action"] === "inserData") {

  // $judul = $_POST['judul'];
  // $link = $_POST['link'];
  // $urutan = $_POST['urutan'];
  if (!empty($_POST["judul"]) && !empty($_POST["link"]) && !empty($_POST["urutan"]) != 0) {
    $judul = mysqli_real_escape_string($conn, $_POST["judul"]);
    $link = mysqli_real_escape_string($conn, $_POST["link"]);
    $urutan = mysqli_real_escape_string($conn, $_POST["urutan"]);


    $sql = "INSERT FROM menu (id,judul,link,urutan) value ('','$judul','$link','$urutan')";
    

  $sql = "";
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


?>
