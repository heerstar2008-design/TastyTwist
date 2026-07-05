<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Delights Dashboard</title>
    <!-- Bootstrap 5.3.3 Grid & Utilities -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Custom Style Sheet -->
    <link rel="stylesheet" href="style.css">
    <style>
        body{
                background:radial-gradient(white,pink);
        }
        
        
    </style>
</head>
<body>
    
<?php 
// 1. Configure Page Control Variables
$page_title = "Sweet Delights - Dashboard";
$current_page = "dashboard"; // Highlights the Dashboard tab in the sidebar
$header_heading = "Dashboard Overview";

// 2. Connect the unified Header (which automatically handles sidebar.php)

?>

<section class="metrics-grid">
    
    </section>

<section class="analytics-split">
    </section>

<div class="app-container">
    
 
    <!-- Unique Glassmorphic Floating Sidebar -->
       <?php

include "sidebar.php";
?>
    <!-- <aside class="floating-sidebar">
        <div class="brand-zone">
            <div class="brand-blob">
                <i class="fa-solid fa-cake-candles"></i>
            </div>
            <div class="brand-text">
                <h3>Tasty Twist</h3>
            </div>
        </div>
         <a href="#" class="nav-pill active">
                <i class="fa-solid fa-chart-pie"></i>
                <span>Dashboard</span>
            </a>

        <nav class="nav-cluster">
           
    <div class="nav-dropdown">
        <a href="#" class="nav-pill">
            <i class="fa-solid fa-book"></i>
            <span>Recipes</span>
            <i class="fa-solid fa-chevron-down ms-auto arrow-icon"></i>
        </a>
        Submenu Links
        <div class="submenu">
            <a href="add_recipe.php" class="submenu-pill">
                <i class="fa-solid fa-plus-circle"></i>
                <span>Add Recipe</span>
            </a>
            <a href="recipes.php" class="submenu-pill">
                <i class="fa-solid fa-list"></i>
                <span>View All Recipes</span>
            </a>
        </div>
    </div>
    <div class="nav-dropdown">
        <a href="#" class="nav-pill">
            <i class="fa-solid fa-book"></i>
            <span>Categories</span>
            <i class="fa-solid fa-chevron-down ms-auto arrow-icon"></i>
        </a>
        <Submenu Links
        <div class="submenu">
            <a href="categories.php" class="submenu-pill">
                <i class="fa-solid fa-plus-circle"></i>
                <span>Add Categories</span>
            </a>
            
        </div>
    </div>
            <a href="user.php" class="nav-pill">
                <i class="fa-solid fa-user"></i>
                <span>User</span>
            </a>
        </nav>
        
        <div class="sidebar-footer-card">
            <p>Ingrediants magic everyday ✨</p>
        </div>
    </aside>   -->

    <!-- Main Workspace -->
    <main class="main-workspace">
        <?php

