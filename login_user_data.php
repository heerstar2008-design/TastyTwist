<?php
$email=$_POST['email'];
$pwd=$_POST['c_pwd'];
$con=mysqli_connect("localhost","root","","twist");
if($con)
    {
        echo "Connect";
    }
$sel="select * from user where u_email='$email' && u_pwd='$pwd'";
$qry=mysqli_query($con,$sel);
$row=mysqli_fetch_array($qry);


if($row)
    {
        session_start();
        $_SESSION['user']=$row['u_name'];
        echo  $_Session['user'];
        
        header("location:user_homepage.php");
     
           }

  else {
    echo "Not ";
    session_start();
    $_SESSION['error'] = "Invalid Email or Password";
    echo $_SESSION['error'];
    header("location:user_login.php");
    // exit();
}




?>