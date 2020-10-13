// Hamburger menu navbar
const hamburger = document.querySelector('.hamburger');
const span = document.querySelectorAll('.hamburger span');
const sidebar = document.querySelector('.sidebar .links');

hamburger.addEventListener('click', function () {
    sidebar.classList.toggle('active');
    span[0].classList.toggle('show1');
    span[1].classList.toggle('show2');
    span[2].classList.toggle('show3');
    if (sidebar.classList.contains('active')) {
        document.body.style.overflow = "hidden";
    } else {
        document.body.style.overflow = "auto";
    }
});


// Fixed navbar
const fixbar = document.querySelector('.navbar');
const jumbo = document.getElementById('jumbotron');

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(document).scrollTop() > 100) {
            fixbar.classList.add("sticky");
        } else {
            fixbar.classList.remove("sticky");
        }
    });
});

// Smooth Scrolling Anchor Jumbotron
$('.jumbo .btn-scroll').on('click', function (e) {
    const href = $(this).attr('href');
    const elementhref = $(href);
    $("html, body").animate({
        scrollTop: elementhref.offset().top
    }, 1000, 'easeInOutExpo');

    e.preventDefault();

});

// Smooth Scrolling Anchor 
$('#ppdb .box').on('click', function (e) {

    const href = $(this).attr('href');
    const elementhref = $(href);
    $("html, body").animate({
        scrollTop: elementhref.offset().top
    }, 1000, 'easeInOutExpo');

    e.preventDefault();

});

// Parallax mouse movement
let object1 = $('#ppdb .ppdb .box .bullets.one ');
let object2 = $('#ppdb .ppdb .box .bullets.two ');
let layer = $('#ppdb');
layer.mousemove(function (e) {
    var valueX = (window.innerWidth - e.pageX * 4) / 200;
    var valueY = (window.innerWidth - e.pageY * 2) / 220;
    object1.css({
        'transition': '0.1s',
        'transform': 'translate(' + valueX + '%,' + valueY + 'px)'
    });
});

layer.mousemove(function (e) {
    var valueX = -(window.innerWidth - e.pageX * 4) / 200;
    var valueY = -(window.innerWidth - e.pageY * 2) / 220;
    object2.css({
        'transition': '0.1s',
        'transform': 'translate(' + valueX + '%,' + valueY + 'px)'
    });
});


// PPDB Warning
const ppdb = document.querySelector('.regist');
ppdb.addEventListener('click', function () {
    alert('Mohon Maaf, Fitur masih dalam pengembangan')
});


// Accordion
const acc = document.querySelectorAll('.accordion');
for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        acc[i].classList.toggle("active");

        let panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });

}