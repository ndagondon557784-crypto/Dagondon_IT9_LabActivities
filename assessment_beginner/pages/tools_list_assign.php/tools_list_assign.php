<?php
include "../db.php";
include "../nav.php";

$result = mysqli_query($conn, "SELECT * FROM tools");
?>
<h2>Tools List</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th><th>Tool Name</th><th>Total Qty</th><th>Available Qty</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['tool_id'] ?></td>
        <td><?= $row['tool_name'] ?></td>
        <td><?= $row['quantity_total'] ?></td>
        <td><?= $row['quantity_available'] ?></td>
    </tr>
    <?php } ?>
</table>
