<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
<h2>Login</h2>

<?php
if(isset($_GET['error'])){
    echo "<p style='color:red;'>Invalid Email or Password</p>";
}
?>

<form action="authenticate.php" method="POST">
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit">Login</button>
</form>

<p>Don't have an account? <a href="register.php">Register</a></p>

</div>
</body>
</html>