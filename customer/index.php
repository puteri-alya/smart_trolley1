<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Shopping Trolley - Products</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/scripts.js" defer></script>
</head>
<body>
    <h1>Borong Din AS</h1>
    <input type="text" id="rfid" placeholder="Scan RFID tag" autofocus>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td id="no">--</td>
                <td id="item">--</td>
                <td id="quantity">--</td>
                <td id="price">--</td>
            </tr>
        </tbody>
    </table>

    <div id="total-container">
        <strong>Total: <span id="total">0.00</span></strong>
    </div>

    <div id="button-container">
        <button id="deduct-button" onclick="startDeductMode()">Deduct</button>
        <button id="pay-button" onclick="pay()">Pay</button>
    </div>

    <div id="success-message" style="display: none;">
        <h2>Item Deducted Successfully</h2>
        <p>The item has been successfully deducted.</p>
        <button onclick="location.reload();">Return to Shopping</button>
    </div>
</body>
</html>