<?php
require './connector.php';

$id = $_GET['id'];

$sql = "DELETE FROM showroom_dea_table WHERE id_mobil = $id";

if (mysqli_query($conn, $sql)) {
    header("location: ../pages/ListCar-Demitria.php?message=delete");
} else {
    echo "Gagal";
}
?>