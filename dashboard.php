<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
<h2>Welcome <?php echo $_SESSION['username']; ?> 🎉</h2>

<p>This is a protected page.</p>

<a href="logout.php">Logout</a>
</div>
</body>
</html>