<?php
// Show all PHP errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection and navigation
include "../db.php";
include "../nav.php";

// Get client ID from URL
$id = $_GET["id"];

// Fetch client data
$sql = "SELECT * FROM clients WHERE client_id = $id";
$result = $conn->query($sql);
$client = $result->fetch_assoc();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $sql = "UPDATE clients 
            SET full_name='$full_name', email='$email', phone='$phone', address='$address' 
            WHERE client_id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color: green;'>Client updated successfully!</p>";
    } else {
        echo "<p style='color: red;'>Error: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Client</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <h1>Edit Client</h1>

  <form method="POST" action="">
    <label for="full_name">Full Name:</label>
    <input type="text" name="full_name" id="full_name" value="<?php echo $client['full_name']; ?>" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?php echo $client['email']; ?>" required>

    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" value="<?php echo $client['phone']; ?>">

    <label for="address">Address:</label>
    <input type="text" name="address" id="address" value="<?php echo $client['address']; ?>">

    <button type="submit">Update Client</button>
  </form>
</body>
</html>
