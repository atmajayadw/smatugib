<?php

require 'lib/functions/functions.php';

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
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,600;0,700;1,300&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="lib/css/style.css">
    <link rel="stylesheet" href="lib/animatecss/animate.css">

    <title>SMA YASPEN TUGU IBU</title>
</head>

<body>

    <section id="navbar">
        <div class="container-fluid navbar">
            <div class="container nav">
                <div class="logo">
                    <a href="/smatugib"><img src="Assets/icon/tugib.png" alt="logo"></a>
                </div>
                <div class="links">
                    <ul>
                        <li><a class="link active" href="/smatugib">Beranda</a></li>
                        <li><a class="link" href="/smatugib/pages/profil">Profil</a></li>
                        <li><a class="link" href="/smatugib/pages/ppdb">PPDB</a></li>
                        <li><a class="link" href="/smatugib/pages/berita">Berita</a></li>
                        <li><a class="link" href="/smatugib/pages/kontak">Kontak</a></li>
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
                            <li><a class="link active" href="/smatugib">Beranda</a></li>
                            <li><a class="link" href="/smatugib/pages/profil">Profil</a></li>
                            <li><a class="link" href="/smatugib/pages/ppdb">PPDB</a></li>
                            <li><a class="link" href="/smatugib/pages/berita">Berita</a></li>
                            <li><a class="link" href="/smatugib/pages/kontak">Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="jumbotron">
        <div class="container jumbo">
            <div class="row">
                <div class="col-md-6 jumbo-left">
                    <img src="Assets/img/tugu_ibu.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 jumbo-right">
                    <p>Selamat Datang di Website Resmi</p>
                    <p>SMA YASPEN TUGU IBU</p>
                    <button class="btn explore-btn" href="#welcome">Explore!</button>
                </div>
            </div>
        </div>
    </section>

    <section id="parallax1">
        <div class="parallax1">
        </div>
    </section>

    <section id="welcome">
        <div class="container welcome">
            <div class="row">
                <div class="col-md-6 welcome-left">
                    <img src="Assets/img/kepsek.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 welcome-right">
                    <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum congue nunc ac ante egestas gravida.
                        Nullam vel sem purus. In hac habitasse platea dictumst.
                        Nunc non libero eu urna convallis efficitur. "
                    </p>
                    <p>Drs. T. Catursas. KJ</p>
                    <p>Kepala Sekolah SMA Yaspen Tugu Ibu 1 Depok</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container about">
            <img src="Assets/icon/bullets5.png" class="bullets one img-fluid" alt="">
            <img src="Assets/icon/bullets4.png" class="bullets two img-fluid" alt="">
            <div class="title">
                <h1>Sekilas Tentang Kami</h1>
            </div>
            <div class="boxes">
                <div class="box one">
                    <img src="Assets/icon/guru.png" alt="">
                    <p class="number">33</p>
                    <p>Guru Bersertifikasi</p>
                </div>
                <div class="box two">
                    <img src="Assets/icon/siswa.png" alt="">
                    <p class="number">40</p>
                    <p>Jumlah Siswa <br> Per Kelas</p>
                </div>
                <div class="box three">
                    <img src="Assets/icon/kelulusan.png" alt="">
                    <p class="number">100</p>
                    <p>Persen<br>Tingkat Kelulusan</p>
                </div>
            </div>
            <img src="Assets/icon/bullets5.png" class="bullets three img-fluid" alt="">
            <img src="Assets/icon/bullets4.png" class="bullets four img-fluid" alt="">
        </div>
    </section>

    <section id="parallax2">
        <div class="parallax2">
        </div>
    </section>

    <section id="news">
        <h1>Berita Terkini</h1>
        <div class="container news_">
            <?php foreach ($data as $row) : ?>
            <div class="news">
                <img src="admin/db-img/<?= $row["foto"]; ?>" alt="">
                <a href="pages/artikel?a=<?= str_replace(' ', '-', $row["judul"]); ?>" class="title">
                    <p><?= $row["judul"]; ?></p>
                </a>
                <div class="news-footer">
                    <p class="date"><?= $row["tanggal"]; ?></p>
                    <a href="pages/artikel?a=<?= str_replace(' ', '-', $row["judul"]); ?>" class="see-more">Lihat
                        Selengkapnya!</a>
                </div>

            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="slideshow">
        <div class="container slideshow">
            <img src="Assets/icon/bullets1.png" class="bullets one img-fluid" alt="">
            <div class="display">
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <img src="Assets/img/slideshow/1.jpg" class="slides img-fluid" alt="">
                <img src="Assets/img/slideshow/2.jpg" class="slides img-fluid" alt="">
                <img src="Assets/img/slideshow/3.jpg" class="slides img-fluid" alt="">
                <img src="Assets/img/slideshow/4.jpg" class="slides img-fluid" alt="">
                <img src="Assets/img/slideshow/5.jpg" class="slides img-fluid" alt="">
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <img src="Assets/icon/bullets1.png" class="bullets two img-fluid" alt="">
            <div class="thumbnails">
                <div class="thumb" onclick="currentSlide(1)">
                    <img src="Assets/img/slideshow/thumbnail1.png" class="img-fluid" alt="">
                </div>
                <div class="thumb" onclick="currentSlide(2)">
                    <img src="Assets/img/slideshow/thumbnail2.png" class="img-fluid" alt="">
                </div>
                <div class="thumb" onclick="currentSlide(3)">
                    <img src="Assets/img/slideshow/thumbnail3.png" class="img-fluid" alt="">
                </div>
                <div class="thumb" onclick="currentSlide(4)">
                    <img src="Assets/img/slideshow/thumbnail4.png" class="img-fluid" alt="">
                </div>
                <div class="thumb" onclick="currentSlide(5)">
                    <img src="Assets/img/slideshow/thumbnail5.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container footer">
            <div class="row">
                <div class="col-md one">
                    <div class="ig">
                        <img src="Assets/icon/instagram.png" alt="">
                        <p>@smatuguibu</p>
                    </div>
                    <div class="email">
                        <img src="Assets/icon/email.png" alt="">
                        <p>smatuguibu@mail.com</p>
                    </div>
                    <div class="phone">
                        <img src="Assets/icon/phone.png" alt="">
                        <p>(021) 7701264</p>
                    </div>
                </div>
                <div class="col-md two">
                    <img src="Assets/icon/tugib.png" alt="">
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
    <script src=" lib/bootstrap/js/jquery.js"> </script>
    <script src="lib/bootstrap/js/popper.js">
    </script>
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <!--  -->

    <!-- Optional JavaScript -->
    <script src="lib/wowjs/wow.min.js"></script>
    <script src="lib/jqueryeasing/jquery.easing.1.3.js"></script>
    <script src="lib/js/script.js"></script>

</body>

</html>