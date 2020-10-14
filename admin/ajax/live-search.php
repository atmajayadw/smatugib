<?php
usleep(500000);

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

<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../style/style_content.css">
<link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,600;0,700;1,300&display=swap"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

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
                <a href="content-functions/update.php?id=<?= $row["id"]; ?>">
                    <span class="btn btn-warning btn-edit">Edit</span>
                </a>

                <a href="content-functions/delete.php?id=<?= $row["id"]; ?>"
                    onclick="return confirm('Yakin menghapus data?');">
                    <span class="btn btn-danger btn-delete">Hapus</span>
                </a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</div>