<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN - SMA TUGU IBU</title>
</head>

<body>
    <h3>Welcome back, admin!</h3>
    <ul>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="content.php">Content Management</a></li>
        <li><a href="databases.php">Databases Management</a></li>
    </ul>
    <a href="logout.php">Logout</a>

</body>

</html>