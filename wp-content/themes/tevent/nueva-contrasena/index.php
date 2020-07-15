<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tevent
 */

get_header();
/*
Template Name: landing-nueva-contraseña
*/

?>

<style>

    .vc_row.vc_row-flex>.container>.vc_column_container {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }

    .vc_column_container {
        padding-left: 0;
        padding-right: 0;
    }

    .vc_column_container>.vc_column-inner {
        box-sizing: border-box;
        padding-left: 15px;
        padding-right: 15px;
        width: 100%;
    }

    .vc_row {
        margin-left: -15px;
        margin-right: -15px;
    }

    .vc_row:after,
    .vc_row:before {
        content: " ";
        display: table;
    }

    :after,
    :before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .vc_custom_1498038552127 {
        margin-top: 0px !important;
    }

    ing-right: 0;

    }
    .vc_custom_1498038456584 {
        margin-bottom: 30px !important;
    }
    .vc_custom_1498038465570 {
        margin-bottom: 30px !important;
    }
    .vc_custom_1498038473455 {
        margin-bottom: 30px !important;
    }
    .vc_custom_1499603120939 {}
    .vc_custom_1499673079879 {
        margin-top: 50px !important;
        margin-bottom: 50px !important;
    }
    .vc_custom_1499673280683 {
        margin-top: 100px !important;
    }
    .vc_custom_1499603120939 {
        margin-top: 100px !important;
        padding-top: 50px !important;
        padding-bottom: 25px !important;
    }
    .vc_custom_1499677004832 {
        margin-top: 50px !important;
        margin-bottom: 0px !important;
    }
    .vc_custom_1499677573067 {
        margin-top: 100px !important;
        margin-bottom: 100px !important;
    }
    .vc_custom_1499677242709 {
        padding-top: 200px !important;
        padding-bottom: 200px !important;
    }
    .vc_custom_1572988000429 {
        padding-top: 20px !important;
    }
    .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
    .btn {
        position: relative;
        height: 30px;
        padding: 0 10px;
        font-size: 14px;
        line-height: 30px;
    }
    .agenda {
        margin-bottom: 50px;
        border: solid 1px #009cdf;
        padding: 10px;
    }
    .forgot-password {
        font-size: 0.8rem;
        text-align: center;
    }
    .registro {
        font-size: 0.8rem;
        text-align: center;
    }
    .wpb_button,
    .wpb_content_element,
    ul.wpb_thumbnails-fluid>li {
        margin-bottom: 35px;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .Sticky--top .nav.navbar.bootsnav ul.nav>li.active>a {
        color: #fff;
    }
    .Sticky--top .nav.navbar.bootsnav ul.nav>li>a {
        color: #fff;
    }
    .Sticky--not-top .nav.navbar.bootsnav ul.nav>li.active>a {
        color: #6f6f6f;
    }
    .Sticky--not-top .nav.navbar.bootsnav ul.nav>li>a {
        color: #6f6f6f;
    }
    .wpb_single_image img {
        height: auto;
        max-width: 100%;
        vertical-align: top;
    }
    @media (min-width: 1024px) {
        nav.navbar.bootsnav.navbar-fixed.navbar-transparent .logo-display,
        nav.navbar.bootsnav.navbar-fixed.no-background .logo-display {
            display: block;
            height: 84%;
        }

        .Sticky--top nav.navbar.bootsnav ul.nav>li>a {
            font-size: 12px;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            font-weight: bold;
        }

        .Sticky--top nav.navbar.bootsnav ul.nav>li.active>a {
            font-size: 12px;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            font-weight: bold;
        }

        .Sticky--not-top nav.navbar.bootsnav ul.nav>li>a {
            font-size: 12px;
            color: #6f6f6f;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            font-weight: bold;
        }

        .Sticky--not-top nav.navbar.bootsnav ul.nav>li.active>a {
            font-size: 12px;
            color: #009cdf;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            font-weight: bold;
        }
    }
    @media (min-width: 1200px) {
        .container {
            width: 1170px;
        }
    }
    @media (min-width: 992px) {
        .container {
            width: 970px;
        }
    }
    @media (min-width: 768px) {
        .vc_col-sm-1,
        .vc_col-sm-10,
        .vc_col-sm-11,
        .vc_col-sm-12,
        .vc_col-sm-2,
        .vc_col-sm-3,
        .vc_col-sm-4,
        .vc_col-sm-5,
        .vc_col-sm-6,
        .vc_col-sm-7,
        .vc_col-sm-8,
        .vc_col-sm-9 {}

        .vc_col-sm-4 {
            width: 33.33333333%;
        }
    }
    @media (min-width: 768px) {
        .vc_col-sm-7 {
            width: 58.33333333%;
            float: left;
        }

        .vc_col-sm-3 {
            width: 25%;
            float: left;
        }
    }
    @media screen and (max-width: 767px) {
        .u-xs-FontSize40 {
            font-size: 50px !important;
            text-align: center;
            padding-top: 10px;
        }

        h3,
        .h3 {
            font-size: 18px;
            text-align: center;
            padding-top: 10px;
        }
    }

    div.wpcf7 .ajax-loader.is-active {
        visibility: hidden !important;
    }

    label {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: 700;
        color: #000;

    }

    label.error { color: red;font-size: 12px; }

</style>
<?php
$token = $_GET['email'];
?>
<main id="main" class="site-main" role="main">
    <div class="vc_row-full-width vc_clearfix"></div>
    <div class="vc_row wpb_row vc_row-fluid"
         style="margin-top:100px;margin-bottom:50px;">
        <div class="container">
            <div class="wpb_column vc_column_container col-sm-2">
            </div>
            <div class="wpb_column vc_column_container col-sm-8" style="padding:20px;">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div role="form" class="wpcf7" style="padding-bottom: 1rem;">
                            <div class="screen-reader-response"></div>
                            <form action="" method="post" id="formPassword" name="formPassword" class="wpcf7-form demo mailchimp-ext-0.5.08">
                                <div class="bg-black-transparent u-BorderRadius4 u-BoxShadow40
                           u-PaddingTop40 u-PaddingLeft40 u-PaddingRight40">
                                    <h3 class="text-black u-MarginTop0" style="text-align:
                              center;">Nueva contraseña</h3>
                                    <p style="text-align: center;margin-bottom:10px;">Escribe una contraseña nueva</p>
                                    <div class="form-group">
                              <span class="wpcf7-form-control-wrap your-email">
                                 <input type="password" name="password" id="password" size="40" class="wpcf7-form-control wpcf7-text
                                 wpcf7-validates-as-required form-control form-control--white" aria-required="true"
                                        aria-invalid="false" placeholder="Contraseña" required>
                                <div class="" id="mensajePassword"></div>
                              </span>
                                    </div>
                                    <div class="form-group">
                              <span class="wpcf7-form-control-wrap your-email">
                                 <input type="password" name="cmfPassword" id="cmfPassword" size="40" class="wpcf7-form-control wpcf7-text
                                    wpcf7-validates-as-required form-control form-control--white" aria-required="true"
                                        aria-invalid="false" placeholder="Repetir contraseña" required>
                                <div class="" id="mensajePasswordR"></div>
                              </span>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Activar nueva contraseña" id="savePassword"
                                               class="wpcf7-form-control wpcf7-submit btn btn-primary btn-block">
                                        <span class="ajax-loader"></span>
                                        <a href="iniciar-sesion/"
                                           class="wpcf7-form-control wpcf7-submit btn btn-secondary
                                 btn-block">
                                            Cancelar
                                        </a>
                                    </div>
                                </div>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                <p style="display: none !important"><span
                                            class="wpcf7-form-control-wrap referer-page"><input
                                                type="hidden" name="referer-page"
                                                value="http://transformabogota40.gevents.co/wp-admin/edit.php?post_type=page"
                                                class="wpcf7-form-control wpcf7-text referer-page"
                                                aria-invalid="false"></span></p>
                                <!-- Chimpmail extension by Renzo Johnson -->
                                <input type="hidden" name="token" value="<?php echo $token?>">
                                <input type="hidden" name="paginateEmail" id="" value="espiraBogota.contrasena_nueva">
                                <input type="hidden" name="asunto" id="" value="ENTORNO BOGOTÁ">
                                <input type="hidden" name="emailSend" id="" value="entorno@tecnaliacolombia.org">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container col-sm-2">
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contraseña reestablecida</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Se ha establecido tu contraseña. Por favor da clic e inicia sesión.
                </div>
                <div class="modal-footer" style="text-align:center;">
                    <a href="http://entornobogota.com/iniciar-sesion/" class="btn btn-primary" data-dismiss="modal">Aceptar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalFailPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Notificación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    No puedes restablecer la contraseña.
                </div>
                <div class="modal-footer" style="text-align:center;">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>




    <div class="vc_row wpb_row vc_row-fluid">
        <div class="container">
            <div class="wpb_column vc_column_container col-xs-3 col-sm-3 col-md-3
            col-lg-3">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_center">
                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper vc_box_border_grey">
                                    <img
                                            src="../wp-content/uploads/2019/11/logo_alcaldia_bog.png"
                                            class="wpb_single_image img">
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container col-xs-3 col-sm-3 col-md-3
            col-lg-3">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_center">
                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper vc_box_border_grey">
                                    <img
                                            src="../wp-content/uploads/2019/11/logo_tecnalia-1.png"
                                            class="wpb_single_image img">
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container col-xs-3 col-sm-3 col-md-3
            col-lg-3">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_center">
                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper vc_box_border_grey">
                                    <img src="../wp-content/uploads/2019/11/logo_clarke.png"
                                         class="wpb_single_image img">
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container col-xs-3 col-sm-3 col-md-3
            col-lg-3">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_center">
                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper vc_box_border_grey">
                                    <img src="../wp-content/uploads/2019/11/Logo_FITIC_.png"
                                         class="wpb_single_image img">
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- #main -->

<?php get_footer(); ?>
<script type="text/javascript" src="../wp-content/themes/tevent/nueva-contrasena/js/jquery.validate.min.js"></script>

<script>
    var urlApi = 'http://localhost/middleware/public/api/';
     //var urlApi = 'https://prod.gevents.co/public/api/';

    jQuery("#password").blur(function(){
        var password = jQuery("#password").val();
        var parametro =  new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[.,?¿=)(<>º!¡{}@#\$%\^&\*])");
        var res = parametro.test(password);
        var mensage='Por favor valide que su contraseña tenga 1-Mayúscula / 1-mínuscula / 1-número / 1-Caracter especial (*)'
        if (res!=true) {
            jQuery('#mensajePassword').css("display", "block");
            jQuery("#mensajePassword").addClass("error");
            jQuery("#mensajePassword").html(mensage);
            jQuery('#savePassword').prop('disabled', true);

        }else{
            jQuery('#mensajePassword').css("display", "none");
            jQuery("#mensajePassword").removeClass("is-invalid");
            jQuery('#savePassword').prop('disabled', false);
        }
    });

    jQuery("#cmfPassword").blur(function(){
        var password = jQuery("#cmfPassword").val();
        var parametro =  new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[.,?¿=)(<>º!¡{}@#\$%\^&\*])");
        var res = parametro.test(password);
        var mensage='Por favor valide que su contraseña tenga 1-Mayúscula / 1-mínuscula / 1-número / 1-Caracter especial (*)'
        if (res!=true) {
            jQuery('#mensajePasswordR').css("display", "block");
            jQuery("#mensajePasswordR").addClass("error");
            jQuery("#mensajePasswordR").html(mensage);
            jQuery('#savePassword').prop('disabled', true);

        }else{
            jQuery('#mensajePasswordR').css("display", "none");
            jQuery("#mensajePasswordR").removeClass("is-invalid");
            jQuery('#savePassword').prop('disabled', false);
        }
    });

    jQuery("#savePassword").on('click',function(){
        jQuery("#formPassword").validate({
            rules: {

                password: {
                    required: true,
                    minlength: 8,
                    maxlength: 25,
                },
                cmfPassword: {
                    required: true,
                    equalTo: "#password",
                    minlength: 8,
                    maxlength: 25,
                },

            },
            messages: {

                password: {
                    required: "El campo contraseña es requerido",
                    minlength: "El campo contraseña debe tener mínimo {0} caracteres.",
                    maxlength: "El campo contraseña superera el máximo de {0} caracteres permitidos."
                },
                cmfPassword: {
                    required: "Debes confirmar la contraseña",
                    equalTo: "El campo no coincide con la contraseña",
                    minlength: "El campo confirmar contraseña debe tener mínimo {0} caracteres.",
                    maxlength: "El campo confirmar contraseña superera el máximo de {0} caracteres permitidos."
                },

            }
        });

        var password = jQuery("#password").valid();
        var cmfPassword = jQuery("#cmfPassword").valid();



        if(password == true && cmfPassword == true ){
            jQuery("#formPassword").bind("submit",function(){
                jQuery('#savePassword').prop('disabled', true);

                jQuery.ajax({
                    url: urlApi+"rememberPasswordtoken",
                    dataType: "json",
                    type : 'post',
                    headers: {"Accept": "application/json"},
                    contentType: "application/x-www-form-urlencoded;charset=utf-8",
                    data:jQuery(this).serialize(),
                    success: function(response) {
                        console.log(response.message)

                        if(response.message == 'Success'){
                            jQuery('#modalPassword').modal('show');
                            jQuery('#formPassword').trigger("reset");
                            jQuery('#savePassword').prop('disabled', false);
                        }
                    },
                    error: function(request, status, error) {

                        if(request.status == 401){
                            jQuery('#modalFailPassword').modal('show');
                            jQuery('#formPassword').trigger("reset");
                            jQuery('#savePassword').prop('disabled', false);
                        }else{
                            jQuery('#modalFailPassword').modal('show');
                            jQuery('#formPassword').trigger("reset");
                            jQuery('#savePassword').prop('disabled', false);
                        }


                    }

                });

            });
        }else{
            jQuery("#savePassword").css('disabled',true);
        }
    });

</script>
