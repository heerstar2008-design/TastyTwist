<?php
// Start session at the top to access error variables if submission fails
session_start();
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="user_login.css">
<title>Login Page</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    display:flex;
    justify-content:center;
    align-items:center;

    background:url("bg-cooking.jpg");
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
}

/* .logo{
    display: block;
    margin: 0 auto;
    width:130px;
    height:130px;
    object-fit:contain;
    margin-bottom:15px;
    align-items:center;
} */

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

    0%{
        transform:translateY(0px);
    }

    50%{
        transform:translateY(-10px);
    }

    100%{
        transform:translateY(0px);
    }
}

.container h1{
    text-align:center;
    color:#881010;
    font-size:35px;
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

.form{
    justify-content: center;
    display:block;
    color:#c04b4b;
    margin-bottom:8px;
    font-size:14px;
    margin-bottom:25px;
}

.form-group label{
    display:block;
    color:#c04b4b;
    margin-bottom:8px;
    font-size:14px;
}

/* ADDED: Position relative so the checkbox alignment matches the input baseline */
.password-box {
    position: relative;
    display: flex;
    align-items: center;
}

.form-group input{
    width:100%;
    border:none;
    border-bottom:1px solid #c04b4b;
    background:transparent;
    padding:10px 0;
    outline:none;
}

/* Extra right padding specifically for password fields so text doesn't clip behind the eye */
.password-box input {
    padding-right: 30px;
}

/* NEW CSS: Hide the native checkbox square */
.eye-checkbox-container input[type="checkbox"] {
    position: absolute;
    opacity: 0;
    width: 0;
    height: 0;
}

/* NEW CSS: Position your new eye checkbox container on the right side of the line */
.eye-checkbox-container {
    position: absolute;
    right: 5px;
    bottom: 10px;
    cursor: pointer;
    user-select: none;
    font-size: 18px;
}

/* NEW CSS: Use pseudo-elements to swap the eye icons smoothly based on checkbox state */
.eye-checkbox-container input[type="checkbox"] + .eye-icon::before {
    content: "👁";
}

.eye-checkbox-container input[type="checkbox"]:checked + .eye-icon::before {
    content: "🙈";
}

.forgot{
    text-align:right;
    margin-top:-10px;
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

.icon{
    color:black;
    padding-right:5px;
    font-size:16px;
}

</style>
</head>
<body>

<div class="container" >

    <h1>Create Account</h1>

    <p>
        Join Tasty Twist and start creating quick & tasty recipes
    </p>

    <form action="register_user_data.php" method="post" autocomplete="off">

        <div class="form-group">
            <label><span class="icon">👤</span>Name *</label>
            <input type="text" placeholder="Enter Full Name" name="name" required>
        </div>

        <div class="form-group">
            <label><span class="icon">✉</span> E-mail *</label>
            <input type="email" placeholder="Enter Email" name="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"   oninvalid="this.setCustomValidity('❌ Please enter a valid email (example: name@gmail.com)')"
       oninput="this.setCustomValidity('')" autocomplete="off" required>
            
        </div>

        <div class="form-group">
            <label><span class="icon">🔒</span> Password *</label>
            <div class="password-box">
                <input type="password" id="password" placeholder="Enter Password"
                    name="pwd" pattern="(?=.*[A-Z])(?=.*\W).{8,}"    oninvalid="this.setCustomValidity('❌ Password must be 8+ characters, 1 uppercase letter, and 1 special symbol')"
               oninput="this.setCustomValidity('')" autocomplete="new-password" required>
                
                <label class="eye-checkbox-container">
                    <input type="checkbox" onchange="togglePassword('password', this)">
                    <span class="eye-icon"></span>
                </label>
            </div>
        </div>

        <div class="form-group">
            <label><span class="icon">🔒</span> Confirm Password *</label>
            <div class="password-box">
                <input type="password" id="confirmPassword" placeholder="Confirm Password"
                    name="c_pwd" pattern="(?=.*[A-Z])(?=.*\W).{8,}"    oninvalid="this.setCustomValidity('❌ Password must be 8+ characters, 1 uppercase letter, and 1 special symbol')"
               oninput="this.setCustomValidity('')" required>
                
                <label class="eye-checkbox-container">
                    <input type="checkbox" onchange="togglePassword('confirmPassword', this)">
                    <span class="eye-icon"></span>
                </label>
            </div>
        </div>

        <div class="form-group">
            <label><span class="icon">📞</span>Contact info *</label>
            <input type="tel" placeholder="Mobile Number" name="phone" pattern="[0-9]{10}"    oninvalid="this.setCustomValidity('❌ Mobile Num Enter 10 digit Mobile Num')"
       oninput="this.setCustomValidity('')" required>
        </div>

        <script>
        // CHANGED: Script updated to check the checkbox status (.checked) instead of text contents
        function togglePassword(id, checkbox){
            const input = document.getElementById(id);
            if(checkbox.checked){
                input.type = "text";
            }
            else{
                input.type = "password";
            }
        }
        </script>
        
        <button type="submit">Register</button>

        <div class="signup">
            Already have an account?
            <a href="user_login1.php">Login</a>
        </div>

    </form>

</div>

</body>
</html> -->






<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="user_login.css">
<title>Registration Page</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    display:flex;
    justify-content:center;
    align-items:center;
    min-height: 100vh;
    background:url("bg-cooking.jpg");
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
}

.container{
    width:100%;
    max-width:430px;
    background:rgba(255, 255, 255, 0.82);
    backdrop-filter:blur(15px);
    border-radius:28px;
    padding:28px 35px;
    text-align:left;
    border:1px solid rgba(255,255,255,0.5);
    box-shadow: 0 20px 50px rgba(141,16,71,0.15);
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

button{
    width:100%;
    height:40px;
    border:1px solid #c04b4b;
    border-radius:30px;
    background:#c04b4b;
    color:#f5f4f4;
    cursor:pointer;
    font-size:15px;
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

.icon {
    margin-right: 5px;
}

</style>
</head>
<body>

    <div class="container">
        <h1>Welcome!!</h1>
        <p>Register to access your account and create personalized recipes from your available ingredients.</p>
        
        <form action="regestration_data.php" method="POST" autocomplete="off">
            <div class="form-group">
                <label><span class="icon">👤</span>Name *</label>
                <input type="text" placeholder="Enter Full Name" name="username" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label><span class="icon">✉️</span>E-mail *</label>
                <input type="email" placeholder="Enter Email" name="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label><span class="icon">🔒</span>Create Password *</label>
                <div class="password-box">
                    <input type="password" id="createPassword" placeholder="Create Password" name="pwd" 
                           pattern="(?=.*[A-Z])(?=.*\W).{8,}" 
                           oninvalid="this.setCustomValidity('❌ Password must be 8+ characters, 1 uppercase letter, and 1 special symbol')"
                           oninput="this.setCustomValidity('')" autocomplete="new-password" required>
                    <i class="fa-solid fa-eye eye" onclick="togglePassword('createPassword', this)"></i>
                </div>
            </div>

            <div class="form-group">
                <label><span class="icon">🔒</span>Confirm Password *</label>
                <div class="password-box">
                    <input type="password" id="confirmPassword" placeholder="Confirm Password" name="c_pwd" 
                           pattern="(?=.*[A-Z])(?=.*\W).{8,}"    
                           oninvalid="this.setCustomValidity('❌ Password must be 8+ characters, 1 uppercase letter, and 1 special symbol')"
                           oninput="this.setCustomValidity('')" autocomplete="new-password" required>
                    <i class="fa-solid fa-eye eye" onclick="togglePassword('confirmPassword', this)"></i>
                </div>
            </div>

            <div class="form-group">
                <label><span class="icon">📞</span>Contact info *</label>
                <input type="tel" placeholder="Mobile Number" name="phone" pattern="[0-9]{10}"    
                       oninvalid="this.setCustomValidity('❌ Enter 10 digit Mobile Num')"
                       oninput="this.setCustomValidity('')" autocomplete="off" required>
            </div>
            
            <button type="submit">Register</button>

            <div class="signup">
                Already have an account?
                <a href="user_login1.php">Login</a>
            </div>
        </form>
    </div>

<script>
function togglePassword(inputId, eyeIcon) {
    const passwordField = document.getElementById(inputId);
    
    if (passwordField.type === "password") {
        passwordField.type = "text";
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
</html> -->













<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="user_login.css">
<title>Registration Page</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    display:flex;
    justify-content:center;
    align-items:center;
    min-height: 100vh;
    background:url("bg-cooking.jpg");
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
    padding: 20px 0;
}

.container{
    width:100%;
    max-width:430px;
    /* Color matched to blend perfectly with cooking image backdrop elements */
    background: rgba(245, 172, 165, 0.85);
    backdrop-filter:blur(15px);
    border-radius:28px;
    padding:28px 35px;
    text-align:left;
    border:1px solid rgba(255,255,255,0.4);
    box-shadow: 0 20px 50px rgba(107, 29, 56, 0.2);
    animation:floatCard 4s ease-in-out infinite;
}

@keyframes floatCard{
    0% { transform:translateY(0px); }
    50% { transform:translateY(-10px); }
    100% { transform:translateY(0px); }
}

.container h1{
    text-align:center;
    color:#6b1d38;
    font-size:45px;
    margin-bottom:15px;
}

.container p{
    text-align:center;
    color:#73243c;
    font-size:14px;
    line-height:22px;
    margin-bottom:35px;
}

.form-group{
    margin-bottom:22px;
}

.form-group label{
    display:block;
    color:#6b1d38;
    margin-bottom:8px;
    font-size:14px;
    font-weight: 600;
}

.form-group input{
    width:100%;
    border:none;
    border-bottom:1.5px solid #6b1d38;
    background:transparent;
    padding:10px 0;
    outline:none;
    color: #4a1224;
    font-weight: 500;
}

.form-group input::placeholder {
    color: rgba(107, 29, 56, 0.6);
}

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
    color: #6b1d38;
    user-select: none;
    font-size: 16px;
}

button{
    width:100%;
    height:42px;
    border:none;
    border-radius:30px;
    background:#6b1d38;
    color:#f5f4f4;
    cursor:pointer;
    font-size:15px;
    font-weight: 600;
    transition: background-color 0.2s ease;
}

button:hover {
    background: #872647;
}

.signup{
    text-align:center;
    margin-top:20px;
    color:#6b1d38;
    font-size:14px;
}

.signup a{
    color:#b30000;
    text-decoration:none;
    font-weight:bold;
}

.icon {
    margin-right: 5px;
}

/* --- Error Message Box sitting fully below form context --- */
.error-message {
    color: #ffffff;
    background-color: #881010;
    border: 1px solid rgba(136, 16, 16, 0.3);
    border-radius: 12px;
    padding: 12px;
    margin-top: 20px;
    text-align: center;
    font-size: 14px;
    font-weight: bold;
    box-shadow: 0 4px 12px rgba(136, 16, 16, 0.15);
}

</style>
</head>
<body>

    <div class="container">
        <h1>Welcome!!</h1>
        <p>Register to access your account and create personalized recipes from your available ingredients.</p>
        
        <form action="regestration_data.php" method="POST" autocomplete="off">
            <div class="form-group">
                <label><span class="icon">👤</span>Name *</label>
                <input type="text" placeholder="Enter Full Name" name="username" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label><span class="icon">✉️</span>E-mail *</label>
                <input type="email" placeholder="Enter Email" name="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label><span class="icon">🔒</span>Create Password *</label>
                <div class="password-box">
                    <input type="password" id="createPassword" placeholder="Create Password" name="pwd" 
                           pattern="(?=.*[A-Z])(?=.*\W).{8,}" 
                           oninvalid="this.setCustomValidity('❌ Password must be 8+ characters, 1 uppercase letter, and 1 special symbol')"
                           oninput="this.setCustomValidity('')" autocomplete="new-password" required>
                    <i class="fa-solid fa-eye eye" onclick="togglePassword('createPassword', this)"></i>
                </div>
            </div>

            <div class="form-group">
                <label><span class="icon">🔒</span>Confirm Password *</label>
                <div class="password-box">
                    <input type="password" id="confirmPassword" placeholder="Confirm Password" name="c_pwd" 
                           pattern="(?=.*[A-Z])(?=.*\W).{8,}"    
                           oninvalid="this.setCustomValidity('❌ Password must be 8+ characters, 1 uppercase letter, and 1 special symbol')"
                           oninput="this.setCustomValidity('')" autocomplete="new-password" required>
                    <i class="fa-solid fa-eye eye" onclick="togglePassword('confirmPassword', this)"></i>
                </div>
            </div>

            <div class="form-group">
                <label><span class="icon">📞</span>Contact info *</label>
                <input type="tel" placeholder="Mobile Number" name="phone" pattern="[0-9]{10}"    
                       oninvalid="this.setCustomValidity('❌ Enter 10 digit Mobile Num')"
                       oninput="this.setCustomValidity('')" autocomplete="off" required>
            </div>
            
            <button type="submit">Register</button>

            <div class="signup">
                Already have an account?
                <a href="user_login1.php">Login</a>
            </div>
        </form>

        <?php
        if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
        ?>
            <div class="error-message">
                <i class="fa-solid fa-circle-exclamation"></i> <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php
        }
        ?>
    </div>

<script>
function togglePassword(inputId, eyeIcon) {
    const passwordField = document.getElementById(inputId);
    
    if (passwordField.type === "password") {
        passwordField.type = "text";
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
</html> -->










<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<title>Registration Page</title>

<style>
:root {
    --primary-dark: #6b1d38; /* Dark maroon theme color from logo */
    --accent-red: #881010;   /* Rich warm tone matching cooking background */
    --input-crimson: #c04b4b;/* Decorative label color */
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: url('bg-cooking.jpg') no-repeat center center fixed;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
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


/* --- Universal Header Setup (Exact match to your platform platform structure) --- */
header {
    width: 100%;
    padding: 20px 10%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
    z-index: 10;
}

.logo-area {
    display: flex;
    align-items: center;
}

.logo-circle {
    width: 75px;
    height: 75px;
    background-color: var(--primary-dark); 
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
    color: var(--primary-dark);
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 1.05rem;
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

/* --- Centered Dynamic Form Structure --- */
.main-content {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px 20px;
}

.container {
    width: 100%;
    max-width: 440px;
    background: rgba(219, 203, 203, 0.51);
    backdrop-filter: blur(15px);
    border-radius: 28px;
    padding: 30px 35px;
    text-align: left;
    border: 1px solid rgba(255, 255, 255, 0.41);
    box-shadow: 0 20px 50px rgba(107, 29, 56, 0.18);
    animation: floatCard 4s ease-in-out infinite;
}

@keyframes floatCard {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0px); }
}

.container h1 {
    text-align: center;
    color: var(--accent-red);
    font-size: 42px;
    margin-bottom: 12px;
}

.container p {
    text-align: center;
    color: var(--input-crimson);
    font-size: 14px;
    line-height: 22px;
    margin-bottom: 30px;
}

.form-group {
    margin-bottom: 22px;
}

.form-group label {
    display: block;
    color: var(--input-crimson);
    margin-bottom: 6px;
    font-size: 14px;
}

.form-group input {
    width: 100%;
    border: none;
    border-bottom: 1px solid var(--input-crimson);
    background: transparent;
    padding: 10px 0;
    outline: none;
    color: var(--accent-red);
}

/* Password field placement for eye vectors */
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
    color: var(--input-crimson);
    user-select: none;
    font-size: 16px;
}

button {
    width: 100%;
    height: 42px;
    border: 1px solid var(--input-crimson);
    border-radius: 30px;
    background: var(--input-crimson);
    color: #f5f4f4;
    cursor: pointer;
    font-size: 15px;
    font-weight: 600;
    transition: background 0.2s ease;
}

button:hover {
    background: var(--accent-red);
    border-color: var(--accent-red);
}

.signup {
    text-align: center;
    margin-top: 20px;
    color: var(--input-crimson);
}

.signup a {
    color: var(--accent-red);
    text-decoration: none;
    font-weight: bold;
}

.icon {
    margin-right: 6px;
}

/* --- Mismatched Password Error Wrapper (Appears completely below form) --- */
.error-message {
    color: var(--accent-red);
    background-color: rgba(136, 16, 16, 0.1);
    border: 1px solid rgba(136, 16, 16, 0.2);
    border-radius: 8px;
    padding: 10px;
    margin-top: 20px;
    text-align: center;
    font-size: 14px;
    font-weight: bold;
    display: none; /* Controlled dynamically by JavaScript engine */
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
            <p>Register to access your account and create personalized recipes from your available ingredients.</p>
            
            <form id="regForm" action="regester_user_data.php" method="POST" autocomplete="off">
                <div class="form-group">
                    <label><span class="icon">👤</span>Name *</label>
                    <input type="text" placeholder="Enter Full Name" name="username" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label><span class="icon">✉️</span>E-mail *</label>
                     <input type="text" name="email" autocomplete="off" required 
                           pattern="/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]+{2,}$/"
                           oninvalid="this.setCustomValidity('❌ Please enter a valid email address format (e.g., name@domain.com)')"
                           oninput="this.setCustomValidity('')"
                           placeholder="admin@flavormatrix.com" class="form-control input-custom w-100">
                </div>

                <div class="form-group">
                    <label><span class="icon">🔒</span>Create Password *</label>
                    <div class="password-box">
                        <input type="password" id="createPassword" placeholder="Create Password" name="pwd" 
                               pattern="(?=.*[A-Z])(?=.*\W).{8,}" 
                               oninvalid="this.setCustomValidity('❌ Password must be 8+ characters, 1 uppercase letter, and 1 special symbol')"
                               oninput="this.setCustomValidity('')" autocomplete="new-password" required>
                        <i class="fa-solid fa-eye eye" onclick="togglePassword('createPassword', this)"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label><span class="icon">🔒</span>Confirm Password *</label>
                    <div class="password-box">
                        <input type="password" id="confirmPassword" placeholder="Confirm Password" name="c_pwd" 
                               pattern="(?=.*[A-Z])(?=.*\W).{8,}"    
                               oninvalid="this.setCustomValidity('❌ Password must be 8+ characters, 1 uppercase letter, and 1 special symbol')"
                               oninput="this.setCustomValidity('')" autocomplete="new-password" required>
                        <i class="fa-solid fa-eye eye" onclick="togglePassword('confirmPassword', this)"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label><span class="icon">📞</span>Contact info *</label>
                    <input type="tel" placeholder="Mobile Number" name="phone" pattern="[0-9]{10}"    
                           oninvalid="this.setCustomValidity('❌ Enter 10 digit Mobile Num')"
                           oninput="this.setCustomValidity('')" autocomplete="off" required>
                </div>
                
                <button type="submit">Register</button>

                <div class="signup">
                    Already have an account?
                    <a href="user_login.php">Login</a>
                </div>
            </form>

            <div id="mismatchError" class="error-message">
                ❌ Passwords do not match! Please check and try again.
            </div>
        </div>
    </div>

<script>
// Toggle Password Input Types cleanly via dynamic reference parsing
function togglePassword(inputId, eyeIcon) {
    const passwordField = document.getElementById(inputId);
    
    if (passwordField.type === "password") {
        passwordField.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
    } else {
        passwordField.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
    }
}

// Client Side Integrity Enforcement for matching fields
document.getElementById('regForm').addEventListener('submit', function(event) {
    const pwd = document.getElementById('createPassword').value;
    const cpwd = document.getElementById('confirmPassword').value;
    const errorBox = document.getElementById('mismatchError');

    if (pwd !== cpwd) {
        event.preventDefault(); // Stop form processing immediately
        errorBox.style.display = 'block'; // Make the error banner completely visible below form
        
        // Auto-scroll context down slightly if mobile screen restricts view heights
        errorBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    } else {
        errorBox.style.display = 'none';
    }
});
</script>

</body>
</html>