<?php
include "../db.php";
include "../nav.php";

$result = mysqli_query($conn, "SELECT * FROM bookings");
?>
<h2>Bookings List</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th><th>Client ID</th><th>Service ID</th><th>Date</th><th>Hours</th><th>Total Cost</th><th>Status</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['booking_id'] ?></td>
        <td><?= $row['client_id'] ?></td>
        <td><?= $row['service_id'] ?></td>
        <td><?= $row['booking_date'] ?></td>
        <td><?= $row['hours'] ?></td>
        <td><?= $row['total_cost'] ?></td>
        <td><?= $row['status'] ?></td>
    </tr>
    <?php } ?>
</table>
