<?php

$project_location = "/publik";
$me = $project_location;

// For get URL PATH
$request = $_SERVER['REQUEST_URI'];
switch ($request) {

    case $me . '':
        require "../views/news.view.php";
        break;

    case $me . '/berita':
        require "../views/news.view.php";
        break;
    case $me . '/dokumen':
        require "../views/dok1.view.php";
        break;
    case $me . '/galeri':
        require "../views/galeri.view.php";
        break;

 
    default:
        http_response_code(404);
        echo 'Halaman Tidak Ditemukan';
        // require "views/about.view.php";
        break;
}
return;
