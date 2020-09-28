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