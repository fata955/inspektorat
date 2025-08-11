<?php
session_start();
$username = $_SESSION['username'];
// include '../../../lib/dbh.inc.php';
include '../../../lib/dbh.inc.php';



if ($_GET["action"] === "fetchData") {
    $sql = "SELECT * FROM berita ORDER BY tanggal asc";
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
    $judul = mysqli_real_escape_string($koneksi, $_POST["judul_berita"]);
    $isi = mysqli_real_escape_string($koneksi, $_POST["isi"]);
    // $isi2 = mysqli_real_escape_string($koneksi, $_POST["artikel"]);

    // $user = mysqli_real_escape_string($koneksi, $_POST["user"]);
    $tanggal = mysqli_real_escape_string($koneksi, $_POST["tanggal"]);
    $status = mysqli_real_escape_string($koneksi, $_POST["status"]);
    // $isi = $_POST["editor1"];

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
        move_uploaded_file($asal, "../../imageberita/$name");
        $query  = "INSERT INTO berita(judul_berita,isi,user,tanggal,gambar,status) VALUES('$judul','$isi','$username','$tanggal','$name','$status')";
        $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    }
    if ($result) {
        echo json_encode([
            "statusCode" => 200,
            "message" => "Data Berhasil tersimpan"
        ]);
        header("Location: /admin/berita");
        exit();
    }
}

// function to delete data
if ($_GET["action"] === "deleteData") {
    $id = $_POST["id"];
    // $delete_image = $_POST["delete_image"];
    $data = mysqli_fetch_array(mysqli_query($koneksi, "select * from berita where id=$id"));
    if ($data['gambar'] != "") unlink("../../imageberita/" . $data['gambar']);
    $sql = "DELETE FROM berita WHERE id=$id";

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
