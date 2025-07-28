<?php
// include 'lib/conn.php';
// Define your location project directory in htdocs (EX THE FULL PATH: D:\xampp\htdocs\x-kang\simple-routing-with-php)
// if (isset($_SESSION['user'])) {

$project_location = "/admin";
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
    case $me . '/menu':
        require "content/menu.view.php";
        break;
    case $me . '/logout':
        require "content/logout.view.php";
        break;
    case $me . '/login':
        require "content/login.view.php";
        break;
   
    case $me . '/route':
        include 'routeaccess.php';
        break;
    case $me . '/perubahan':
        include 'views/master/perubahan.view.php';
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
