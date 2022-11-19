<?php

require './config/connector.php';

$query = "SELECT * FROM showroom_dea_table";
$result = mysqli_query($conn, $query);

function onClick($result)
{
    if (mysqli_num_rows($result) > 0) {
    header("Location: ./pages/ListCar-Demitria.php");
    } else {
    header("Location: ./pages/Add-Demitria.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <style>
        <?php include './assets/style/index.css'; ?>
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg" style="background-color: #FFE1E1;">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarNavAltMarkup">
                <div class="navbar-nav gap-3">
                    <a class="nav-link" style="color: black; font-weight: 600;" href="#home">Home</a>
                    <a class="nav-link" href="<?php if (mysqli_num_rows($result) > 0) {
                                                        echo "./pages/ListCar-Demitria.php";
                                                        } else {
                                                    echo "./pages/Add-Demitria.php";
                                        } ?>" style="color: black; ">My Car</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="home">
        <div class="container" style="margin: 120px; padding-top: 30px">
            <div class="d-flex gap-5 justify-content-center align-items-center">
                <div style="justify-content: center; align-items: center;">
                    <h1>Selamat Datang Di<br><b>Show Room Demitria!</b></h1>
                    <p class="mt-3">Mau sewa mobil berkualitas dengan harga terjangkau? Kami spesialisnya!<br>Selalu menyediakan berbagai jenis mobil untuk keperluan anda.</p>
                    <a href="<?php if (mysqli_num_rows($result) > 0) {
                                echo "./pages/ListCar-Demitria.php";
                                } else {
                                echo "./pages/Add-Demitria.php";
                                } ?>" class="button btn" style="background-color: #FFE1E1; font-weight: bold;">My Car</a>
                    <div class="d-flex align-items-center gap-5 mt-5">
                        <img src="<?php echo "./assets/images/logo-ead.png" ?>" alt="logo-ead" style="width:100px;">
                        <p style="margin-top: 20px; font-size:14px;">Demitria_1202201005</p>
                    </div>
                </div>
                <img src="<?php echo "./assets/images/mini-cooper.png" ?>" alt="mobil" style="width:500px;">
            </div>
        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>