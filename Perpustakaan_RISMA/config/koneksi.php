<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "perpustakaan_risma";

$db = mysqli_connect($host,$user,$pass,$db);

if (!$db){
    die("data tidak terhubung");
}
?>