
<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "twist");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$email = $_SESSION['email'];

$sql = "SELECT * FROM user WHERE u_email='$email'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    $row = mysqli_fetch_assoc($result);

  // Use your local server URL instead of the E:\ drive path
$link = "http://localhost/prac/project/Tasty_Twist/reset.php?email=" . urlencode($email);

    $mail = new PHPMailer(true);

    try{

        $mail->isSMTP();

        $mail->Host='smtp.gmail.com';

        $mail->SMTPAuth=true;

        $mail->Username='tastytwist68@gmail.com';

        $mail->Password='xkzfmtgmvphbajrl';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        $mail->Port=587;

        $mail->setFrom('tastytwist68@gmail.com','Admin Panel');

        $mail->addAddress($email);

        $mail->isHTML(true);

        $mail->Subject='Password Reset';

        $mail->Body="

        <h2>Password Reset</h2>

        <p>Hello,</p>

        <p>Click the button below to reset your password.</p>

        <a href='$link'
        style='
        background:#0d6efd;
        color:white;
        padding:12px 25px;
        text-decoration:none;
        border-radius:5px;'>
        Reset Password
        </a>

        <br><br>

        If you didn't request this email, please ignore it.

        ";

        $mail->send();

        echo "<script>
        alert('Reset link sent successfully.');
        window.location='login.php';
        </script>";

    }

    catch(Exception $e)
    {
        echo $mail->ErrorInfo;
    }

}
else
{
    echo "<script>
    alert('Email not found.');
    window.location='forgot.php';
    </script>";
}

?>

