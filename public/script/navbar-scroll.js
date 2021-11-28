if ($(window).width() > 720) {
    // $('#search-form').show();
    $('#search-form').css("display", "none");
} else {
    // $('#search-form').hide();
    $('#search-form').css("display", "block");

}
$(document).ready(function() {
    $(document).scroll(function() {
        var $nav = $(".navbar-fixed-top");
        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
        // $('#search-form').fadeOut(1000);
    });
    $('#button_search').click(function() {
        if ($(this).is(':checked')) {
            console.log('click');
            $('#search-form').fadeIn(1000);
        } else {
            $('#search-form').fadeOut(1000);
        }
    });



});