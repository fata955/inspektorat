<?php

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$project_location = "/content";
$me = $project_location;


// ajar PHP di Duniailkom
// For get URL PATH
$request = $_SERVER['REQUEST_URI'];
$judul = substr($request,9);
// echo $sub_kalimat;
switch ($request) {

    //   case $me . '/' . 'gratifikasi':
    //     require "../views/page.view.php";
    //     break;
 
    case $me . '/' . $judul:
        require "../views/page.view.php";
        break;
 
    default:
        http_response_code(404);
        echo 'Halaman Tidak Ditemukan';
        // require "views/about.view.php";
        break;
}
return;
