<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management</title>
    <link rel="stylesheet" href="order.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <nav class="sidebar">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Category List</a></li>
                <li><a href="#">Users</a></li>
                <li><a href="#">Site Settings</a></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="main-content">
            <h1>Order Management</h1>
            <table class="order-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>James Smith</td>
                        <td>Sample Address</td>
                        <td>jsmith@example.com</td>
                        <td>4756463215</td>
                        <td><span class="status confirmed">Confirmed</span></td>
                        <td><button class="view-btn">View Order</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Claire Blake</td>
                        <td>Sample Address</td>
                        <td>cblake@mail.com</td>
                        <td>0912365487</td>
                        <td><span class="status verification">For Verification</span></td>
                        <td><button class="view-btn">View Order</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>