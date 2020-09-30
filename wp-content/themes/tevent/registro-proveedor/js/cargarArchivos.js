function uploadFile(id,nameFile) {
    //var urlApi = 'http://localhost/middleware/public/api/';
    //var urlApi = 'https://middlepp.gevents.co/public/api/';
    // var urlApi = 'https://prod.gevents.co/public/api/';
    var urlApi = '/uploadfile/';
    var file = jQuery('#archivo_' + id).prop('files')[0];

    var fileSize = file.size

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
            url: urlApi,
            contentType: false,
            processData: false,
            data: formdata,

            success: function(response) {
                //obj = JSON.parse(response);
                obj = response;
                if (obj.response == 200) {
                    jQuery("#codigo").val(obj.codigoTemp);
                    jQuery("#file_"+id).val(obj.name);
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

