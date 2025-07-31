<?php
$servername = "localhost";
$username = "root";
$password = "nadirad3mi208";
$database = "inspektorat";

$koneksi = new mysqli($servername, $username, $password,$database);

// Check connection
if ($koneksi->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>