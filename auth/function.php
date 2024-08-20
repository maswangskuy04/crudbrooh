<?php

include 'auth.php';
// function login

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
    $cek = mysqli_num_rows($sql);

    if ($cek > 0) {
        $data = mysqli_fetch_assoc($sql);

        if ($data['id_hak_akses'] == 1) {
            $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
            $_SESSION['id_hak_akses'] = $data['id_hak_akses'];
            header('location:views/atmin/index.php');
        } else if ($data['id_hak_akses'] == 2) {
            $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
            header('location:views/atmin-suki/index.php');
        } else {
            header('location:login.php');
        }
    }
}
