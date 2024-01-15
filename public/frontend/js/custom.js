$(".slider").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
    },
});
var owl = $(".slider");
owl.owlCarousel();
// Go to the next item
$(".prvBtn").click(function () {
    owl.trigger("next.owl.carousel");
});
// Go to the previous item
$(".nxtBtn").click(function () {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger("prev.owl.carousel", [300]);
});

/*text animation end*/

/*clinet slider animation*/
$(document).ready(function () {
    $("#testimonial-slider").owlCarousel({
        items: 3,
        itemsDesktop: [1000, 2],
        itemsDesktopSmall: [979, 2],
        itemsTablet: [768, 2],
        itemsMobile: [650, 1],
        pagination: false,
        navigation: true,
        navigationText: ["", ""],
        autoPlay: true,
    });
});
/*text animation end*/

$(window).load(function () {
    $(".post-module").hover(function () {
        $(this).find(".description").stop().animate(
            {
                height: "toggle",
                opacity: "toggle",
            },
            300
        );
    });
});
