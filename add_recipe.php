<!-- 0 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Delights - Add New Recipe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
           body{
                background:radial-gradient(white,pink);
        }
        
        /* Center optimization grid framework overrides */
        @media (min-width: 992px) {
            .main-workspace {
                display: flex;
                flex-direction: column;
                align-items: center;      
                justify-content: center;   
                min-height: calc(100vh - 48px);
                position: relative;
            }
            .workspace-header, 
            .form-workspace-layout, 
            .studio-footer {
                width: 100%;
                max-width: 800px; 
                z-index: 2;
            }
        }

        /* ✨ ATTRACTIVE PREMIUM RADIAL BACKGROUND HALO */
        .main-workspace::before {
            content: "";
            position: absolute;
            width: 500px;
            height: 500px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: radial-gradient(circle, rgba(255, 74, 112, 0.05) 0%, rgba(244, 242, 240, 0) 70%);
            z-index: 1;
            pointer-events: none;
        }

        /* ✨ HIGH-FIDELITY GLASS CARD DESIGN */
        .glass-form-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 32px;
            padding: 48px;
            border: 1px solid rgba(255, 255, 255, 0.7);
            box-shadow: 0 24px 60px rgba(18, 19, 26, 0.04), 
                        inset 0 1px 0 rgba(255, 255, 255, 0.6);
            transition: transform 0.3s ease;
        }
        
        /* PREMIUM INPUT FIELDS */
        .input-custom {
            font-size: 14px;
            font-weight: 500;
            padding: 14px 18px;
            background: #FAF8F6;
            border: 1px solid rgba(18, 19, 26, 0.06);
            border-radius: 16px;
            color: var(--text-dark);
            transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
        }
        .input-custom:focus {
            background: #FFFFFF;
            border-color: var(--accent-strawberry);
            box-shadow: 0 0 0 5px rgba(255, 74, 112, 0.12),
                        0 8px 16px rgba(255, 74, 112, 0.04);
        }
        
        .tracking-widest-xs {
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            color: var(--text-muted);
        }

        /* REFINED GRADIENT SUBMIT BUTTON */
        .btn-gradient-submit {
            background: linear-gradient(135deg, var(--accent-strawberry) 0%, #ff6b8b 100%);
            color: white !important;
            font-weight: 700;
            border: none;
            padding: 14px 32px;
            border-radius: 16px;
            font-size: 14px;
            box-shadow: 0 8px 24px rgba(255, 74, 112, 0.25);
            transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
        }
        .btn-gradient-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 32px rgba(255, 74, 112, 0.35);
            filter: brightness(1.05);
        }
        .btn-gradient-submit:active {
            transform: translateY(-1px);
        }

        /* REFINED CANCEL/RESET BUTTON */
        .btn-clear-custom {
            font-size: 14px; 
            background: #F4F2F0; 
            border: 1px solid transparent;
            border-radius: 16px;
            padding: 14px 28px;
            font-weight: 600;
            color: var(--text-muted);
            transition: all 0.3s ease;
        }
        .btn-clear-custom:hover {
            background: #EAE8E5;
            color: var(--text-dark);
        }
    </style>
</head>
<body>

<div class="app-container">
    <?php include "sidebar.php"; ?>

    <main class="main-workspace">
        <?php include "header1.php"; ?>

        <section class="form-workspace-layout w-100">
            <div class="glass-form-card w-100">
                <div class="mb-4 pb-2">
                    <h3 style="font-family: 'Clash Display', sans-serif; font-weight: 600; color: var(--text-dark); margin-bottom: 6px; letter-spacing: -0.3px;">Recipe Profile Details</h3>
                    <p style="color: var(--text-muted); font-size: 14px; margin: 0;">Deploy item tracks into your live persistent culinary catalog.</p>
                </div>

                <form action="recipes_data.php" method="POST" enctype="multipart/form-data" class="d-flex flex-column gap-4" name="form1">
                    <div class="row g-4">
                        
                        <div class="col-12 col-sm-12" style="width:100%">
                            <label class="tracking-widest-xs d-block mb-2">Recipe Name</label>
                            <input type="text" name="name" required placeholder="e.g., Strawberry Velvet Cupcakes" class="form-control input-custom w-100">
                        </div>
                            <div class="row g-4">
                        
                       <div class="col-12 col-sm-6">
                            <label class="tracking-widest-xs d-block mb-2">Category</label>
                            <select name="category" class="form-select input-custom w-100">
                                <option value="Chinese">Chinese</option>
                                <option value="Punjabi">Punjabi</option>
                                <option value="Italian">Italian</option>
                                <option value="Mexican">Mexican</option>
                                 <option value="South Indian">South Indian</option>
                                  <option value="Gujrati">Gujrati</option>
                            </select>
                        </div>
                        
                        <div class="col-12 col-sm-6">
                            <label class="tracking-widest-xs d-block mb-2">Recipe Make Time</label>
                            <input type="text" name="rtime" required placeholder="e.g., 45 mins" class="form-control input-custom w-100">
                        </div>
                        
                        <div class="col-12 col-sm-6">
                            <label class="tracking-widest-xs d-block mb-2">Difficulty Level</label>
                            <select name="d_level" class="form-select input-custom w-100">
                                <option value="Easy">Easy</option>
                                <option value="Medium">Medium</option>
                                <option value="Hard">Hard</option>
                            </select>
                        </div>
                        
                        <div class="col-12 col-sm-6">
                            <label class="tracking-widest-xs d-block mb-2">Recipe Image</label>
                            <input type="file" name="image"  required class="form-control input-custom w-100">
                        </div>
                        
                        <div class="col-12">
                            <label class="tracking-widest-xs d-block mb-2">Recipe Description</label>
                            <textarea name="description" rows="5" placeholder="Describe component measurements, timings, and custom culinary procedures..." class="form-control input-custom w-100" required></textarea>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-3 pt-4 mt-2" style="border-top: 1px solid rgba(18, 19, 26, 0.05);">
                        <button type="reset" class="btn btn-clear-custom">Clear Form</button>
                        <button type="submit" class="btn btn-gradient-submit">Publish Recipe</button>
                    </div>
                </form>
            </div>
        </section>

        <?php include "footer1.php"; ?>
    </main>
</div>

</body>
</html>