<?php

$host = 'localhost';
$uname = 'root';
$pass = '';
$db = 'crudbrooh';

$koneksi = mysqli_connect($host, $uname, $pass, $db);

if(!$koneksi) {
    die("Koneksi ke database gagal". mysqli_connect_error());
}

?>