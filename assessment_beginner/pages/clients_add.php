<?php
include "../db.php";
include "../nav.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "INSERT INTO clients (full_name, email, phone, address) 
            VALUES ('$name', '$email', '$phone', '$address')";
    mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Client</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<h2>Add New Client</h2>
<form method="POST" action="">
  <label>Full Name:</label><br>
  <input type="text" name="full_name" required><br><br>

  <label>Email:</label><br>
  <input type="email" name="email" required><br><br>

  <label>Phone:</label><br>
  <input type="text" name="phone" required><br><br>

  <label>Address:</label><br>
  <textarea name="address" required></textarea><br><br>

  <button type="submit">Add Client</button>
</form>
</body>
</html>
