<?php
// Show all PHP errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection and navigation
include "../db.php";
include "../nav.php";

// Query clients table
$sql = "SELECT * FROM clients";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Clients List</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <h1>Clients</h1>

  <table>
    <tr>
      <th>ID</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Address</th>
      <th>Created At</th>
      <th>Actions</th>
    </tr>

    <?php
    if ($result && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["client_id"] . "</td>";
            echo "<td>" . $row["full_name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
            echo "<td>" . $row["address"] . "</td>";
            echo "<td>" . $row["created_at"] . "</td>";
            echo "<td>
                    <a href='clients_edit.php?id=" . $row["client_id"] . "'>Edit</a> |
                    <a href='clients_delete.php?id=" . $row["client_id"] . "'>Delete</a>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>No clients found</td></tr>";
    }
    ?>
  </table>
</body>
</html>
