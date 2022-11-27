<?php
if (!isset($_SESSION)) {
    session_start();
}

require "../config/connector.php";

if (isset($_COOKIE["email"]) && isset($_COOKIE["password"])) {
    $email = $_COOKIE["email"];
    $password = $_COOKIE["password"];
    $result = mysqli_query($connuser, "SELECT * FROM user_dea WHERE email = '$email'");
    $data = mysqli_fetch_assoc($result);

    if ($email === $data["email"] && $password === $data["password"]) {
        $_SESSION["login"] = true;
        $_SESSION["email"] = $data["email"];
    }
}

if (isset($_POST["login"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($conn_user, "SELECT * FROM user_dea WHERE email='$email'");
    //cek email
    if (mysqli_num_rows($query) === 1) {
        //cek password
        $data = mysqli_fetch_assoc($query);
        if (password_verify($password, $data["password"])) {
            // set seesion
            $_SESSION["login"] = true;
            $_SESSION["email"] = $data["email"];
            header("Location: ListCar-Demitria.php");
            if (isset($_POST["check"])) {
                setcookie("email", $data["email"], time() + 86400, "/");
                setcookie("password", $data["password"], time() + 86400, "/");
            }
            header("Location:../index.php");
        }
    }
}

?>