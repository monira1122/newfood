<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Management - Online Food Ordering System MKS</title>
    <link rel="stylesheet" href="menu_manage.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Category List</a></li>
                <li><a href="#">Users</a></li>
                <li><a href="#">Site Settings</a></li>
            </ul>
        </aside>
        <main class="content">
            <header>
                <h1>Online Food Ordering System V2 - Admin Site</h1>
                <div class="admin-btn">Administrator</div>
            </header>
            <div class="menu-container">
                <div class="menu-form">
                    <h2>Menu Form</h2>
                    <form>
                        <label for="name">Menu Name:</label>
                        <input type="text" id="name" name="menu_name">
                        
                        <label for="description">Menu Description:</label>
                        <textarea id="description" name="menu_description"></textarea>

                        <label for="category">Category:</label>
                        <select id="category" name="category">
                            <option>Best Sellers</option>
                            <option>Meals</option>
                            <option>Drinks</option>
                        </select>

                        <label for="price">Price:</label>
                        <input type="number" id="price" name="price">
                        
                        <label for="image">Image:</label>
                        <input type="file" id="image" name="image">

                        <button type="submit" class="save-btn">Save</button>
                        <button type="reset" class="cancel-btn">Cancel</button>
                    </form>
                </div>

                <div class="menu-list">
                    <h2>Menu List</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Img</th>
                                <th>Name</th>
                                <th>Room</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="img/menu-chicken.jpg" alt="Chicken"></td>
                                <td>Chicken</td>
                                <td>Best Sellers</td>
                                <td>
                                    <button class="edit-btn">Edit</button>
                                    <button class="delete-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="img/menu-sandwitch.jpg" alt="Sandwitch"></td>
                                <td>Sandwitch</td>
                                <td>Best Sellers</td>
                                <td>
                                    <button class="edit-btn">Edit</button>
                                    <button class="delete-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="img/menu-burger.jpg" alt="Burger"></td>
                                <td>Burger</td>
                                <td>Meals</td>
                                <td>
                                    <button class="edit-btn">Edit</button>
                                    <button class="delete-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><img src="img/menu.jpg" alt="Pizza"></td>
                                <td>Pizza</td>
                                <td>Meals</td>
                                <td>
                                    <button class="edit-btn">Edit</button>
                                    <button class="delete-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><img src="img/food1 (7).jpg" alt="Salad"></td>
                                <td>Salad</td>
                                <td>Meals</td>
                                <td>
                                    <button class="edit-btn">Edit</button>
                                    <button class="delete-btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><img src="img/menu-sushi.jpg" alt="Sushi"></td>
                                <td>Sushi</td>
                                <td>Meals</td>
                                <td>
                                    <button class="edit-btn">Edit</button>
                                    <button class="delete-btn">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
