<?php
require '../config/connector.php';

$query = "SELECT * FROM showroom_dea_table";
$result = mysqli_query($conn, $query);

if (isset($_GET['message'])) {
    if ($_GET['message'] == 'success') {
        // get name
        echo "<script>alert('Successfuly added to database! ')</script>";
    } else if ($_GET['message'] == 'update') {
        echo "<script>alert('Data berhasil diupdate')</script>";
    } else if ($_GET['message'] == 'delete') {
        echo "<script>alert('Data berhasil dihapus')</script>";
    }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <style>
        <?php include '../assets/style/style.css'; ?>
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #FFE1E1">
        <div class="container">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav gap-3">
                        <a class="nav-link" style="color: black; font-weight: 600;" href="../index.php">Home</a>
                        <a class="nav-link" href="" style="color: black; ">My Car</a>
                        <a class="button btn" href="Add-Demitria.php" style="background-color: black; color: white;">Add Car</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section id="list">
        <div class="container" style="margin-left: 150px;margin-right: 150px;margin-top: 50px; font-family: Poppins">
            <div>
                <h1>My Show Room</h1>
                <p>List Show Room Demitria - 1202201005</p>
                <div class="d-flex gap-5">
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='card cardcontent' style='width: 18rem;'>
                        <img src='../assets/images/" . $row["foto_mobil"] . "' class='card-img-top' alt='fotomobil' style='padding: 16px;'>
                        <div class='card-body'>
                        <h5 class='card-title'>" . $row["nama_mobil"] . "</h5>
                        <p class='card-text'>" . substr($row["deskripsi"], 0, 50) . '...' . "</p>
                        <span class='d-flex'>
                            <a href='Detail-Demitria.php?id=" . $row["id_mobil"] . "' class='btn' style='font-family: Poppins; border-radius: 100px; width:140px; height: 36px; background-color: #B8E8FC'>Detail</a>
                            <a href='../config/delete.php?id=" . $row["id_mobil"] . "' class='btn' style='font-family: Poppins; border-radius: 100px; width:140px; height: 36px; margin-left:20px; background-color: #FF6464'>Delete</a>
                        </span>
                        </div>
                        </div>";
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <footer class="fixed-bottom" style="padding-bottom: 50px;">
        <div class="container">
        <p style="font-family: 'Poppins'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 19px; color: #757575;">Jumlah Mobil : <?php echo mysqli_num_rows($result) ?></p>
        </div>
    </footer>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>