<?php
// Show all PHP errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection and navigation
include "../db.php";
include "../nav.php";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $sql = "INSERT INTO clients (full_name, email, phone, address, created_at) 
            VALUES ('$full_name', '$email', '$phone', '$address', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color: green;'>New client added successfully!</p>";
    } else {
        echo "<p style='color: red;'>Error: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Client</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <h1>Add New Client</h1>

  <form method="POST" action="">
    <label for="full_name">Full Name:</label>
    <input type="text" name="full_name" id="full_name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone">

    <label for="address">Address:</label>
    <input type="text" name="address" id="address">

    <button type="submit">Add Client</button>
  </form>
</body>
</html>
