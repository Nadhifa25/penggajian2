<?php 
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "penggajian2";

$connection = mysqli_connect($severname, $username, $password, $dbname);
if (!$connection) {
    die("Gagal Koneksi: " . mysqli_connect_error());
}
?>