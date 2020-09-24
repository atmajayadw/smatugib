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
            // jumbo.style.marginTop = '-20px';
        } else {
            fixbar.classList.remove("sticky");
            // jumbo.style.marginTop = '-120px';
        }
    });
});

// Smooth scroll jumbotron
$('.jumbo .btn-scroll').on('click', function (e) {

    const href = $(this).attr('href');
    const elementhref = $(href);

    $("html, body").animate({
        scrollTop: elementhref.offset().top
    }, 1000, 'easeInOutExpo');

    e.preventDefault();

});

// Parallax mouse movement

let object1 = $('#contact .contact .bullets.one');
let object2 = $('#contact .contact .bullets.two');
let layer = $('#contact');
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