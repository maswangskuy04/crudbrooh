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
                    <li class="navitem"><a href="#" class="navlink">Home</a></li>
                    <li class="navitem"><a href="#" class="navlink">Data User</a></li>
                    <li class="navitem"><a href="#" class="navlink">Data Level</a></li>
                    <li class="navitem"><a href="#" class="navlink">Detail User</a></li>
                    <li class="navitem-2"><a href="#" class="navlink">Log In</a></li>
                </ul>
            </div>
            <div class="btn-hamburger">&#9776;</div>
        </div>
    </nav>

    <h2 style="text-align:center">Halaman Preview. <span style="color: #c81d25;">Harap <a href="" style="color: #119da4">login</a> terlebih dahulu untuk mengakses seluruh halaman.</span></h2>

    <div class="wrapper">
        <table class="table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Hak Akses</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th colspan="4">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Atmin</td>
                    <td>Reyhan Marlizal</td>
                    <td>reyhanmarlizal@gmail.com</td>
                    <td>Laki-Laki</td>
                    <td>Karet Ps Baru Barat V</td>
                    <td class="col">
                        <a href="" class="btn-create">Create</a>
                        <a href="" class="btn-read">Read</a>
                        <a href="" class="btn-update">Update</a>
                        <a href="" class="btn-delete">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Atmin Suki</td>
                    <td>Ambacika</td>
                    <td>ambacikangawi@gmail.com</td>
                    <td>Perempuan</td>
                    <td>Jl. Barudak Ngawi 69</td>
                    <td class="col">
                        <a href="" class="btn-create">Create</a>
                        <a href="" class="btn-read">Read</a>
                        <a href="" class="btn-update">Update</a>
                        <a href="" class="btn-delete">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Atmin Suki</td>
                    <td>Ambacuki</td>
                    <td>ambacukigawi@gmail.com</td>
                    <td>Laki-Laki</td>
                    <td>Jl. Ke Tempat Cukur Rusdi Ngawi</td>
                    <td class="col">
                        <a href="" class="btn-create">Create</a>
                        <a href="" class="btn-read">Read</a>
                        <a href="" class="btn-update">Update</a>
                        <a href="" class="btn-delete">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer class="copyright">
        <p class="text-footer">&copy; Reyhan Marlizal 2024</p>
    </footer>

    <script type="text/javascript">
        const btn_hamburger = document.querySelector('.btn-hamburger');
        const menu_link = document.querySelector('.menu-link');

        btn_hamburger.addEventListener('click', () => {
            menu_link.classList.toggle('tampil');
        })
    </script>
</body>

</html>