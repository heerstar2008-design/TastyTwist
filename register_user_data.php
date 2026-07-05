<?php
$name=$_POST['name'];

$phone=$_POST['phone'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['c_pwd'];

$date=date("y-m-d");
$status="Active";
$con=mysqli_connect("localhost","root","","twist");
if($con)
    {
        if($pwd==$c_pwd){
             $ins="insert into user(u_name,u_email,u_pwd,u_mob,u_create_at,u_status) values(?,?,?,?,?,?)";
       $qry=mysqli_prepare($con,$ins);
       mysqli_stmt_bind_param($qry,"sssiss",$name,$email,$pwd,$phone,$date,$status);
       
       if(mysqli_stmt_execute($qry)){
      
       
        header("location:user_login1.php");
       }
       else{
        echo "Not Done";
       }

        }
        else{
            include("msg.php");
        }
       

    }





?>