<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>My Kitchen Ingredients</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600;700&family=Quicksand:wght@500;700&display=swap" rel="stylesheet">

<style>
body {
    /* Fun, warm, colorful kitchen gradient background */
    background: linear-gradient(135deg, #FFDEE9 0%, #B5FFFC 100%);
    font-family: 'Quicksand', sans-serif;
    min-height: 100vh;
    padding: 20px 0;
}

/* Floating dashboard card */
.form-box {
    max-width: 850px;
    margin: 30px auto;
    background: rgba(255, 255, 255, 0.93);
    border-radius: 35px;
    padding: 40px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.1);
    backdrop-filter: blur(12px);
    border: 3px solid #ffffff;
}

.title {
    text-align: center;
    font-family: 'Fredoka', sans-serif;
    font-size: 42px;
    font-weight: 700;
    color: #2E7D32;
    text-shadow: 2px 2px 0px #E8F5E9;
    margin-bottom: 5px;
}

/* New Feature: Subtitle / Counter styling */
.subtitle-counter {
    text-align: center;
    font-weight: 700;
    color: #666;
    margin-bottom: 35px;
    font-size: 16px;
}
#globalCount {
    background: #FF5722;
    color: white;
    padding: 3px 12px;
    border-radius: 20px;
    font-size: 14px;
}

/* Colorful Distinct Card Sections */
.section {
    margin-bottom: 25px;
    padding: 25px;
    border-radius: 24px;
    background: #ffffff;
    box-shadow: 0 8px 20px rgba(0,0,0,0.02);
    border-left: 8px solid #ccc;
    transition: transform 0.2s ease;
}
.section:hover {
    transform: translateY(-2px);
}

