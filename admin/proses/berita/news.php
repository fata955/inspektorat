<?php
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
    
    $user = mysqli_real_escape_string($koneksi, $_POST["user"]);
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
            "message" => $isi
        ]);
    } else {
           move_uploaded_file($asal, "../../imageberita/$name");
        $query  = "INSERT INTO berita(judul_berita,isi,user,tanggal,gambar,status) VALUES('$judul','$isi','$user','$tanggal','$name','$status')";
        $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    }
    if ($result) {
        echo json_encode([
            "statusCode" => 200,
            "message" => $isi
        ]);
    }

    // $name     = $_FILES['filegambar']['name'];
    // $masalah  = $_FILES['filegambar']['error'];
    // $ukuran   = $_FILES['filegambar']['size'];
    // $asal     = $_FILES['filegambar']['tmp_name'];

    // $format = pathinfo($name, PATHINFO_EXTENSION);
    // $query  = "INSERT INTO berita(judul_berita,isi,user,tanggal,gambar,status) VALUES('$judul','$isi','$user','$tanggal','$name','$status')";
    // $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    // if ($masalah === 0) {

    //     if ($ukuran < 5000000) {

    //         if ($format === 'jpg' || $format === 'png' || $format === 'jpeg') {
    //             move_uploaded_file($asal, "../../imageberita/$name");
    //             if ($result) {
    //                 echo json_encode([
    //                     "statusCode" => 200,
    //                     "message" => "Data Berhasil tersimpan"
    //                 ]);
    //             } else {
    //                 echo json_encode([
    //                     "statusCode" => 404,
    //                     "message" => "Data Gagal Tersimpan"
    //                 ]);
    //             }
    //         } else {
    //             echo json_encode([
    //                 "statusCode" => 500,
    //                 "message" => "File Yang Dimasukan Harus JPG atau PNG"
    //             ]);
    //             // echo "<script>alert('File Yang Dimasukan Harus JPG atau PNG');</script>";
    //         }
    //     } else {
    //         echo json_encode([
    //             "statusCode" => 501,
    //             "message" => "File Yang Dimasukan Terlalu Besar"
    //         ]);
    //         // echo "<script>alert('File Yang Dimasukan Terlalu Besar');</script>";
    //     }
    // } else {
    //     echo json_encode([
    //         "statusCode" => 600,
    //         "message" => "Ada Masalah Saat Menambah Gambar"
    //     ]);
    //     // echo "<script>alert('Ada Masalah Saat Menambah Gambar');</script>";
    // }
    // }else{
    //  echo json_encode([
    //       "statusCode" => 400,
    //       "message" => "Please fill all the required fields 🙏"
    //     ]);
    // }

    // } else {
    //      echo json_encode([
    //             "statusCode" => 400,
    //             "message" => "Isi Yang Kosong"
    //         ]);
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

// function to update data

if ($_GET["action"] === "updateData") {
    $id = $_POST["id"];
    $judul = $_POST["judul"];
    $name = $_FILES["filegambar1"]["name"];
    $ukuran = $_FILES["filegambar1"]["size"];
    $asal = $_FILES["filegambar1"]["tmp_name"];
    $masalah = $_FILES["filegambar1"]["error"];

    $format = pathinfo($name, PATHINFO_EXTENSION);
    if ($masalah === 0) {

        if ($ukuran < 5000000) {

            if ($format === 'jpg' || $format === 'png' || $format === 'jpeg') {
                $data = mysqli_fetch_array(mysqli_query($koneksi, "select * from carousel where id=$id"));
                if ($data['gambar'] != "") unlink("../../uploads/" . $data['gambar']);

                $edit = move_uploaded_file($asal, '../../uploads/' . $name);
                mysqli_query($koneksi, "UPDATE carousel SET judul='$judul', gambar='$name' WHERE id='$id'") or die(mysqli_error($koneksi));
                if ($edit) {
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
}



// function to delete data
if ($_GET["action"] === "deleteData") {
    $id = $_POST["id"];
    // $delete_image = $_POST["delete_image"];

    $sql = "DELETE FROM carousel WHERE id=$id";

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
