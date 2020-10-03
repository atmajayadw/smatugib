<?php
require '../content-functions/functions.php';

//ajax live search
$keyword = $_GET["keyword"];
$query = "SELECT * FROM content WHERE
    tanggal LIKE '%$keyword%' OR
    editor LIKE '%$keyword%' OR
    judul LIKE '%$keyword%'
    ";
$data = query($query);


?>

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