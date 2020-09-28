<?php

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
    <title>Tambah Konten - SMA TUGU IBU</title>
</head>

<body>
    <h2>Tambah Konten</h2>
    <a href="../content.php">Kembali</a>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="tanggal">TANGGAL : </label>
                <input type="date" name="tanggal" id="tanggal" placeholder="yyyy-mm-dd" required>
            </li>
            <li>
                <label for="judul">JUDUL : </label>
                <input type="text" name="judul" id="judul" required>
            </li>
            <li>
                <label for="editor">EDITOR : </label>
                <input type="text" name="editor" id="editor" required>
            </li>
            <li>
                <label for="isi">ISI : </label>
                <textarea name="isi" id="isi" rows="10" cols="30" required></textarea>
            </li>
            <li>
                <label for="foto">FOTO : </label>
                <input type="text" name="foto" id="foto" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah data!</button>
            </li>
        </ul>
    </form>

</body>

</html>