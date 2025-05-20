<?php
session_start();
if (!isset($_SESSION['authenticated'])) {
    header('Location: /login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Aswin</title>
</head>
<body>

    <h1>Assignment 1</h1>

    <p>Welcome, <?= htmlspecialchars($_SESSION['username']) ?></p>

    <p>Today is <?= date('l, F j, Y') ?></p>

    <footer>
        <p><a href="/logout.php">Logout</a></p>
    </footer>

</body>
</html>
