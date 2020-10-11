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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/style_index.css">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,600;0,700;1,300&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <title>ADMIN - SMA TUGU IBU</title>
</head>

<body>

    <section id="sidebar">
        <div class="container sidebar">
            <p class="admin">Admin</p>
            <p class="logout">
                <a href="logout.php">Logout</a>
            </p>
            <hr>
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="content.php">Content Management</a></li>
                <li><a href="databases.php">Databases Management</a></li>
            </ul>
        </div>
    </section>

    <section id="topbar">
        <div class="container topbar">
            <h4>Dashboard</h4>
        </div>
        <div class="hamburger">
            <span class="line1"></span>
            <span class="line2"></span>
            <span class="line3"></span>
        </div>
    </section>

    <section id="main">
        <h1>Welcome Back, Admin!</h1>
    </section>

    <script src=" ../lib/bootstrap/js/jquery-3.5.1.min.js"> </script>
    <script src="content-functions/script.js"></script>

</body>

</html>