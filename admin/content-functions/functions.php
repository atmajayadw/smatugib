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
    $isi = htmlspecialchars($data["isi"]);

    // upload gambar
    $foto = upload();

    if (!$foto) {
        return false;
    }



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

function update($data)
{
    global $conn;

    //ambil data dari tiap elemen form
    $id = $data["id"];
    $tanggal = htmlspecialchars($data["tanggal"]);
    $judul = htmlspecialchars($data["judul"]);
    $editor = htmlspecialchars($data["editor"]);
    $isi = htmlspecialchars($data["isi"]);
    $fotolama = htmlspecialchars($data["fotolama"]);

    //cek apakah user pilih gambar baru atau tidak
    if ($_FILES['foto']['error'] === 4) {
        $foto = $fotolama;
    } else {
        $path = $_SERVER['DOCUMENT_ROOT'] . '/smatugib/admin/db-img/' . $fotolama;
        unlink($path);
        $foto = upload();
    }


    // query insert data
    $query = "UPDATE content SET
    tanggal = '$tanggal',
    judul = '$judul',
    editor = '$editor',
    isi = '$isi',
    foto = '$foto'
    WHERE id = $id
    ";


    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function search($keyword)
{
    $query = "SELECT * FROM content WHERE
    tanggal LIKE '%$keyword%' OR
    editor LIKE '%$keyword%' OR
    judul LIKE '%$keyword%'
    ";
    return query($query);
}

function upload()
{
    $namafile = $_FILES['foto']['name'];
    $ukuranfile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpname = $_FILES['foto']['tmp_name'];

    //cek ada gambar atau tidak
    if ($error === 4) {
        echo "<script>
    alert('pilih foto dulu');
    </script>";
        return false;
    }

    $ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));

    if (!in_array($ekstensigambar, $ekstensigambarvalid)) {
        echo "<script>
        alert('file harus gambar!');
        </script>";
        return false;
    }

    if ($ukuranfile > 2000000) {
        echo "<script>
        alert('size terlalu besar');
        </script>";
        return false;
    }

    //lolos cek kondisi, gambar siap upload
    //generate nama gambar baru
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;
    move_uploaded_file($tmpname, '../db-img/' . $namafilebaru);

    return $namafilebaru;
}