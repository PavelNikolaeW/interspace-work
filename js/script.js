// menu burger
$(document).ready(function() {
    $('.header__burger').click(function() {
        console.log("clik");
        $('.header__burger,.header__menu').toggleClass('active');
        $('body').toggleClass('lock');
    });
});
// arrov
// let isMobile = {
//     Android: function() { return navigator.userAgent.match(/Android/i); },
//     BlackBerry: function() { return navigator.userAgent.match(/BlackBerry/i); },
//     iOS: function() { return navigator.userAgent.match(/iPhone|iPad|iPod/i); },
//     Opera: function() { return navigator.userAgent.match(/Opera Mini/i); },
//     Windows: function() { return navigator.userAgent.match(/IEMobile/i); },
//     any: function() { return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows()); }
// };
// let body = document.querySelector('body');
// if (isMobile.any()) {
//     body.classList.add('touch');
//     let arrow = document.querySelectorAll('.arrow');
//     for (i = 0; i < arrow.length; i++) {
//         let thisLink = arrow[i].previousElementSibling;
//         let subMenu = arrow[i].nextElementSibling;
//         let thisArrow = arrow[i];

//         thisLink.classList.add('parent');
//         arrow[i].addEventListener('click', function() {
//             subMenu.classList.toggle('open');
//             thisArrow.classList.toggle('active');
//         });
//     }
// } else {
//     body.classList.add('mouse');
// }

// выбор языка
$('#input0').click(function() {
    if ($("select#input0 :selected ").val() == "rus ") {
        $("select#input0 ").attr('style', 'background-image:url(images/lng_ru.png);');
    }
    if ($("select#input0 :selected ").val() == "eng ") {
        $("select#input0 ").attr('style', 'background-image:url(images/lng_eng.png);');
    }
    console.log("kek");
    console.log('select color: ' + $("select#input0 :selected ").val());
});


$()