<?php
include "../db.php";
include "../nav.php";

$result = mysqli_query($conn, "SELECT * FROM services");
?>
<h2>Services List</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th><th>Service</th><th>Description</th><th>Rate</th><th>Status</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['service_id'] ?></td>
        <td><?= $row['service_name'] ?></td>
        <td><?= $row['description'] ?></td>
        <td><?= $row['hourly_rate'] ?></td>
        <td><?= $row['is_active'] ? 'Active' : 'Inactive' ?></td>
    </tr>
    <?php } ?>
</table>
