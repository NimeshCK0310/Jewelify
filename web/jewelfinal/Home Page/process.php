<?php
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
$email = $_POST['email'];
$pass = $_POST['password'];

// Hash the password for security
$hashed_password = password_hash($pass, PASSWORD_DEFAULT);

// Insert the data into the database
$sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('sign in successfull '); window.location.href = 'login.html';</script>";
} else {
    echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.history.back();</script>";
}

$conn->close();
?>
