<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Category List</title>
    <link rel="stylesheet" href="category.css">
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <nav class="sidebar">
            <div class="sidebar-header">
                <h2>Admin Site</h2>
                <button class="logout-btn"> <a href="rough.php" style="text-decoration: none;">Logout</a></button>
            </div>
            <ul>
                <li><a href="#home"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="order.php"><i class="fas fa-receipt"></i> Orders</a></li>
                <li><a href="menu.php"><i class="fas fa-utensils"></i> Menu</a></li>
                <li><a href="#category-list"><i class="fas fa-list"></i> Category List</a></li>
                <li><a href="#users"><i class="fas fa-users"></i> Users</a></li>
                <li><a href="setting.php"><i class="fas fa-cogs"></i> Site Settings</a></li>
            </ul>
        </nav>
        <div class="main-content">
            <h1>Food Categories</h1>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pizza</td>
                        <td>
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Burger</td>
                        <td>
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Drinks</td>
                        <td>
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Starter</td>
                        <td>
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Appetizer</td>
                        <td>
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more categories as needed -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
