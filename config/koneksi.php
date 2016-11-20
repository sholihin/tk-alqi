<?php
date_default_timezone_set("Asia/Jakarta");
$server = "localhost";
$username = "root";
$password = "";
$database = "alqidb";

// Koneksi dan memilih database di server
$koneksi = mysqli_connect($server,$username,$password, $database) or die("Koneksi gagal");
?>

