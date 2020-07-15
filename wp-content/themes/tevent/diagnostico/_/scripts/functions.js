(function($) {
    $(document).ready(function() {
        $(".tit_menu").click(function(event) {
            $('.menu_new > div').toggleClass('active');
        });
        $(".link_acordeon").click(function(event) {
            $(this).toggleClass('active');
            if ($(this).hasClass("active")) {
                $(this).next('div').slideDown(300);
            } else {
                $(this).next('div').slideUp(300);
            }
        });

        jQuery("#formulariodiagnostico").on("submit", function(e) {
            jQuery("#loadMe").modal({
                backdrop: "static", //remove ability to close modal with click
                keyboard: false, //remove option to close with keyboard
                show: true //Display loader!
            });
            var urlApi = 'http://localhost/middleware/public/api/';

            jQuery('#save_diagnostico').attr("disabled", true);

            var ajaxData = new FormData(document.getElementById("formulariodiagnostico"));

            jQuery.ajax({
                type: 'POST',
                url: urlApi + 'storeResponseCustom',
                contentType: false,
                processData: false,
                data: ajaxData,
                success: function(response) {
                    if (response.response == 200) {
                        jQuery("#loadMe").modal("hide");
                        /*    jQuery('#formulariodiagnostico').trigger("reset");
                           jQuery('#save_diagnostico').attr("disabled", true);
                           window.location.href = "gracias/"; */
                    } else if (response.response == 100) {
                        jQuery("#loadMe").modal("hide");
                        jQuery('#modalErrorNit').modal('show');
                        jQuery('#save_diagnostico').attr("disabled", false);
                    } else if (response.response == 400) {
                        jQuery("#loadMe").modal("hide");
                        jQuery('#modalErrorEmail').modal('show');
                        jQuery('#save_diagnostico').attr("disabled", false);
                    }

                },
                error: function(request, status, error) {
                    if (request.status == 401) {
                        jQuery("#loadMe").modal("hide");
                        jQuery('#modalFail').modal('show');
                        jQuery('#save_diagnostico').attr("disabled", false);
                    } else {
                        jQuery("#loadMe").modal("hide");
                        jQuery('#modalFail').modal('show');
                        jQuery('#save_diagnostico').attr("disabled", false);
                    }
                }
            });
            return false;
        });




    });
})(jQuery);

function passForm(div) {
    $('.sections section').removeClass('active');
    $(div).addClass('active');
}