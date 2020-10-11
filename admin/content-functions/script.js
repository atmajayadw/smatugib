// Live Search
$(document).ready(function () {

    $('#keyword').on('keyup', function () {

        $('.loader').show();

        $.get('../admin/ajax/live-search.php?keyword=' + $('#keyword').val(), function (data) {

            $('#table').html(data);
            $('.loader').hide();

        });

    });

});

// Hamburger menu
const hamburger = document.querySelector('.hamburger');
const span = document.querySelectorAll('.hamburger span');
const sidebar = document.querySelector('.sidebar');

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