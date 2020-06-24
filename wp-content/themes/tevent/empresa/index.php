<?php
session_start();


get_header();
/*
Template Name: landing-camaleon
*/

?>

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

    .agenda {
        margin-bottom: 50px;
        border: solid 1px #009cdf;
        padding: 10px;
    }

    .wpb_button, .wpb_content_element, ul.wpb_thumbnails-fluid>li {
        margin-bottom: 35px;
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
        }
    }
</style>

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

<?php
$id=$_POST['project'];

if(isset($_SESSION['user'])){
    $userId =  $_SESSION['user']['id'];
}else{
    $userId = 0;
}

//Gestión de erorres
$postHeaders = array('Content-Type: application/json');
$apiUrl = "https://prod.gevents.co/public/api/get_viewHost_gevent_description/".$id."/".$userId;
$curl = curl_init($apiUrl);
curl_setopt($curl, CURLOPT_ENCODING, "");
curl_setopt($curl, CURLOPT_HTTPHEADER, $postHeaders);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($curl);

$dd = json_decode($json, true);
curl_close($curl);

?>
<div id="content" class="site-content">
    <section class="ImageBackground ImageBackground--overlay v-align-parent u-height200" data-overlay="5" style="margin-top:80px;">
        <div class="ImageBackground__holder" style="background-image: url(&quot;http://transformabogota40.gevents.co/wp-content/uploads/2017/06/ban2.jpg&quot;);">
            <img width="1000" height="666" src="http://transformabogota40.gevents.co/wp-content/uploads/2017/06/ban2.jpg" class="attachment-149 size-149 wp-post-image" alt="" tevent-s1600="" srcset="http://transformabogota40.gevents.co/wp-content/uploads/2017/06/ban2.jpg 1000w, http://transformabogota40.gevents.co/wp-content/uploads/2017/06/ban2-300x200.jpg 300w, http://transformabogota40.gevents.co/wp-content/uploads/2017/06/ban2-768x511.jpg 768w, http://transformabogota40.gevents.co/wp-content/uploads/2017/06/ban2-670x446.jpg 670w, http://transformabogota40.gevents.co/wp-content/uploads/2017/06/ban2-500x333.jpg 500w" sizes="(max-width: 1000px) 100vw, 1000px">
        </div>
        <div class="v-align-child">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-white">
                        <h1 class="text-uppercase u-Margin0 u-Weight700"><?php echo $dd['host']['empresa'] ?></h1>
                        <nav role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
                            <ul class="trail-items breadcrumb u-MarginTop10 u-MarginBottom0" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-begin">
                                    <a href="http://transformabogota40.gevents.co" rel="home"><span itemprop="name">Rueda de negocios</span></a>
                                    <meta itemprop="position" content="1">
                                </li>
                                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-end active">
                                    <span itemprop="name"><?php echo $dd['host']['nom_proyecto'] ?></span>
                                    <meta itemprop="position" content="2">
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- primary-->
    <div id="primary">
        <main id="main" class="site-main" role="main">
            <div id="post-149" class="post-149 page type-page status-publish has-post-thumbnail hentry">
                <div class="entry-content">

                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1499673079879">
                        <div class="container">
                            <div class="wpb_column vc_column_container vc_col-sm-4" style="float: left;">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_center">
                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="242" height="345" src="../../wp-content/uploads/2019/11/<?php echo $dd['host']['logo'] ?>" class="vc_single_image-img attachment-full" alt="" srcset="../../wp-content/uploads/2019/11/<?php echo $dd['host']['logo'] ?> 242w, ../../wp-content/uploads/2019/11/<?php echo $dd['host']['logo'] ?> 210w" sizes="(max-width: 242px) 100vw, 242px"></div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-1">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper"></div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-7">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <h1><strong>Información de la empresa</strong></h1>
                                                <p><?php echo $dd['host']['informacion_empresa'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if( $dd['host']['descripcion']){ ?>
                        <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding u-BoxShadow40" style="position: relative; left: 15px; box-sizing: border-box;margin-top:50px;margin-bottom:80px;">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="ImageBlock ImageBlock--switch">
                                            <div class="ImageBlock__image col-md-6 col-sm-4">
                                                <div class="ImageBackground ImageBackground--overlay" data-overlay="0">
                                                    <div class="ImageBackground__holder" style="background-image: url(../../wp-content/uploads/2019/11/descripcion_camaleon.jpg">
                                                        <img src="../../wp-content/uploads/2019/11/<?php echo $dd['host']['imagen_des_proy'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-5 col-sm-7">
                                                        <h2 class="u-MarginTop0 u-MarginBottom0 u-Weight700">Descripción del proyecto</h2>
                                                        <h3 class="u-MarginTop10 u-Weight400 text-gray" style="color: #c6586a;font-weight: 500;"><?php echo $dd['host']['nom_proyecto'] ?></h3>
                                                        <div>
                                                            <p><?php echo $dd['host']['descripcion'] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="vc_row-full-width vc_clearfix"></div>

                    <?php if( empty($dd['host']['galeria_1']) && empty($dd['host']['galeria_2']) && empty($dd['host']['galeria_3'])){ ?>
                    <?php }else{ ?>
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1499677004832">
                            <div class="container">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="Sc-heading row">
                                                <div class="u-MarginBottom50 u-xs-MarginBottom30 u-sm-MarginBottom30 text-center col-sm-8 col-sm-offset-2">
                                                    <h1 class="u-MarginTop5 u-MarginBottom10 u-Weight700 Sc-heading__main">Imágenes del proyecto</h1>
                                                    <div class="Split Split--height2"></div>
                                                </div>
                                            </div>
                                            <div class="js-Portfolio portfolio-grid portfolio-gallery grid-3 gutter" style="position: relative; height: 358.843px;">
                                                <?php if(!empty( $dd['host']['galeria_1'])){ ?>
                                                    <div class="portfolio-item" style="position: absolute; left: 0px; top: 0px;">
                                                        <a href="../../wp-content/uploads/2019/11/<?php echo $dd['host']['galeria_1'] ?>" class="portfolio-image popup-gallery" title="<?php echo $dd['host']['galeria_1'] ?>">
                                                            <img src="../../wp-content/uploads/2019/11/<?php echo $dd['host']['galeria_1'] ?>">
                                                            <div class="portfolio-hover-title">
                                                                <div class="portfolio-content">
                                                                    <h4>Galería 1</h4>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php } ?>
                                                <?php if(!empty( $dd['host']['galeria_2'])){ ?>
                                                    <div class="portfolio-item" style="position: absolute; left: 234px; top: 0px;">
                                                        <a href="../../wp-content/uploads/2019/11/<?php echo $dd['host']['galeria_2'] ?>" class="portfolio-image popup-gallery" title="<?php echo $dd['host']['galeria_2'] ?>">
                                                            <img src="../../wp-content/uploads/2019/11/<?php echo $dd['host']['galeria_2'] ?>" alt="<?php echo $dd['host']['galeria_2'] ?>">
                                                            <div class="portfolio-hover-title">
                                                                <div class="portfolio-content">
                                                                    <h4>Galería 2</h4>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php } ?>
                                                <?php if(!empty( $dd['host']['galeria_3'])){ ?>
                                                    <div class="portfolio-item" style="position: absolute; left: 469px; top: 0px;">
                                                        <a href="../../wp-content/uploads/2019/11/<?php echo $dd['host']['galeria_3'] ?>" class="portfolio-image popup-gallery" title="<?php echo $dd['host']['galeria_3'] ?>">
                                                            <img src="../../wp-content/uploads/2019/11/<?php echo $dd['host']['galeria_3'] ?>" alt="<?php echo $dd['host']['galeria_3'] ?>">
                                                            <div class="portfolio-hover-title">
                                                                <div class="portfolio-content">
                                                                    <h4>Galería 3</h4>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="vc_element vc_vc_row vc_container-block vc_layout_1" data-tag="vc_row" data-model-id="03d06a2a5f74fa54253ff5d01ebbc05d" id="ruedaNegocios" style="margin-top:50px;">
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1498038552127 ui-sortable">
                            <div class="container">
                                <div class="vc_element vc_vc_column vc_container-block vc_col-sm-12" data-tag="vc_column" data-shortcode-controls="[&quot;edit&quot;,&quot;clone&quot;,&quot;delete&quot;]" data-model-id="aee7f2bae5d7587cb5a57ee06ccc3a6b">
                                    <div class="wpb_column vc_column_container">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="Sc-heading row">
                                                    <div class="u-MarginBottom50 u-xs-MarginBottom30 u-sm-MarginBottom30 text-center col-sm-8 col-sm-offset-2">
                                                        <h1 class="u-MarginTop5 u-MarginBottom10 u-Weight700 Sc-heading__main">Rueda de negocios</h1>
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
                    <?php if(isset($_SESSION['token'])){ ?>
                        <input value="<?php echo $_SESSION['token'] ?>" name="hidden" type="hidden" id="token">
                        <input value="<?php echo $dd['ticket']['id'] ?>" type="hidden" name="ticketId" id="ticketId">
                    <?php }?>


                    <!-- Modal -->
                    <div class="modal fade" id="viewCitaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Usted está agendando una cita con la empresa <span id="empresa"></span>, en el espacio de <span id="horaInicio"></span> a <span id="horaFin"></span> en la mesa <span id="mesaText"></span>.
                                </div>
                                <form id="formulario_de_prueba" name="formulario_de_prueba" method="post" class="wpcf7-form demo">
                                    <input value="" type="hidden" name="id_anfitrion" id="idCita">
                                    <input value="<?php echo $dd['ticket']['id'] ?>" type="hidden" name="idBoletas">
                                    <input value="<?php echo $_SESSION['user']['id'] ?>" type="hidden" name="userId">
                                    <input value="<?php echo $_SESSION['user']['email'] ?>" type="hidden" name="email_user">
                                    <input value="<?php echo $dd['host']['empresa'] ?>" type="hidden" name="empresa">
                                    <?php if(empty( $dd['host']['email'])) {?>
                                        <input value="lina.garcia@gmediacompany.com" type="hidden" name="email_empresa">
                                    <?php }else{?>
                                        <input value="<?php echo $dd['host']['email'] ?>" type="hidden" name="email_empresa">
                                    <?php }?>
                                    <input value="" type="hidden" name="timeStart" id="hourStart">
                                    <input value="" type="hidden" name="timeEnd" id="hourEnd">
                                    <input value="" type="hidden" name="mesaValue" id="mesaValue">
                                    <div class="modal-footer" style="text-align:center;">
                                        <button type="submit" class="btn btn-primary" id="saveModal">Confirmar</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="viewCancelar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="text-align: center">
                                    Ya tienes una cita agendada para este horario
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vc_element vc_vc_row vc_container-block vc_layout_1" data-tag="vc_row" data-shortcode-controls="[&quot;edit&quot;,&quot;clone&quot;,&quot;delete&quot;]" data-model-id="a4c99fbb999e931a7db3bf8574571e85" style="margin-bottom:50px;">
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1499251628957 ui-sortable">
                            <div class="container">
                                <div class="vc_element vc_vc_column vc_container-block vc_col-sm-12" data-tag="vc_column" data-shortcode-controls="[&quot;edit&quot;,&quot;clone&quot;,&quot;delete&quot;]" data-model-id="a7812fe88b95d9849c90ca1b5399cc2a">
                                    <div class="wpb_column vc_column_container">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper vc_element-container ui-sortable">
                                                <?php foreach ($dd['horario'] as $horario){ ?>
                                                    <div class="col-sm-4 agenda">
                                                        <p style="text-align: center;padding-top:10px;">
                                                            <?php echo  date("g:i a",strtotime($horario['hora_inicio'])) ?> - <?php echo  date("g:i a",strtotime($horario['hora_fin'])) ?>
                                                        </p>
                                                        <p style="text-align: center">Mesa <?php echo $horario['mesa'] ;?></p>
                                                        <p style="text-align: center">
                                                            <?php if(isset($_SESSION['token'])){;?>
                                                                <?php if($horario['estado'] == 1){;?>
                                                                    <?php if($_SESSION['user']['idRol'] == 1 || $_SESSION['user']['idRol'] == 4)  {?>
                                                                        <a class="btn btn-primary u-MarginBottom10 u-LetterSpacing2 " style="text-align:center;">
                                                                            No puedes agendar cita
                                                                        </a>
                                                                    <?php }else{ ?>
                                                                        <?php foreach ($dd['cita'] as $citas){ ?>
                                                                            <?php
                                                                            if($citas['id'] == $horario['id']){
                                                                                if($citas['estado'] == 1 ){
                                                                                    ?>
                                                                                    <a class="btn btn-secondary u-MarginBottom10 u-LetterSpacing2"  style="text-align:center;background: #cccccc;">
                                                                                        OCUPADO
                                                                                    </a>
                                                                                <?php }else{ ?>

                                                                                        <a class="btn btn-primary u-MarginBottom10 u-LetterSpacing2 viewCita"
                                                                                           data-toggle="modal"  style="text-align:center;"
                                                                                           href="" data-id="<?php echo $horario['id'] ?>">
                                                                                            AGENDAR CITA
                                                                                        </a>
                                                                                <?php }} ?>
                                                                        <?php } ?>
                                                                    <?php } ?>
                                                                <?php }else{ ?>
                                                                    <a class="btn btn-secondary u-MarginBottom10 u-LetterSpacing2"  style="text-align:center;background: #cccccc;">
                                                                        OCUPADO
                                                                    </a>
                                                                <?php } ?>
                                                            <?php }else{ ?>
                                                                <a class="btn btn-primary u-MarginBottom10 u-LetterSpacing2 " href="iniciar-sesion/" style="text-align:center;">
                                                                    Inicia sesión
                                                                </a>
                                                            <?php } ?>
                                                        </p>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vc_row-full-width vc_clearfix"></div>

                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1572988000429 vc_row-o-content-middle vc_row-flex">
                        <div class="container">
                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_center">
                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="745" height="272" src="http://transformabogota40.gevents.co/wp-content/uploads/2019/11/logo_alcaldia_bog.png" class="vc_single_image-img attachment-full" alt="" srcset="http://transformabogota40.gevents.co/wp-content/uploads/2019/11/logo_alcaldia_bog.png 745w, http://transformabogota40.gevents.co/wp-content/uploads/2019/11/logo_alcaldia_bog-300x110.png 300w, http://transformabogota40.gevents.co/wp-content/uploads/2019/11/logo_alcaldia_bog-670x245.png 670w, http://transformabogota40.gevents.co/wp-content/uploads/2019/11/logo_alcaldia_bog-500x183.png 500w" sizes="(max-width: 745px) 100vw, 745px"></div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_center">
                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="745" height="272" src="http://transformabogota40.gevents.co/wp-content/uploads/2019/11/logo_tecnalia-1.png" class="vc_single_image-img attachment-full" alt="" srcset="http://transformabogota40.gevents.co/wp-content/uploads/2019/11/logo_tecnalia-1.png 745w, http://transformabogota40.gevents.co/wp-content/uploads/2019/11/logo_tecnalia-1-300x110.png 300w, http://transformabogota40.gevents.co/wp-content/uploads/2019/11/logo_tecnalia-1-670x245.png 670w, http://transformabogota40.gevents.co/wp-content/uploads/2019/11/logo_tecnalia-1-500x183.png 500w" sizes="(max-width: 745px) 100vw, 745px"></div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_center">
                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="745" height="272" src="http://transformabogota40.gevents.co/wp-content/uploads/2019/11/logo_clarke.png" class="vc_single_image-img attachment-full" alt="" srcset="http://transformabogota40.gevents.co/wp-content/uploads/2019/11/logo_clarke.png 745w, http://transformabogota40.gevents.co/wp-content/uploads/2019/11/logo_clarke-300x110.png 300w, http://transformabogota40.gevents.co/wp-content/uploads/2019/11/logo_clarke-670x245.png 670w, http://transformabogota40.gevents.co/wp-content/uploads/2019/11/logo_clarke-500x183.png 500w" sizes="(max-width: 745px) 100vw, 745px"></div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_center">
                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="745" height="272" src="http://transformabogota40.gevents.co/wp-content/uploads/2019/11/Logo_FITIC_.png" class="vc_single_image-img attachment-full" alt="" srcset="http://transformabogota40.gevents.co/wp-content/uploads/2019/11/Logo_FITIC_.png 745w, http://transformabogota40.gevents.co/wp-content/uploads/2019/11/Logo_FITIC_-300x110.png 300w, http://transformabogota40.gevents.co/wp-content/uploads/2019/11/Logo_FITIC_-670x245.png 670w, http://transformabogota40.gevents.co/wp-content/uploads/2019/11/Logo_FITIC_-500x183.png 500w" sizes="(max-width: 745px) 100vw, 745px"></div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- .entry-content -->
            </div>
            <!-- #post-149 -->
        </main>
    </div>
    <!-- #primary -->
</div>
<!-- #primary -->

<script>
    var urlApi = 'https://prod.gevents.co/public/api/';
    var urlWeb = 'http://transformabogota40.gevents.co/';

    jQuery(document).ready( function() {

        var token = jQuery('#token').val();

        jQuery('.viewCita').click(function () {
            var id=jQuery(this).data('id');
            var ticketId=jQuery('#ticketId').val();

            jQuery.ajax({
                url: urlApi+"get_view_cita_tecnalia/"+id+"/"+ticketId,
                dataType: "json",
                headers: {"Accept": "application/json", "Authorization": "Bearer "+token},
                success: function(response) {
                    console.log(response);
                    if(response['agenda'] == 1){

                        jQuery('#viewCancelar').modal('show');
                    }else {
                        jQuery('#viewCitaModal').modal('show');


                        var timeString = response['cita']['hora_inicio'];
                        var H = +timeString.substr(0, 2);
                        var h = H % 12 || 12;
                        var ampm = (H < 12 || H === 24) ? " AM" : " PM";
                        var timeStart = h + timeString.substr(2, 3) + ampm;

                        var timeEnd = response['cita']['hora_fin'];
                        var HEnd = +timeEnd.substr(0, 2);
                        var hEnd = HEnd % 12 || 12;
                        var ampmEnd = (HEnd < 12 || HEnd === 24) ? " AM" : " PM";
                        var time_end = hEnd + timeEnd.substr(2, 3) + ampmEnd;

                        jQuery('#horaInicio').html(timeStart);
                        jQuery('#hourStart').val(timeStart);
                        jQuery('#horaFin').html(time_end);
                        jQuery('#hourEnd').val(time_end);
                        jQuery('#empresa').html(response['cita']['empresa']);
                        jQuery('#idCita').val(response['cita']['id']);
                        jQuery('#mesaText').html(response['cita']['mesa']);
                        jQuery('#mesaValue').val(response['cita']['mesa']);
                    }
                }
            });
        });


    });
    jQuery("#formulario_de_prueba").bind("submit",function() {
        var tokenA = jQuery('#token').val();
        jQuery.ajax({
            url: "https://prod.gevents.co/public/api/post_calender_gevent",
            dataType: "json",
            type: 'post',
            headers: {"Accept": "application/json", "Authorization": "Bearer "+tokenA},
            contentType: "application/x-www-form-urlencoded;charset=utf-8",
            data: jQuery(this).serialize(),
            success: function (response) {

                window.location.replace(urlWeb+"mi-agenda/");
                return false;

            },
            error: function (error) {
                window.location.replace(urlWeb+"mi-agenda/");
                return false;

            }
        });
        window.location.replace(urlWeb+"mi-agenda/");
        return false;

    });

</script>

<?php get_footer(); ?>
