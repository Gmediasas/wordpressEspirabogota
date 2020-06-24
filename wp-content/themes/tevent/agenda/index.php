<?php
session_start();
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
Template Name: landing-index
*/

?>

<style>

    .vc_column_container {
        padding-left: 0;
        padding-right: 0;
    }

    .vc_column_container > .vc_column-inner {
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
        margin-top: 100px !important;
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

    .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    nav.navbar.bootsnav ul.nav > li > a {
        color: #fff;
        background-color: transparent !important;
    }

    @media (min-width: 1200px) {
        .container {
            width: 1170px;
        }
    }

    @media (min-width: 1024px) {
nav.navbar.bootsnav ul.nav > li > a {
    padding: 30px 15px;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    font-weight: bold;
  }
}

    @media (min-width: 992px) {
        .container {
            width: 970px;
        }
    }

    @media (min-width: 768px) {

        .vc_col-sm-1, .vc_col-sm-10, .vc_col-sm-11, .vc_col-sm-12, .vc_col-sm-2, .vc_col-sm-3, .vc_col-sm-4, .vc_col-sm-5, .vc_col-sm-6, .vc_col-sm-7, .vc_col-sm-8, .vc_col-sm-9 {

        }

        .vc_col-sm-4 {
            width: 33.33333333%;
        }
    }

    .hover-img figure {
        background: #000;
        display: inline-block;
    }

    .text-gray {
        color: #787878;
        font-size: 13px;
        padding: 15px 20px 5px;
        text-align: justify;
    }

    .btn-primary:hover, .btn-primary:focus, .btn-primary.focus {
        color: #6f6f6f;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
    }

    .carousel-inner > .item > a > img, .carousel-inner > .item > img, .img-responsive, .thumbnail a > img, .thumbnail > img {
        height: auto;
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


<main id="main" class="site-main" role="main">
    <div class="vc_row wpb_row vc_row-fluid vc_custom_1498038552127">
        <div class="container">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="Sc-heading row">
                            <div class="u-MarginBottom50 u-xs-MarginBottom30 u-sm-MarginBottom30 text-center col-sm-8 col-sm-offset-2">
                                <h2 class="u-MarginTop5 u-MarginBottom10 u-Weight700 Sc-heading__main">Rueda de
                                    negocios</h2>
                                <div class="Split Split--height2"></div>
                                <p class="u-PaddingTop30 Sc-heading__sub">Potencializa tus relaciones comerciales<br>
                                    y oportunidades de negocio.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php

    //Gestión de erorres
    $postHeaders = array('Content-Type: application/json');
    $apiUrl = 'https://prod.gevents.co/public/api/get_viewHost_gevent';
    $curl = curl_init($apiUrl);
    curl_setopt($curl, CURLOPT_ENCODING, "");
    curl_setopt($curl, CURLOPT_HTTPHEADER, $postHeaders);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($curl);

    $dd = json_decode($json, true);


    curl_close($curl);

    ?> 

    <!-- Aquí empieza la lista de empresas -->
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="container">
            <?php
                foreach ($dd['host'] as $nuevo) {
            ?>
            <div class="wpb_column vc_column_container vc_col-sm-4" style="float:left;margin-bottom: 20px !important;">
                <div class="vc_column-inner vc_custom">
                    <div class="wpb_wrapper">
                        <div class="u-BoxShadow100 text-center">
                            <div class="Blurb u-InlineBlock">
                                <a   onclick="irDescription(<?php echo $nuevo['id'] ?>)"  class="hover-img">
                                    <figure> 
                                        <img class="img-responsive " src="../wp-content/uploads/2019/11/<?php echo $nuevo['logo'] ?>">
                                        <span class="bi bi-plus-gap"></span>
                                    </figure>
                                </a>
                                <h4 class="u-MarginTop25 u-MarginBottom0"><?php echo $nuevo['empresa'] ?></h4>
                                <p class="text-gray">

                                    <?php
                                        if(empty($nuevo['descripcion'])){
                                            echo substr($nuevo['informacion_empresa'], 0,100 );
                                        }else{
                                            echo substr($nuevo['descripcion'], 0,100 );
                                        }
                                    ?>...
                                </p>
                                <p class="u-MarginTop20 u-MarginBottom20 Anchors">
                                    <form action="../descripcion/empresa/" method="post">
                                        <input type="hidden" name="project" value="<?php echo $nuevo['id'] ?>">
                                        <input class="btn btn-primary u-MarginBottom10 u-LetterSpacing2" type="submit" id="botondes-<?php echo $nuevo['id'] ?>" value="AGENDAR CITA" style="display:none">
                                    </form>
                                    <form action="../descripcion/empresa/#ruedaNegocios" method="post">
                                        <input type="hidden" name="project" value="<?php echo $nuevo['id'] ?>">
                                        <input class="btn btn-primary u-MarginBottom10 u-LetterSpacing2" type="submit"  value="AGENDAR CITA">
                                    </form>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                }
            ?>

        </div>
    </div>
    <!-- Aquí termina la lista de empresas -->
</main>
<!-- #main -->

<?php get_footer(); ?>
<script>
    function irDescription($id) {
        jQuery('#botondes-'+ $id).trigger("click");
    }

</script>
