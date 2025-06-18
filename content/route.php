<?php

$project_location = "/inspektorat/content";
$me = $project_location;

// For get URL PATH
$request = $_SERVER['REQUEST_URI'];
switch ($request) {

    case $me . '/' . $_GET['judul']:
        require "../views/page.view.php";
        break;
 
    default:
        http_response_code(404);
        echo 'Halaman Tidak Ditemukan';
        // require "views/about.view.php";
        break;
}
return;
