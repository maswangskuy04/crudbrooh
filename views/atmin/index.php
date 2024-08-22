<?php

session_start();
include('../../auth/auth.php');
include('../../auth/function.php');

if (isset($_SESSION['id_hak_akses']) == '') {
    header("location:../../login.php?message=fail");
}

$queryLevel = mysqli_query($koneksi, "SELECT hak_akses.nama_level, hak_akses.keterangan, user.* FROM user LEFT JOIN hak_akses ON hak_akses.id = user.id_hak_akses ORDER BY id DESC");
$queryProfile = mysqli_query($koneksi, "SELECT * FROM profile");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../library/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <a href="#" class="brand-website">CRUD BROOH</a>
            <div class="navbar-list-link">
                <ul class="menu-link" id="transEffect">
                    <li class="navitem"><a href="#" class="navlink">Home</a></li>
                    <li class="navitem"><a href="#" class="navlink">Data User</a></li>
                    <li class="navitem"><a href="#" class="navlink">Data Level</a></li>
                    <li class="navitem"><a href="#" class="navlink">Detail User</a></li>
                    <li class="navitem-2"><a href="../../logout.php" class="navlink">Log Out</a></li>
                </ul>
            </div>
            <div class="btn-hamburger">&#9776;</div>
        </div>
    </nav>

    <div class="wrapper">
        <a href="add-create.php" class="btn-add">Tambah Data <i class="fa-solid fa-circle-chevron-right"></i></a>
        <table class="table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no = 1;
                while ($rowProfile = mysqli_fetch_assoc($queryProfile)) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $rowProfile['nama_user']; ?></td>
                        <td><?= $rowProfile['jk_user']; ?></td>
                        <td><?= $rowProfile['email_user']; ?></td>
                        <td><?= $rowProfile['alamat_user']; ?></td>
                        <td>
                            <a href="" class="btn-update">Edit</a>
                            <a href="" class="btn-delete">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <?php include('../../inc/footer.php'); ?>
</body>

</html>