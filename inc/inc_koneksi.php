<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "web-company";

$koneksi    = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die("Gagal Terknoneksi");
}else{
    echo"Berhasil";
}