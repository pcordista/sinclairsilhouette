$(document).ready(function() {});

/********************* HOME TYPEWRITER *********************/
function startHome() {
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

    $(".split-screen").twentytwenty();

    $(".slider-home").slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        arrows: true,
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
    if ($(document).scrollTop() > 50) {
        $(".menu").addClass("menusolid");
        $(".menumobile").addClass("menusolid");
    } else {
        $(".menu").removeClass("menusolid");
        $(".menumobile").removeClass("menusolid");
    }
});

/********************* SPEAKERS *********************/
function startSpeakers() {
    $(".modal").modal();
}

function startTestemonials() {
    $(".testemonials-slider").slick({
        dots: false,
        infinite: true,
        speed: 300,
        arrows: true,
        responsive: [{
                breakpoint: 580,
                settings: {
                    arrows: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: true
                }
            }
        ]
    });
}

function startSplit() {
    $(".split-slider").slick({
        dots: false,
        infinite: true,
        adaptiveHeight: true,
        speed: 300,
        draggable: false,
        responsive: [{
                breakpoint: 580,
                settings: {
                    arrows: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: true
                }
            }
        ]
    });

    $(".split-screen").twentytwenty();
}

$(".representantes-item").click(function() {
    var status = $(this)
        .find(".representantes-plus")
        .html();

    if (status == "+") {
        $(this).toggleClass("rep-item-open");
        $(this)
            .find(".representantes-plus")
            .html("-");
        $(this)
            .find(".representantes-details")
            .toggleClass("ocultarDisplay");
        $(this)
            .find(".representantes-plus")
            .toggleClass("plus-open");
    } else {
        $(this).toggleClass("rep-item-open");
        $(this)
            .find(".representantes-plus")
            .html("+");
        $(this)
            .find(".representantes-plus")
            .toggleClass("plus-open");
        $(this)
            .find(".representantes-details")
            .toggleClass("ocultarDisplay");
    }
});

function startPerfecthaFAQ() {
    $(".collapsible").collapsible();
}