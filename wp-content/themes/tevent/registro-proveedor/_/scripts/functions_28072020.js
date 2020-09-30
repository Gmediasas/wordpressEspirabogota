(function($) {
    $(document).ready(function() {
	//$('input[name='s']').val("otro");
        jQuery('#modalFailPassword').modal('show');
        $(".tit_menu").click(function(event) {
            $('.menu_new > div').toggleClass('active');
        });
        /*$(".link_acordeon").click(function(event) {
            $(this).toggleClass('active');
            if ($(this).hasClass("active")) {
                $(this).next('div').slideDown(300);
            } else {
                $(this).next('div').slideUp(300);
            }
        });*/
        var enviarData;
        var typeModal = 'modalEviadaData';
        $("#SaveTemp").click(function(event) {
            enviarData = true;
            typeModal = 'modalEviadaDataTemp';
            $('#idEstado').val(37);
        });
        $("#SaveTemp2").click(function(event) {
            enviarData = true;
            typeModal = 'modalEviadaDataTemp';
            $('#idEstado').val(37);
        });

        var enviarDataA = [];
        $("#save_diagnostico").click(function(event) {

            $("#formulariodiagnostico input").map(function() {

                if (this.type == "text") {
		    if(this.name !='s'){
 			if ($(this).val() == '' || $(this).val() == undefined) {
                        	enviarDataA.push(false);
  				enviarDataA.push(this.name);
				enviarDataA.push('text');
				$('input[name=' + this.name + ']').css("border-color", 'red');
                   	 }
		    }
                   
                } else if (this.type == "radio") {
                    if ($('input[name=' + this.name + ']').is(":checked") == false) {
                        enviarDataA.push(false);
			enviarDataA.push(this.name);
			enviarDataA.push('radio');
         		$('input[name=' + this.name + ']').css("border-color", 'red');
                    }
                } else if (this.type == "number") {
                    if ($(this).val() == '' || $(this).val() == undefined) {
                        enviarDataA.push(false);
			enviarDataA.push(this.name);
			enviarDataA.push('number');
         		$('input[name=' + this.name + ']').css("border-color", 'red');
                    }
                }
            }).get();

            $("#formulariodiagnostico select").map(function() {
                if ($(this).val() == '' || $(this).val() == undefined || $(this).val() == 0) {
                    enviarDataA.push(false);
		    enviarDataA.push(this.name);
		   enviarDataA.push('select');
		   $('input[name=' + this.name + ']').css("border-color", 'red');
                }

            }).get();


            console.log('array', enviarDataA);

            if (enviarDataA.includes(false) == true) {
                enviarData = false;
            } else {
                enviarData = true;
            }
            console.log('data', enviarData);
            typeModal = 'modalEviadaData';
            $('#idEstado').val(38);
        });

        jQuery("#formulariodiagnostico").on("submit", function(e) {
            if (enviarData == true) {
                jQuery("#loadMe").modal({
                    backdrop: "static", //remove ability to close modal with click
                    keyboard: false, //remove option to close with keyboard
                    show: true //Display loader!
                });
                //var urlApi = 'http://localhost/middleware/public/api/';
                var urlApi = 'https://middlepp.gevents.co/public/api/';

                jQuery('#save_diagnostico').attr("disabled", true);

                var ajaxData = new FormData(document.getElementById("formulariodiagnostico"));

                jQuery.ajax({
                    type: 'POST',
                    url: urlApi + 'storeResponseCustom',
                    contentType: false,
                    processData: false,
                    data: ajaxData,
                    success: function(response) {
                        if (response == 200) {
                            jQuery("#loadMe").modal("hide");
                            jQuery("#" + typeModal).modal("show");
                            // jQuery('#formulariodiagnostico').trigger("reset");
                            jQuery('#save_diagnostico').attr("disabled", true);
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

            } else {
                enviarDataA = [];
                jQuery('#modalFailDatos').modal('show');
            }
            return false;
        });




    });
})(jQuery);

function passForm(div) {
    $('.sections section').removeClass('active');
    $(div).addClass('active');
}

function acordeon(div){
    if (!$(div).hasClass("active")) {
        $(div).addClass('active').children('.container_question').slideDown(300);
    }else{
        $(div).removeClass('active').children('.container_question').slideUp(300);
    }
}
