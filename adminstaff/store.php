<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Store</title>
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
    <section class="stock-info">
        <div class="header-container">
            <h2>Stock Information</h2>
            <input type="text" id="search-bar" placeholder="Search by Item" onkeyup="searchTable()">
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody id="stock-table-body">
                <tr data-id="1">
                    <td>1</td>
                    <td>001</td>
                    <td>Item A</td>
                    <td>100</td>
                    <td>$10.00</td>
                    <td><a href="edit_stock.html?item=Item%20A">Edit</a></td>
                </tr>
                <tr data-id="2">
                    <td>2</td>
                    <td>002</td>
                    <td>Item B</td>
                    <td>150</td>
                    <td>$15.00</td>
                    <td><a href="edit_stock.html?item=Item%20B">Edit</a></td>
                </tr>
                <tr data-id="3">
                    <td>3</td>
                    <td>003</td>
                    <td>Item C</td>
                    <td>200</td>
                    <td>$20.00</td>
                    <td><a href="edit_stock.html?item=Item%20C">Edit</a></td>
                </tr>
            </tbody>
        </table>
    </section>
</main>
</body>
</html>