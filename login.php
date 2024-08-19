<?php

session_start();
include 'auth/auth.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="library/css/style.css">
    <title>Halaman Login</title>
    <style>
        body {
            background: url('library/images/1226404797_preview_1119379893_preview_Forest River.jpg');
        }
    </style>
</head>
<body>
    <div class="wrapper-lgn">
        <p class="login">Sign in</p>
        <div class="container-login">
            <form action="" method="post">
                <div class="row">
                    <input type="email" class="form-input" name="email" placeholder="Email" required>
                </div>
                <div class="row">
                    <input type="password" class="form-input" name="password" placeholder="Password" required>
                </div>
                <div class="row">
                    <input type="submit" class="btn-login" name="login" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>