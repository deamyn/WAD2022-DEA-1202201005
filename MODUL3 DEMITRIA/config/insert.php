<?php
require './connector.php';

$idmobil = rand(1000,5000);
$namamobil = $_POST['nama'];
$pemilik = $_POST['pemilik'];
$merk = $_POST['merk'];
$tanggalbeli = $_POST['tanggalbeli'];
$desc = $_POST['desc'];
$status = $_POST['status'];
$gambar = $_FILES['gambar']['name'];

$target = "../assets/images/";

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
    $sql = "INSERT INTO showroom_dea_table (id_mobil, nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$idmobil','$namamobil', '$pemilik', '$merk', '$tanggalbeli', '$desc', '$gambar', '$status')";
    if (mysqli_query($conn, $sql)) {
        header("location: ../pages/ListCar-Demitria.php?message=success");
    } else {
        echo "Gagal:(";
    }
    } else {
    echo "Gagal:(";
    }
?>