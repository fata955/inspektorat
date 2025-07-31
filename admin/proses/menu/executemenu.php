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

if ($_GET["action"] === "savedata") {
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


?>
