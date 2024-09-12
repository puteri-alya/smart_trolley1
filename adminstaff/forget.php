<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <div class="login-container">
        <div class="header-container">
            <h1>Reset Password</h1>
        </div>
        <form action="reset_password_process.php" method="post">
            <div class="form-group">
                <label for="email">Enter your registered Email or IC No:</label>
                <input type="text" id="email" name="email_or_icno" required>
            </div>
            <button type="submit">Send Reset Link</button>
        </form>
    </div>
</body>
</html>