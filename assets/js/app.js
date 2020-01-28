$(document).ready(function() {});

/********************* HOME TYPEWRITER *********************/
function startHome() {
    var speed = 150;
    var pos = 0;
    var turn = 0;
    var data = ["dermatologia estética", "rejuvenescimento"];
    setTimeout(typeWriter, speed);

    function typeWriter() {
        if (pos < data[turn].length) {
            document.querySelector(".home-slider-text-typewriter").innerHTML += data[
                turn
            ].charAt(pos);
            pos++;
            setTimeout(typeWriter, speed);
        } else {
            setTimeout(erase, speed + 100);
        }
    }

    function erase() {
        if (pos >= 0) {
            var str = data[turn].toString().substring(0, pos);
            document.querySelector(".home-slider-text-typewriter").innerHTML = str;
            pos--;
            setTimeout(erase, speed - 100);
        } else {
            turn++;
            if (turn >= data.length) turn = 0;
            setTimeout(typeWriter, speed);
        }
    }

    $(".home-slider").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [{
            breakpoint: 580,
            settings: {
                adaptiveHeight: true
            }
        }]
    });
}

/********************* MENU *********************/
$menuRight = $(".pushmenu-right");
$nav_list = $("#sidebartoggle");

$nav_list.click(function() {
    $(this).toggleClass("active");
    $(".pushmenu-push").toggleClass("pushmenu-push-toleft");
    $menuRight.toggleClass("pushmenu-open");

    if ($(this).hasClass("active")) {
        $("#sidebartoggle").html('<i class="material-icons">close</i>');
    } else {
        $("#sidebartoggle").html('<i class="material-icons">menu</i>');
    }
});

$(".pushmenu > a").click(function() {
    $nav_list.toggleClass("active");
    $(".pushmenu-push").toggleClass("pushmenu-push-toleft");
    $menuRight.toggleClass("pushmenu-open");

    if ($(this).hasClass("active")) {
        $("#sidebartoggle").html('<i class="material-icons">close</i>');
    } else {
        $("#sidebartoggle").html('<i class="material-icons">menu</i>');
    }
});

/********************* SCROLL *********************/
$(document).on("scroll", function() {
    if ($(document).scrollTop() > 100) {
        $(".menu").addClass("menusolid");
        $(".menumobile").addClass("menusolid");
    } else {
        $(".menu").removeClass("menusolid");
        $(".menumobile").removeClass("menusolid");
    }
});


/********************* SPEAKERS *********************/
function startSpeakers() {
    $('.modal').modal();
}


$('.representantes-item').click(function() {
    var status = $(this).find('.representantes-plus').html();

    if (status == '+') {
        $(this).toggleClass('rep-item-open')
        $(this).find('.representantes-plus').html('-');
        $(this).find('.representantes-details').toggleClass('ocultarDisplay')
        $(this).find('.representantes-plus').toggleClass('plus-open')
    } else {
        $(this).toggleClass('rep-item-open')
        $(this).find('.representantes-plus').html('+');
        $(this).find('.representantes-plus').toggleClass('plus-open')
        $(this).find('.representantes-details').toggleClass('ocultarDisplay')
    }
})

function startPerfecthaFAQ() {
    $('.collapsible').collapsible();
}