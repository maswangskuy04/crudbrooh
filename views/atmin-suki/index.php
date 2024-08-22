<?php

session_start();
include('../../auth/auth.php');
include('../../auth/function.php');

if (isset($_SESSION['id_hak_akses']) == '') {
    header("location:../../login.php?message=fail");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../../logout.php">Logout</a>
</body>
</html>