<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Delights - Portal Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Center optimization framework specifically for the auth view */
        .auth-container {
            display: flex;
            align-items: center;      
            justify-content: center;   
            min-height: 100vh;
            background-color: #FAF8F6; /* var(--bg-universe) fallback */
            position: relative;
            overflow: hidden;
            padding: 24px;
        }

        /* ✨ ATTRACTIVE PREMIUM RADIAL BACKGROUND HALO */
        .auth-container::before {
            content: "";
            position: absolute;
            width: 600px;
            height: 600px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: radial-gradient(circle, rgba(255, 74, 112, 0.08) 0%, rgba(244, 242, 240, 0) 70%);
            z-index: 1;
            pointer-events: none;
        }

        /* ✨ HIGH-FIDELITY AUTH GLASS CARD DESIGN */
        .glass-auth-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 32px;
            padding: 48px;
            border: 1px solid rgba(255, 255, 255, 0.7);
            box-shadow: 0 24px 60px rgba(18, 19, 26, 0.04), 
                        inset 0 1px 0 rgba(255, 255, 255, 0.6);
            width: 100%;
            max-width: 450px;
            z-index: 2;
            position: relative;
        }

        /* BRANDING ELEMENT IN CARD */
        .auth-brand-zone {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
            margin-bottom: 32px;
        }
        .auth-brand-blob {
            background: #FF4A70; /* var(--accent-strawberry) fallback */
            color: #FFF;
            width: 56px;
            height: 56px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            box-shadow: 0 8px 20px rgba(255, 74, 112, 0.3);
        }
        
        /* PREMIUM INPUT FIELDS WITH ICON PADDING */
        .input-custom {
            width: 100%;
            font-size: 14px;
            font-weight: 500;
            padding: 14px 18px 14px 45px; /* Added left padding to make room for prefix icons */
            background: #FAF8F6;
            border: 1px solid rgba(18, 19, 26, 0.06);
            border-radius: 16px;
            color: #12131A; /* var(--text-dark) */
            transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
        }
        .input-custom:focus {
            background: #FFFFFF;
            border-color: #FF4A70; /* var(--accent-strawberry) */
            box-shadow: 0 0 0 5px rgba(255, 74, 112, 0.12),
                        0 8px 16px rgba(255, 74, 112, 0.04);
        }

        /* Specific padding adjustment for password field to accommodate the trailing eye icon */
        .input-password-custom {
            padding-right: 45px; 
        }
        
        .tracking-widest-xs {
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            color: #787A87; /* var(--text-muted) */
        }

        .brand-logo{
            width:80px;
            height:80px;
            object-fit:contain;
        }

        /* REFINED GRADIENT SUBMIT BUTTON */
        .btn-gradient-submit {
            background: linear-gradient(135deg, #FF4A70 0%, #ff6b8b 100%);
            color: white !important;
            font-weight: 700;
            border: none;
            padding: 14px 32px;
            border-radius: 16px;
            font-size: 15px;
            box-shadow: 0 8px 24px rgba(255, 74, 112, 0.25);
            transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
            width: 100%;
        }
        .btn-gradient-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 32px rgba(255, 74, 112, 0.35);
            filter: brightness(1.05);
        }
        .btn-gradient-submit:active {
            transform: translateY(-1px);
        }

        /* FIELD DECORATOR ICONS */
        .field-icon {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 18px;
            color: #787A87;
            font-size: 16px;
            pointer-events: none;
            transition: color 0.3s ease;
        }
        .position-relative:focus-within .field-icon {
            color: #FF4A70; /* Icon highlights to matching theme color when focused */
        }

        /* TOGGLE EYE ICON */
        .eye-toggle-icon {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 18px;
            color: #787A87;
            font-size: 16px;
            cursor: pointer;
            user-select: none;
            transition: color 0.3s ease;
        }
        .eye-toggle-icon:hover {
            color: #FF4A70;
        }

        /* Elegant inline warning block */
        .error-message {
            color: #881010;
            background-color: rgba(136, 16, 16, 0.08);
            border: 1px solid rgba(136, 16, 16, 0.15);
            border-radius: 12px;
            padding: 12px;
            margin-top: 20px;
            text-align: center;
            font-size: 13px;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="auth-container">
    <div class="glass-auth-card">
        
        <div class="auth-brand-zone">
            <div class="auth-brand-blob">
                <img src="logo.png" alt="Logo" class="brand-logo">
            </div>
            <div class="text-center">
                <h3 style="font-family: 'Clash Display', sans-serif; font-weight: 600; color: #12131A; margin-bottom: 4px;">Tasty Twist</h3>
                <p style="color: #787A87; font-size: 14px; margin: 0;">Management Portal Gateway</p>
            </div>
        </div>

        <form action="login_data.php" method="POST" class="d-flex flex-column gap-3" autocomplete="off">
            
            <div>
                <label class="tracking-widest-xs d-block mb-2">Email Address</label>
                <div class="position-relative">
                    <i class="fa-solid fa-envelope field-icon"></i>
                    <input type="email  " name="email" autocomplete="off" required 
                     pattern="/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9-]+\.[a-zA-Z]{2,}$/"
                           oninvalid="this.setCustomValidity('❌ Please enter a valid email address format (e.g., name@domain.com)')"
                           oninput="this.setCustomValidity('')"
                           placeholder="admin@flavormatrix.com" class="form-control input-custom w-100">
                </div>
            </div>
            
            <div>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <label class="tracking-widest-xs m-0">Password</label>
                </div>
                <div class="position-relative">
                    <i class="fa-solid fa-lock field-icon"></i>
                    <input type="password" id="adminPassword" name="pwd" autocomplete="new-password" required 
                           pattern="(?=.*[A-Z])(?=.*\W).{8,}" 
                           oninvalid="this.setCustomValidity('❌ Password must be at least 8 characters long, containing 1 uppercase letter and 1 special symbol')"
                           oninput="this.setCustomValidity('')"
                           placeholder="••••••••" class="form-control input-custom input-password-custom w-100">
                    <i class="fa-solid fa-eye eye-toggle-icon" onclick="togglePasswordVisibility('adminPassword', this)"></i>
                </div>
            </div>

            <div class="pt-2">
                <button type="submit" class="btn btn-gradient-submit">Verify Credentials</button>
            </div>
        </form>

        <?php if(isset($_SESSION['admin_error']) && !empty($_SESSION['admin_error'])): ?>
            <div class="error-message">
                <?php 
                    echo $_SESSION['admin_error']; 
                    unset($_SESSION['admin_error']);
                ?>
            </div>
        <?php endif; ?>

        <div class="text-center mt-4 pt-3" style="border-top: 1px solid rgba(18, 19, 26, 0.05); font-size: 12px; color: #787A87;">
            Ingredients magic everyday ✨
        </div>
    </div>
</div>

<script>
// JavaScript utility handler to change field layout dynamically between visible text and password stars
function togglePasswordVisibility(fieldId, eyeIcon) {
    const passwordInput = document.getElementById(fieldId);
    
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
    } else {
        passwordInput.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
    }
}
</script>

</body>
</html>