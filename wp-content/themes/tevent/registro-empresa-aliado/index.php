<?php
   session_start();
   
   
   get_header();
   /*
   Template Name: landing-registro-empresa-aliado
   */
     
   ?>
<style>
   html {
   box-sizing: border-box;
   }
   html {
   font-family: sans-serif;
   line-height: 1.15;
   -ms-text-size-adjust: 100%;
   -webkit-text-size-adjust: 100%;
   }
   html {
   display: block;
   }
   *, *:after, *:before {
   box-sizing: inherit;
   }
   .cover {
   height: 100vh;
   overflow: hidden;
   position: relative;
   width: 100%;
   }
   .swiper-touch-overlay {
   display: none;
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   z-index: 100;
   background-color: rgba(255, 0, 0, 0.3);
   }
   .swiper-cover {
   position: absolute;
   width: 100%;
   height: 100%;
   }
   .swiper-cover-nav {
   position: absolute;
   right: 30px;
   top: 50%;
   -webkit-transform: translate3d(0, -50%, 0);
   transform: translate3d(0, -50%, 0);
   z-index: 100;
   transition: all 300ms ease-in-out;
   opacity: 0;
   visibility: hidden;
   }
   .swiper-cover-nav__inner {
   position: relative;
   width: 106px;
   }
   .swiper-cover-nav.show .swiper-cover-nav__prev {
   top: 0;
   opacity: 1;
   -webkit-animation: snapLeft 700ms 0 forwards;
   animation: snapLeft 700ms 0 forwards;
   }
   .swiper-cover-nav__prev {
   top: -30px;
   left: 0;
   opacity: 0;
   }
   .swiper-cover-content {
   position: absolute;
   top: 0;
   left: 0;
   width: 45%;
   height: 100%;
   z-index: 50;
   }
   .swiper-cover-content .swiper-wrapper.show {
   opacity: 1;
   }
   .swiper-cover-content .swiper-wrapper {
   opacity: 0;
   }
   .swiper-container-vertical>.swiper-wrapper {
   -webkit-box-orient: vertical;
   -moz-box-orient: vertical;
   -ms-flex-direction: column;
   -webkit-flex-direction: column;
   flex-direction: column;
   }
   .swiper-container-android .swiper-slide, .swiper-wrapper {
   -webkit-transform: translate3d(0,0,0);
   -moz-transform: translate3d(0,0,0);
   -o-transform: translate(0,0);
   -ms-transform: translate3d(0,0,0);
   transform: translate3d(0,0,0);
   }
   .swiper-wrapper {
   position: relative;
   width: 100%;
   height: 100%;
   z-index: 1;
   display: -webkit-box;
   display: -moz-box;
   display: -ms-flexbox;
   display: -webkit-flex;
   display: flex;
   -webkit-transition-property: -webkit-transform;
   -moz-transition-property: -moz-transform;
   -o-transition-property: -o-transform;
   -ms-transition-property: -ms-transform;
   transition-property: transform;
   -webkit-box-sizing: content-box;
   -moz-box-sizing: content-box;
   box-sizing: content-box;
   }
   .swiper-slide {
   overflow: hidden;
   }
   .swiper-slide {
   -webkit-flex-shrink: 0;
   -ms-flex: 0 0 auto;
   flex-shrink: 0;
   width: 100%;
   height: 100%;
   position: relative;
   }
   .swiper-cover-content .swiper-slide.swiper-slide-active .swiper-slide-content {
   -webkit-transform: translate3d(0, -50%, 0);
   transform: translate3d(0, -50%, 0);
   opacity: 1;
   visibility: visible;
   }
   .swiper-cover-content .swiper-slide-content {
   position: absolute;
   top: 50%;
   /* padding: 0 120px; */
   transition: all 200ms ease-in-out;
   -webkit-transform: translate3d(-2%, -48%, 0);
   transform: translate3d(-2%, -48%, 0);
   opacity: 0;
   visibility: hidden;
   }
   .swiper-cover-content .swiper-slide-content {
   left: 42%;
   }
   .swiper-cover-content .swiper-slide-content .aliado {
   right: 42%;
   }
   p {
   font-family: "Brandon Text", sans-serif;
   font-size: 18px;
   font-weight: 300;
   line-height: 1.2;
   }
   .mb10 {
   margin-bottom: 10px !important;
   }
   .mt10 {
   margin-top: 10px !important;
   }
   h1 {
   font-size: 20px;
   font-family: "Roboto", serif;
   font-weight: bold;
   line-height: 1;
   }
   .btn.btn--secondary {
   background-color: #ffffff;
   color: #1A4F9F;
   position: relative;
   overflow: hidden;
   }
   .btn {
   background-color: #ffffff;
   border-radius: 50px;
   display: inline-block;
   cursor: pointer;
   color: #1A4F9F;
   font-family: Arial;
   font-size: 14px;
   padding: 5px 20px;
   text-decoration: none;
   text-shadow: 0px 1px 0px #283966;
   width: 140px;
   margin-top: 20px;
   }
   .cover__sheet.show {
   left: 0;
   }
   .cover__sheet {
   position: absolute;
   top: -20%;
   left: -150%;
   width: 100%;
   height: 160%;
   background-color: #fff;
   z-index: 5;
   box-shadow: 0 0 120px 0 rgba(0, 0, 0, 0.25);
   transition: all 250ms ease-in-out;
   -webkit-transform: rotate(15deg) translate3d(-50%, 0, 0);
   transform: rotate(15deg) translate3d(-50%, 0, 0);
   }
   .cover__inner {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   z-index: 5;
   }
   .cover__bg {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   z-index: 2;
   background-size: cover;
   background-position: 50% 50%;
   background-repeat: no-repeat;
   box-shadow: 0 0 120px 0 rgba(0, 0, 0, 0.25) inset;
   }
   .cover__bg .progressiveMedia-previewCanvas, .cover__bg img.progressiveMedia-thumb {
   position: absolute;
   left: 50%;
   top: 50%;
   -webkit-transform: translate3d(-50%, -50%, 0);
   transform: translate3d(-50%, -50%, 0);
   min-width: 100%;
   min-height: 100%;
   width: auto !important;
   height: auto !important;
   }
   .progressiveMedia-previewCanvas--full {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   }
   .progressiveMedia-thumb {
   display: none;
   }
   .progressiveMedia-thumb--full {
   width: 100%;
   height: 100%;
   }
   img {
   border-style: none;
   }
   @media (max-width: 900px){
   .swiper-cover-nav {
   right: auto;
   top: auto;
   bottom: 30px;
   height: 60px;
   left: 50%;
   -webkit-transform: translate3d(-50%, -50%, 0);
   transform: translate3d(-50%, -50%, 0);
   }
   .swiper-cover-content {
   width: 100%;
   height: 100%;
   height: 45%;
   height: 45vh;
   font-size: 1vh;
   }
   .swiper-cover-content .swiper-wrapper {
   transition: all 200ms ease-in-out;
   }
   .swiper-cover-content .swiper-slide {
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   -webkit-box-pack: center;
   -ms-flex-pack: center;
   justify-content: center;
   -webkit-box-align: center;
   -ms-flex-align: center;
   align-items: center;
   padding-top: 10px;
   }
   .swiper-cover-content .swiper-slide-content {
   position: relative;
   top: 0;
   left: 0;
   -webkit-transform: translate3d(0, 0, 0);
   transform: translate3d(0, 0, 0);
   width: 100%;
   padding: 0;
   text-align: center;
   }
   .swiper-cover-content .swiper-slide.swiper-slide-active .swiper-slide-content {
   -webkit-transform: translate3d(0, 0, 0);
   transform: translate3d(0, 0, 0);
   }
   .cover__sheet.show {
   top: 0;
   -webkit-transform: skewY(-15deg) translate3d(0, -50%, 0);
   transform: skewY(-15deg) translate3d(0, -50%, 0);
   }
   .cover__sheet {
   height: 100%;
   left: 0;
   width: 100%;
   -webkit-transform: skewY(-15deg) translate3d(0, -100%, 0);
   transform: skewY(-15deg) translate3d(0, -100%, 0);
   }
   .swiper-wrapper.show .cover__bg {
   background-size: auto 60%;
   background-position: 50% 100%;
   }
   .cover__bg {
   transition: all 200ms ease-in;
   background-size: auto 100%;
   background-position: 50% 100%;
   }
   .aliado {
   webkit-transform: translate3d(0%, 0%, 0) !important;
   transform: translate3d(0%, 0%, 0) !important;
   top: 58% !important;
   right: 0 !important;
   padding: 0 25% !important;
   }
   }
   @media only screen and (max-device-width: 480px) and (min-device-width: 320px) {
   .swiper-cover-content .swiper-slide .swiper-slide-content {
   padding: 0 30px;
   margin-top: 30px;
   }
   .swiper-cover-content .swiper-slide .swiper-slide-content .swiper-slide-content__title--small {
   margin-top: 5px;
   margin-bottom: 5px;
   font-size: 36px;
   }
   h1 {
   font-size: 42px;
   }
   }
   @media (min-width: 1024px){
   nav.navbar.bootsnav.no-background {
   background: white !important;
   border: none;
   box-shadow: none !important;
   color: #6f6f6f;
   }
   }







   .vc_custom_1593553240542 {
    background-color: #1a4f9f !important;
}









