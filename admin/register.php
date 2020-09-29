<?php

require 'functions.php';

if (isset($_POST["register"])) {

    if (register($_POST) > 0) {
        echo "<script>
        alert('admin baru berhasil ditambahkan');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SMA TUGU IBU</title>
    <style>
    label {
        display: block;
    }
    </style>
</head>

<body>
    <h1>Halaman Registrasi</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="name">Nama :</label>
                <input type="text" name="name" id="name">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="phone">Telepon :</label>
                <input type="text" name="phone" id="phone">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Konfirmasi password :</label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">Daftar!</button>
            </li>
        </ul>

    </form>
</body>

</html>