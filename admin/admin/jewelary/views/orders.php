<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch Orders
$orders = $conn->query("SELECT orders.id, products.name AS product_name, orders.user_name, orders.user_email, orders.quantity, orders.total_price, orders.order_date FROM orders JOIN products ON orders.product_id = products.id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - View Orders</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #333;
            color: #fff;
            padding: 20px;
            box-sizing: border-box;
            float: left;
        }

        .sidebar img {
            width: 100%;
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 10px 0;
        }

        .sidebar a:hover {
            background-color: #555;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            color: black;
            padding-top: 2rem;
            text-align: left;
        }

        .table-container {
            background-color: #fff;
            color: #333;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
        .top-bar {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            left: 15.6rem;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .top-bar input[type="text"] {
            padding: 8px;
            border: none;
            font-size: 16px;
            margin-right: 10px;
            border-radius: 5px;
        }

        .top-bar button {
            padding: 8px 15px;
            background-color: #555;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .top-bar button:hover {
            background-color: #333;
        }

        .top-bar .icons {
            display: flex;
            align-items: center;
        }

        .top-bar .icons i {
            margin-left: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="top-bar">
<div>
            <form action="" method="GET">
                <input type="text" name="search" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </div>

        <div class="icons">
            <i class="fas fa-sun"></i>
            <i class="fas fa-bell"></i>
            <i class="fas fa-user-circle"></i>
        </div>
    </div>
    <div class="sidebar">
        <img src="path/to/your/image.jpg" alt="Logo">
        <a href="./dashboard.php">Dashboard</a>
        <a href="./products.php">Products</a>
        <a href="./orders.php">Orders</a>
        <a href="./customers.php">Customers</a>
    </div>

    <div class="content">
        <div class="header">
            <h5>View Orders</h5>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Product Name</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Order Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $orders->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['product_name'] ?></td>
                            <td><?= $row['user_name'] ?></td>
                            <td><?= $row['user_email'] ?></td>
                            <td><?= $row['quantity'] ?></td>
                            <td><?= $row['total_price'] ?></td>
                            <td><?= $row['order_date'] ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