include "header1.php";
?>
<!--  -->
        <!-- Elegant Minimal Navbar -->
        <!-- <header class="workspace-header">
            <div>
                
                <h1 class="page-main-heading">Dashboard</h1>
            </div>
           
            <div class="chef-profile-trigger">
                <div class="avatar-wrapper">
                    <img src="https://i.pravatar.cc/100?img=5" alt="Chef Headshot">
                    <span class="online-indicator"></span>
                </div>
                <div class="meta">
                    <h6>Admin</h6>
                </div>
            </div>
        </header> -->

        <!-- Dynamic Welcome Banner -->
        <section class="editorial-hero">
            <div class="hero-content">
                <h2>Welcome Back, Admin 👋</h2>
                <p>Your culinary canvas looks sweet today. Here is your operational overview.</p>
            </div>
            <button class="btn-creative">
                <span class="btn-icon"><i class="fa-solid fa-plus"></i></span>
                <a href="add_recipe.php" style="text-decoration:none;"><span class="btn-text">Add Recipe</span></a>
            </button>
        </section>

        <!-- Asymmetric Stats Grid -->
        <section class="stats-showcase">
            <div class="row g-4">
                <div class="col-xl-3 col-sm-6">
                    <div class="organic-card visual-accent-1">
                        <div class="card-top">
                            <span class="card-label">Total Recipes</span>
                            <i class="fa-solid fa-cake-candles icon"></i>
                        </div>
                        <div class="card-bottom">
                            <h2 class="counter-display">48</h2>
                            <span class="trend positive"><i class="fa-solid fa-arrow-up"></i> +4 new</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="organic-card visual-accent-2">
                        <div class="card-top">
                            <span class="card-label">Total Views</span>
                            <i class="fa-regular fa-eye icon"></i>
                        </div>
                        <div class="card-bottom">
                            <h2 class="counter-display">24.5k</h2>
                            <span class="trend positive"><i class="fa-solid fa-arrow-up"></i> +12% growth</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="organic-card visual-accent-3">
                        <div class="card-top">
                            <span class="card-label">Average Rating</span>
                            <i class="fa-solid fa-star icon"></i>
                        </div>
                        <div class="card-bottom">
                            <h2 class="counter-display">4.7</h2>
                            <span class="trend active-stars">★★★★★</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="organic-card visual-accent-4">
                        <div class="card-top">
                            <span class="card-label">Feedback Hub</span>
                            <i class="fa-regular fa-comment icon"></i>
                        </div>
                        <div class="card-bottom">
                            <h2 class="counter-display">362</h2>
                            <span class="trend status-alert">9+ unread</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Deep Analytics & Feed Section -->
         
        <section class="deep-analytics-layout">
            <!-- Split Category Circle Progress -->
            <div class="studio-card feature-category">
                
                <div class="studio-card-header">
                    <h4>Category Distribution</h4>
                </div>
                <div class="studio-card-body align-center">
                    <div class="donut-wrapper">
                        <div class="donut-graphic"></div>
                        <div class="donut-center-text">
                            <h3>48</h3>
                            <span>Items</span>
                        </div>
                    </div>
                    <div class="custom-legends" style="tet-align:center">
                        <div class="legend-row"><td><span class="bullet c-pink"></span> </td><td>Chinese (60%)<span class="bullet c-pink"></span> Punjabi (60%)</td>
                     <td><span class="bullet c-purple"></span> Italian (20%)</td><td><span class="bullet c-purple"></span> Mexican (20%)</td>
                        <td><span class="bullet c-orange"></span> South Indians (20%)</td><span class="bullet c-orange"></span> Gujarati (20%)</div>
                       
                    </div>
                </div>
            </div>

            <!-- Stylized Floating Rating Showcase -->
            <div class="studio-card feature-rating text-center">
                
                <div class="studio-card-header text-start">
                    <h4>Rating Sentiment</h4>
                </div>
                <div class="studio-card-body layout-center">
                    <div class="score-badge-blob">
                        <h1>4.7</h1>
                    </div>
                    <div class="stars-glowing-row my-3">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <p class="sub-text">Overall client satisfaction rate remains exceptionally high this week.</p>
                </div>
            </div>





            <!-- Sleek Feedback Timeline -->
            <div class="studio-card feature-feedback">
                
                <div class="studio-card-header">
                    <h4>Live Testimonials</h4>
                </div>
                <div class="studio-card-body item-timeline">
                    <div class="timeline-post">
                        <div class="avatar-ring">
                            <img src="https://i.pravatar.cc/100?img=1" alt="Sarah">
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <h6>Sarah Johnson</h6>
                                <span class="time">Just now</span>
                            </div>
                            <p class="comment">"Amazing strawberry cupcakes! Will definitely order again."</p>
                        </div>
                    </div>

                    <div class="timeline-post">
                        <div class="avatar-ring">
                            <img src="https://i.pravatar.cc/100?img=8" alt="Michael">
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <h6>Michael Brown</h6>
                                <span class="time">42m ago</span>
                            </div>
                            <p class="comment">"Perfect taste and super airy texture. Highly recommended."</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Clean Editorial Footer -->
        <!-- <footer class="studio-footer">
            <p>&copy; 2026 <strong>Sweet Delights</strong>. All Rights Reserved.</p>
            <p class="designer-tag">Designed with <i class="fa-solid fa-bolt text-warning mx-1"></i> by Flavor Matrix</p>
        </footer> -->

        <?php

include "footer1.php";
?>
<?php 
// 3. Connect the unified Footer
// include('footer.php'); 
?>
    </main>

</div>

</body>
</html>