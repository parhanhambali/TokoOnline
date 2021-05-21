<?php 

    // untuk koneksi dari php ke database
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "tokoonline";

    $koneksi = mysqli_connect($server, $username, $password, $database) or die("Koneksi gagal");
?>