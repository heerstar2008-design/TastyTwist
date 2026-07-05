
<?php
session_start();

$conn = mysqli_connect("localhost","root","","twist");

$email = $_GET['email'] ?? '';

if(isset($_POST['btnreset']))
{
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if($password == $confirm)
    {
        $sql = "UPDATE user
                SET u_pwd='$password'
                WHERE u_email='$email'";

        if(mysqli_query($conn,$sql))
        {
            echo "
            <script>
            alert('Password changed successfully');
            window.location='login.php';
            </script>
            ";
        }
    }
    else
    {
        echo "<script>alert('Passwords do not match');</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Reset Password</title>

<style>
    

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial;
}

body{
background:#fdeef5;
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.box{
width:350px;
background:white;
padding:40px;
border-radius:20px;
text-align:center;
}

.icon{
font-size:60px;
}

h1{
color:#ff4d94;
margin-top:15px;
}

p{
color:gray;
margin:15px 0;
}

input{
width:100%;
padding:15px;
margin-top:15px;
border:1px solid #ff99c8;
border-radius:10px;
}

button{
width:100%;
padding:15px;
margin-top:20px;
border:none;
background:#ff4d94;
color:white;
border-radius:10px;
font-size:18px;
cursor:pointer;
}

button:hover{
background:#ff2e82;
}
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#FFF0F5;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.container{
    width:380px;
    background:#ffffff;
    padding:35px;
    border-radius:20px;
    box-shadow:0 8px 20px rgba(255,105,180,0.2);
}

.icon{
    width:80px;
    height:80px;
    margin:0 auto 20px;
    background:#FF4F9A;
    color:#fff;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:36px;
}

h2{
    text-align:center;
    color:#FF4F9A;
    margin-bottom:10px;
}

p{
    text-align:center;
    color:#777;
    font-size:14px;
    line-height:22px;
    margin-bottom:30px;
}

label{
    display:block;
    font-size:14px;
    font-weight:bold;
    color:#444;
    margin-bottom:8px;
}

.input-box{
    position:relative;
    margin-bottom:20px;
}

.input-box input{
    width:100%;
    padding:14px 45px 14px 15px;
    border:2px solid #FFD1E3;
    border-radius:12px;
    font-size:15px;
    outline:none;
    transition:0.3s;
}

.input-box input:focus{
    border-color:#FF4F9A;
}

.eye{
    position:absolute;
    right:15px;
    top:50%;
    transform:translateY(-50%);
    font-size:18px;
    color:#FF4F9A;
    cursor:pointer;
}

button{
    width:100%;
    padding:15px;
    background:#FF4F9A;
    color:white;
    border:none;
    border-radius:12px;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#E63E85;
}

.bottom{
    margin-top:20px;
    text-align:center;
    color:#666;
    font-size:14px;
}

.bottom a{
    color:#FF4F9A;
    text-decoration:none;
    font-weight:bold;
}

.bottom a:hover{
    text-decoration:underline;
}

</style>

</head>

<body>


<div class="container">
    <form action="reset_data.php" method="post">

    <div class="icon">🔒</div>

    <h2>Reset Password</h2>

    <p>
        Create a new password.<br>
        Your new password must be different from your previous password.
    </p>
    <div class="input-box"> 
    <input type="password" id="password" placeholder="Enter Password" name="pwd"  pattern="(?=.*[A-Z])(?=.*\W).{8,}" required>
    <span class="eye" onclick="togglePassword('password', this)">👁</span>
    </div>

    <div class="input-box">
        <input type="password" id="confirmPassword" placeholder="Confirm Password" name="c_pwd">
        <span class="eye" onclick="togglePassword('confirmPassword', this)">👁</span>
    </div>
    <button name="submit">Reset Password</button>
<script>
function togglePassword(id, eye) {
    var input = document.getElementById(id);

    if (input.type === "password") {
        input.type = "text";
        eye.innerHTML = "👁";
    } else {
        input.type = "password";
        eye.innerHTML = "🙈";
    }
}
</script>
    <div class="bottom">
        Remember Password?
        <a href="login.php">Sign In</a>
    </div>

</div>
</form>

</body>

</html>