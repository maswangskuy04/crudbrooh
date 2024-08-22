<?php

include 'auth.php';
// function login

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $_SESSION['loggedin'] = true;

    $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
    $cek = mysqli_num_rows($sql);


    if ($cek > 0) {
        $data = mysqli_fetch_assoc($sql);

        if ($password == $data['password']) {
            $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
            $_SESSION['id_hak_akses'] = 1;
            header('location:views/atmin/index.php');
        } else if ($data['id_hak_akses'] == 2) {
            $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
            $_SESSION['id_hak_akses'] = 2;
            header('location:views/atmin-suki/index.php');
        } else {
            header('location:login.php');
        }
    }
}

if (isset($_POST['simpan'])) {
    $nama_user = $_POST['nama_user'];
    $jk_user = $_POST['jk_user'];
    $email_user = $_POST['email_user'];
    $alamat_user = $_POST['alamat_user'];

    $sql = "INSERT INTO profile (nama_user, jk_user, email_user, alamat_user) VALUES ('$nama_user', '$jk_user', '$email_user', '$alamat_user')";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        header('location:index.php?message=tambah-berhasil');
    } else {
        header('location:add-create.php?message=tambah-gagal');
    }
}
