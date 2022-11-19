<?php

    $conn = mysqli_connect('localhost', 'root', '', 'modul3');

    if (!$conn){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }
?>