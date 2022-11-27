<?php session_start();

require '../config/connector.php';

?>
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
        <h1 class="login">LOGIN</h1>
        <form action="../config/login.php" method="POST" enctype="multipart/form-data">
            <label for="email">Email<span style="color: red">*</span></label>
            <input type="text" id="email" name="email" placeholder="Masukkan Email Anda">

            <label for="password">Kata Sandi<span style="color: red">*</span></label>
            <input type="text" id="password" name="password" placeholder="Masukkan Kata Sandi">

            <br>
            <input class="form-check mb-0" type="checkbox" name="remember" id="remember" style="width: 30px;height:30px;">
            <label>Remember Me</label>
            <br>
        
            <button type="submit" class="btn" style="margin-top: 40px; background-color: #FFE1E1; height: 50px; width: 120px; font-weight: bold;">Login</button>
        </form>
        <br>
        <h6 class="mb-4">Anda belum punya akun? <a href="Register-Demitria.php">Daftar</a></h6>
    </div>
</section>

<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>