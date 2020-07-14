function uploadFile(id) {

    var urlApi = 'https://middlepp.gevents.co/public/api/';
    // var urlApi = 'https://prod.gevents.co/public/api/';
    var file = jQuery('#archivo_' + id).prop('files')[0];

    var fileSize = file.size

    /* validamos id del campo para saber que arcvivo se esta subiendo  */
    if (id == 10) {
        var nameFile = 'certificado_de_existencia_1';
    } else if (id == 12) {
        var nameFile = 'cedula_representante_legal_2';
    } else if (id == 16) {
        var nameFile = 'rut_3';
    } else if (id == 17) {
        var nameFile = 'pago_seguridad_4';
    } else if (id == 18) {
        var nameFile = 'autorización_revisión_antecedentes_5_anexo';
    } else {
        var nameFile = 'carta_compromiso_empresa_beneficiada_6_anexo';
    }
    // alert(file.name+" | "+file.size+" | "+file.type);
    var formdata = new FormData();
    formdata.append("responseFile", file);
    formdata.append("nameFile", nameFile);

    if (jQuery("#codigo").val() != "") {

        formdata.append("codigoTemp", jQuery("#codigo").val());

    }

    if (fileSize > 2000000) {
        // alert('El archivo no debe superar los 2MB');
        this.value = '';
        this.files[0].name = '';
        jQuery("#progressBar_" + id).val(0);
    } else {

        jQuery.ajax({
            /* se valida progreso de carga y se pinta la barra */
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(event) {
                    var percent = (event.loaded / event.total) * 100;
                    jQuery("#progressBar_" + id).val(Math.round(percent))
                }, false);
                xhr.addEventListener("load", function(event) {
                    jQuery("#progressBar_" + id).val(100);
                }, false);
                xhr.addEventListener("error", function(event) {
                    jQuery("#progressBar_" + id).val(0);
                }, false);
                xhr.addEventListener("abort", function(event) {
                    jQuery("#progressBar_" + id).val(0);
                }, false);
                return xhr;
            },

            type: 'POST',
            url: urlApi + 'documentupload',
            contentType: false,
            processData: false,
            data: formdata,

            success: function(response) {
                obj = JSON.parse(response);
                console.log(obj.codigoTemp);
                if (obj.response == 200) {

                    jQuery("#codigo").val(obj.codigoTemp);

                    if (id == 10) {
                        jQuery("#file1").val(obj.name);
                    } else if (id == 12) {
                        jQuery("#file2").val(obj.name);
                    } else if (id == 16) {
                        jQuery("#file3").val(obj.name);
                    } else if (id == 17) {
                        jQuery("#file4").val(obj.name);
                    } else if (id == 18) {
                        jQuery("#file5").val(obj.name);
                    } else {
                        jQuery("#file6").val(obj.name);
                    }

                }
            },
            error: function(request, status, error) {
                if (request.status == 401) {
                    jQuery('#modalFail').modal('show');
                    jQuery('#saveRegister').attr("disabled", false);
                } else {
                    jQuery('#modalFail').modal('show');
                    jQuery('#saveRegister').attr("disabled", false);
                }
            }
        });
    }


}