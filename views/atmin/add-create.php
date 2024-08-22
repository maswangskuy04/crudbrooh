<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../library/css/style.css">
    <title>Tambah Data User</title>
</head>

<body>
    <h2 class="heading-tag">Tambah Data User</h2>
    <div class="wrapper-form">
        <div class="container-form">
            <form action="" method="post">
                <div class="row">
                    <label for="" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama_user" class="form-input" required>
                </div>
                <div class="row">
                    <label for="" class="form-label">Jenis Kelamin</label>
                    <select name="jk_user" id="" class="form-input" style="text-align: center;">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="row">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email_user" class="form-input" required>
                </div>
                <div class="row">
                    <label for="" class="form-label">Alamat</label>
                    <textarea name="alamat_user" id="" cols="30" rows="5" class="form-input"></textarea>
                </div>
                <div class="row">
                    <input type="submit" class="btn-form" value="Simpan" name="simpan">
                </div>
            </form>
        </div>
    </div>
</body>

</html>