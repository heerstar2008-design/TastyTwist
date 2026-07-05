<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "twist");
if($conn){
    echo "Hello Wolrd";
}
if(isset($_POST['submit']))
{
    echo "Done";

    $email = $_SESSION['email'];
    $password = $_POST['pwd'];
     $confirm = $_POST['c_pwd'];

     if($password!=$confirm)
        {
             $error = "Password and Confirm Password do not match.";
        }

    $sql = "UPDATE user SET u_pwd='$password' WHERE u_email='$email'";

    if(mysqli_query($conn, $sql))
    {
        header("Location:user_login.php");
    }
    else
    {
        echo "Password Not Updated";
    }
}
?>