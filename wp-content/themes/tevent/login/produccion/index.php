<?php
session_start();


get_header();
/*
Template Name: landing-login
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

      @media screen and (max-width: 767px) {
        .u-xs-FontSize40 {
          font-size: 50px !important;
          text-align: center;
          padding-top: 10px;
          }

        h3, .h3 {
        font-size: 18px;
        text-align: center;
        padding-top:10px;
        }
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


<main id="main" class="site-main" role="main">

  <div class="vc_row-full-width vc_clearfix"></div>

      <!-- Fila Iniciar sesión -->
      <div class="vc_row wpb_row vc_row-fluid" style="margin-top:100px;margin-bottom:50px;">
          <div class="container">
            <div class="wpb_column vc_column_container col-sm-7" style="padding: 8% 20px;">
                <div class="vc_column-inner">
                  <div class="wpb_wrapper">
                      <div class="Sc-hero-heading text-white">
                        <h1 class="u-FontSize75 u-xs-FontSize40 u-Weight700 u-MarginTop0 u-MarginBottom0" style="color: #000;line-height: 1em;font-size: 70px;margin-bottom:10px;">Entorno Bogotá</h1>
                        <h2 class="h3 text-uppercase u-Weight700 u-MarginTop0" style="color: #000;">27 DE NOVIEMBRE, 2020</h2>
                      </div>
                  </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container col-sm-5" style="padding:20px;">
                <div class="vc_column-inner">
                  <div class="wpb_wrapper">
                      <div class="screen-reader-response"></div>
                      <form action="" method="post" id="formLogin" class="wpcf7-form demo mailchimp-ext-0.5.08">
                            <div class="bg-black-transparent u-BorderRadius4 u-BoxShadow40 u-PaddingTop40 u-PaddingLeft40 u-PaddingRight40">
                                <?php if(isset($_SESSION['token'])) {?>
                                    <script>
                                        jQuery('#menu-item-976').css('display','none');
                                        jQuery('#menu-item-977').css('display','none');
                                    </script>

                                    <?php if($_SESSION['user']['idRol'] == 1) {?>
                                       <div class="form-group">
                                          <a href="agenda-general/" class="wpcf7-form-control wpcf7-submit btn btn-primary btn-block">
                                              Ver agenda
                                          </a>
                                      </div>
                                    <script>
                                        jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Ver Agenda" href="agenda-general/">Ver Agenda</a></li>')
                                        jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Cerrar Sesión" href="../wp-content/themes/tevent/login/api/logout.php">Cerrar Sesión</a></li>')
                                    </script>



                                    <?php }elseif($_SESSION['user']['idRol'] == 4) {?>
                                      <div class="form-group">
                                          <a href="agenda-empresa/" class="wpcf7-form-control wpcf7-submit btn btn-primary btn-block">
                                              Ver agenda
                                          </a>
                                      </div>
                                    <script>
                                        jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Ver Agenda" href="agenda-empresa/">Ver Agenda</a></li>')
                                        jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Cerrar Sesión" href="../wp-content/themes/tevent/login/api/logout.php">Cerrar Sesión</a></li>')

                                    </script>

                                <?php }else{ ?>
                                        <div class="form-group">
                                            <a href="mi-agenda/" class="wpcf7-form-control wpcf7-submit btn btn-primary btn-block">
                                                Ver agenda
                                            </a>
                                        </div>
                                        <script>
                                            jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Ver Agenda" href="mi-agenda/" >Ver Agenda</a></li>')
                                            jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Cerrar Sesión" href="../wp-content/themes/tevent/login/api/logout.php">Cerrar Sesión</a></li>')

                                        </script>
                                    <?php } ?>

                                    <div class="form-group">
                                        <a href="../wp-content/themes/tevent/login/api/logout.php" class="wpcf7-form-control wpcf7-submit btn btn-primary btn-block">
                                            Cerrar sesión
                                        </a>
                                    </div>

                                <?php }else{ ?>
                                    <script>
                                        jQuery('#menu-item-976').css('display','block');
                                        jQuery('#menu-item-977').css('display','block');
                                    </script>
                                    <h3 class="text-black u-MarginTop0" style="text-align: center;">Iniciar sesión</h3>
                                  <div class="form-group">
                                      <span class="wpcf7-form-control-wrap your-name">
                                          <input type="email" name="email" id="email" size="40" class="wpcf7-form-control wpcf7-text  form-control form-control--white"
                                                 aria-required="true" aria-invalid="false" placeholder="Correo electrónico*" >
                                      </span>
                                  </div>
                                  <div class="form-group">
                                      <span class="wpcf7-form-control-wrap last-name">
                                          <input type="password" name="password" size="40" id="password"
                                                 class="wpcf7-form-control wpcf7-text  form-control form-control--white"
                                                 aria-required="true" aria-invalid="false" placeholder="Contraseña*" >
                                      </span>
                                  </div>
                                  <div class="form-group forgot-password">
                                      <a href="recuperar-contrasena/">¿Olvidaste tu contraseña?</a>
                                  </div>
                                  <div class="form-group">
                                      <input type="submit" value="Entrar" id="saveLogin" class="wpcf7-form-control wpcf7-submit btn btn-primary btn-block"
                                      name="submit">
                                  </div>
                                  <?php } ?>
                            </div>
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                            <p style="display: none !important">
                                <span class="wpcf7-form-control-wrap referer-page">
                                    <input type="hidden" name="referer-page" value="http://transforma40.gmediacompany.com/wp-admin/edit.php?post_type=page"
                                           class="wpcf7-form-control wpcf7-text referer-page" aria-invalid="false">
                                </span>
                            </p>
                        </form>
                      <?php if(!isset($_SESSION['token'])) {?>
                      <div class="registro">
                        <span class="cuenta">
                            ¿Aún no tienes una cuenta?
                        </span>&nbsp;&nbsp;
                            <a href="../registro" class="crear_cuenta" style="color: #009cdf;">¡Regístrate!</a>
                      </div>
                      <?php }?>
                  </div>
                </div>
            </div>
          </div>
      </div>
      <!-- Termina Fila Iniciar sesión -->
      <div class="vc_row wpb_row vc_row-fluid">
        <div class="container">

          <!-- <div class="wpb_column vc_column_container col-xs-3 col-sm-3 col-md-3 col-lg-3">
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
          </div> -->
          
          <div class="wpb_column vc_column_container col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <div class="vc_column-inner">
                <div class="wpb_wrapper">
                  <div class="wpb_single_image wpb_content_element vc_align_center">
                    <figure class="wpb_wrapper vc_figure">
                      <div class="vc_single_image-wrapper vc_box_border_grey">
                        <img src="http://espirabogota.gevents.co/wp-content/uploads/2020/06/logo-bogota.png" class="wpb_single_image img">
                      </div>
                    </figure>
                  </div>
                </div>
              </div>
          </div>

          <div class="wpb_column vc_column_container col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <div class="vc_column-inner">
                <div class="wpb_wrapper">
                  <div class="wpb_single_image wpb_content_element vc_align_center">
                    <figure class="wpb_wrapper vc_figure">
                      <div class="vc_single_image-wrapper vc_box_border_grey">
                        <img src="http://espirabogota.gevents.co/wp-content/uploads/2020/06/L_TECNALIA_COLOMBIA_Transparente-Mediano.png" class="wpb_single_image img">
                      </div>
                    </figure>
                  </div>
                </div>
              </div>
          </div>

          <div class="wpb_column vc_column_container col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <div class="vc_column-inner">
                <div class="wpb_wrapper">
                  <div class="wpb_single_image wpb_content_element vc_align_center">
                    <figure class="wpb_wrapper vc_figure">
                      <div class="vc_single_image-wrapper vc_box_border_grey">
                        <img src="http://espirabogota.gevents.co/wp-content/uploads/2020/06/logo_entorno_.png" class="wpb_single_image img">
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
<script type="text/javascript" src="../wp-content/themes/tevent/login/js/jquery.validate.min.js"></script>

<script>
    jQuery("#saveLogin").on('click',function(){
        jQuery("#formLogin").validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                },
            },
            messages: {
                email: {
                    required: "El campo correo es requerido",
                    email: "Ingrese un correo valido",
                },
                password: {
                    required: "El campo contraseña es requerido",
                },
            }
        });
    });
</script>
<?php


if ($_POST){
if (isset($_POST['password'])) {

    include 'api/session.php';
}
}
?>

