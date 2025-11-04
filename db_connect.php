<?php
$servername = "localhost"; // Use "127.0.0.1" if "localhost" doesn't work
$username = "root"; // Default XAMPP MySQL username
$password = ""; // Leave empty for XAMPP default
$database = "gallery"; // Change this to your actual database name!

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
