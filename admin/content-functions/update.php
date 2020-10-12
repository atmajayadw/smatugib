<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit;
}

require 'functions.php';

$id = $_GET["id"];

//query berdasarkan id
$content = query("SELECT * FROM content WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    if (update($_POST) > 0) {
        echo "
        <script>
        alert('Konten berhasil diedit!');
        document.location.href = '../content.php';
        </script>
        ";
    } else {
        echo "
        <script>
        var txt;
        var r = confirm('Batal edit konten?');
        if (r == true) {
            document.location.href = '../content.php';
            alert('data batal diedit!');
        } else {
        } 
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
    <script type="text/javascript" src="../../lib/nicedit/nicEdit.js">
    </script>
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
    <title>Edit Konten - SMA TUGU IBU</title>
</head>

<body>
    <section id="topbar">
        <div class="container topbar">
            <h4>Edit Konten</h4>
        </div>
        <div class="hamburger">
            <span class="line1"></span>
            <span class="line2"></span>
            <span class="line3"></span>
        </div>
    </section>

    <section id="sidebar">
        <div class="container sidebar">
            <div class="head">
                <img src="../../Assets/icon/no-picture.png" alt="admin" width="100px">
                <p class="admin"><?= $_SESSION["username"] ?></p>
                <p class="logout">
                    <a href="../logout.php">Logout</a>
                </p>
            </div>
            <hr>
            <ul>
                <li><a href="../index.php">Dashboard</a></li>
                <li><a href="../content.php" class="active">Content Management</a></li>
                <li><a href="../databases.php">Databases Management</a></li>
            </ul>
        </div>
    </section>

    <section id="main">
        <div class="container main">
            <div class="form-box">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $content["id"]; ?>">
                    <input type="hidden" name="fotolama" value="<?= $content["foto"]; ?>">
                    <ul>
                        <li>
                            <label for="tanggal">TANGGAL : </label><br>
                            <input type="date" name="tanggal" id="tanggal" placeholder="yyyy-mm-dd" required
                                value="<?= $content["tanggal"]; ?>">
                        </li>
                        <li>
                            <label for="judul">JUDUL : </label><br>
                            <input type="text" name="judul" id="judul" required value="<?= $content["judul"]; ?>">
                        </li>
                        <li>
                            <label for="editor">EDITOR : </label><br>
                            <input type="text" name="editor" id="editor" required value="<?= $content["editor"]; ?>">
                        </li>
                        <li>
                            <label for="isi">ISI : </label><br>
                            <textarea name="isi" id="isi" rows="20" cols="75"
                                required><?= $content["isi"]; ?></textarea>
                        </li>
                        <li>
                            <label for="foto">FOTO : </label><br>
                            <img src="../db-img/<?= $content["foto"]; ?>" width="400px">
                            <input type="file" name="foto" id="foto">
                        </li>
                        <li>
                            <button type="submit" name="submit" class="btn btn-success">Edit Konten!</button>
                            <a href="../content.php" class="btn btn-primary">Kembali</a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </section>

</body>

</html>