</style>
<main id="main" class="site-main" role="main">
   <div id="cover" class="cover">
      <div id="swiper-touch-overlay" class="swiper-touch-overlay"></div>
      <div id="swiper-cover" class="swiper-cover swiper-container-vertical">
         <div id="swiper-coverContent" class="swiper-cover-content swiper-container-vertical">
            <div class="swiper-wrapper show">
               <div class="swiper-slide swiper-slide-active">
                  <div class="swiper-slide-content empresa">
                     <h1 align="center" class="swiper-slide-content__title--small mb10 mt10" style="color: #ffffff;">Registro de empresa</h1>
                     <p align="center" style="font-size:16px;color: #ffffff;">Haga clic aquí para ir<br>al registro de empresa</p>
                     <div align="center"><a class="btn btn--secondary btn--icon mt10" href="/registro/"><span>ENTRAR</span></a></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="cover__sheet show">
            <div class="cover__inner" style="background-image: url(https://i.imgur.com/9DeyBJQ.jpg);background-repeat: no-repeat;background-size: cover;background-color:#1A4F9F;"></div>
         </div>
         <div class="swiper-wrapper show">
            <div class="swiper-slide swiper-slide-active">
               <div class="cover__bg progressiveMedia--loaded" style="background-image: url(https://i.imgur.com/JXc1ORg.jpg);">
                  <canvas id="progressiveMedia-previewCanvas-FyYnR" class="progressiveMedia-previewCanvas progressiveMedia-previewCanvas--full" style="display: none;"></canvas>
                  <img src="https://i.imgur.com/JXc1ORg.jpg" class="progressiveMedia-thumb progressiveMedia-thumb--full">
               </div>
               <div class="swiper-slide-content aliado" style="z-index: 999999;
                  opacity: 1;
                  visibility: visible;
                  position: absolute;
                  top: 50%;
                  right: 6%;
                  padding: 0 120px;
                  transition: all 200ms ease-in-out;
                  -webkit-transform: translate3d(-2%, -48%, 0);
                  transform: translate3d(-2%, -48%, 0);">
                  <h1 align="center" class="" style="color: #1A4F9F;">Registro de aliado</h1>
                  <p align="center" style="font-size:16px;color: #1A4F9F;">Haga clic aquí para ir<br>al registro de aliado</p>
                  <div align="center"><a class="btn btn--secondary btn--icon mt10" href="/registro-proveedor/" style="background-color: #1A4F9F !important;
                     color: #ffffff !important;"><span>ENTRAR</span></a></div>
               </div>
            </div>
         </div>
      </div>
   </div>








	
   <div id="post-120" class="post-120 page type-page status-publish hentry">
   <div class="entry-content">
      <div class="vc_row wpb_row vc_row-fluid">
         <div class="container">
            <div class="wpb_column vc_column_container vc_col-sm-12">
               <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                     <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="vc_row wpb_row vc_row-fluid vc_custom_1593553240542 vc_row-has-fill">
         <div class="container">
            <div class="wpb_column vc_column_container vc_col-sm-3">
               <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                     <h6 style="font-size: 12px;color: #ffffff;text-align: left;font-family:Roboto;font-weight:700;font-style:normal" class="vc_custom_heading">ALCALDÍA MAYOR DE BOGOTÁ</h6>
                     <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_white"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span></div>
                     <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                           <ul style="font-size: 12px;">
                              <li style="color: #ffffff;"><span style="color: #ffffff; font-size: 12px;"><a style="color: #ffffff; font-size: 12px;" href="https://bogota.gov.co/" target="_blank" rel="noopener noreferrer">Portal Bogotá</a></span></li>
                              <li style="color: #ffffff;"><span style="color: #ffffff;"><a style="color: #ffffff;" href="http://www.secretariageneralalcaldiamayor.gov.co/" target="_blank" rel="noopener noreferrer">Secretaría General</a></span></li>
                              <li style="color: #ffffff;"><span style="color: #ffffff;"><a style="color: #ffffff;" href="http://www.ipes.gov.co/" target="_blank" rel="noopener noreferrer">Instituto para la Economía Social – IPES</a></span></li>
                              <li style="color: #ffffff;"><span style="color: #ffffff;"><a style="color: #ffffff;" href="http://www.sdmujer.gov.co/" target="_blank" rel="noopener noreferrer">Secretaria de la Mujer</a></span></li>
                              <li style="color: #ffffff;"><span style="color: #ffffff;"><a style="color: #ffffff;" href="http://observatorio.desarrolloeconomico.gov.co/" target="_blank" rel="noopener noreferrer">Observatorio Económico de Bogotá</a></span></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-3">
               <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                     <h6 style="font-size: 12px;color: #ffffff;text-align: left;font-family:Roboto;font-weight:700;font-style:normal" class="vc_custom_heading">ENTIDADES DE CONTROL</h6>
                     <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_white"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span></div>
                     <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                           <ul style="font-size: 12px;">
                              <li style="color: #ffffff;"><span style="color: #ffffff; font-size: 12px;"><a style="color: #ffffff; font-size: 12px;" href="https://www.procuraduria.gov.co/portal/" target="_blank" rel="noopener noreferrer">Procuraduría General de la Nación</a></span></li>
                              <li style="color: #ffffff;"><span style="color: #ffffff;"><a style="color: #ffffff;" href="https://www.contraloria.gov.co/" target="_blank" rel="noopener noreferrer">Contraloría General de la Repúbica</a></span></li>
                              <li style="color: #ffffff;"><span style="color: #ffffff;"><a style="color: #ffffff;" href="http://concejodebogota.gov.co/cbogota/site/edic/base/port/inicio.php" target="_blank" rel="noopener noreferrer">Consejo de Bogotá</a></span></li>
                              <li style="color: #ffffff;"><span style="color: #ffffff;"><a style="color: #ffffff;" href="http://www.veeduriadistrital.gov.co/" target="_blank" rel="noopener noreferrer">Veeduría Distrital</a></span></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-3">
               <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                     <h6 style="font-size: 12px;color: #ffffff;text-align: left;font-family:Roboto;font-weight:700;font-style:normal" class="vc_custom_heading">VÍNCULOS DE INTERÉS</h6>
                     <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_white"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span></div>
                     <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                           <ul style="font-size: 12px;">
                              <li style="color: #ffffff;"><span style="color: #ffffff; font-size: 12px;"><a style="color: #ffffff; font-size: 12px;" href="https://oab.ambientebogota.gov.co/" target="_blank" rel="noopener noreferrer">Observatorio Ambiental de Bogotá</a></span></li>
                              <li style="color: #ffffff;"><span style="color: #ffffff;"><a style="color: #ffffff;" href="http://www.bogotaturismo.gov.co/" target="_blank" rel="noopener noreferrer">Bogotá Turismo</a></span></li>
                              <li style="color: #ffffff;"><span style="color: #ffffff;"><a style="color: #ffffff;" href="https://es.investinbogota.org/" target="_blank" rel="noopener noreferrer">Invest in Bogotá</a></span></li>
                              <li style="color: #ffffff;"><span style="color: #ffffff;"><a style="color: #ffffff;" href="https://bogota.gov.co/" target="_blank" rel="noopener noreferrer">Guía de Trámites y Servicios</a></span></li>
                              <li style="color: #ffffff;"><span style="color: #ffffff;"><a style="color: #ffffff;" href="http://tablerocontrolciudadano.veeduriadistrital.gov.co:3838/TCC/" target="_blank" rel="noopener noreferrer">Tablero de control ciudadano</a></span></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-3">
               <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                     <h6 style="font-size: 12px;color: #ffffff;text-align: left;font-family:Roboto;font-weight:700;font-style:normal" class="vc_custom_heading">GOBIERNO EN LÍNEA</h6>
                     <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_white"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span></div>
                     <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                           <ul style="font-size: 12px;">
                              <li style="color: #ffffff;"><span style="color: #ffffff; font-size: 12px;"><a style="color: #ffffff; font-size: 12px;" href="https://estrategia.gobiernoenlinea.gov.co/623/w3-channel.html" target="_blank" rel="noopener noreferrer">Gobierno en Línea</a></span></li>
                              <li style="color: #ffffff;"><span style="color: #ffffff;"><a style="color: #ffffff;" href="https://www.mintic.gov.co/portal/inicio/" target="_blank" rel="noopener noreferrer">MinTIC</a></span></li>
                              <li style="color: #ffffff;"><span style="color: #ffffff;"><a style="color: #ffffff;" href="https://estrategia.gobiernoenlinea.gov.co/623/w3-channel.html" target="_blank" rel="noopener noreferrer">Presidencia de la República</a></span></li>
                              <li style="color: #ffffff;"><span style="color: #ffffff;"><a style="color: #ffffff;" href="https://www.urnadecristal.gov.co/" target="_blank" rel="noopener noreferrer">Urna de Cristal</a></span></li>
                              <li style="color: #ffffff;"><span style="color: #ffffff;"><a style="color: #ffffff;" href="https://tic.bogota.gov.co/" target="_blank" rel="noopener noreferrer">Alta Consejería Distrital TIC</a></span></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="vc_row wpb_row vc_row-fluid vc_custom_1592941100738 vc_row-has-fill vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
         <div class="container">
            <div class="wpb_column vc_column_container vc_col-sm-8">
               <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                     <div class="wpb_text_column wpb_content_element  vc_custom_1593003449765">
                        <div class="wpb_wrapper">
                           <div style="line-height: 20px;"><span style="color: #ffffff; font-size: 11px;">Dirección: Carrera 60 No. 63A – 52</span><br>
                              <span style="color: #ffffff; font-size: 11px;">Teléfono: +57 1 3696777 Ext: 100</span><br>
                              <span style="color: #ffffff; font-size: 11px;">Línea Gratuita: 195</span><br>
                              <span style="color: #ffffff; font-size: 11px;">Correo electrónico institucional: contactenos@desarrolloeconomico.gov.co</span><br>
                              <span style="color: #ffffff; font-size: 11px;">Correo electrónico notificaciones judiciales: notificacionesjudiciales@desarrolloeconomico.gov.co</span><br>
                              <span style="color: #ffffff; font-size: 11px;">Horario de Atención: Lunes a Viernes: 8:00am – 4:00pm</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-4">
               <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                     <h6 style="font-size: 12px;color: #ffffff;text-align: center;font-family:Roboto;font-weight:500;font-style:normal" class="vc_custom_heading">Secretaria de Desarrollo Económico</h6>
                     <div class="wpb_single_image wpb_content_element vc_align_center">
                        <figure class="wpb_wrapper vc_figure">
                           <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="70" height="70" src="http://entornobogota.com/wp-content/uploads/2020/06/logo_republica_colombia_38.png" class="vc_single_image-img attachment-medium" alt=""></div>
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
<!-- #post-120 -->















</main>
<!-- #main -->
<?php get_footer(); ?>