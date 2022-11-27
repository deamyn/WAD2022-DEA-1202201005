<?php
require './connector.php';

$username = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];

$sql = "INSERT INTO `user_dea`(`nama`, `email`, `password`, `no_hp`) VALUES ('$username','$email','$no_hp','$password')";
$sql_cek = "SELECT email FROM user_dea WHERE email = '$email'";
$cek = $conn->query($sql_cek);;

if (mysqli_query($conn, $sql)) {
    session_start();
    $_SESSION['register'] = 'berhasil';
    header("location:../modul4/login.php");
} else {
    header("location:register.php");
}

if ($cek->num_rows > 0) {
    session_start();

    while ($row = $cek->fetch_assoc()){
        $email = $_POST['email'];
        $email_cek = $row['email'];
        $nama = $row['nama'];
        $uid = $row['id'];
    }

    if ($email == $email_cek) {
        $_SESSION['register'] = 'gagal';
        header("location:register.php");
    }
}

$conn->close();
?>