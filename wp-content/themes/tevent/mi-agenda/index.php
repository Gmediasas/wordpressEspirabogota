<?php
session_start();

if($_SESSION['user']['idRol'] == 7){
get_header();
/*
Template Name: landing-mi-agenda
*/

?>

<?php if(isset($_SESSION['token'])) {?>
    <script>
        jQuery('#menu-item-976').css('display','none');
        jQuery('#menu-item-977').css('display','none');
    </script>

    <?php if($_SESSION['user']['idRol'] == 1) {?>
        <script>
            jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Mi agenda" href="agenda-general/">Mi agenda</a></li>')
            jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Cerrar Sesión" href="../wp-content/themes/tevent/login/api/logout.php">Cerrar Sesión</a></li>')
        </script>
    <?php }elseif($_SESSION['user']['idRol'] == 4) {?>
        <script>
            jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Mi agenda" href="agenda-empresa/">Mi agenda</a></li>')
            jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Cerrar Sesión" href="../wp-content/themes/tevent/login/api/logout.php">Cerrar Sesión</a></li>')
        </script>

    <?php }else{ ?>
        <script>
            jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Mi agenda" href="mi-agenda/" >Mi agenda</a></li>')
            jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Cerrar Sesión" href="../wp-content/themes/tevent/login/api/logout.php">Cerrar Sesión</a></li>')
        </script>
    <?php } ?>

<?php }else{ ?>
    <script>
        jQuery('#menu-item-976').css('display','block');
        jQuery('#menu-item-977').css('display','block');
    </script>
<?php } ?>

<style>

    .vc_row.vc_row-flex > .container > .vc_column_container {
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
    .vc_row:after, .vc_row:before {
        content: " ";
        display: table;
    }
    :after, :before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .vc_custom_1498038552127 {
        margin-top: 0px !important;
    }ing-right: 0;
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

    .vc_custom_1499603120939 {
    }

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

    .mi-agenda {
        margin-bottom: 0px;
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

    .wpb_button, .wpb_content_element, ul.wpb_thumbnails-fluid>li {
        margin-bottom: 35px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .Sticky--top .nav.navbar.bootsnav ul.nav > li.active > a {
        color: #fff;
    }

    .Sticky--top .nav.navbar.bootsnav ul.nav > li > a {
        color: #fff;
    }

    .Sticky--not-top .nav.navbar.bootsnav ul.nav > li.active > a {
        color: #6f6f6f;
    }

    .Sticky--not-top .nav.navbar.bootsnav ul.nav > li > a {
        color: #6f6f6f;
    }

    .wpb_single_image img {
        height: auto;
        max-width: 100%;
        vertical-align: top;
    }

    @media (min-width: 1024px){
        nav.navbar.bootsnav.navbar-fixed.navbar-transparent .logo-display, nav.navbar.bootsnav.navbar-fixed.no-background .logo-display {
            display: block;
            height: 84%;
        }

        .Sticky--top nav.navbar.bootsnav ul.nav > li > a {
            font-size: 12px;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            font-weight: bold;
        }

        .Sticky--top nav.navbar.bootsnav ul.nav > li.active > a {
            font-size: 12px;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            font-weight: bold;
        }

        .Sticky--not-top nav.navbar.bootsnav ul.nav > li > a {
            font-size: 12px;
            color: #6f6f6f;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            font-weight: bold;
        }

        .Sticky--not-top nav.navbar.bootsnav ul.nav > li.active > a {
            font-size: 12px;
            color: #009cdf;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            font-weight: bold;
        }

    }

    @media (min-width: 1200px){
        .container {
            width: 1170px;
        }
    }
    @media (min-width: 992px){
        .container {
            width: 970px;
        }
    }
    @media (min-width: 768px){
        .vc_col-sm-1, .vc_col-sm-10, .vc_col-sm-11, .vc_col-sm-12, .vc_col-sm-2, .vc_col-sm-3, .vc_col-sm-4, .vc_col-sm-5, .vc_col-sm-6, .vc_col-sm-7, .vc_col-sm-8, .vc_col-sm-9 {
        }
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
</style>

<?php
echo $_SESSION['user']['id'];
//Gestión de erorres

//Gestión de erorres
$postHeaders = array('Content-Type: application/json','Authorization: Bearer '.$_SESSION['token']);
$apiUrl = "https://prod.gevents.co/public/api/view_my_agenda_tecnalia/".$_SESSION['user']['id'];
$curl = curl_init($apiUrl);
curl_setopt($curl, CURLOPT_ENCODING, "");
curl_setopt($curl, CURLOPT_HTTPHEADER, $postHeaders);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($curl);

$agenda = json_decode($json, true);

curl_close($curl);

?>
<main id="main" class="site-main" role="main">

    <div class="vc_row-full-width vc_clearfix"></div>

    <div class="vc_element vc_vc_row vc_container-block vc_layout_1" data-tag="vc_row" data-model-id="03d06a2a5f74fa54253ff5d01ebbc05d" style="margin-top:50px;">
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1498038552127 ui-sortable">
            <div class="container">
                <div class="vc_element vc_vc_column vc_container-block vc_col-sm-12" data-tag="vc_column" data-shortcode-controls="[&quot;edit&quot;,&quot;clone&quot;,&quot;delete&quot;]" data-model-id="aee7f2bae5d7587cb5a57ee06ccc3a6b">
                    <div class="wpb_column vc_column_container">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="Sc-heading row">
                                    <div class="u-MarginTop100 u-MarginBottom50 u-xs-MarginBottom30 u-sm-MarginBottom30 text-center col-sm-8 col-sm-offset-2">
                                        <h1 class="u-MarginTop5 u-MarginBottom10 u-Weight700 Sc-heading__main">Mi agenda</h1>
                                        <div class="Split Split--height2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="vc_element vc_vc_row vc_container-block vc_layout_1" data-tag="vc_row" data-shortcode-controls="[&quot;edit&quot;,&quot;clone&quot;,&quot;delete&quot;]" data-model-id="a4c99fbb999e931a7db3bf8574571e85" style="margin-bottom:50px;">
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1499251628957 ui-sortable" style="margin-left:0px;margin-right:0px;">
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-bordered u-Margin0">
                        <thead>
                        <tr>
                            <th style="text-align:center">Empresa</th>
                            <th style="text-align:center">Hora</th>
                            <th style="text-align:center">Mesa</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php if(count($agenda['agenda'])) {?>
                                <?php foreach ($agenda['agenda'] as $agendas){?>
                                    <tr>
                                        <td style="text-align:center;vertical-align: middle;"><p style="text-align: center;"><img src="../wp-content/uploads/2019/11/<?php echo $agendas['logo']?>" width="50%"></p></td>
                                        <td style="text-align:center;vertical-align: middle;"><?php echo $agendas['hora_inicio']?> - <?php echo $agendas['hora_fin']?></td>
                                        <td style="text-align:center;vertical-align: middle;"><?php echo $agendas['mesa']?></td>
                                        <td style="text-align:center;vertical-align: middle;">
                                            <p style="text-align: center">
                                                <a class="btn btn-primary u-MarginBottom10 u-LetterSpacing2 viewAgenda"
                                                   data-toggle="modal"  style="text-align:center;" href="" data-id="<?php echo $agendas['idCita'] ;?>"
                                                   data-id2="<?php echo $agendas['idBoleta'] ;?>">
                                                    CANCELAR CITA
                                                </a>
                                            </p>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php }else{ ?>
                                <tr>
                                    <td>14:00:00 - 14:20:00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>14:20:00 - 14:40:00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>14:40:00 - 15:00:00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>15:00:00 - 15:20:00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>15:20:00 - 15:40:00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>15:40:00 - 16:00:00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>16:00:00 - 16:20:00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>16:20:00 - 16:40:00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>16:40:00 - 17:00:00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <!-- Modal -->
                    <div class="modal fade" id="viewModalAgenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Está seguro que desea cancelar esta cita?
                                    </div>

                                    <div class="modal-footer" style="text-align:center;">
                                        <input type="button" class="btn btn-primary" id="saveAgenda" value="Confirmar">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="vc_element vc_vc_column vc_container-block vc_col-sm-12" data-tag="vc_column" data-shortcode-controls="[&quot;edit&quot;,&quot;clone&quot;,&quot;delete&quot;]" data-model-id="a7812fe88b95d9849c90ca1b5399cc2a">

                </div>
            </div>
        </div>
    </div>

    <div class="vc_row wpb_row vc_row-fluid">
        <div class="container">

            <div class="wpb_column vc_column_container col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_center">
                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper vc_box_border_grey">
                                    <img src="../wp-content/uploads/2019/11/logo_alcaldia_bog.png" class="wpb_single_image img">
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wpb_column vc_column_container col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_center">
                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper vc_box_border_grey">
                                    <img src="../wp-content/uploads/2019/11/logo_tecnalia-1.png" class="wpb_single_image img">
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wpb_column vc_column_container col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_center">
                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper vc_box_border_grey">
                                    <img src="../wp-content/uploads/2019/11/logo_clark_modet-02.png" class="wpb_single_image img">
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wpb_column vc_column_container col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_center">
                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper vc_box_border_grey">
                                    <img src="../wp-content/uploads/2019/11/Logo_FITIC_.png" class="wpb_single_image img">
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if(isset($_SESSION['token'])){ ?>
        <input value="<?php echo $_SESSION['token'] ?>" name="token" type="hidden" id="token">
    <?php }?>
</main>
<!-- #main -->

<?php get_footer(); ?>

<script>
    jQuery(document).ready( function() {
        var token = jQuery('#token').val();

        jQuery('.viewAgenda').click(function () {
            var id=jQuery(this).data('id');
            var id2=jQuery(this).data('id2');

            jQuery('#viewModalAgenda').modal('show');
            jQuery('#saveAgenda').click(function () {

            jQuery.ajax({
                url: "https://prod.gevents.co/public/api/cancelar_cita_tecnalia/"+id+"/"+id2,
                dataType: "json",
                headers: {"Accept": "application/json", "Authorization": "Bearer "+token},
                success: function(response) {
                    window.location.replace("http://transformabogota40.gevents.co/mi-agenda/");
                }
            });
            });
        });


    });
</script>
    <?php
}else{
    echo '<script type="text/javascript">
                        window.location.href="iniciar-sesion/";
                        </script>';
}
?>
