<?php
session_start();
require_once 'user.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = new User();
    $result = $user->register($_POST['username'], $_POST['password']);
    if ($result === true) {
        $message = "Registration successful! You can now <a href='login.php'>login</a>.";
    } else {
        $message = $result;
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Register</title></head>
<body>
  <h2>Register</h2>
  <form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Register">
  </form>
  <p><?= $message ?></p>
</body>
</html>
