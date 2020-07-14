(function ($) {
    $(document).ready(function () {
        $(".tit_menu").click(function (event) {
            $('.menu_new > div').toggleClass('active');
        });

    });

})(jQuery);

function passForm(div) {
    $('.sections section').removeClass('active');
    $(div).addClass('active');
}