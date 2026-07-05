<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Delights - User Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Specific User-Grid Component properties mapped from style.css rules */
        .user-directory-section{
    background: #ffffff;
    padding: 30px;
    margin: 20px;
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    border: 1px solid #f2f2f2;
}

.user-directory-section h2{
    font-size: 28px;
    font-weight: 700;
    color: #333;
    margin-bottom: 25px;
}

.table-responsive{
    overflow-x: auto;
}

.user-table{
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
}

.user-table thead{
    background: #ff5c8d;
    color: #fff;
}

.user-table th{
    padding: 16px;
    text-align: left;
    font-size: 15px;
    font-weight: 600;
}

.user-table td{
    padding: 15px;
    border-bottom: 1px solid #ececec;
    color: #555;
}

.user-table tbody tr{
    transition: 0.3s;
}

.user-table tbody tr:hover{
    background: #fff5f8;
}

.table-avatar{
    width: 55px;
    height: 55px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #ff5c8d;
}

.role-badge{
    display: inline-block;
    padding: 6px 14px;
    border-radius: 30px;
    font-size: 12px;
    font-weight: 600;
}

.role-admin{
    background: #ffe3ec;
    color: #e91e63;
}

.role-chef{
    background: #fff4d8;
    color: #d97706;
}

.role-moderator{
    background: #ece8ff;
    color: #6d28d9;
}

@media (max-width:768px){

    .user-directory-section{
        margin: 10px;
        padding: 15px;
    }

    .user-table th,
    .user-table td{
        padding: 12px;
        font-size: 13px;
    }

    .table-avatar{
        width: 45px;
        height: 45px;
    }

}
        .user-profile-card {
            background: var(--card-surface);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            padding: 28px;
            text-align: center;
            position: relative;
            transition: transform 0.4s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.4s cubic-bezier(0.25, 1, 0.5, 1);
        }
        .user-profile-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 35px rgba(18, 19, 26, 0.05);
        }
        .user-avatar-huge {
            width: 84px;
            height: 84px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #FAF8F6;
            box-shadow: 0 4px 12px rgba(18, 19, 26, 0.06);
            margin-bottom: 16px;
        }
        .role-badge {
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            padding: 4px 10px;
            border-radius: 6px;
            display: inline-block;
            margin-bottom: 12px;
        }
        .role-admin { background: #FFF0F2; color: var(--accent-strawberry); }
        .role-moderator { background: #F3EFFF; color: var(--accent-pastry); }
        .role-chef { background: #FFF6E9; color: var(--accent-cookie); }
        
        .user-meta-metric {
            background: #FAF8F6;
            border-radius: 14px;
            padding: 10px;
            font-size: 13px;
            font-weight: 600;
            color: var(--text-dark);
        }
    </style>
</head>
<body>

<div class="app-container">
              <?php

include "sidebar.php";
?>


    <!-- <aside class="floating-sidebar">
        <div class="brand-zone">
            <div class="brand-blob"><i class="fa-solid fa-cake-candles"></i></div>
            <div class="brand-text"><h3>Tasty Twist</h3></div>
        </div>

        <nav class="nav-cluster">
            <a href="index1.php" class="nav-pill">
                <i class="fa-solid fa-chart-pie"></i>
                <span>Dashboard</span>
            </a>
           
            <div class="nav-dropdown">
                <a href="#" class="nav-pill">
                    <i class="fa-solid fa-book"></i>
                    <span>Recipes</span>
                    <i class="fa-solid fa-chevron-down ms-auto arrow-icon"></i>
                </a>
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
                <div class="submenu">
                    <a href="categories.php" class="submenu-pill">
                        <i class="fa-solid fa-plus-circle"></i>
                        <span>Add Categories</span>
                    </a>
                </div>
            </div>

            <a href="users.php" class="nav-pill active">
                <i class="fa-solid fa-user"></i>
                <span>User</span>
            </a>
        </nav>
        
        <div class="sidebar-footer-card">
            <p>Ingredients magic everyday ✨</p>
        </div>
    </aside> -->

    <main class="main-workspace">
                  <?php

include "header1.php";
?>


        <!-- <header class="workspace-header">
            <div>
                <span class="super-title">Control Unit</span>
                <h1 class="page-main-heading">User Administration</h1>
            </div>
            <div class="chef-profile-trigger">
                <div class="avatar-wrapper">
                    <img src="https://i.pravatar.cc/100?img=5" alt="Chef Headshot">
                    <span class="online-indicator"></span>
                </div>
                <div class="meta"><h6>Admin</h6></div>
            </div>
        </header> -->

        <section class="user-directory-section py-2">

    <div class="table-responsive">
        <table class="user-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Activity</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $users = [
                    [
                        "name" => "Sarah Johnson",
                        "role" => "Admin",
                        "badge" => "role-admin",
                        "img" => "https://i.pravatar.cc/100?img=1",
                        "email" => "sarah.j@flavormatrix.com",
                        "activity" => "24 Recipes Published"
                    ],
                    [
                        "name" => "Michael Brown",
                        "role" => "Pastry Chef",
                        "badge" => "role-chef",
                        "img" => "https://i.pravatar.cc/100?img=8",
                        "email" => "m.brown@flavormatrix.com",
                        "activity" => "15 Recipes Published"
                    ],
                    [
                        "name" => "Elena Rostova",
                        "role" => "Moderator",
                        "badge" => "role-moderator",
                        "img" => "https://i.pravatar.cc/100?img=47",
                        "email" => "elena.r@flavormatrix.com",
                        "activity" => "362 Feeds Reviewed"
                    ],
                    [
                        "name" => "Marcus Vance",
                        "role" => "Sous Chef",
                        "badge" => "role-chef",
                        "img" => "https://i.pravatar.cc/100?img=12",
                        "email" => "marcus.v@flavormatrix.com",
                        "activity" => "9 Recipes Published"
                    ]
                ];

                $i = 1;
                foreach ($users as $user) {
                    echo "
                    <tr>
                        <td>$i</td>

                        <td>
                            <img src='{$user['img']}' class='table-avatar'>
                        </td>

                        <td>{$user['name']}</td>

                        <td>
                            <span class='role-badge {$user['badge']}'>
                                {$user['role']}
                            </span>
                        </td>

                        <td>{$user['email']}</td>

                        <td>{$user['activity']}</td>
                    </tr>";
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>

</section>

        <!-- <footer class="studio-footer">
            <p>&copy; 2026 <strong>Sweet Delights</strong>. All Rights Reserved.</p>
            <p class="designer-tag">Designed with <i class="fa-solid fa-bolt text-warning mx-1"></i> by Flavor Matrix</p>
        </footer> -->
                  <?php

include "footer1.php";
?>


    </main>
</div>

</body>
</html>