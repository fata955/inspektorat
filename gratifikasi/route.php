<?php

$project_location = "/inspektorat/gratifikasi";
$me = $project_location;

// For get URL PATH
$request = $_SERVER['REQUEST_URI'];
switch ($request) {

    case $me . '/':
        require "../views/gratifikasi.view.php";
        break;

    case $me . '/knowledge':
        require "../views/gratifikasi.view.php";
        break;
    case $me . '/laporan':
        require "../views/laporangratifikasi.view.php";
        break;
    case $me . '/penggantian':
        require "../views/penggatiangratifikasi.view.php";
        break;


 
    default:
        http_response_code(404);
        echo 'Halaman Tidak Ditemukan';
        // require "views/about.view.php";
        break;
}
return;
