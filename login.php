<?php
session_start();
require_once 'user.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = new User();
    if ($user->login($_POST['username'], $_POST['password'])) {
        $_SESSION['username'] = $_POST['username'];
        header("Location: index.php");
        exit;
    } else {
        $message = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
  <h2>Login</h2>
  <form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Login">
  </form>
  <p><?= $message ?></p>
  <p>Don't have an account? <a href="register.php">Register here</a></p>
</body>
</html>
