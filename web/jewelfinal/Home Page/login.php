<?php
session_start();

$servername = "localhost"; // Your database server
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "shopping_cart1"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$user = $_POST['username'];
$pass = $_POST['password'];

// Fetch user from the database
$sql = "SELECT * FROM users WHERE username='$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verify the password
    if (password_verify($pass, $row['password'])) {
        // Password is correct, start a session
        $_SESSION['username'] = $user;
        echo "Login successful! Welcome, " . $user;
        // Redirect to a protected page
        header("Location: welcome.php");
        exit();
    } else {
        echo "Invalid password.";
    }
} else {
    echo "No user found with that username.";
}

$conn->close();
?>
