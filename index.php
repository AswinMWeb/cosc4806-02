<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

<h1>Welcome to Your Login System</h1>

    <?php
    if (isset($_SESSION['username'])) {
        echo '<p>Hello, ' . $_SESSION['username'] . '! <a href="logout.php">Logout</a></p>';
    } else {
        echo '<p><a href="login.php">Login</a> | <a href="register.php">Register</a></p>';
    }
    ?>


</body>
</html>
