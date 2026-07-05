<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Delights - View All Recipes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Base page alignment structure */
        body {
            /* background: url('bg-cooking.jpg') no-repeat center center fixed; */
            background-size: cover;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Layout Grid constraints */
        .workspace-wrapper {
            display: flex;
            flex-grow: 1;
        }

        /* Sidebar Styling aligning with your custom design system variables */
        .studio-sidebar {
            background: var(--card-surface, rgba(255, 255, 255, 0.9));
            backdrop-filter: blur(12px);
              height:900px;
            -webkit-backdrop-filter: blur(12px);
            border-right: 1px solid var(--glass-border, rgba(0, 0, 0, 0.1));
            min-width: 280px;
            padding: 30px 24px;
        }

        .sidebar-menu-list {
          
            list-style: none;
            padding: 0;
            margin: 25px 0 0 0;
        }

        .sidebar-menu-item a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            color: var(--text-dark, #333);
            text-decoration: none;
            font-weight: 500;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .sidebar-menu-item a:hover, 
        .sidebar-menu-item.active a {
            background: rgba(107, 29, 56, 0.08);
            color: var(--accent-strawberry, #6b1d38);
            font-weight: 600;
        }

        /* Recipe Grid Card Modifications */
        .recipe-grid-card {
            background: var(--card-surface);
            border-radius: 24px;
            padding: 0;
            border: 1px solid var(--glass-border);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
            transition: transform 0.4s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.4s cubic-bezier(0.25, 1, 0.5, 1);
        }
        .recipe-grid-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }
        .recipe-body-text {
            color: var(--text-muted);
            font-size: 14px;
            line-height: 1.6;
        }
        
        .card-image-container {
            width: 100%;
            height: 200px;
            position: relative;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.05);
        }
        .card-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .card-body-padding {
            padding: 24px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: space-between;
        }
        .image-floating-badges {
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 2;
        }
    </style>
</head>
<body>
    

    <?php include "header1.php"; ?>

    <div class="workspace-wrapper">
        
     
          <?php include "sidebar.php"; ?>

        <main class="container-fluid my-5 px-md-5 flex-grow-1">
            
            <div class="mb-5 text-center text-md-start">
                <h2 class="fw-bold m-0 display-6" style="font-family: 'Clash Display', sans-serif; color: var(--text-dark);">The Recipe Collection</h2>
                <p class="text-muted m-0 small mt-1">Inspecting active structural recipe parameters distributed via internal nodes.</p>
            </div>

            <section class="recipe-showcase-section">
                <div class="row g-4 justify-content-center">
                    
                    <?php
                        // Pre-seeded records assigned high-fidelity imagery metrics
                        $recipes = [
                            [
                                "title" => "Strawberry Velvet Cupcakes", 
                                "group" => "Italian", 
                                "emoji" => "🍕", 
                                "image" => "https://images.unsplash.com/photo-1576618148400-f54bed99fcfd?auto=format&fit=crop&w=600&q=80",
                                "desc" => "Infused with rich fresh strawberry reduction layers, topped with airy vanilla whipped cream-cheese frostings."
                            ],
                            [
                                "title" => "Butter Paneer Premium Masala", 
                                "group" => "Punjabi", 
                                "emoji" => "🫓", 
                                "image" => "https://images.unsplash.com/photo-1631452180519-c014fe946bc7?auto=format&fit=crop&w=600&q=80",
                                "desc" => "Classic rich cashew-tomato gravy simmered slowly with roasted cottage cheese cubes and artisan spices."
                            ],
                            [
                                "title" => "Sizzling Szechuan Wok Noodles", 
                                "group" => "Chinese", 
                                "emoji" => "🍲", 
                                "image" => "https://images.unsplash.com/photo-1585032226651-759b368d7246?auto=format&fit=crop&w=600&q=80",
                                "desc" => "Fiery hand-pulled farm noodles tossed instantly inside premium chili oils with crunchy green garden vegetables."
                            ],
                            [
                                "title" => "Smoked Avocado Street Tacos", 
                                "group" => "Mexican", 
                                "emoji" => "🌮", 
                                "image" => "https://images.unsplash.com/photo-1565299585323-38d6b0865b47?auto=format&fit=crop&w=600&q=80",
                                "desc" => "Crisp organic stone corn shells paired over hand-mashed avocado mashes and freshly picked red pepper rings."
                            ]
                        ];

                        // Evaluate input entries from layout actions
                        if(!empty($_POST['recipe_name'])) {
                            $uploadedImage = "https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=600&q=80"; // Fallback placeholder
                            
                            if(isset($_FILES['recipe_image']) && $_FILES['recipe_image']['error'] == 0) {
                                $target_dir = "uploads/";
                                if(!is_dir($target_dir)){
                                    mkdir($target_dir, 0777, true);
                                }
                                $target_file = $target_dir . time() . "_" . basename($_FILES["recipe_image"]["name"]);
                                if(move_uploaded_file($_FILES["recipe_image"]["tmp_name"], $target_file)) {
                                    $uploadedImage = $target_file;
                                }
                            }

                            $newRecipe = [
                                "title" => htmlspecialchars($_POST['recipe_name']),
                                "group" => isset($_POST['difficulty_level']) ? htmlspecialchars($_POST['difficulty_level']) : "General",
                                "emoji" => "✨", 
                                "image" => $uploadedImage,
                                "desc" => htmlspecialchars($_POST['recipe_description'])
                            ];
                            array_unshift($recipes, $newRecipe);
                        }

                        foreach($recipes as $index => $item) {
                            echo '
                            <div class="col-xl-3 col-md-6 col-sm-12">
                                <div class="recipe-grid-card">
                                    
                                    <div class="card-image-container">
                                        <div class="image-floating-badges">
                                            <span class="badge text-bg-light shadow-sm" style="font-size: 11px; font-weight: 700; text-transform: uppercase;">'.$item['group'].'</span>
                                            <span style="font-size: 24px;">'.$item['emoji'].'</span>
                                        </div>
                                        <img src="'.$item['image'].'" alt="'.htmlspecialchars($item['title']).'">
                                    </div>

                                    <div class="card-body-padding">
                                        <div>
                                            <h4 style="font-family: \'Clash Display\', sans-serif; font-weight: 600; font-size: 19px; color: var(--text-dark);">'.$item['title'].'</h4>
                                            <p class="recipe-body-text mt-2">'.$item['desc'].'</p>
                                        </div>
                                        
                                        <div class="d-flex justify-content-between align-items-center mt-3 pt-3" style="border-top: 1px solid var(--glass-border);">
                                            <a href="#" style="color: var(--accent-strawberry); text-decoration:none; font-size:13px; font-weight:700;">delete</a>
                                            <a href="#" style="color: var(--accent-strawberry); text-decoration:none; font-size:13px; font-weight:700;">Edit Card →</a>
                                        </div>
                                    </div>

                                </div>
                            </div>';
                        }
                    ?>

                </div>
            </section>

        </main>
    </div>

    <?php include "footer1.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>