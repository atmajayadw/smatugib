<?php

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
    <title>CONTENT MANAGEMENT - SMA TUGU IBU</title>
</head>

<body>
    <h2>Content Management</h2>
    <a href="content-functions/add.php"> Tambah Konten</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian"
            autocomplete="off">
        <button type="submit" name="search">cari</button>
    </form>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>No</td>
            <td>Tanggal</td>
            <td>Judul</td>
            <td>Editor</td>
            <td>Foto</td>
            <td>Aksi</td>
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
</body>

</html>