<?php

session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'content-functions/functions.php';

// ambil data dari tabel / query data
$data = query("SELECT * FROM content");

if (isset($_POST["search"])) {
    $data = search($_POST["keyword"]);
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
    <link rel="stylesheet" type="text/css" href="style/style_content.css">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,600;0,700;1,300&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <title>CONTENT MANAGEMENT - SMA TUGU IBU</title>
</head>

<body>
    <section id="topbar">
        <div class="container topbar">
            <h4>Content Management</h4>
        </div>
        <div class="hamburger">
            <span class="line1"></span>
            <span class="line2"></span>
            <span class="line3"></span>
        </div>
    </section>

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

    <section id="main">
        <div class="container main">
            <div class="container menu">
                <div class="add">
                    <a href="content-functions/add.php"><span>Tambah Konten</span></a>
                </div>
                <div class="search">
                    <form action="" method="post">
                        <input type="text" name="keyword" class="searchbar" autofocus
                            placeholder="masukkan keyword pencarian" autocomplete="off" id="keyword">
                        <img src="style/img/loader.gif" class="loader">
                    </form>
                </div>
            </div>
            <br>
            <div class="container table" id="table">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Judul</th>
                        <th>Editor</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>

                    <?php $i = 1; ?>
                    <?php foreach ($data as $row) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row["tanggal"]; ?></td>
                        <td><?= $row["judul"]; ?></td>
                        <td><?= $row["editor"]; ?></td>
                        <td><img src="db-img/<?= $row["foto"]; ?>" alt="" width="100px"></td>
                        <td>
                            <a href="content-functions/update.php?id=<?= $row["id"]; ?>">edit</a> |
                            <a href="content-functions/delete.php?id=<?= $row["id"]; ?>"
                                onclick="return confirm('Yakin menghapus data?');">hapus</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>

                </table>
            </div>
        </div>
    </section>



    <script src=" ../lib/bootstrap/js/jquery-3.5.1.min.js"> </script>
    <script src="content-functions/script.js"></script>

</body>

</html>