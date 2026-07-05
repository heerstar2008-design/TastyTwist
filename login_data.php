<?php
session_start();

if(isset($_POST['email']) && isset($_POST['pwd'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd']; // Modified input identifier target 

    $conn = mysqli_connect("localhost", "root", "", "twist");

    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $qry = "SELECT * FROM admin WHERE a_email='$email' AND a_pwd='$pwd'";
    $res = mysqli_query($conn, $qry);

    if(mysqli_fetch_array($res)) {
        header("Location: dashboard.php");
        exit();
    } else {
        $_SESSION['admin_error'] = "Invalid Email or Password";
        header("Location: login.php");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>