<?php

require 'functions.php';

$id = $_GET["id"];

//query berdasarkan id
$content = query("SELECT * FROM content WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    if (update($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil diedit!');
        document.location.href = '../content.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diedit!');
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
    <title>Edit Konten - SMA TUGU IBU</title>
</head>

<body>
    <h2>Edit Konten</h2>
    <a href="../content.php">Kembali</a>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $content["id"]; ?>">

        <ul>
            <li>
                <label for="tanggal">TANGGAL : </label>
                <input type="date" name="tanggal" id="tanggal" placeholder="yyyy-mm-dd" required
                    value="<?= $content["tanggal"]; ?>">
            </li>
            <li>
                <label for="judul">JUDUL : </label>
                <input type="text" name="judul" id="judul" required value="<?= $content["judul"]; ?>">
            </li>
            <li>
                <label for="editor">EDITOR : </label>
                <input type="text" name="editor" id="editor" required value="<?= $content["editor"]; ?>">
            </li>
            <li>
                <label for="isi">ISI : </label>
                <textarea name="isi" id="isi" rows="20" cols="100" required>
                <?= $content["isi"]; ?>
                </textarea>
            </li>
            <li>
                <label for="foto">FOTO : </label>
                <input type="text" name="foto" id="foto" required value="<?= $content["foto"]; ?>">>
            </li>
            <li>
                <button type="submit" name="submit">Edit data!</button>
            </li>
        </ul>
    </form>

</body>

</html>