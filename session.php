<?php

    include('connection.php');
    session_start();

    $email_check = $_SESSION['login_user'];

    $sql = mysqli_query($conn, "SELECT email FROM pass WHERE email='$email_check'");

    $row = mysqli_fetch_array($sql,MYSQLI_ASSOC);

    if(!isset($_SESSION['login_user'])) {
        header("location:login.php");
        die();
    }

?>
