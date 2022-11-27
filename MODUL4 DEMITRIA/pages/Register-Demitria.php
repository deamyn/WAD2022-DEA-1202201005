<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        <?php include '../assets/style/index.css'; ?>
    </style>
</head>

<?php
    if (isset($_SESSION['register']) && $_SESSION['register'] == 'gagal') {
        $_SESSION['register'] = ''; ?>
    <div class="alert alert-warning m-0 p-2 alert-dismissible" role="alert">
        Email anda sudah pernah terdaftar!
        <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>

<body>

<section id='form'>
    <div class="container">
        <h1 class="add">Register</h1>
        <form action="../config/regist.php" method="POST" enctype="multipart/form-data">
            <label for="email">Email<span style="color: red">*</span></label>
            <input type="text" id="email" name="email" placeholder="Masukkan Email Anda">

            <label for="nama">Nama<span style="color: red">*</span></label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda">

            <label for="no_hp">Nomor Handphone<span style="color: red">*</span></label>
            <input type="text" id="no_hp" name="no_hp" placeholder="Masukkan Nomor Handphone Anda">

            <label for="password">Kata Sandi<span style="color: red">*</span></label>
            <input type="text" id="password" name="password" placeholder="Masukkan Kata Sandi Baru">

            <label for="password2">Konfirmasi Kata Sandi<span style="color: red">*</span></label>
            <input type="text" id="password2" name="password2" placeholder="Masukkan Kata Sandi Lagi">

            <button type="submit" class="btn" style="margin-top: 40px; background-color: #FFE1E1; height: 50px; width: 120px; font-weight: bold;">Daftar</button>
        </form>
        <br>
        <h6 class="mb-4">Anda sudah punya akun? <a href="login.php">Login</a></h6>
    </div>
</section>

<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>