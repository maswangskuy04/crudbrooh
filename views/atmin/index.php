<?php

session_start();
include '../../auth/auth.php';
include '../../auth/function.php';

if (isset($_SESSION['id_hak_akses']) == '') {
    header("location:../../login.php?message=fail");
}

$queryLevel = mysqli_query($koneksi, "SELECT hak_akses.nama_level, hak_akses.keterangan, user.* FROM user LEFT JOIN hak_akses ON hak_akses.id = user.id_hak_akses ORDER BY id DESC");
$rowUser = mysqli_fetch_assoc($queryLevel);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Halo <?= $_SESSION['nama_lengkap']; ?></p>
    <p>Hak Akses : <?= $rowUser['nama_level']; ?></p>
    <p>Keteragan : <?= $rowUser['keterangan']; ?></p>

    <a href="../../logout.php">Logout</a>
</body>

</html>