/* Dynamic color coding per row category */
.section:nth-of-type(1) { border-left-color: #FF7043; background: #FFF3E0; } /* Veggies - Orange */
.section:nth-of-type(2) { border-left-color: #FFA726; background: #FFF8E1; } /* Flour - Yellow Gold */
.section:nth-of-type(3) { border-left-color: #FFEE58; background: #FFFDE7; } /* Powder - Yellow */
.section:nth-of-type(4) { border-left-color: #AB47BC; background: #F3E5F5; } /* Spices - Purple */
.section:nth-of-type(5) { border-left-color: #26A69A; background: #E0F2F1; } /* Dairy - Teal */
.section:nth-of-type(6) { border-left-color: #EC407A; background: #FCE4EC; } /* Other - Pink */

.section h4 {
    font-family: 'Fredoka', sans-serif;
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 15px;
    color: #333;
}

/* Custom Hide Checkboxes */
.tag-check {
    display: none;
}

/* Beautiful Interactive Multi-colored Tags */
.tag-label {
    display: inline-block;
    padding: 10px 20px;
    margin: 6px;
    border-radius: 50px;
    border: 2px solid #ffffff;
    background: #ffffff;
    color: #444;
    cursor: pointer;
    font-weight: 700;
    font-size: 14px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    transition: all 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.tag-label:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
}

/* Color profiles when checkbox gets clicked/active */
#flour1:checked + .tag-label, #flour2:checked + .tag-label, #flour3:checked + .tag-label, #flour4:checked + .tag-label, #flour5:checked + .tag-label {
    background: #E65100; color: #fff; box-shadow: 0 5px 15px rgba(230, 81, 0, 0.4);
}
#pow1:checked + .tag-label, #pow2:checked + .tag-label, #pow3:checked + .tag-label, #pow4:checked + .tag-label {
    background: #FBC02D; color: #000; box-shadow: 0 5px 15px rgba(251, 192, 45, 0.4);
}
#sp1:checked + .tag-label, #sp2:checked + .tag-label, #sp3:checked + .tag-label, #sp4:checked + .tag-label, #sp5:checked + .tag-label {
    background: #7B1FA2; color: #fff; box-shadow: 0 5px 15px rgba(123, 31, 162, 0.4);
}
#d1:checked + .tag-label, #d2:checked + .tag-label, #d3:checked + .tag-label, #d4:checked + .tag-label, #d5:checked + .tag-label {
    background: #00796B; color: #fff; box-shadow: 0 5px 15px rgba(0, 121, 107, 0.4);
}

/* Input Fields styling */
textarea.form-control {
    border-radius: 20px !important;
    border: 2px solid transparent;
    background: #ffffff;
    padding: 15px;
    font-weight: 500;
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.02);
    transition: all 0.3s ease;
}
textarea.form-control:focus {
    background: #ffffff;
    border-color: #2E7D32;
    box-shadow: 0 0 0 4px rgba(46, 125, 50, 0.15);
}

/* Playful energetic Submit Button */
.btn-save {
    background: linear-gradient(45deg, #2E7D32, #4CAF50);
    color: #fff;
    border: none;
    padding: 15px 50px;
    border-radius: 50px;
    font-family: 'Fredoka', sans-serif;
    font-size: 20px;
    font-weight: 600;
    box-sizing: border-box;
    box-shadow: 0 10px 25px rgba(46, 125, 50, 0.35);
    transition: all 0.3s ease;
}
.btn-save:hover {
    transform: scale(1.05) translateY(-2px);
    box-shadow: 0 14px 30px rgba(46, 125, 50, 0.45);
    background: linear-gradient(45deg, #1B5E20, #2E7D32);
}

/* Live dynamic Chips Output Area */
.selected-items {
    max-width: 850px;
    margin: 20px auto;
    text-align: center;
}
.selected-chip {
    display: inline-flex;
    align-items: center;
    background: #2E7D32;
    color: #fff;
    padding: 8px 16px;
    border-radius: 30px;
    margin: 5px;
    font-size: 15px;
    font-weight: 600;
    animation: popIn 0.3s ease forwards;
}
.selected-chip span {
    margin-left: 10px;
    cursor: pointer;
    font-weight: bold;
    background: rgba(0,0,0,0.2);
    border-radius: 50%;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.selected-chip span:hover {
    background: #ff5252;
}

@keyframes popIn {
    0% { transform: scale(0.7); opacity: 0; }
    100% { transform: scale(1); opacity: 1; }
}
</style>

</head>

<body>

<div class="container">

<div class="form-box">

<h2 class="title">🍽 My Kitchen Ingredients</h2>
<div class="subtitle-counter">Fresh items ready: <span id="globalCount">0 Selected</span></div>

<form method="POST" id="kitchenForm">
    <div class="section">
<h4>🥕 Vegetables</h4>
<textarea class="form-control mb-3" rows="3" name="vegetables" placeholder="Tomato, Onion, Potato..."></textarea>
</div>

<div class="section">
<h4>🌾 Flour</h4>
<input type="checkbox" id="flour1" class="tag-check" value="Wheat Flour">
<label class="tag-label" for="flour1">Wheat Flour</label>

<input type="checkbox" id="flour2" class="tag-check" value="Maida">
<label class="tag-label" for="flour2">Maida</label>

<input type="checkbox" id="flour3" class="tag-check" value="Besan">
<label class="tag-label" for="flour3">Besan</label>

<input type="checkbox" id="flour4" class="tag-check" value="Rice Flour">
<label class="tag-label" for="flour4">Rice Flour</label>

<input type="checkbox" id="flour5" class="tag-check" value="Corn Flour">
<label class="tag-label" for="flour5">Corn Flour</label>
</div>

<div class="section">
<h4>🥣 Powder</h4>
<input type="checkbox" id="pow1" class="tag-check" value="Turmeric Powder">
<label class="tag-label" for="pow1">Turmeric Powder</label>

<input type="checkbox" id="pow2" class="tag-check" value="Red Chilli Powder">
<label class="tag-label" for="pow2">Red Chilli Powder</label>

<input type="checkbox" id="pow3" class="tag-check" value="Coriander Powder">
<label class="tag-label" for="pow3">Coriander Powder</label>

<input type="checkbox" id="pow4" class="tag-check" value="Cumin Powder">
<label class="tag-label" for="pow4">Cumin Powder</label>
</div>

<div class="section">
<h4>🌶 Spices</h4>
<input type="checkbox" id="sp1" class="tag-check" value="Cumin">
<label class="tag-label" for="sp1">Cumin</label>

<input type="checkbox" id="sp2" class="tag-check" value="Mustard">
<label class="tag-label" for="sp2">Mustard</label>

<input type="checkbox" id="sp3" class="tag-check" value="Black Pepper">
<label class="tag-label" for="sp3">Black Pepper</label>

<input type="checkbox" id="sp4" class="tag-check" value="Cardamom">
<label class="tag-label" for="sp4">Cardamom</label>

<input type="checkbox" id="sp5" class="tag-check" value="Cinnamon">
<label class="tag-label" for="sp5">Cinnamon</label>
</div>

<div class="section">
<h4>🥛 Dairy Products</h4>
<input type="checkbox" id="d1" class="tag-check" value="Milk">
<label class="tag-label" for="d1">Milk</label>

<input type="checkbox" id="d2" class="tag-check" value="Butter">
<label class="tag-label" for="d2">Butter</label>

<input type="checkbox" id="d3" class="tag-check" value="Paneer">
<label class="tag-label" for="d3">Paneer</label>

<input type="checkbox" id="d4" class="tag-check" value="Cheese">
<label class="tag-label" for="d4">Cheese</label>

<input type="checkbox" id="d5" class="tag-check" value="Curd">
<label class="tag-label" for="d5">Curd</label>
</div>

<div class="section">
<h4>🍯 Other Ingredients</h4>
<textarea class="form-control" rows="3" name="other" placeholder="Write other ingredients..."></textarea>
</div>

<div class="text-center mt-4">
<button class="btn-save" type="submit">Save Ingredients</button>
</div>

</form>

</div>

</div>

<div id="selectedIngredients" class="selected-items"></div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const checkBoxes = document.querySelectorAll('.tag-check');
    const textAreas = document.querySelectorAll('textarea');
    const counterDisplay = document.getElementById('globalCount');
    const displayArea = document.getElementById('selectedIngredients');

    function updateLiveFeatures() {
        let selectedItems = [];
        
        // Gather selected tags
        checkBoxes.forEach(box => {
            if(box.checked) selectedItems.push({ id: box.id, val: box.value });
        });

        // Gather text input data
        textAreas.forEach(area => {
            if(area.value.trim() !== "") {
                let textItems = area.value.split(',').map(i => i.trim()).filter(i => i.length > 0);
                textItems.forEach(item => selectedItems.push({ id: null, val: item }));
            }
        });

        // Update Counter
        counterDisplay.innerText = `${selectedItems.length} Selected`;

        // Render Live Interactive Chips down below
        displayArea.innerHTML = "";
        selectedItems.forEach(item => {
            const chip = document.createElement('div');
            chip.className = "selected-chip";
            chip.innerHTML = `${item.val}`;
            
            // If it belongs to a checkbox tag, support quick uncheck deletion via chip
            if(item.id) {
                const closeBtn = document.createElement('span');
                closeBtn.innerText = "×";
                closeBtn.onclick = () => {
                    document.getElementById(item.id).checked = false;
                    updateLiveFeatures();
                };
                chip.appendChild(closeBtn);
            }
            displayArea.appendChild(chip);
        });
    }

    // Bind event listeners without manipulating configuration structures
    checkBoxes.forEach(el => el.addEventListener('change', updateLiveFeatures));
    textAreas.forEach(el => el.addEventListener('input', updateLiveFeatures));
});
</script>

</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Kitchen Ingredients</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600;700&family=Quicksand:wght@500;700&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #FFDEE9 0%, #B5FFFC 100%);
            font-family: 'Quicksand', sans-serif;
            min-height: 100vh;
        }

        .form-box {
            max-width: 850px;
            background: rgba(255, 255, 255, 0.93);
            border-radius: 35px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.1);
            backdrop-filter: blur(12px);
            border: 3px solid #ffffff;
        }

        .title {
            font-family: 'Fredoka', sans-serif;
            font-size: 42px;
            font-weight: 700;
            color: #2E7D32;
            text-shadow: 2px 2px 0px #E8F5E9;
        }

        .subtitle-counter {
            font-weight: 700;
            color: #666;
            font-size: 16px;
        }
        
        #globalCount {
            background: #FF5722;
            color: white;
            padding: 3px 12px;
            border-radius: 20px;
            font-size: 14px;
        }

        .section {
            border-radius: 24px;
            background: #ffffff;
            box-shadow: 0 8px 20px rgba(0,0,0,0.02);
            border-left: 8px solid #ccc;
            transition: transform 0.2s ease;
        }
        
        .section:hover {
            transform: translateY(-2px);
        }
 .section:nth-of-type(1) { border-left-color: #f17aac; background: #f9cedd; }
        .section:nth-of-type(2) { border-left-color: #FF7043; background: #FFF3E0; }
        .section:nth-of-type(3) { border-left-color: #26A69A; background: #E0F2F1; }
        .section:nth-of-type(4) { border-left-color: #7859f4; background: #bbe3f0; }
        .section:nth-of-type(5) { border-left-color: #AB47BC; background: #F3E5F5; }
        .section:nth-of-type(6) { border-left-color: #FFEE58; background: #FFFDE7; }
        
        
        .section:nth-of-type(7) { border-left-color: #EC407A; background: #FCE4EC; }
        

        .section h4 {
            font-family: 'Fredoka', sans-serif;
            font-size: 22px;
            font-weight: 600;
            color: #333;
        }

        .tag-check {
            display: none;
        }

        .tag-label {
            display: inline-block;
            padding: 10px 20px;
            margin: 6px;
            border-radius: 50px;
            border: 2px solid #ffffff;
            background: #ffffff;
            color: #444;
            cursor: pointer;
            font-weight: 700;
            font-size: 14px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            transition: all 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .tag-label:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        }

        #flour1:checked + .tag-label, #flour2:checked + .tag-label, #flour3:checked + .tag-label, #flour4:checked + .tag-label, #flour5:checked + .tag-label {
            background: #E65100; color: #fff; box-shadow: 0 5px 15px rgba(230, 81, 0, 0.4);
        }
        #pow1:checked + .tag-label, #pow2:checked + .tag-label, #pow3:checked + .tag-label, #pow4:checked + .tag-label {
            background: #FBC02D; color: #000; box-shadow: 0 5px 15px rgba(251, 192, 45, 0.4);
        }
        #sp1:checked + .tag-label, #sp2:checked + .tag-label, #sp3:checked + .tag-label, #sp4:checked + .tag-label, #sp5:checked + .tag-label {
            background: #7B1FA2; color: #fff; box-shadow: 0 5px 15px rgba(123, 31, 162, 0.4);
        }
        #d1:checked + .tag-label, #d2:checked + .tag-label, #d3:checked + .tag-label, #d4:checked + .tag-label, #d5:checked + .tag-label {
            background: #00796B; color: #fff; box-shadow: 0 5px 15px rgba(0, 121, 107, 0.4);
        }
         #c1:checked + .tag-label, #c2:checked + .tag-label, #c3:checked + .tag-label, #c4:checked + .tag-label, #c5:checked + .tag-label, #c6:checked + .tag-label {
            background: #f17aac; color: #fff; box-shadow: 0 5px 15px rgba(38, 216, 196, 0.4);
        }

        textarea.form-control {
            border-radius: 20px !important;
            border: 2px solid transparent;
            background: #ffffff;
            padding: 15px;
            font-weight: 500;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.02);
            transition: all 0.3s ease;
        }
        textarea.form-control:focus {
            background: #ffffff;
            border-color: #2E7D32;
            box-shadow: 0 0 0 4px rgba(46, 125, 50, 0.15);
        }

        .btn-save {
            background: linear-gradient(45deg, #2E7D32, #4CAF50);
            color: #fff;
            border: none;
            padding: 15px 50px;
            border-radius: 50px;
            font-family: 'Fredoka', sans-serif;
            font-size: 20px;
            font-weight: 600;
            box-shadow: 0 10px 25px rgba(46, 125, 50, 0.35);
            transition: all 0.3s ease;
        }
        .btn-save:hover {
            transform: scale(1.05) translateY(-2px);
            box-shadow: 0 14px 30px rgba(46, 125, 50, 0.45);
            background: linear-gradient(45deg, #1B5E20, #2E7D32);
            color: #fff;
        }

        /* Continuous Live Selection Display Box */
        .live-preview-box {
            background: #ffffff;
            border-radius: 25px;
            border: 2px dashed #4CAF50;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .preview-title {
            font-family: 'Fredoka', sans-serif;
            color: #2E7D32;
            font-size: 22px;
            font-weight: 700;
        }

        .selected-items {
            max-width: 850px;
        }
        
        .selected-chip {
            display: inline-flex;
            align-items: center;
            background: #2E7D32;
            color: #fff;
            padding: 8px 16px;
            border-radius: 30px;
            margin: 5px;
            font-size: 15px;
            font-weight: 600;
            animation: popIn 0.3s ease forwards;
        }
        
        .selected-chip span {
            margin-left: 10px;
            cursor: pointer;
            font-weight: bold;
            background: rgba(0,0,0,0.2);
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .selected-chip span:hover {
            background: #ff5252;
        }

        @keyframes popIn {
            0% { transform: scale(0.7); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
    </style>
</head>
<body class="py-4">

<div class="container">
    <div class="form-box mx-auto p-4 p-md-5">

        <h2 class="title text-center mb-1">🍽 My Kitchen Ingredients</h2>
        <div class="subtitle-counter text-center mb-4">
            Fresh items ready: <span id="globalCount">0 Selected</span>
        </div>

        <form method="POST" id="kitchenForm" action="save_ingredients_data.php">

        
              <div class="section p-4 mb-4">
                <h4 class="mb-3">🍔 Food_Category</h4>
                <div class="d-flex flex-wrap">
                    <input type="radio" id="c1" class="tag-check" name="cat" value="Chinese">
                    <label class="tag-label" for="c1">Chinese</label>

                    <input type="radio" id="c2" class="tag-check" name="cat" value="Italian">
                    <label class="tag-label" for="c2">Italian</label>

                    <input type="radio" id="c3" class="tag-check" name="cat" value="Mexican">
                    <label class="tag-label" for="c3">Mexican</label>

                    <input type="radio" id="c4" class="tag-check" name="cat" value="Punjabi">
                    <label class="tag-label" for="c4">Punjabi</label>

                    <input type="radio" id="c5" class="tag-check" name="cat" value="South Indian">
                    <label class="tag-label" for="c5">South Indian</label>
                    
                    <input type="radio" id="c6" class="tag-check" name="cat" value="Gujrati">
                    <label class="tag-label" for="c6">Gujrati</label>
                </div>
            </div>
            
            <div class="section p-4 mb-4">
                <h4 class="mb-3">🥕 Vegetables</h4>
                <textarea class="form-control" rows="3" name="vegetables" placeholder="Tomato, Onion, Potato..."></textarea>
            </div>
            

            <div class="section p-4 mb-4">
                <h4 class="mb-3">🌾 Flour</h4>
                <div class="d-flex flex-wrap">
                    <input type="checkbox" id="flour1" class="tag-check" value="Wheat Flour">
                    <label class="tag-label" for="flour1">Wheat Flour</label>

                    <input type="checkbox" id="flour2" class="tag-check" value="Maida">
                    <label class="tag-label" for="flour2">Maida</label>

                    <input type="checkbox" id="flour3" class="tag-check" value="Besan">
                    <label class="tag-label" for="flour3">Besan</label>

                    <input type="checkbox" id="flour4" class="tag-check" value="Rice Flour">
                    <label class="tag-label" for="flour4">Rice Flour</label>

                    <input type="checkbox" id="flour5" class="tag-check" value="Corn Flour">
                    <label class="tag-label" for="flour5">Corn Flour</label>
                </div>
            </div>

            <div class="section p-4 mb-4">
                <h4 class="mb-3">🥣 Powder</h4>
                <div class="d-flex flex-wrap">
                    <input type="checkbox" id="pow1" class="tag-check" value="Turmeric Powder">
                    <label class="tag-label" for="pow1">Turmeric Powder</label>

                    <input type="checkbox" id="pow2" class="tag-check" value="Red Chilli Powder">
                    <label class="tag-label" for="pow2">Red Chilli Powder</label>

                    <input type="checkbox" id="pow3" class="tag-check" value="Coriander Powder">
                    <label class="tag-label" for="pow3">Coriander Powder</label>

                    <input type="checkbox" id="pow4" class="tag-check" value="Cumin Powder">
                    <label class="tag-label" for="pow4">Cumin Powder</label>
                </div>
            </div>

            <div class="section p-4 mb-4">
                <h4 class="mb-3">🌶 Spices</h4>
                <div class="d-flex flex-wrap">
                    <input type="checkbox" id="sp1" class="tag-check" value="Cumin">
                    <label class="tag-label" for="sp1">Cumin</label>

                    <input type="checkbox" id="sp2" class="tag-check" value="Mustard">
                    <label class="tag-label" for="sp2">Mustard</label>

                    <input type="checkbox" id="sp3" class="tag-check" value="Black Pepper">
                    <label class="tag-label" for="sp3">Black Pepper</label>

                    <input type="checkbox" id="sp4" class="tag-check" value="Cardamom">
                    <label class="tag-label" for="sp4">Cardamom</label>

                    <input type="checkbox" id="sp5" class="tag-check" value="Cinnamon">
                    <label class="tag-label" for="sp5">Cinnamon</label>
                </div>
            </div>

            <div class="section p-4 mb-4">
                <h4 class="mb-3">🥛 Dairy Products</h4>
                <div class="d-flex flex-wrap">
                    <input type="checkbox" id="d1" class="tag-check" value="Milk">
                    <label class="tag-label" for="d1">Milk</label>

                    <input type="checkbox" id="d2" class="tag-check" value="Butter">
                    <label class="tag-label" for="d2">Butter</label>

                    <input type="checkbox" id="d3" class="tag-check" value="Paneer">
                    <label class="tag-label" for="d3">Paneer</label>

                    <input type="checkbox" id="d4" class="tag-check" value="Cheese">
                    <label class="tag-label" for="d4">Cheese</label>

                    <input type="checkbox" id="d5" class="tag-check" value="Curd">
                    <label class="tag-label" for="d5">Curd</label>
                </div>
            </div>



            <div class="section p-4 mb-4">
                <h4 class="mb-3">🍯 Other Ingredients</h4>
                <textarea class="form-control" rows="3" name="other" placeholder="Write other ingredients..."></textarea>
            </div>

          

        <div id="livePreviewBox" class="live-preview-box p-4 mt-3 text-center d-none">
            <h5 class="preview-title mb-3">👀 Selected Ingredients Live Preview:</h5>
            <div id="selectedIngredients" class="selected-items mx-auto"></div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const checkBoxes = document.querySelectorAll('.tag-check');
    const textAreas = document.querySelectorAll('textarea');
    const counterDisplay = document.getElementById('globalCount');
    const displayArea = document.getElementById('selectedIngredients');
    const livePreviewBox = document.getElementById('livePreviewBox');

    function updateLiveFeatures() {
        let selectedItems = [];
        
        // 1. Gather checked checkboxes
        checkBoxes.forEach(box => {
            if(box.checked) selectedItems.push({ id: box.id, val: box.value });
        });

        // 2. Gather text inputs split by comma
        textAreas.forEach(area => {
            if(area.value.trim() !== "") {
                let textItems = area.value.split(',').map(i => i.trim()).filter(i => i.length > 0);
                textItems.forEach(item => selectedItems.push({ id: null, val: item }));
            }
        });

        // 3. Update the Top Counter Badge
        counterDisplay.innerText = `${selectedItems.length} Selected`;

        // 4. Render Live Interactive Chips down below
        displayArea.innerHTML = "";
        
        if(selectedItems.length > 0) {
            livePreviewBox.classList.remove('d-none'); // Show container when items are present
            
            selectedItems.forEach(item => {
                const chip = document.createElement('div');
                chip.className = "selected-chip";
                chip.innerHTML = `${item.val}`;
                
                // If it belongs to a checkbox tag, support quick uncheck deletion via chip
                if(item.id) {
                    const closeBtn = document.createElement('span');
                    closeBtn.innerText = "×";
                    closeBtn.onclick = () => {
                        document.getElementById(item.id).checked = false;
                        updateLiveFeatures();
                    };
                    chip.appendChild(closeBtn);
                }
                displayArea.appendChild(chip);
            });
        } else {
            livePreviewBox.classList.add('d-none'); // Hide if everything is empty
        }
    }

    // Bind real-time input event listeners so everything shows up *before* clicking save
    checkBoxes.forEach(el => el.addEventListener('change', updateLiveFeatures));
    textAreas.forEach(el => el.addEventListener('input', updateLiveFeatures));
});
</script>
  <div class="text-center mt-4 mb-4">
                <button class="btn btn-save" type="submit">Save Ingredients</button>
            </div>

        </form>

</body>
</html>