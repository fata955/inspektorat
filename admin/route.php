<?php
// include 'lib/conn.php';
// Define your location project directory in htdocs (EX THE FULL PATH: D:\xampp\htdocs\x-kang\simple-routing-with-php)
// if (isset($_SESSION['user'])) {

$project_location = "/inspektorat/admin";
$me = $project_location;

// For get URL PATH
$request = $_SERVER['REQUEST_URI'];
switch ($request) {

    case $me . '/':
        include 'content/home.view.php';
        break;
    case $me . '/home':
        require "content/home.view.php";
        break;
    case $me . '/logout':
        require "content/logout.view.php";
        break;
    case $me . '/login':
        require "content/login.view.php";
        break;
    case $me . '/tagihan':
        include 'views/mocking/spm.view.php';
        break;
    case $me . '/skpd':
        include 'views/master/opd.view.php';
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
