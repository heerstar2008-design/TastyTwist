<?php
session_start();
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Tasty Twist</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* --- Reset & Variables --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg-color: #e5abd3;
            --primary-color:#dc9791;
            --text-muted: #6b5647;
            --card-bg: #f5aca5 ;
            opacity: var(--card-bg);
            --accent-pink: #421524;
            --font-heading: 'Playfair Display', serif;
            --font-sans: 'Plus Jakarta Sans', sans-serif;
        }

        body {
         background: url('bg-cooking.jpg') no-repeat center center fixed;

            font-family: var(--font-sans);
          color: var(--primary-dark);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
            padding: 2rem 4rem 0 4rem; /* Bottom padding handled by footer */
        }

        /* --- Decorative Vector Graphics (Layered over footer as requested) --- */
        .decor {
            position: absolute;
            pointer-events: none;
            z-index: 20; /* High z-index ensures it sits over sections and footer */
        }
        
        .decor-top-left { top: 20px; left: 20px; width: 180px; height: auto; opacity: 0.9; }
        .decor-top-right { top: 120px; right: 40px; width: 140px; height: auto; opacity: 0.95; }
        .decor-bottom-left { bottom: 40px; left: -10px; width: 260px; height: auto; opacity: 0.95; }
        .decor-bottom-right { bottom: 20px; right: -20px; width: 250px; height: auto; opacity: 0.95; }
        .floating-tomato-slice { top: 140px; left: 14%; width: 80px; transform: rotate(-15deg); }

        /* --- Navigation Layout (Unchanged) --- */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto 1.5rem auto;
            position: relative;
            z-index: 10;
        }

        .logo-container { 
            display: flex; 
            align-items: center; 
            flex: 1; 
        }
        .logo-circle {
            background-color:var(--accent-pink);
            width: 75px; 
            height: 75px; 
            border-radius: 50%; 
            overflow: hidden;
            display: flex; 
            align-items: center; 
            justify-content: center;
            /* box-shadow: 0 4px 12px rgba(105, 27, 49, 0.15); */
           
        }
        .logo-circle img { 
            width: 100%; 
            height: 100%; 
            object-fit: cover; 
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

        /* --- About Content Sections (Gelato-Inspired Layout) --- */
        .about-main {
            max-width: 1300px;
            margin: 0 auto;
            position: relative;
            z-index: 10;
        }

        /* Section 1: Top Hero Banner */
        .story-banner {
            background-color: var(--primary-color);
            color: #fff7ed;
            text-align: center;
            padding: 5rem 2rem;
            border-radius: 32px;
            margin-bottom: 2rem;
        }

        .story-banner .section-label {
            font-size: 1.1rem;
            font-weight: 500;
            opacity: 0.9;
            margin-bottom: 0.5rem;
            display: block;
        }

        .story-banner h2 {
            font-family: var(--font-heading);
            font-size: 4rem;
            font-weight: 700;
        }

        /* Split Screen Block Base */
        .split-block {
            display: grid;
            grid-template-columns: 1fr 1fr;
            border-radius: 32px;
            overflow: hidden;
            margin-bottom: 2rem;
            background-color: #ffffff;
            box-shadow: 0 10px 30px rgba(107, 86, 71, 0.03);
        }

        .split-text-side {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 4rem;
        }

        .split-text-side .section-label {
            font-size: 1.1rem;
            color: var(--accent-pink);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .split-text-side h3 {
            font-family: var(--font-heading);
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .split-text-side p {
            font-size: 1.05rem;
            line-height: 1.7;
            color: var(--text-muted);
            font-weight: 500;
        }

        .split-img-side {
            width: 100%;
            height: 100%;
            min-height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--card-bg);
            padding: 2rem;
        }

        /* SVG Illustrative Plates to keep the clean theme feel */
        .split-img-side svg {
            width: 85%;
            height: auto;
            max-height: 320px;
            filter: drop-shadow(0 12px 24px rgba(0,0,0,0.06));
        }

        /* --- Footer Section --- */
        .site-footer {
            background-color: var(--card-bg);
            padding: 4rem 4rem 2rem 4rem;
            margin-top: 5rem;
            margin-left: -4rem; /* Break out of body container padding */
            margin-right: -4rem;
            border-top: 1.5px solid rgba(105, 27, 49, 0.08);
            position: relative;
            z-index: 5; /* Stays below floating decor graphics */
        }

        .footer-container { max-width: 1300px; margin: 0 auto; display: flex; flex-direction: column; gap: 3rem; }
        .footer-brand { font-family: var(--font-heading); font-size: 3.5rem; font-weight: 700; color: var(--primary-color); line-height: 1; }
        .footer-grid { display: grid; grid-template-columns: 1fr 2fr; gap: 2rem; }
        .footer-column-info { display: flex; flex-direction: column; gap: 1.5rem; font-size: 0.95rem; line-height: 1.6; color: var(--text-muted); font-weight: 500; }
        .footer-links-list { list-style: none; display: flex; flex-direction: column; gap: 0.6rem; }
        .footer-links-list a { text-decoration: none; color: var(--primary-color); font-size: 0.95rem; font-weight: 600; transition: opacity 0.2s; }
        .footer-links-list a:hover { opacity: 0.7; }
        .footer-bottom { display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(105, 27, 49, 0.1); padding-top: 1.5rem; }
        .footer-socials { display: flex; gap: 1.2rem; }
        .footer-socials a { color: var(--primary-color); transition: transform 0.2s ease; }
        .footer-socials a:hover { transform: scale(1.1); }
        .footer-copyright { font-size: 0.85rem; color: var(--text-muted); font-weight: 500; }

        /* --- Responsive Queries --- */
        @media (max-width: 992px) {
            .split-block { grid-template-columns: 1fr; }
            .split-block.reverse { display: flex; flex-direction: column-reverse; }
            .split-text-side { padding: 2.5rem; }
        }

        @media (max-width: 768px) {
            body { padding: 1.5rem 1.5rem 0 1.5rem; }
            .navbar { flex-direction: column; gap: 1.2rem; }
            .logo-container, .search-container, .nav-links { flex: none; width: 100%; justify-content: center; }
            .story-banner h2 { font-size: 2.5rem; }
            .split-text-side h3 { font-size: 2rem; }
            .site-footer { padding: 3rem 1.5rem 1.5rem 1.5rem; margin-left: -1.5rem; margin-right: -1.5rem; }
            .footer-brand { font-size: 2.5rem; }
            .footer-grid { grid-template-columns: 1fr; gap: 2.5rem; }
            .footer-bottom { flex-direction: column-reverse; gap: 1.5rem; text-align: center; }
            .decor { display: none; }
        }
    </style>
</head>
<body>

  


    <header class="navbar">
        <div class="logo-container">
            <div class="logo-circle">
                <img src="logo.png"   alt="Tasty Twist Logo">
            </div>
        </div>


        <nav class="nav-links">
          <a href="user_homepage.php"><i class="fa-solid fa-house"></i> Home</a>
            <a href="user_about.php"><i class="fa-solid fa-circle-info"></i> About</a>
            <a href="user_login1.php"><i class="custom-login-icon"></i> Log in</a>
        </nav>
    </header>

    <main class="about-main">
        
        <section class="story-banner">
            <span class="section-label">Our Story</span>
            <h2>About us</h2>
        </section>

        <section class="split-block">
            <div class="split-img-side">
                <svg viewBox="0 0 120 120">
                    <rect x="15" y="80" width="90" height="30" fill="#a83d61" rx="4"/>
                    <rect x="25" y="40" width="70" height="40" fill="#fff7ed" stroke="#691b31" stroke-width="3"/>
                    <circle cx="45" cy="60" r="8" fill="#e64333"/>
                    <circle cx="75" cy="60" r="8" fill="#fcd14d"/>
                    <line x1="15" y1="95" x2="105" y2="95" stroke="#fff7ed" stroke-width="2"/>
                </svg>
            </div>
            <div class="split-text-side">
                <span class="section-label">Behind The Scenes</span>
                <h3>Our Kitchen</h3>
                <p>This is the space where data science meets classic culinary arts. Our algorithms analyze flavor compounds, textures, and cooking techniques to deliver exact, step-by-step cooking plans tailored uniquely to your available pantry supplies.</p>
            </div>
        </section>

        <section class="split-block reverse">
            <div class="split-text-side">
                <span class="section-label">We Just Love Food!</span>
                <h3>Our Place</h3>
                <p>Tasty Twist was created to minimize global kitchen waste and expand meal choices. We believe that everyone holds the potential to be an exceptional home chef, given the right clever spark of inspiration. Share in our core values and see what your kitchen can achieve.</p>
            </div>
            <div class="split-img-side">
                <svg viewBox="0 0 120 120">
                    <circle cx="60" cy="60" r="45" fill="#de833c" opacity="0.15"/>
                    <circle cx="60" cy="60" r="38" fill="#fff7ed" stroke="#691b31" stroke-width="2"/>
                    <path d="M40,60 Q60,40 80,60" stroke="#a83d61" stroke-width="6" fill="none" stroke-linecap="round"/>
                    <circle cx="60" cy="72" r="8" fill="#9bbd5c"/>
                </svg>
            </div>
        </section>

    </main>

    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-brand">Tasty Twist</div>
            <div class="footer-grid">
                <div class="footer-column-info">
                    <div>
                        <p>123-456-7890</p>
                        <p>info@tastytwist.com</p>
                    </div>
                    <div>
                        <p>500 Terry Francine</p>
                        <p>St. San Francisco, CA 94158</p>
                    </div>
                </div>
                <div class="footer-column-links">
                    <ul class="footer-links-list">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Accessibility Statement</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Refund Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-socials">
                    <a href="#" aria-label="Instagram">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                    </a>
                    <a href="#" aria-label="Facebook">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </a>
                </div>
                <div class="footer-copyright">
                    &copy; 2026 by Tasty Twist. Powered and secured by AI.
                </div>
            </div>
        </div>
    </footer>

</body>
</html> 
 -->


 <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Tasty Twist</title>
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
            background: url('bg-cooking.jpg') no-repeat center center fixed;
            background-size: cover;
            color: var(--primary-dark);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* --- Navbar Styles (Matched Perfectly to Homepage) --- */
        
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

        .icon{
            height:80px;
            width:80px;
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

        /* --- About Section Banner Layout --- */
        .about-hero {
            text-align: center;
            max-width: 800px;
            margin: 40px auto 20px auto;
            padding: 0 20px;
        }

        .about-hero h1 {
            font-size: 5rem;
            font-family: 'Georgia', serif;
            color: var(--primary-dark);
            margin-bottom: 15px;
        }

        .about-hero p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        /* --- Custom Block Content Sections (Replaces mismatched elements) --- */
        .about-main {
            max-width: 1200px;
            margin: 0 auto 50px auto;
            padding: 0 20px;
            flex-grow: 1;
        }

        .split-block {
            display: grid;
            grid-template-columns: 1fr 1fr;
            border-radius: 32px;
            overflow: hidden;
            margin-bottom: 40px;
            background-color: var(--card-pink);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
        }

        .split-text-side {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 3.5rem;
        }

        .split-text-side h3 {
            font-family: 'Georgia', serif;
            font-size: 2.2rem;
            color: var(--primary-dark);
            margin-bottom: 1.2rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .split-text-side p {
            font-size: 1.05rem;
            line-height: 1.7;
            color: var(--primary-dark);
            font-weight: 500;
        }

        .split-img-side {
            width: 100%;
            height: 100%;
            min-height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--card-bg);
            padding: 2.5rem;
        }

        .split-img-side svg {
            max-height: 260px;
            width: 85%;
            height: auto;
            filter: drop-shadow(0 12px 24px rgba(0,0,0,0.06));
        }

        /* --- Footer Section Layout (Matched Perfectly to Homepage) --- */
        footer {
            background-color: #f5aca5;
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

        @media (max-width: 992px) {
            .split-block { grid-template-columns: 1fr; }
            .split-block.reverse { display: flex; flex-direction: column-reverse; }
            .split-text-side { padding: 2.5rem; }
        }

        @media (max-width: 768px) {
            header { flex-direction: column; }
            .about-hero h1 { font-size: 3.5rem; }
            .footer-bottom { flex-direction: column; gap: 15px; text-align: center; }
        }
    </style>
</head>
<body>

    <header>
        <div class="logo-area">
            <div class="logo-circle">
                <img src="logo.png" alt="Logo Icon" class="icon">
            </div>
        </div>

        <nav class="nav-links">
            <a href="user_homepage.php"><i class="fa-solid fa-house"></i> Home</a>
            <a href="user_about.php"><i class="fa-solid fa-circle-info"></i> About</a>
            <a href="user_login.php"><i class="custom-login-icon"></i> Log in</a>
        </nav>
    </header>

    <section class="about-hero">
        <h1>About Us</h1>
        <p>Discover the journey of Tasty Twist, where creative artificial intelligence tools spark everyday home supplies into phenomenal culinary achievements.</p>
    </section>

    <main class="about-main">
        
        <section class="split-block">
            <div class="split-img-side">
                <svg viewBox="0 0 120 120">
                    <rect x="15" y="80" width="90" height="30" fill="#a83d61" rx="4"/>
                    <rect x="25" y="40" width="70" height="40" fill="#fff7ed" stroke="#6b1d38" stroke-width="3"/>
                    <circle cx="45" cy="60" r="8" fill="#e84a3e"/>
                    <circle cx="75" cy="60" r="8" fill="#f2bc3f"/>
                    <line x1="15" y1="95" x2="105" y2="95" stroke="#fff7ed" stroke-width="2"/>
                </svg>
            </div>
            <div class="split-text-side">
                <h3>Our Kitchen</h3>
                <p>This is the space where data science meets classic culinary arts. Our algorithms analyze flavor compounds, textures, and cooking techniques to deliver exact, step-by-step cooking plans tailored uniquely to your available pantry supplies.</p>
            </div>
        </section>

        <section class="split-block reverse">
            <div class="split-text-side">
                <h3>Our Place</h3>
                <p>Tasty Twist was created to minimize global kitchen waste and expand meal choices. We believe that everyone holds the potential to be an exceptional home chef, given the right clever spark of inspiration. Share in our core values and see what your kitchen can achieve.</p>
            </div>
            <div class="split-img-side">
                <svg viewBox="0 0 120 120">
                    <circle cx="60" cy="60" r="45" fill="#de833c" opacity="0.15"/>
                    <circle cx="60" cy="60" r="38" fill="#fff7ed" stroke="#6b1d38" stroke-width="2"/>
                    <path d="M40,60 Q60,40 80,60" stroke="#b84360" stroke-width="6" fill="none" stroke-linecap="round"/>
                    <circle cx="60" cy="72" r="8" fill="#8cb83b"/>
                </svg>
            </div>
        </section>

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
</html> -->











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Tasty Twist</title>
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
            background: url('bg-cooking.jpg') no-repeat center center fixed;
            background-size: cover;
            color: var(--primary-dark);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

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

        /* --- Navbar Styles (Matched Perfectly to Homepage) --- */
        
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
        .icon{
            height:80px;
            width:80px;
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

        /* --- About Section Banner Layout with Float Animation --- */
        .about-hero {
            text-align: center;
            max-width: 800px;
            margin: 60px auto 30px auto;
            padding: 0 20px;
            animation: fadeInDown 1s ease-out forwards;
        }

        .about-hero h1 {
            font-size: 5rem;
            font-family: 'Georgia', serif;
            color: var(--primary-dark);
            margin-bottom: 15px;
            text-shadow: 0 4px 12px rgba(107, 29, 56, 0.1);
        }

        .about-hero p {
            font-size: 1.2rem;
            line-height: 1.7;
            margin-bottom: 30px;
            font-weight: 500;
        }

        /* --- Custom Block Content Sections (Animated & Interactive) --- */
        .about-main {
            max-width: 1100px;
            margin: 0 auto 80px auto;
            padding: 0 20px;
            flex-grow: 1;
        }

        .split-block {
            display: grid;
            grid-template-columns: 1fr 1fr;
            border-radius: 32px;
            overflow: hidden;
            margin-bottom: 50px;
            background-color: var(--card-pink);
            box-shadow: 0 15px 35px rgba(107, 29, 56, 0.08);
            transition: transform 0.4s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.4s ease;
            
            /* Initial state for scroll animation */
            opacity: 0;
            transform: translateY(40px);
        }

        /* Hover lift effects */
        .split-block:hover {
            transform: translateY(-6px);
            box-shadow: 0 22px 45px rgba(107, 29, 56, 0.15);
        }

        /* Scroll Reveal Active State trigger */
        .split-block.reveal-active {
            opacity: 1;
            transform: translateY(0) scale(1);
            transition: opacity 0.8s ease-out, transform 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .split-text-side {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 4rem;
        }

        .split-text-side h3 {
            font-family: 'Georgia', serif;
            font-size: 2.4rem;
            color: var(--primary-dark);
            margin-bottom: 1.2rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .split-text-side p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--primary-dark);
            font-weight: 500;
            opacity: 0.9;
        }

        .split-img-side {
            width: 100%;
            height: 100%;
            min-height: 380px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--card-bg);
            padding: 2.5rem;
            overflow: hidden;
        }

        .split-img-side svg {
            max-height: 260px;
            width: 85%;
            height: auto;
            filter: drop-shadow(0 12px 24px rgba(107, 29, 56, 0.15));
            transition: transform 0.5s ease;
        }

        /* Zoom SVG asset slightly on section hover */
        .split-block:hover .split-img-side svg {
            transform: scale(1.06) rotate(1deg);
        }

        /* --- Keyframe Animations --- */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* --- Footer Section Layout (Matched Perfectly to Homepage) --- */
        footer {
            background-color: #f5aca5;
            backdrop-filter: blur(10px);
            padding: 60px 8% 30px 8%;
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
            letter-spacing: 1px;
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
            transition: opacity 0.2s ease;
        }

        .footer-links ul li a:hover {
            opacity: 0.7;
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
            transition: transform 0.2s ease, background-color 0.2s ease;
        }

        .app-btn:hover {
            transform: translateY(-2px);
            background-color: var(--accent-pink);
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
            transition: transform 0.2s ease;
        }

        .social-icons a:hover {
            transform: scale(1.15);
        }

        /* --- Responsive Viewports --- */
        @media (max-width: 992px) {
            .split-block { grid-template-columns: 1fr; }
            .split-block.reverse { display: flex; flex-direction: column-reverse; }
            .split-text-side { padding: 3rem 2.5rem; }
            .split-img-side { min-height: 300px; }
        }

        @media (max-width: 768px) {
            header { flex-direction: column; }
            .about-hero h1 { font-size: 3.5rem; }
            .footer-bottom { flex-direction: column; gap: 15px; text-align: center; }
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
            <a href="user_homepage.php"><i class="fa-solid fa-house"></i> Home</a>
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

    <section class="about-hero">
        <h1>About Us</h1>
        <p>Discover the journey of Tasty Twist, where creative artificial intelligence tools spark everyday home supplies into phenomenal culinary achievements.</p>
    </section>

    <main class="about-main">
        
        <section class="split-block">
            <div class="split-img-side">
                <svg viewBox="0 0 120 120">
                    <rect x="15" y="80" width="90" height="30" fill="#a83d61" rx="4"/>
                    <rect x="25" y="40" width="70" height="40" fill="#fff7ed" stroke="#6b1d38" stroke-width="3"/>
                    <circle cx="45" cy="60" r="8" fill="#e84a3e"/>
                    <circle cx="75" cy="60" r="8" fill="#f2bc3f"/>
                    <line x1="15" y1="95" x2="105" y2="95" stroke="#fff7ed" stroke-width="2"/>
                </svg>
            </div>
            <div class="split-text-side">
                <h3>Our Kitchen</h3>
                <p>This is the space where data science meets classic culinary arts. Our algorithms analyze flavor compounds, textures, and cooking techniques to deliver exact, step-by-step cooking plans tailored uniquely to your available pantry supplies.</p>
            </div>
        </section>

        <section class="split-block reverse">
            <div class="split-text-side">
                <h3>Our Place</h3>
                <p>Tasty Twist was created to minimize global kitchen waste and expand meal choices. We believe that everyone holds the potential to be an exceptional home chef, given the right clever spark of inspiration. Share in our core values and see what your kitchen can achieve.</p>
            </div>
            <div class="split-img-side">
                <svg viewBox="0 0 120 120">
                    <circle cx="60" cy="60" r="45" fill="#de833c" opacity="0.15"/>
                    <circle cx="60" cy="60" r="38" fill="#fff7ed" stroke="#6b1d38" stroke-width="2"/>
                    <path d="M40,60 Q60,40 80,60" stroke="#b84360" stroke-width="6" fill="none" stroke-linecap="round"/>
                    <circle cx="60" cy="72" r="8" fill="#8cb83b"/>
                </svg>
            </div>
        </section>

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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sections = document.querySelectorAll('.split-block');
            
            const revealOptions = {
                threshold: 0.15,
                rootMargin: "0px 0px -50px 0px"
            };

            const revealObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('reveal-active');
                        // Unobserve once revealed to keep page performance sleek
                        observer.unobserve(entry.target);
                    }
                });
            }, revealOptions);

            sections.forEach(section => {
                revealObserver.observe(section);
            });
        });
    </script>

</body>
</html>

