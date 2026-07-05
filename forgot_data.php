<?php
session_start();
$conn=mysqli_connect("localhost","root","","twist");
if($conn)
    {
        echo "connect";
    
}
if(isset($_POST['email']))
{

    $_SESSION['email'] =  $_POST['email'];
    $email=$_SESSION['email'];
    echo $_SESSION['email'];

    // Email check
    $check = mysqli_query($conn, "SELECT * FROM user WHERE u_email='$email'");


    if(mysqli_num_rows($check) > 0)
    {
        include("send.php");
        
        
    }
    else
    {
        echo "Mail Not Found";
        // // Email not found
        // header("location:regestration.php");
    }
}
?>