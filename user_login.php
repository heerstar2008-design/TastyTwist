<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background: url('bg-cooking.jpg') no-repeat center center fixed;
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}
  .admin-link {
            text-decoration: none;
            color: var(--primary-dark);
            font-weight: 600;
            color:#6b1d38;
            font-size: 1.05rem;
            display: flex;
            align-items: center;
            gap: 8px;
            position: relative;
            padding-bottom: 4px;
        }

        .admin-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 2px;
            background-color: currentColor; 
            transition: width 0.3s ease;
        }

        .admin-link:hover::after {
            width: 100%;
        }


/* --- Navbar Styles --- */
header {
    width: 100%;
    padding: 20px 10%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
}

.logo-area {
    display: flex;
    align-items: center;
}

.logo-circle {
    width: 75px;
    height: 75px;
    background-color: #6b1d38; 
    border-radius: 50%;
    border: 3px solid #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 4px 12px rgba(105, 27, 49, 0.15);
    overflow: hidden;
}

.logo-circle img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.nav-links {
    display: flex;
    gap: 24px;
    align-items: center;
    margin-left: auto; 
}

.nav-links a {
    text-decoration: none;
    color: #6b1d38;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 1.05rem;
}

.nav-links a {
    position: relative;
    padding-bottom: 4px;
}

.nav-links a::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 2px;
    background-color: currentColor; 
    transition: width 0.3s ease;
}

.nav-links a:hover::after {
    width: 100%;
}

.custom-login-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    background-image: url('file:///D:/project/homepage/login (1).png'); 
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    vertical-align: middle;
    filter: invert(17%) sepia(34%) saturate(3620%) hue-rotate(317deg) brightness(87%) contrast(92%);
}

/* --- Centered Login Card Area --- */
.main-content {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px 20px;
}

.logo{
    display: block;
    margin: 0 auto;
    width:130px;
    height:130px;
    object-fit:contain;
    margin-bottom:15px;
}

.container{
    width:100%;
    max-width:430px;
    background: rgba(219, 203, 203, 0.51);
    backdrop-filter:blur(15px);
    border-radius:28px;
    padding:28px 35px;
    text-align:left;
    border:1px solid rgba(255,255,255,0.5);
    box-shadow: 0 20px 50px rgba(141,16,71,0.15);
    animation:floatCard 4s ease-in-out infinite;
}

.container{
    width:100%;
    max-width:430px;

    /* FIXED: Changed invalid '#efa0c6(255,255,255,0.82)' syntax to proper rgba */
    /* background:rgba(239, 160, 198, 0.82); */
    backdrop-filter:blur(15px);

    border-radius:28px;

    padding:28px 35px;

    text-align:left;
    
    border:1px solid rgba(255,255,255,0.5);

    box-shadow:
    0 20px 50px rgba(141,16,71,0.15);

    animation:floatCard 4s ease-in-out infinite;
}

@keyframes floatCard{
    0% { transform:translateY(0px); }
    50% { transform:translateY(-10px); }
    100% { transform:translateY(0px); }
}

.container h1{
    text-align:center;
    color:#881010;
    font-size:45px;
    margin-bottom:15px;
}

.container p{
    text-align:center;
    color:#c04b4b;
    font-size:14px;
    line-height:22px;
    margin-bottom:35px;
}

.form-group{
    margin-bottom:25px;
}

.form-group label{
    display:block;
    color:#c04b4b;
    margin-bottom:8px;
    font-size:14px;
}

.form-group input{
    width:100%;
    border:none;
    border-bottom:1px solid #c04b4b;
    background:transparent;
    padding:10px 0;
    outline:none;
}

/* --- Password Box & Eye Styling --- */
.password-box {
    position: relative; 
    display: flex;
    align-items: center;
}

.password-box input {
    padding-right: 35px; 
}

.password-box .eye {
    position: absolute;
    right: 5px;
    bottom: 12px; 
    cursor: pointer;
    color: #c04b4b;
    user-select: none;
    font-size: 16px;
}

