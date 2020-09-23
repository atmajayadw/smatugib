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

// Smooth Scrolling Anchor Jumbotron

$('.jumbo .btn-scroll').on('click', function (e) {

    const href = $(this).attr('href');
    const elementhref = $(href);

    $("html, body").animate({
        scrollTop: elementhref.offset().top - 100
    }, 1000, 'easeInOutExpo');

    e.preventDefault();

});


// Smooth Scrolling Anchor Profiles

$('.profile').on('click', function (e) {

    const href = $(this).attr('href');
    const elementhref = $(href);

    $("html, body").animate({
        scrollTop: elementhref.offset().top - 80
    }, 2000, 'easeInOutExpo');

    e.preventDefault();

});

// Smooth Scrolling Anchor Back to Profiles

$('.back-btn').on('click', function (e) {

    const href = $(this).attr('href');
    const elementhref = $(href);

    $("html, body").animate({
        scrollTop: elementhref.offset().top - 110
    }, 2000, 'easeInOutExpo');

    e.preventDefault();

});

// // Smooth Scrolling Anchor to Facilities

// $('.facility').on('click', function (e) {

//     const href = $(this).attr('href');
//     const elementhref = $(href);

//     $("html, body").animate({
//         scrollTop: elementhref.offset().top - 110
//     }, 2000, 'easeInOutExpo');

//     e.preventDefault();

// });


// Parallax mouse movement

let object1 = $('#profiles .bullets.one');
let object2 = $('#profiles .bullets.two');
let object3 = $('#profiles .bullets.three');
let object4 = $('#profiles .bullets.four');
let layer = $('#profiles');
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

layer.mousemove(function (e) {
    var valueX = (window.innerWidth - e.pageX * 4) / 200;
    var valueY = (window.innerWidth - e.pageY * 2) / 220;
    object3.css({
        'transition': '0.1s',
        'transform': 'translate(' + valueX + '%,' + valueY + 'px)'
    });
});

layer.mousemove(function (e) {
    var valueX = -(window.innerWidth - e.pageX * 4) / 200;
    var valueY = -(window.innerWidth - e.pageY * 2) / 220;
    object4.css({
        'transition': '0.1s',
        'transform': 'translate(' + valueX + '%,' + valueY + 'px)'
    });
});

let object5 = $('#school .bullets.one');
let object6 = $('#school .bullets.two');
let layer2 = $('#school');

layer2.mousemove(function (e) {
    var valueX = (window.innerWidth - e.pageX * 4) / 200;
    var valueY = (window.innerWidth - e.pageY * 2) / 220;
    object5.css({
        'transition': '0.1s',
        'transform': 'translate(' + valueX + '%,' + valueY + 'px)'
    });
});

layer2.mousemove(function (e) {
    var valueX = -(window.innerWidth - e.pageX * 4) / 200;
    var valueY = -(window.innerWidth - e.pageY * 2) / 220;
    object6.css({
        'transition': '0.1s',
        'transform': 'translate(' + valueX + '%,' + valueY + 'px)'
    });
});

let object7 = $('#facilities .bullets.one');
let object8 = $('#facilities .bullets.two');
let layer3 = $('#facilities');

layer3.mousemove(function (e) {
    var valueX = (window.innerWidth - e.pageX * 4) / 200;
    object7.css({
        'transition': '0.1s',
        'transform': 'translate(' + valueX + '%,0px)'
    });
});

layer3.mousemove(function (e) {
    var valueX = -(window.innerWidth - e.pageX * 4) / 200;
    object8.css({
        'transition': '0.1s',
        'transform': 'translate(' + valueX + '%,0px)'
    });
});

//WOW.JS ANIMATION
new WOW().init();

// ANIMATION
const animate1 = document.querySelectorAll('#facilities-panel .facilities-panel');
// animate1.classList.add('wow', 'animate__animated', 'animate__bounceInDown');

// SHOW PANEL FACILITIES
const tabs = document.querySelectorAll('.facility');
const tabcontent = document.querySelectorAll('.facilities-panel');

for (let j = 0; j < tabs.length; j++) {
    tabs[j].addEventListener("click", function () {
        for (let i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
            animate1[i].classList.add('wow', 'animate__animated', 'animate__bounceInDown');
        }
        document.getElementById(this.dataset.name).style.display = "block";
    });
}

const tabs2 = document.querySelectorAll('.facility');
const tabcontent2 = document.querySelectorAll('.facilities-panel');
const exit = document.querySelectorAll('.exit');
for (let k = 0; k < exit.length; k++) {
    exit[k].addEventListener("click", function (e) {
        for (let i = 0; i < tabcontent.length; i++) {
            tabcontent2[i].style.display = "none";
        }
        // window.location = 'profil.php#facilities';
        const href = $(this).attr('href');
        const elementhref = $(href);

        $("html, body").animate({
            scrollTop: elementhref.offset().top - 20
        }, 500, 'easeInOutExpo');

        e.preventDefault();
    });
}