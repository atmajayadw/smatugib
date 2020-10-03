let keyword = document.getElementById('keyword');
let search = document.getElementById('btn-search');
let container = document.getElementById('table');

keyword.addEventListener('keyup', function () {
    //buat object ajax
    let xhr = new XMLHttpRequest();

    //cek kesiapan ajax
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    }

    //eksekusi ajax
    xhr.open('GET', '../admin/ajax/live-search.php?keyword=' + keyword.value, true);
    xhr.send();

});