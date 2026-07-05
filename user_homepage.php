<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Twist - AI Recipe Maker</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-dark: #6b1d38; /* Dark maroon color from your logo text */
            --accent-pink: #b84360;  /* Button accents */
            --card-pink: #fdaeae;    /* The clean, solid light pink color from your original boxes */
            --card-bg: #f5aca5;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            /* Using your requested wavy background image file */
            background: url('bg-cooking.jpg') no-repeat center center fixed;
            background-size: cover;
            color: var(--primary-dark);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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
        .search-bar {
            flex: 1;
            max-width: 600px;
            position: relative;
            margin: 0 20px;
            padding-left: 10px;
            align-items: center;
        }

        .search-bar input {
            width: 100%;
            padding: 12px 20px 12px 45px;
            border:none;
            background-color:var(--primary-dark);
            border-radius: 30px;
            font-size: 14px;
            color:#fff9f2;
        }

        .search-bar i {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color:#fff9f2;
        }

        .nav-links {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--primary-dark);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* --- Link Hover Underline Animation --- */
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
    background-color: currentColor; /* Matches the color of the text automatically */
    transition: width 0.3s ease;
}

      .nav-links a:hover::after {
    width: 100%;
}

        /* --- Custom Login Icon Styling --- */
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

        /* --- Hero Section --- */
        .hero {
            text-align: center;
            max-width: 800px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 6rem;
            font-family: 'Georgia', serif;
            color: var(--primary-dark);
            margin-bottom: 25px;
            
        }

        .hero p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        /* --- Top-Rated Recepies Grid Section (Exact layout matching your image) --- */
        .recipes-section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
            text-align: center;
            flex-grow: 1;
        }

        .recipes-section h2 {
            font-family: 'Georgia', serif;
            font-size: 2.2rem;
            margin-bottom: 35px;
            color: var(--primary-dark);
        }

        .recipe-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        /* Exact card styling from your original design screenshot */
        .recipe-card {
            background-color: var(--card-pink); /* Solid pink match */
            border-radius: 28px;               /* Smooth rounded edges */
            padding: 40px 20px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        /* Responsive placeholder block for your image icons inside cards */
        .card-icon-placeholder {
            width: 130px;       /* Match dimensions from your graphic cards */
            height: 130px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-icon-placeholder img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
         .trending-section {
            text-align: center;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 10;
        }

        .section-title {
            font-family: var(--font-heading);
            font-size: 2.2rem;
            color: var(--primary-color);
            margin-bottom: 2.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            font-weight: 700;
        }

        .section-title svg {
            width: 35px;
            height: auto;
        }

        /* --- Responsive Cards Grid --- */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .card {
            background-color: var(--card-bg);
            border-radius: 32px;
            padding: 2rem 1.5rem 1.8rem 1.5rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(107, 86, 71, 0.04);
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
        }

        .card:hover {
            transform: translateY(-8px);
        }

        .card-img-container {
            width: 100%;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 1rem;
            position: relative;
            
        }

        .card-img-container svg {
            max-height: 100%;
            max-width: 100%;
            filter: drop-shadow(0 8px 16px rgba(0,0,0,0.06));
        }

        .favorite-heart {
            position: absolute;
            top: 0px;
            left: 15px;
            width: 22px;
            height: 22px;
            opacity: 0.8;
        }

        .card-content h3 {
            font-family: var(--font-heading);
            font-size: 1.6rem;
            color: var(--primary-color);
            margin-bottom: 0.3rem;
            font-weight: 700;
        }

        .card-content p {
            font-size: 0.95rem;
            color: #a18a7b;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .card-btn {
            display: inline-block;
            text-decoration: none;
            color: var(--accent-pink);
            border: 1.5px solid rgba(168, 61, 97, 0.3);
            padding: 0.5rem 1.8rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.9rem;
            background-color: #fff9f2;
            transition: all 0.2s ease;
        }

        .card-btn:hover {
            background-color: var(--accent-pink);
            color: white;
            border-color: var(--accent-pink);
        }

        /* Admin link styled to sit perfectly on the left side of the logo image */
        .admin-link {
            text-decoration: none;
            color: var(--primary-dark);
            font-weight: 600;
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

        /* --- Responsive Queries --- */
        @media (max-width: 1100px) {
            .cards-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .decor-bottom-left, .decor-bottom-right {
                display: none;
            }
        }

        @media (max-width: 768px) {
            body {
                padding: 1.5rem;
            }
            .main-title {
                font-size: 4rem;
            }
            .cards-grid {
                grid-template-columns: 1fr;
            }
            .navbar {
                flex-direction: column;
                gap: 1.5rem;
            }
            .decor {
                display: none;
            }
        }
       

        .recipe-card h3 {
            font-size: 1.5rem;
            color: var(--primary-dark);
            font-weight: 700;
            font-family: 'Georgia', serif;
        }

        /* --- Footer Section Layout --- */
        footer {
            background-color:#f5aca5;
            backdrop-filter: blur(10px);
            padding: 50px 8% 20px 8%;
            margin-top: auto;
            border-top: 1px solid rgba(255,255,255,0.3);
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-brand h2 {
            font-family: 'Georgia', serif;
            font-size: 2.5rem;
            color: var(--primary-dark);
            margin-bottom: 15px;
        }

        .footer-brand p {
            font-size: 14px;
            line-height: 1.6;
        }

        .footer-links h4 {
            font-size: 16px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links ul li {
            margin-bottom: 10px;
        }

        .footer-links ul li a {
            text-decoration: none;
            color: var(--primary-dark);
            font-size: 14px;
        }

        .app-downloads {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .app-btn {
            background-color: var(--primary-dark);
            color: white;
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            width: fit-content;
        }

        .app-btn-text span {
            display: block;
            font-size: 10px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(107, 29, 56, 0.2);
            padding-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .social-icons {
            display: flex;
            gap: 20px;
        }

        .social-icons a {
            color: var(--primary-dark);
            font-size: 22px;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            header { flex-direction: column; }
            .search-bar { width: 100%; margin: 15px 0; }
            .footer-bottom { flex-direction: column; gap: 15px; text-align: center; }
        }

        
        .cta-btn {
            background-color: var(--primary-dark);
            color: white;
            border: none;
            padding: 0.9rem 2.4rem;
            font-size: 1.05rem;
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            box-shadow: 0 6px 20px rgba(168, 61, 97, 0.25);
            transition: all 0.2s ease;
        }

        .cta-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(168, 61, 97, 0.35);
            background-color: #913151;
        }
        .icon{
            height:80px;
            width:80px;
        }
    </style>
</head>
<body>

<?php
include "user_header.php";
?>

    <section class="hero">
        <h1>Tasty Twist</h1>
        <p>Welcome to Tasty Twist, your go-to recipe maker that uses AI to transform your ingredients into mouth-watering recipes. Simply input what you have, and let us guide you through delicious culinary adventures.</p>
        
        <div class="search-bar" style="margin: 0 auto 25px auto; width: 100%;">
            <i class="fa-solid fa-magnifying-glass" style="left: 25px;"></i>
            <input type="text" placeholder="Search recipes, ingredients..." style="padding: 15px 20px 15px 55px; border-radius: 50px;">
        </div>

        <button class="cta-btn">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M9 21c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-1H9v1zm3-19C8.14 2 5 5.14 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.86-3.14-7-7-7zm2.85 11.1l-.85.6V16h-4v-2.3l-.85-.6A4.997 4.997 0 0 1 7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.63-.8 3.16-2.15 4.1z"/></svg>
            Explore Recipes
        </button>
    </section>

    <main class="recipes-section">
        <h2>✨ Top-Rated Recepies ✨</h2>

           <div class="cards-grid">
             <div class="card"> 
              
                <div class="card-img-container">
                    <svg viewBox="0 0 120 120">
                        <ellipse cx="60" cy="70" rx="45" ry="30" fill="#543d2b"/>
                        <ellipse cx="60" cy="65" rx="43" ry="25" fill="#fceddd"/>
                        <circle cx="45" cy="55" r="14" fill="#e84a3e"/>
                        <circle cx="75" cy="52" r="15" fill="#8cb83b"/>
                        <path d="M35,65 Q50,50 70,68 Q85,55 90,70" stroke="#f2bc3f" stroke-width="8" stroke-linecap="round" fill="none"/>
                        <circle cx="60" cy="72" r="12" fill="#d154a1"/>
                    </svg>
                </div>
                <div class="card-content">
                    <h3>Fresh Bowls</h3>
                    <p>Vibrant • Healthy • Delicious</p>
                    <a href="#" class="card-btn">View Recipes &gt;</a>
                </div>
            </div>

            <div class="card">
                <div class="card-img-container">
                    <svg viewBox="0 0 120 120">
                        <circle cx="60" cy="60" r="46" fill="#de833c"/>
                        <circle cx="60" cy="60" r="41" fill="#fcedbd"/>
                        <path d="M60,14 L60,106 M14,60 L106,60" stroke="#cc6e25" stroke-width="1.5" stroke-dasharray="3 3"/>
                        <circle cx="42" cy="46" r="7" fill="#c43125"/>
                        <circle cx="78" cy="48" r="7" fill="#c43125"/>
                        <circle cx="54" cy="80" r="7" fill="#c43125"/>
                        <circle cx="74" cy="76" r="6" fill="#c43125"/>
                        <path d="M48,64 Q54,58 50,52 Q44,58 48,64" fill="#4d822b"/>
                        <path d="M66,36 Q72,30 68,24 Q62,30 66,36" fill="#4d822b"/>
                    </svg>
                </div>
                <div class="card-content">
                    <h3>Artisan Pizzas</h3>
                    <p>Crispy • Cheesy • Irresistible</p>
                    <a href="#" class="card-btn">View Recipes &gt;</a>
                </div>
            </div>

            <div class="card">
                <div class="card-img-container">
                    <svg viewBox="0 0 120 120">
                        <ellipse cx="60" cy="70" rx="45" ry="30" fill="#cccccc" opacity="0.3"/>
                        <ellipse cx="60" cy="68" rx="43" ry="26" fill="#ffffff"/>
                        <circle cx="45" cy="55" r="16" fill="#528731"/>
                        <circle cx="75" cy="52" r="18" fill="#6ba644"/>
                        <circle cx="62" cy="60" r="15" fill="#84bf56"/>
                        <circle cx="42" cy="70" r="7" fill="#a4db78" stroke="#467328" stroke-width="2"/>
                        <circle cx="78" cy="72" r="7" fill="#a4db78" stroke="#467328" stroke-width="2"/>
                        <circle cx="58" cy="46" r="6" fill="#e64c3c"/>
                    </svg>
                </div>
                <div class="card-content">
                    <h3>Organic Greens</h3>
                    <p>Fresh • Natural • Nourishing</p>
                    <a href="#" class="card-btn">View Recipes &gt;</a>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-brand">
                <h2>Tasty Twist</h2>
                <p>123-456-7890<br>info@mysite.com</p>
                <br>
                <p>500 Terry Francine<br>St. San Francisco, CA 94158</p>
            </div>

            <div class="footer-links">
                <h4>Information</h4>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Accessibility Statement</a></li>
                    <li><a href="#">Shipping Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Refund Policy</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h4>Download App</h4>
                <div class="app-downloads">
                    <a href="#" class="app-btn">
                        <i class="fa-brands fa-apple" style="font-size: 20px;"></i>
                        <div class="app-btn-text">
                            <span>Download on the</span>
                            <strong>App Store</strong>
                        </div>
                    </a>
                    <a href="#" class="app-btn">
                        <i class="fa-brands fa-google-play" style="font-size: 18px;"></i>
                        <div class="app-btn-text">
                            <span>Get it on</span>
                            <strong>Google Play</strong>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 by Tasty Twist. Powered and secured by Wix</p>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
            </div>
        </div>
    </footer>

</body>
</html> 