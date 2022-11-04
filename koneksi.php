<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "pnb";
$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn) { //apabila koneksi error
    die("Koneksi error pada :" . mysqli_connect_error());
}
