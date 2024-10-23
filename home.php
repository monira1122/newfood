<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Food Ordering System</title>
    <link rel="stylesheet" href="home.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <li><a href="#" class="active"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="order.php"><i class="fas fa-receipt"></i> Orders</a></li>
            <li><a href="#"><i class="fas fa-utensils"></i> Menu</a></li>
            <li><a href="#"><i class="fas fa-list"></i> Category List</a></li>
            <li><a href="#"><i class="fas fa-users"></i> Users</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Site Settings</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <header>
            <h1>Welcome back, Administrator!</h1>
            <!-- Administrator Button -->
            <div class="admin-button">
                <a href="rough.php" class="admin-link">
                    <i class="fas fa-power-off"></i> Administrator
                </a>
            </div>
        </header>

        <!-- Dashboard Stats -->
        <section class="stats">
            <div class="card">
                <h3>Total Active Menu</h3>
                <p>6</p>
                <button class="view-btn">View</button>
            </div>
            <div class="card">
                <h3>Total Inactive Menu</h3>
                <p>0</p>
                <button class="view-btn">View</button>
            </div>
            <div class="card">
                <h3>Orders for Verification</h3>
                <p>1</p>
                <button class="view-btn">View</button>
            </div>
            <div class="card">
                <h3>Confirmed Orders</h3>
                <p>2</p>
                <button class="view-btn">View</button>
            </div>
        </section>
    </div>
</body>
</html>