.forgot{
    text-align:right;
    margin-top:10px; 
    margin-bottom:25px;
}

.forgot a{
    color:#c04b4b;
    text-decoration:none;
    font-size:14px;
}

button{
    width:100%;
    height:40px;
    border:1px solid #c04b4b;
    border-radius:30px;
    background:#c04b4b;
    color:#f5f4f4;
    cursor:pointer;
    font-size:15px;
    margin-bottom: 10px;
}

.signup{
    text-align:center;
    margin-top:20px;
    color:#c04b4b;
}

.signup a{
    color:#b30000;
    text-decoration:none;
    font-weight:bold;
}

/* --- Error Message Styling --- */
.error-message {
    color: #881010;
    background-color: rgba(136, 16, 16, 0.1);
    border: 1px solid rgba(136, 16, 16, 0.2);
    border-radius: 8px;
    padding: 10px;
    margin-top: 15px;
    text-align: center;
    font-size: 14px;
    font-weight: bold;
}

@media (max-width: 768px) {
    header {
        flex-direction: column;
        text-align: center;
    }
    .nav-links {
        margin-left: auto;
        margin-right: auto;
        margin-top: 10px;
    }
}

</style>
</head>
<body>

    <header>
        <div class="logo-area">
            <div class="logo-circle">
                <img src="logo.png" alt="Logo Icon">
            </div>
              <a href="login.php" class="admin-link" style="margin:30px"><i class="fa-solid fa-user-shield"></i> Admin Side</a>
        </div>

        <nav class="nav-links">
            <a href="user_homepage.php"><i class="fa-solid fa-house"></i> Home      </a>
            <a href="user_about.php"><i class="fa-solid fa-circle-info"></i> About</a>
            <a href="user_login.php"><i class="custom-login-icon"></i> 
            <?php
              if(!isset($_SESSION['user']))
                {
                  
                echo "<i>Login</i>";
               
                }
                else{
                   echo $_SESSION['user']."   Login";
                }?>
            </a>
        </nav>
    </header>

    <div class="main-content">
        <div class="container">

            <h1>Welcome!!</h1>

            <p>
                Login to access your account and create personalized
                recipes from your available ingredients.
            </p>

            <form action="login_user_data.php" method="post" autocomplete="off">

                <div class="form-group">
                      <label><span class="icon">✉️</span>E-mail *</label>
                    <input type="email" placeholder="Enter Email" name="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label>🔒 Password *</label>
                    <div class="password-box">
                        <input type="password" id="createPassword" placeholder="Create Password" name="pwd" 
                               pattern="(?=.*[A-Z])(?=.*\W).{8,}" 
                               oninvalid="this.setCustomValidity('❌ Password must be 8+ characters, 1 uppercase letter, and 1 special symbol')"
                               oninput="this.setCustomValidity('')" autocomplete="new-password" required>
                        <i class="fa-solid fa-eye eye" onclick="togglePassword('createPassword', this)"></i>
                    </div>
                </div>

                <button type="submit" name="submit">Login</button>
  <div class="forgot">
            <a href="forgot.php">Forgot Password?</a>
        </div>
                <div class="signup">New User? <a href="regestration.php"><span style="font-weight:bold">Create Account</span></a></div>

            </form>

           <?php
if(isset($_SESSION['error'])&&!empty($_SESSION['error'])){
?>
<div class="error-message">

<?php
echo $_SESSION['error'];unset($_SESSION['error']);}

?>

        </div>
    </div>

<script>
function togglePassword(fieldId, eyeIcon) {
    // Select the password input element dynamically using the passed ID
    let passwordField = document.getElementById(fieldId);

    if (passwordField.type === "password") {
        passwordField.type = "text";
        // 'eyeIcon' is passed directly as 'this' from the HTML
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
    } else {
        passwordField.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
    }
}
</script>

</body>
</html>