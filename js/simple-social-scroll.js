jQuery( function ($) {

	// Simple Social On Scroll
	if ($('#simple-social-icons-2').length) {
    var scrollTrigger = 300, // px
        socialscroll = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#simple-social-icons-2').addClass('show');
            } else {
                $('#simple-social-icons-2').removeClass('show');
            }
        };
}

socialscroll();
    $(window).on('scroll', function () {
        socialscroll();
    });

});