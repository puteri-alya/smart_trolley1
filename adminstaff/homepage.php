<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
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
    <section class="user-info">
        <table>
            <tr>
                <td><strong>ID:</strong></td>
                <td id="user-id">f1005</td>
            </tr>
            <tr>
                <td><strong>Name:</strong></td>
                <td id="user-name">Puteri</td>
            </tr>
            <tr>
                <td><strong>Address:</strong></td>
                <td id="user-address">Kuala Lumpur</td>
            </tr>
        </table>
    </section>

    <section class="company-info">
        <h2>Company Information</h2>
        <div class="company-logo">
            <img src="images/logo_din.png" alt="Company Logo" class="logo">
        </div>
        <table>
            <tr>
                <td><strong>Email:</strong></td>
                <td id="company-email">BorongDInAS@gmail.com</td>
            </tr>
            <tr>
                <td><strong>Phone:</strong></td>
                <td id="company-phone">017-307-3439</td>
            </tr>
            <tr>
                <td><strong>Location:</strong></td>
                <td id="company-location">1,3,5,7,9,11,13,15,17 jalan pauh satu, pusat perniagaan pauh, 02600 Arau, Perlis</td>
            </tr>
        </table>
    </section>
</main>
</body>
</html>