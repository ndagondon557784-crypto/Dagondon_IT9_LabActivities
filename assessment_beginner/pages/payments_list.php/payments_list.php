<?php
include "../db.php";
include "../nav.php";

$result = mysqli_query($conn, "SELECT * FROM payments");
?>
<h2>Payments List</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th><th>Booking ID</th><th>Amount</th><th>Method</th><th>Date</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['payment_id'] ?></td>
        <td><?= $row['booking_id'] ?></td>
        <td><?= $row['amount_paid'] ?></td>
        <td><?= $row['method'] ?></td>
        <td><?= $row['payment_date'] ?></td>
    </tr>
    <?php } ?>
</table>
