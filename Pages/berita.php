<?php

require '../lib/functions/functions.php';

// ambil data dari tabel / query data
$data = query("SELECT * FROM content ORDER BY id DESC LIMIT 0,4");

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,600;0,700;1,300&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../lib/css/style_berita.css">
    <link rel="stylesheet" href="../lib/animatecss/animate.css">

    <title>Berita - SMA YASPEN TUGU IBU</title>
</head>

<body>

    <section id="navbar">
        <div class="container-fluid navbar">
            <div class="container nav">
                <div class="logo">
                    <a href="/smatugib"><img src="../Assets/icon/tugib.png" alt="logo"></a>
                </div>
                <div class="links">
                    <ul>
                        <li><a class="link" href="/smatugib">Beranda</a></li>
                        <li><a class="link" href="/smatugib/pages/profil.php">Profil</a></li>
                        <li><a class="link" href="/smatugib/pages/ppdb.php">PPDB</a></li>
                        <li><a class="link active" href="/smatugib/pages/berita.php">Berita</a></li>
                        <li><a class="link" href="/smatugib/pages/kontak.php">Kontak</a></li>
                    </ul>
                </div>
                <div class="container sidebar">
                    <div class="hamburger">
                        <span class="line1"></span>
                        <span class="line2"></span>
                        <span class="line3"></span>
                    </div>
                    <div class="links">
                        <ul>
                            <li><a class="link" href="/smatugib">Beranda</a></li>
                            <li><a class="link" href="/smatugib/pages/profil.php">Profil</a></li>
                            <li><a class="link" href="/smatugib/pages/ppdb.php">PPDB</a></li>
                            <li><a class="link active" href="/smatugib/pages/berita.php">Berita</a></li>
                            <li><a class="link" href="/smatugib/pages/kontak.php">Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="jumbotron">
        <div class="container jumbo">
            <img src="../Assets/bg/berita_jumbo.png" alt="" class="img-fluid">
            <a class="btn-scroll" href="#news">
                <span>
                    &#10095;
                </span>
            </a>
        </div>
    </section>

    <section id="news">
        <h1>Berita Terkini</h1>
        <div class="container news_">
            <?php foreach ($data as $row) : ?>
            <div class="news">
                <img src="../admin/db-img/<?= $row["foto"]; ?>" alt="">
                <p class="title"><?= $row["judul"]; ?></p>
                <p class="date"><?= $row["tanggal"]; ?></p>
                <a href="artikel.php?id=<?= $row["id"]; ?>" class="see-more">Lihat Selengkapnya!</a>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="footer">
        <div class="container footer">
            <div class="row">
                <div class="col-md one">
                    <div class="ig">
                        <img src="../Assets/icon/instagram.png" alt="">
                        <p>@smatuguibu</p>
                    </div>
                    <div class="email">
                        <img src="../Assets/icon/email.png" alt="">
                        <p>smatuguibu@mail.com</p>
                    </div>
                    <div class="phone">
                        <img src="../Assets/icon/phone.png" alt="">
                        <p>(021) 7701264</p>
                    </div>
                </div>
                <div class="col-md two">
                    <img src="../Assets/icon/tugib.png" alt="">
                </div>
                <div class="col-md three">
                    <p>Jam Kerja</p>
                    <p>Senin - Kamis : 07.30 - 15.00</p>
                    <p>Jum'at &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : 07.30 - 11.00</p>
                </div>
            </div>
            <p class="copyright">Copyright © 2020 Sma Yaspen Tugu Ibu 1 Depok. All Rights Reserved</p>
        </div>
    </section>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../lib/bootstrap/js/jquery.js"> </script>
    <script src="../lib/bootstrap/js/popper.js">
    </script>
    <script src="../lib/bootstrap/js/bootstrap.js"></script>
    <!--  -->

    <!-- Optional JavaScript -->
    <script src="../lib/wowjs/wow.min.js"></script>
    <script src="../lib/jqueryeasing/jquery.easing.1.3.js"></script>
    <script src="../lib/js/script_berita.js"></script>

</body>

</html>