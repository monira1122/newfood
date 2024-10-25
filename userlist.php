<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="userlist.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Category List</a></li>
                <li><a href="#">Users</a></li>
                <li><a href="#">Site Settings</a></li>
            </ul>
        </div>

        <!-- Content Area -->
        <div class="content">
            <header>
                <h1>Online Food Ordering System V2 - Admin Site</h1>
                <button class="new-user-btn">+ New User</button>
            </header>

            <div class="user-management">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Administrator</td>
                            <td>admin</td>
                            <td>
                                <div class="action-btn-group">
                                    <button class="action-btn">Action</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Staff</td>
                            <td>staff</td>
                            <td>
                                <div class="action-btn-group">
                                    <button class="action-btn">Action</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
