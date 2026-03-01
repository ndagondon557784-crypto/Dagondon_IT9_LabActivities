<?php
// Database connection settings
$servername = "localhost";   // XAMPP default
$username   = "root";        // XAMPP default user
$password   = "";            // XAMPP default has no password
$dbname     = "assessment_db"; // <-- change to your actual database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
