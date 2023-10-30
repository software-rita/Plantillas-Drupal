// Back to top button
$(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
        $('.back-to-top').fadeIn('slow');
        $(header).addClass("scroll-color")
    } else {
        $('.back-to-top').fadeOut('slow');

        $(header).removeClass("scroll-color")
    }
});

$('.back-to-top').click(function () {
    $('html, body').animate({
        scrollTop: 0
    }, 1000, 'easeInOutExpo');
    return false;
});