<?php
session_start();

// If not logged in, redirect to login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
</head>
<body>

<?php include "nav.php"; ?>

<h1>Dashboard</h1>

<!-- Welcome message -->
<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>

<p>This is your protected dashboard. Only logged-in users can see this page.</p>

</body>
</html>
