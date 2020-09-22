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

// Smooth Scrolling Anchor

$('.explore-btn').on('click', function (e) {

    console.log('test');

    const href = $(this).attr('href');
    const elementhref = $(href);

    $("html, body").animate({
        scrollTop: elementhref.offset().top
    }, 1000, 'easeInOutExpo');

    e.preventDefault();

});

//Counter

// $(window).on('scroll', function () {
//     var wScroll_ = $(this).scrollTop();
//     if (wScroll_ > $('#about').offset().top) {
//         $('.number').each(function () {
//             $(this).prop('Counter', 0).animate({
//                 Counter: $(this).text()
//             }, {
//                 duration: 3000,
//                 easing: 'swing',
//                 step: function (now) {
//                     $(this).text(Math.ceil(now));
//                 }
//             });
//         });
//         $(window).off('scroll');
//     } else {}
// });

// Slide gallery
//  Slide testimonials
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    const slides = document.getElementsByClassName("slides");
    const thumbs = document.getElementsByClassName("thumb");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < thumbs.length; i++) {
        thumbs[i].className = thumbs[i].className.replace(" active", "");
    }

    slides[slideIndex - 1].style.display = "block";
    thumbs[slideIndex - 1].className += " active";
}

// Parallax scroll
$(window).scroll(function () {
    let wScroll = $(this).scrollTop();
    let about = $('#welcome').offset().top;

    $('.jumbo-left img').css({
        'transform': 'translate(-' + wScroll / 4 + '%, 0px)'
    });

    $('.jumbo-right p').css({
        'transform': 'translate(' + wScroll / 4 + '%, 0px)'
    });

    $('.jumbo-right .explore-btn').css({
        'transform': 'translate(' + wScroll / 4 + '%, 0px)'
    });



    if (wScroll > about) {
        $('#about .bullets.one').css({
            'transform': 'translate(' + wScroll / 30 + '%, 0px)'
        });

        $('#about .bullets.two').css({
            'transform': 'translate(-' + wScroll / 35 + '%, 0px)'
        });

        $('#about .bullets.three').css({
            'transform': 'translate(' + wScroll / 30 + '%, 0px)'
        });

        $('#about .bullets.four').css({
            'transform': 'translate(-' + wScroll / 35 + '%, 0px)'
        });
    }

});

// Parallax mouse movement

let object1 = $('.slideshow .bullets.one');
let object2 = $('.slideshow .bullets.two');

let layer = $('#slideshow');

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