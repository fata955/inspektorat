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




$project_location = "/inspektorat";
$me = $project_location;

// For get URL PATH
$request = $_SERVER['REQUEST_URI'];
switch ($request) {

    case $me . '/':
        include 'views/home.view.php';
        break;
    case $me . '/home':
        require "views/home.view.php";
        break;
    case $me . '/logout':
        require "proses/logout.php";
        break;
    case $me . '/galeri':
        require "views/galeri.view.php";
        break;
    case $me . '/contact':
        include 'views/contact.view.php';
        break;
    case $me . '/berita':
        include 'views/news.view.php';
        break;
    case $me . '/sumberdana':
        include 'views/master/sumberdana.view.php';
        break;
    case $me . '/bagsumberdana':
        include 'views/master/subsumberdana.view.php';
        break;
    case $me . '/route':
        include 'routeaccess.php';
        break;
    case $me . '/perubahan':
        include 'views/master/perubahan.view.php';
        break;
    case $me . '/pagu':
        include 'views/setting/pagu.view.php';
        break;
    case $me . '/sp2d':
        include 'views/mocking/sp2d.view.php';
        break;
    case $me . '/sp2dlra':
        include 'views/mocking/sp2dlra.view.php';
        break;
    case $me . '/expenses':
        include 'views/transaction/expenses2.view.php';
        break;
    case $me . '/sp2dver':
        include 'views/transaction/sp2dexpenses.view.php';
        break;
    case $me . '/lacaksalur':
        include 'views/transaction/income.view.php';
        break;
    case $me . '/sumberdanaopd':
        include 'views/setting/opdsumberdana.view.php';
        break;
    case $me . '/reportincome':
        include 'views/report/income.report.php';
        break;
    case $me . '/signup':
        include 'views/register.view.php';
        break;
 
    default:
        http_response_code(404);
        require "views/about.view.php";
        break;
}
return;
