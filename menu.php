<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu with Pop-up</title>
    <link rel="stylesheet" href="menu.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="header-content">
            <div class="restaurant-info">
                <img src="img/food.jpg" alt="Restaurant 1" class="restaurant-image">
                <h1 class="restaurant-name">Chunks</h1>
            </div>
            <div class="navbar">
                <a href="rough.php" style="text-decoration: none;">Home</a>
                <a href="#">Cart</a>
                <a href="#">About</a>
                <a href="practice.php" style="text-decoration: none;">Login</a>
                <a href="adminlogin.php" style="text-decoration: none;">Admin Login</a>
            </div>
        </div>
    </header>

    <!-- Menu Section -->
    <h2 class="menu-title">Menu</h2>
    
    <div class="menu-section">
        <div class="food-item">
            <img src="img/foood.jpg" alt="Food 1">
            <h2>Chicken Sandwich</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <a href="#product-details" class="view-btn">View</a>
        </div>
        <div class="food-item">
            <img src="img/menu-sandwitch.jpg" alt="Food 2">
            <h2>Pizza</h2>
            <p>Pepperoni pizza with extra cheese.</p>
            <a href="#product-details" class="view-btn">View</a>
        </div>
        <div class="food-item">
            <img src="img/menu-sushi.jpg" alt="Food 3">
            <h2>Pasta</h2>
            <p>Italian-style pasta with marinara sauce.</p>
            <a href="#product-details" class="view-btn">View</a>
        </div>
        <div class="food-item">
            <img src="img/menu-chicken.jpg" alt="Food 4">
            <h2>Burger</h2>
            <p>Cheeseburger with fries on the side.</p>
            <a href="#product-details" class="view-btn">View</a>
        </div>
        <div class="food-item">
            <img src="img/burger2.jpg" alt="Food 5">
            <h2>Salad</h2>
            <p>Fresh garden salad with vinaigrette.</p>
            <a href="#product-details" class="view-btn">View</a>
        </div>
        <div class="food-item">
            <img src="img/sushi.jpg" alt="Food 6">
            <h2>Sushi</h2>
            <p>Assorted sushi rolls with soy sauce.</p>
            <a href="#product-details" class="view-btn">View</a>
        </div>
        <div class="food-item">
            <img src="img/menu-chicken.jpg" alt="Food 7">
            <h2>Steak</h2>
            <p>Grilled steak with mashed potatoes.</p>
            <a href="#product-details" class="view-btn">View</a>
        </div>
    </div>

    <!-- Pop-up content (right corner) -->
    <div id="product-details" class="popup">
        <div class="popup-content">
            <a href="#" class="close-btn">&times;</a>
            <div class="product-info">
                <h2>Product Details</h2>
                <img src="img/menu-chicken.jpg" alt="Product Image">
                <h3>Chicken2</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard...</p>
                <div class="qty-section">
                    <label for="qty">Qty</label>
                    <input type="number" id="qty" value="1" min="1">
                </div>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
        </div>
    </div>
</body>
</html>
