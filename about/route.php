<?php

$project_location = "/about";
$me = $project_location;

// For get URL PATH
$request = $_SERVER['REQUEST_URI'];
switch ($request) {

    case $me . '/':
        require "../views/visi.view.php";
        break;

    case $me . '/visimisi':
        require "../views/visi.view.php";
        break;
    case $me . '/tugas':
        require "../views/work.view.php";
        break;
    default:
        http_response_code(404);
        echo 'Halaman Tidak Ditemukan';
        // require "views/about.view.php";
        break;
}
return;
