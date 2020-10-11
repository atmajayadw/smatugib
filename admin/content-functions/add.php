<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit;
}

require 'functions.php';

if (isset($_POST["submit"])) {

    if (add($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = '../content.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal ditambahkan!');
        document.location.href = '../content.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../../lib/nicedit/nicEdit.js"></script>
    <script type="text/javascript">
    bkLib.onDomLoaded(function() {
        nicEditors.allTextAreas()
    });
    </script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/style_update_add.css">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,600;0,700;1,300&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <title>Tambah Konten - SMA TUGU IBU</title>
</head>

<body>
    <section id="topbar">
        <div class="container topbar">
            <h4>Tambah Konten</h4>
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
                <a href="../logout.php">Logout</a>
            </p>
            <hr>
            <ul>
                <li><a href="../index.php">Dashboard</a></li>
                <li><a href="../content.php">Content Management</a></li>
                <li><a href="../databases.php">Databases Management</a></li>
            </ul>
        </div>
    </section>

    <!-- <a href="../content.php">Kembali</a> -->
    <section id="main">
        <div class="container main">
            <div class="form-box">
                <form action="" method="POST" enctype="multipart/form-data">
                    <ul>
                        <li>
                            <label for="tanggal">TANGGAL : </label><br>
                            <input type="date" name="tanggal" id="tanggal" placeholder="yyyy-mm-dd" required>
                        </li>
                        <li>
                            <label for="judul">JUDUL : </label><br>
                            <input type="text" name="judul" id="judul" required>
                        </li>
                        <li>
                            <label for="editor">EDITOR : </label><br>
                            <input type="text" name="editor" id="editor" required>
                        </li>
                        <li>
                            <label for="isi">ISI : </label><br>
                            <textarea name="isi" id="isi" rows="20" cols="75" required>
                </textarea>
                        </li>
                        <li>
                            <label for="foto">FOTO : </label><br>
                            <input type="file" name="foto" id="foto" required>
                        </li>
                        <li>
                            <button type="submit" name="submit" class="btn btn-success">Tambah data!</button>
                            <a href="../content.php" class="btn btn-primary">Kembali</a>
                        </li>
                    </ul>
                </form>
            </div>

        </div>

    </section>

    <script src=" ../../lib/bootstrap/js/jquery-3.5.1.min.js"> </script>
    <script src="script.js"></script>

</body>

</html>