<?php

    $conn = mysqli_connect('localhost', 'root', '', 'wad_modul4_dea');

    if (!$conn){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }
?>