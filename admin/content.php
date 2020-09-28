<?php

require 'content-functions/functions.php';

// ambil data dari tabel / query data
$data = query("SELECT * FROM content");

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
    <a href="content-functions/content-add.php"> Tambah Konten</a>

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
                <a href="">ubah</a> |
                <a href="content-functions/content-delete.php?id=<?= $row["id"]; ?>"
                    onclick="return confirm('Yakin menghapus data?');">hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>

</html>