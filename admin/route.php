<?php
// include 'lib/conn.php';
// Define your location project directory in htdocs (EX THE FULL PATH: D:\xampp\htdocs\x-kang\simple-routing-with-php)
// if (isset($_SESSION['user'])) {
include '../lib/dbh.inc.php';
$project_location = "/admin";
$me = $project_location;

// For get URL PATH
$request = $_SERVER['REQUEST_URI'];
switch ($request) {

    case $me . '/':
        include 'content/home.view.php';
        break;
    case $me . '/inputmenu':
        require "content/menu.view.php";
        break;
    case $me . '/inputsubmenu':
        require "content/submenu.view.php";
        break;

    case $me . '/carousel':
        require "content/carousel.view.php";
        break;
    case $me . '/berita':
        require "content/berita.view.php";
        break;
   case $me . '/login':
        require "content/login.view.php";
        break;
      case $me . '/signup':
        require "content/signup.view.php";
        break;
   
    default:
        http_response_code(404);
        require "views/about.view.php";
        break;
}
return;
