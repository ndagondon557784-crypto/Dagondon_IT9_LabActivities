<?php
include "../db.php";

$id = intval($_GET['id']); // safety check

// fetch booking details
$sql = "
SELECT b.*, c.full_name AS client_name, s.service_name
FROM bookings b
JOIN clients c ON b.client_id = c.client_id
JOIN services s ON b.service_id = s.service_id
WHERE b.booking_id = $id
";
$get = mysqli_query($conn, $sql);
$booking = mysqli_fetch_assoc($get);

if (isset($_POST['update'])) {
  $status = $_POST['status'];
  $hours = $_POST['hours'];

  // recalc total if hours changed
  $rate = $booking['hourly_rate_snapshot'];
  $total = $rate * $hours;

  mysqli_query($conn, "UPDATE bookings
    SET hours=$hours, total_cost=$total, status='$status'
    WHERE booking_id=$id");

  header("Location: bookings_list.php");
  exit;
}
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Edit Booking</title></head>
<body>
<?php include "../nav.php"; ?>

<h2>Edit Booking</h2>

<form method="post">
  <p><strong>Client:</strong> <?php echo $booking['client_name']; ?></p>
  <p><strong>Service:</strong> <?php echo $booking['service_name']; ?></p>
  <p><strong>Date:</strong> <?php echo $booking['booking_date']; ?></p>

  <label>Hours</label><br>
  <input type="number" name="hours" min="1" value="<?php echo $booking['hours']; ?>"><br><br>

  <label>Status</label><br>
  <select name="status">
    <option value="PENDING" <?php if($booking['status']=="PENDING") echo "selected"; ?>>PENDING</option>
    <option value="PAID" <?php if($booking['status']=="PAID") echo "selected"; ?>>PAID</option>
    <option value="CANCELLED" <?php if($booking['status']=="CANCELLED") echo "selected"; ?>>CANCELLED</option>
  </select><br><br>

  <button type="submit" name="update">Update Booking</button>
</form>
</body>
</html>
