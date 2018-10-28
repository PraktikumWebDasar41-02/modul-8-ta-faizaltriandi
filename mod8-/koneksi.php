<?php

$hostname = "localhost";
$username = "root";
$pass = "";
$db ="modul8";

$koneksi = new mysqli($hostname, $username, $pass,$db);


if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
} 
?>