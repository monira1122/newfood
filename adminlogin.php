<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Food Delivery System</title>
    <link rel="stylesheet" href="adminlogin.css">
</head>
<body>
    <div class="main-container">
        <div class="container">
            <div class="login-box">
                <h2>Admin Login</h2>
                <form>
                    <div class="user-box">
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="password" id="password" required>
                        <label>Password</label>
                    
                    </div>
                    <div class="button-container">
                        <button type="submit">
                        <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                           <a href="home.php" style="text-decoration: none;">Login</a>
                            
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <script>
        function togglePassword() {
            const passwordField = document.getElementById("password");
            const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
            passwordField.setAttribute("type", type);
        }
    </script>
</body>
</html>
