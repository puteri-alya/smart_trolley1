<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <div class="login-container">
        <div class="header-container">
            <h1>Borong Din AS</h1>
        </div>
        <div class="logo-container">
            <img src="images/logo_din.png" alt="Company Logo" class="logo"> 
        </div>
        <p class="welcome-message">Welcome to the Admin Panel</p>
        <form action="login_process.html" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="forgot-container">
                <a href="forget.html">Forgot Password?</a>
            </div>

            <button type="submit">Login</button>
        </form>

        <div class="signup-container">
            <p>Don't have an account? <a href="signup.html">Sign Up</a></p>
        </div>
    </div>
</body>
</html>