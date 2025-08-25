<?php
// include 'lib/conn.php';
// Define your location project directory in htdocs (EX THE FULL PATH: D:\xampp\htdocs\x-kang\simple-routing-with-php)
// if (isset($_SESSION['user'])) {

// url();

//     function url()
//     {
//         $project_location = "rsapkotapalu.com/inspektorat";
//         $me = $project_location;
//         $request = $_SERVER['REQUEST_URI'];
//     switch ($request) {
//     case $me . '':
//         include 'views/home.view.php';
//         break;
//     case $me . '/home':
//         require "views/home.view.php";
//         break;
//     case $me . '/logout':
//         require "proses/logout.php";
//         break;
//     case $me . '/galeri':
//         require "views/galeri.view.php";
//         break;
//     case $me . '/contact':
//         include 'views/contact.view.php';
//         break;
//     case $me . '/berita':
//         include 'views/news.view.php';
//         break;
//     case $me . '/sumberdana':
//         include 'views/master/sumberdana.view.php';
//         break;
//     case $me . '/bagsumberdana':
//         include 'views/master/subsumberdana.view.php';
//         break;

//             default:
//                 http_response_code(404);
//                 require "views/404.php";
//                 break;
//         }
//     }




$project_location = "/";
$me = $project_location;

// For get URL PATH
$request = $_SERVER['REQUEST_URI'];
switch ($request) {

    case $me . '':
        include 'views/home.view.php';
        break;
    case $me . 'home':
        require "views/home.view.php";
        break;
    case $me . 'pegawai':
        require "views/pegawai.view.php";
        break;
    case $me . 'logout':
        require "proses/logout.php";
        break;
    case $me . 'galeri':
        require "views/galeri.view.php";
        break;
    case $me . 'contact':
        include 'views/contact.view.php';
        break;
    case $me . 'berita':
        include 'views/news.view.php';
        break;

    case $me . 'route':
        include 'routeaccess.php';
        break;
    case $me . 'perubahan':
        include 'views/master/perubahan.view.php';
        break;
    
 
    default:
        http_response_code(404);
        require "views/about.view.php";
        break;
}
return;
