<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$totalOrders = $conn->query("SELECT COUNT(*) AS totalOrders FROM orders")->fetch_assoc()['totalOrders'];

$totalSalesResult = $conn->query("SELECT SUM(total_price) AS totalSales FROM orders")->fetch_assoc();
$totalSales = $totalSalesResult['totalSales'] ? $totalSalesResult['totalSales'] : 0;


$totalCustomers = $conn->query("SELECT COUNT(*) AS totalCustomers FROM customers")->fetch_assoc()['totalCustomers'];


$dailySalesLabels = [];
$dailySalesData = [];
for ($i = 6; $i >= 0; $i--) {
    $date = date('Y-m-d', strtotime("-$i days"));
    $dailySalesLabels[] = $date;

    $result = $conn->query("SELECT SUM(total_price) AS dailySales FROM orders WHERE DATE(order_date) = '$date'")->fetch_assoc();
    $dailySalesData[] = $result['dailySales'] ? $result['dailySales'] : 0;
}


$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
            height: 150vh;
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

        .summary-widget {
            background-color: #fff;
            color: #333;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .chart {
            background-color: #fff;
            color: #333;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .orders-list {
            background-color: #fff;
            color: #333;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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
            <h5>Admin Dashboard</h5>
        </div>

        <div class="summary-widget">
            <h3>Summary</h3>
            <p>Total Orders: <span id="totalOrders"></span></p>
            <p>Total Sales: $<span id="totalSales"></span></p>
            <p>Total Customers: <span id="totalCustomers"></span></p>
        </div>
        <div class="search-results">
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ecommerce";
                $conn = new mysqli($servername, $username, $password, $dbname);

            if (isset($_GET['search'])) {
                $search = $_GET['search'];

                // Perform search in customers table
                $customersQuery = "SELECT * FROM customers WHERE name LIKE '%$search%' OR email LIKE '%$search%' OR phone LIKE '%$search%'";
                $customersResult = $conn->query($customersQuery);

                // Perform search in orders table
                $ordersQuery = "SELECT * FROM orders WHERE id LIKE '%$search%' OR total_price LIKE '%$search%'";
                $ordersResult = $conn->query($ordersQuery);

                // Perform search in products table
                $productsQuery = "SELECT * FROM products WHERE name LIKE '%$search%' OR description LIKE '%$search%' OR price LIKE '%$search%'";
                $productsResult = $conn->query($productsQuery);

                // Display results
                echo "<h3>Search Results</h3>";

                // Display customers results
                echo "<h4>Customers</h4>";
                while ($row = $customersResult->fetch_assoc()) {
                    echo "<p>Name: " . $row['name'] . ", Email: " . $row['email'] . ", Phone: " . $row['phone'] . "</p>";
                }

                // Display orders results
                echo "<h4>Orders</h4>";
                while ($row = $ordersResult->fetch_assoc()) {
                    echo "<p>Order ID: " . $row['id'] . ", Total Price: $" . $row['total_price'] . "</p>";
                }

                // Display products results
                echo "<h4>Products</h4>";
                while ($row = $productsResult->fetch_assoc()) {
                    echo "<p>Name: " . $row['name'] . ", Description: " . $row['description'] . ", Price: $" . $row['price'] . "</p>";
                }
            }
            ?>
        </div>

        <div class="chart">
            <h3>Daily Sales Chart</h3>
            <canvas id="dailySalesChart" width="400" height="200"></canvas>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
  
        var totalOrders = <?php echo $totalOrders; ?>;
        var totalSales = <?php echo $totalSales; ?>;
        var totalCustomers = <?php echo $totalCustomers; ?>;
        var dailySalesLabels = <?php echo json_encode($dailySalesLabels); ?>;
        var dailySalesData = <?php echo json_encode($dailySalesData); ?>;

        document.getElementById('totalOrders').textContent = totalOrders;
        document.getElementById('totalSales').textContent = totalSales.toFixed(2); 
        document.getElementById('totalCustomers').textContent = totalCustomers;

 
        var ctx = document.getElementById('dailySalesChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: dailySalesLabels,
                datasets: [{
                    label: 'Daily Sales ($)',
                    data: dailySalesData,
                    backgroundColor: 'rgba(0, 123, 255, 0.6)',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return '$' + value;
                            }
                        }
                    }
                }
            }
        });
    });
</script>
    
</body>

</html>
