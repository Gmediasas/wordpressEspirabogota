<?php
   session_start();
   
   get_header();
   /*
   Template Name: landing-registro
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
    color: #009cdf;
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
    color: #009cdf;
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

      .container {
      width: 1170px;
      }
   }
      @media (min-width: 992px){

         nav.navbar.bootsnav.navbar-fixed.navbar-transparent .logo-display, nav.navbar.bootsnav.navbar-fixed.no-background .logo-display {
      display: block;
      height: 84%;
      }

      .Sticky--top nav.navbar.bootsnav ul.nav > li > a {
    font-size: 12px;
    color: #6f6f6f;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    font-weight: bold;
    }

    .Sticky--top nav.navbar.bootsnav ul.nav > li.active > a {
      font-size: 12px;
    color: #009cdf;
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


      .container {
      width: 970px;
      }
   }
      @media (min-width: 768px){

         nav.navbar.bootsnav.navbar-fixed.navbar-transparent .logo-display, nav.navbar.bootsnav.navbar-fixed.no-background .logo-display {
      display: block;
      height: 84%;
      }

      .Sticky--top nav.navbar.bootsnav ul.nav > li > a {
    font-size: 12px;
    color: #6f6f6f;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    font-weight: bold;
    }

    .Sticky--top nav.navbar.bootsnav ul.nav > li.active > a {
      font-size: 12px;
    color: #009cdf;
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


   .container {
    width: 767px;
   }
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

<?php
$idPrograma=1;
//Gestión de erorres
$postHeaders = array('Content-Type: application/json');
$apiUrl = 'http://localhost/middleware/public/api/getFormCustomProgram/'.$idPrograma;
$curl = curl_init($apiUrl);
curl_setopt($curl, CURLOPT_ENCODING, "");
curl_setopt($curl, CURLOPT_HTTPHEADER, $postHeaders);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($curl);
$responseForm = json_decode($json, true); 
curl_close($curl);

 
?> 
<main id="main" class="site-main" role="main">
   <div id="post-116" class="post-116 page type-page status-publish hentry">
      <div class="entry-content">
         <div class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_row-o-columns-middle vc_row-o-equal-height vc_row-o-content-middle vc_row-flex vc_general">
            <div class="container">
               <div class="vc_col-sm-12">
                  <!-- Opción para alerta de guardado-->
                  <div id="alertSuccess"><strong></strong> </div>
                  <!-- Fin Opción para alerta de guardado-->
                  <div class="vc_column-inner">
                     <div>
                        <div role="form" class="wpcf7 vc_col-sm-12" id="wpcf7-f240-p116-o1" lang="en-US" dir="ltr">
                           <div class="screen-reader-response"></div>
                           <form id="formulario_de_prueba" name="formulario_de_prueba" method="post"  action="" enctype="multipart/form-data" class="wpcf7-form demo" >
                              <div class="bg-black-transparent u-BorderRadius4 u-BoxShadow40 u-PaddingTop40 u-PaddingLeft40 u-PaddingRight40" style="background-color: #f2f2f2;">

                                 <div class="row" style="height:20px;"></div>

                                 <div class="row">
                               
                                    <div class="col-sm-12">
                                       <h3 align="center" class="u-MarginTop50">Formulario de registro</h3>
                                    </div>

                                    <div class="form-group col-sm-12">
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="text" name="nombreEmpresa" id="nombreEmpresa" size="40" placeholder="Nombre de la empresa"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white required"
                                          aria-required="true" aria-invalid="false" onkeypress="return letras(event)">
                                       </span>
                                    </div>
                                 
                                 <?php
                                    foreach ($responseForm['customFormulario'] as $customCampos) {
                                       if($customCampos['required'] == 1){
                                          $required = 'required';
                                       }else{
                                          $required = '';
                                       }
                                       
                                       if($customCampos['orden'] < 9){
                                          if($customCampos['campo_custom_id'] == 1)
                                             include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/input.php");
                                          else if($customCampos['campo_custom_id'] == 2)
                                             if($customCampos['valores'] == '$')
                                                include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/selectPais.php");
                                             elseif($customCampos['valores'] == '#')
                                                include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/selectType.php");
                                             elseif($customCampos['valores'] == '!')
                                                include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/selectCodigo.php");
                                             elseif($customCampos['valores'] == '*')
                                                include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/selectLocal.php");
                                             else
                                                include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/select.php");
                                          else
                                             include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/multiple.php");
                                       }
                                    }  
                                 ?>

                                 
                                 </div>
                               

                                 <div class="row">
                                    <h5>Datos persona de contacto</h5>
                                 </div>

                                 <div class="row">
                                    <div class="form-group col-sm-6">
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="text" name="nombre" id="nombre" size="40" placeholder="Nombre de la persona de contacto"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white"
                                          aria-required="true" aria-invalid="false">
                                       </span>
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="text" name="apellidos" id="apellidos" size="40" placeholder="Apellido de la persona de contacto"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white"
                                          aria-required="true" aria-invalid="false">
                                       </span>
                                    </div>
                                    <div class="form-group select-wrapper col-sm-6">
                                       <span class="wpcf7-form-control-wrap ticket-type">
                                          <select name="tipo_documento" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                             aria-required="true" aria-invalid="false" id="tipo_documento">
                                             <option value="">Tipo de identificación*</option>
                                            <?php foreach ($responseForm['tipoIdentificacion'] as $typeId) {?>
                                                <option value="<?php echo $typeId['id']?>"> <?php echo $typeId['tipo']?></option>
                                             <?php }  ?>  
                                          </select>
                                       </span>
                                    </div>                                       
                                    <div class="form-group col-sm-6">
                                       <span class="wpcf7-form-control-wrap your-phone">
                                       <input type="text" name="numero_documento" id="numero_documento" size="40" placeholder="Número de documento*"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white"
                                          aria-required="true" aria-invalid="false">
                                       </span>
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="text" name="cargo" id="cargo" size="40" placeholder="Cargo dentro de la empresa"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white required"
                                          aria-required="true" aria-invalid="false"  >
                                       </span>
                                    </div>
                                 </div>
                                 
                                 <div class="row">
                                    <div class="form-group col-sm-6">
                                       <span class="wpcf7-form-control-wrap your-email">
                                       <input type="email" name="email" id="email" size="40" placeholder="Correo electrónico de la persona de contacto - Alternativa 1"
                                          class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control form-control--white"
                                          aria-required="true" aria-invalid="false" >
                                       </span>
                                    </div>
                                    <?php
                                       foreach ($responseForm['customFormulario'] as $customCampos) {
                                          if($customCampos['required'] == 1){
                                             $required = 'required';
                                          }else{
                                             $required = '';
                                          }
                                          
                                          if($customCampos['orden'] == 9){
                                             if($customCampos['campo_custom_id'] == 1)
                                                                                         
                                                include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/input.php");
                                             else if($customCampos['campo_custom_id'] == 2)
                                                if($customCampos['valores'] == '$')
                                                   include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/selectPais.php");
                                                elseif($customCampos['valores'] == '#')
                                                   include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/selectType.php");
                                                else
                                                   include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/select.php");
                                             else
                                                include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/multiple.php");
                                          }
                                       }  
                                    ?> 
                                 </div>

                                 <div class="row">
                                    <div class="form-group col-sm-6">
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="number" name="celular" id="celular" size="40" placeholder="Número telefónico de la persona de contacto"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white required"
                                          aria-required="true" aria-invalid="false" onkeypress="return letras(event)">
                                       </span>
                                    </div>
                                    <?php
                                       foreach ($responseForm['customFormulario'] as $customCampos) {
                                          if($customCampos['required'] == 1){
                                             $required = 'required';
                                          }else{
                                             $required = '';
                                          }
                                          
                                          if($customCampos['orden'] == 10){
                                             if($customCampos['campo_custom_id'] == 1)
                                                include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/input.php");
                                             else if($customCampos['campo_custom_id'] == 2)
                                                if($customCampos['valores'] == '$')
                                                   include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/selectPais.php");
                                                elseif($customCampos['valores'] == '#')
                                                   include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/selectType.php");
                                                else
                                                   include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/select.php");
                                             else
                                                include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/multiple.php");
                                          }
                                       }  
                                    ?> 
                                 </div>

                                 <div class="row">
                                    <h5>Documentos para requisitos mínimos habilitantes</h5>
                                 </div>

                                 <div class="row">
                                    <?php
                                       foreach ($responseForm['customFormulario'] as $customCampos) {
                                          if($customCampos['required'] == 1){
                                             $required = 'required';
                                          }else{
                                             $required = '';
                                          }
                                          
                                          if($customCampos['orden'] > 10){
                                             if($customCampos['campo_custom_id'] == 1)
                                                include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/input.php");
                                             else if($customCampos['campo_custom_id'] == 2)
                                                if($customCampos['valores'] == '$')
                                                   include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/selectPais.php");
                                                elseif($customCampos['valores'] == '#')
                                                   include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/selectType.php");
                                                else
                                                   include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/select.php");
                                             else if($customCampos['campo_custom_id'] == 4)
                                                include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/file.php");
                                             else
                                                include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/forms/multiple.php");
                                          }
                                       }  
                                    ?> 
                                                                   
                                 </div>

                                 <div class="row" style="height:20px;"></div>

                                 <div align="center" class="form-group col-sm-12">
                                    <input type="submit" value="Enviar registro" id="saveRegister"
                                       class="wpcf7-form-control wpcf7-submit btn btn-primary btn-block" style="width: 250px";>
                                 </div>
                              </div>
                              <input type="hidden" name="programaId" value="1">  
                              <input type="hidden" name="rol" value="15">  
                              <input type="hidden" name="ipUsuario" value="<?php echo $_SERVER["REMOTE_ADDR"]; ?>">
                           </form>
                        </div>
                     </div>
                     <div class="vc_col-sm-12">
                        <div role="form" class="wpcf7" id="wpcf7-f240-p116-o1" lang="en-US" dir="ltr">
                           <div class="screen-reader-response"></div>
                           <form action="/tecnalia/home-register/#wpcf7-f240-p116-o1" method="post" class="wpcf7-form demo" novalidate="novalidate">
                              <div style="display: none;">
                                 <input type="hidden" name="_wpcf7" value="240">
                                 <input type="hidden" name="_wpcf7_version" value="5.1.4">
                                 <input type="hidden" name="_wpcf7_locale" value="en_US">
                                 <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f240-p116-o1">
                                 <input type="hidden" name="_wpcf7_container_post" value="116">
                              </div>
                              <div class="wpcf7-response-output wpcf7-display-none"></div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="vc_parallax-inner skrollable skrollable-between" data-bottom-top="top: -50%;" data-top-bottom="top: 0%;" style="height: 150%; background-image: url(&quot;http://transformabogota40.gevents.co/wp-content/uploads/2017/06/ban1.jpg&quot;); top: -30.2306%;"></div>
         </div>
      </div>
      <!-- .entry-content -->
   </div>
   <!-- #post-116 -->
</main>
<?php get_footer(); ?>
<script type="text/javascript" src="../wp-content/themes/tevent/registro/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../wp-content/themes/tevent/registro/js/caracterEspecial.js"></script>
<script>
   var urlApi = 'http://localhost/middleware/public/api/save_ForCustom';
   
 
  jQuery(function(){
       jQuery("#formulario_de_prueba").on("submit", function(e){

         jQuery('#saveRegister').prop('disabled', false);
         var valuesForm =  jQuery("input[name='idFormularioF\\[\\]']").map(function() { return jQuery('#archivo_'+ jQuery(this).val()).prop('files')[0];}).get();
         
         var ajaxData = new FormData(document.getElementById("formulario_de_prueba"));
      
         /* mapiar los valores encontrados para formar un arreglo*/
        var myArray = jQuery.map(valuesForm, function(value, index) {  
            ajaxData.append('responseFile['+index+']', value);
         });  
  
       
        jQuery.ajax({
          type: 'POST',
           url: urlApi,     
           contentType: false,
           processData: false,
           data: ajaxData,
           success: function(response) {
            console.log(response);   
               if (response['response']['status'] == "Success") {
                  jQuery('#formulario_de_prueba').trigger("reset");
                  jQuery('#saveRegister').prop('disabled', false);
                  window.location.href="gracias/";
               }else{
                  jQuery('#alertSuccess').html("Ocurrio un error");
                  jQuery('#saveRegister').prop('disabled', false);
               }
           },
           error: function(request, status, error) {   
               if(request.status == 401){
                  jQuery('#alertSuccess').html("El correo ya se encuentra registrado");
                  jQuery('#saveRegister').prop('disabled', false);
               }else{
                  jQuery('#alertSuccess').html("Ocurrio un error al guardar su registro");
                  jQuery('#formulario_de_prueba').trigger("reset");
                  jQuery('#saveRegister').prop('disabled', false);
               }
            }
          });
        });
   });
 
   
   
 
</script>