<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
<header>
    <nav class="menu-box">
        <div class="logo-container">
            <img src="images/logomenu.png" alt="Logo" class="logo-left">
            <span class="site-title">BORONG DIN AS</span>
        </div>
        <div class="menu-right">
            <a href="homepage.html" class="menu-item">Home</a>
            <a href="store.html" class="menu-item">Store</a>
            <div class="dropdown">
                <a href="#" class="menu-item admin-icon">
                    <div class="hamburger">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </a>
                <div class="dropdown-content">
                    <a href="change_password.html" class="menu-item">
                        <i class="fas fa-edit icon"></i> Change Password
                    </a>
                    <a href="logout.html" class="menu-item">
                        <i class="fas fa-sign-out-alt icon"></i> Log Out
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
<main>
    <section class="change-password-form">
        <h2>Change Password</h2>
        <p class="error" style="display: none;">Error message goes here.</p>
        <p class="success" style="display: none;">Success message goes here.</p>
        <form method="POST" action="update_password.html" autocomplete="off">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="admin_username" readonly>

            <label for="current_password">Current Password:</label>
            <input type="password" id="current_password" name="current_password" required autocomplete="current-password">

            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" required autocomplete="new-password">

            <label for="confirm_password">Confirm New Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required autocomplete="new-password">

            <button type="submit">Change Password</button>
        </form>
    </section>
</main>
</body>
</html>