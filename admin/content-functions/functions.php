<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "smatugib");

// ambil data dari tabel mahasiswa / query data
$result = mysqli_query($conn, "SELECT * FROM content");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function add($data)
{
    global $conn;

    //ambil data dari tiap elemen form
    $tanggal = htmlspecialchars($data["tanggal"]);
    $judul = htmlspecialchars($data["judul"]);
    $editor = htmlspecialchars($data["editor"]);
    $foto = htmlspecialchars($data["foto"]);
    $isi = htmlspecialchars($data["isi"]);

    // query insert data
    $query = "INSERT INTO content VALUES (null, '$tanggal', '$judul', '$editor', '$foto', '$isi')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function delete($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM content WHERE id = $id");
    return mysqli_affected_rows($conn);
}