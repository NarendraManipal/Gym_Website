AOS.init({
    offset: 120,
    delay: 0,
    duration: 500,
    easing: 'ease-in-sine',
    once: true,
    mirror: true,
    anchorPlacement: 'top-bottom'
});

$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        500: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
});