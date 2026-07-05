<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="user_login.css">
<title>Login Page</title>

</head>
<body>
    <div class="container" >




    <h1>Welcome!!</h1>

    <p>
        Login to access your account and create personalized
        recipes from your available ingredients.
    </p>

    <form action="login_user_data.php" method="post" autocomplete="off">

        <div class="form-group">
            <label>E-mail *</label>
            <input type="email" placeholder="Enter Email" name="email" pattern="/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[A-Za-z]{2,}$/" autocomplete="off" required  oninvalid="this.setCustomValidity('❌ Enter Valid Email')"
                               oninput="this.setCustomValidity('')" autocomplete="new-password" required>
                        <i class="fa-solid fa-eye eye" onclick="togglePassword('createPassword', this)"></i>
                    </div>>
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

        <div class="forgot">
            <a href="forgot.php">Forgot Password?</a>
        </div>

        <button type="submit">Login</button>

        <div class="signup">
            New User?
            <a href="regestration.php">Create Account</a>
        </div>

    </form>

</div>

</body>
</html>