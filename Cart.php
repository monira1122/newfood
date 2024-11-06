<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
    <title>Shopping Cart</title>
</head>
<body>

    <!-- Header Section -->
    <header class="header">
        <div class="site-title">MKS</div>
        <nav class="nav">
            <a href="#">Home</a>
            <a href="#">Cart</a>
            <a href="#">About</a>
            <a href="#">Login</a>
            <a href="#">Admin Login</a>
        </nav>
    </header>

    <!-- Cart Title -->
    <h1 class="cart-title">Shopping Cart</h1>

    <!-- Main Section -->
    <section class="cart-section">
        <div class="cart-container">
            <div class="cart-items">
                <div class="cart-item">
                    <img src="img/food2(1).jpg" alt="Item Image" class="item-image">
                    <div class="item-details">
                        <h2>Chicken2</h2>
                        <p>Desc: Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        <p>Unit Price: 250.00</p>
                        <div class="qty-section">
                             <label for="cart-qty">Qty</label>
                            <input type="number" id="cart-qty" value="1" min="1">
                       </div>

                    </div>
                    <div class="item-total">1,000.00</div>
                </div>
            </div>

            <div class="total-summary">
                <h2>Total Amount</h2>
                <p>1,000.00</p>
                <button class="checkout-button">Confirm</button>
            </div>
        </div>
    </section>

</body>
</html>
