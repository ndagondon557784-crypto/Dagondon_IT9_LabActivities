<?php
include "../db.php";
include "../nav.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client_id = $_POST['client_id'];
    $service_id = $_POST['service_id'];
    $date = $_POST['date'];

    $sql = "INSERT INTO bookings (client_id, service_id, booking_date) 
            VALUES ('$client_id', '$service_id', '$date')";
    mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Create Booking</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<h2>Create Booking</h2>
<form method="POST" action="">
  <label>Client ID:</label><br>
  <input type="number" name="client_id" required><br><br>

  <label>Service ID:</label><br>
  <input type="number" name="service_id" required><br><br>

  <label>Date:</label><br>
  <input type="date" name="date" required><br><br>

  <button type="submit">Create Booking</button>
</form>
</body>
</html>
