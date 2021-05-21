<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "tokoonline";

    $koneksi = mysqli_connect($server, $username, $password, $database) or die("Koneksi gagal");
?>