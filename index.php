<?php

session_start();
include 'auth/auth.php';
include 'auth/function.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="library/css/style.css">
    <title>Halaman Dashboard</title>
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <a href="#" class="brand-website">CRUD BROOH</a>
            <div class="navbar-list-link">
                <ul class="menu-link" id="transEffect">
                    <li class="navitem"><a href="" class="navlink">Home</a></li>
                    <li class="navitem"><a href="pg=index" class="navlink">Data User</a></li>
                    <li class="navitem"><a href="#" class="navlink">Data Level</a></li>
                    <li class="navitem"><a href="#" class="navlink">Detail User</a></li>
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) : ?>
                        <li class="navitem-2"><a href="logout.php" class="navlink">Logout</a></li>
                    <?php else: ?>
                        <li class="navitem-2"><a href="login.php" class="navlink">Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="btn-hamburger">&#9776;</div>
        </div>
    </nav>

    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
        <h1 style="color: red;">Woops!</h1>
        <span><a href="" style="font-weight: bold;">Login</a> dulu lah broo untuk akses seluruh halaman.</span>
    </div>

    <?php include('inc/footer.php'); ?>

    <script type="text/javascript">
        const btn_hamburger = document.querySelector('.btn-hamburger');
        const menu_link = document.querySelector('.menu-link');

        btn_hamburger.addEventListener('click', () => {
            menu_link.classList.toggle('tampil');
        })
    </script>
</body>

</html>