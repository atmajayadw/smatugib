<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
}

require 'functions.php';

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM data_admin WHERE username = '$username'");

    //cek username
    if (mysqli_num_rows($result) === 1) {
        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            $_SESSION["username"] = $username;
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
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
    <link rel="stylesheet" type="text/css" href="style/style_login.css">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,600;0,700;1,300&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <title>LOGIN - SMA TUGU IBU</title>
</head>

<body>
    <section id="login">
        <div class="container login">
            <div class="form-box">
                <h3>Login Admin</h3>
                <h3>SMA TUGU IBU</h3>
                <?php if (isset($error)) :  ?>
                <p style="color: red; font-style: italic;">Username / password salah!</p>
                <?php endif; ?>

                <form action="" method="post">
                    <ul>
                        <li>
                            <label for="username">Username :</label>
                            <input type="text" name="username" id="username" autocomplete="off">
                        </li>
                        <li>
                            <label for="password">Password :</label>
                            <input type="password" name="password" id="password">
                        </li>
                        <li>
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </section>

</body>

</html>