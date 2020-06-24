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
                           <form id="formulario_de_prueba" name="formulario_de_prueba" method="post"  action="" class="wpcf7-form demo" >
                              <div class="bg-black-transparent u-BorderRadius4 u-BoxShadow40 u-PaddingTop40 u-PaddingLeft40 u-PaddingRight40" style="background-color: #f2f2f2;">

                                 <div class="row" style="height:20px;"></div>

                                 <div class="row">

                                    <div class="col-sm-12">
                                       <h3 align="center" class="u-MarginTop50">Formulario de registro</h3>
                                    </div>

                                    <div class="form-group col-sm-12">
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="text" name="nombre" id="nombre" size="40" placeholder="Nombre de la empresa"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white required"
                                          aria-required="true" aria-invalid="false" onkeypress="return letras(event)">
                                       </span>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="form-group col-sm-6">
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="text" name="cargo" id="cargo" size="40" placeholder="NIT"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white"
                                          aria-required="true" aria-invalid="false">
                                       </span>
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <span class="wpcf7-form-control-wrap your-phone">
                                       <input type="text" name="celular" id="celular" size="40" placeholder="DV (Dígito de verificación)"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white"
                                          aria-required="true" aria-invalid="false" onkeyup='this.value=number(this.value)'>
                                       </span>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="form-group select-wrapper col-sm-6">
                                       <span class="wpcf7-form-control-wrap ticket-type">
                                          <select name="tipo_documento" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                             aria-required="true" aria-invalid="false" id="typeDocument">
                                             <option value="">Sector económico al que pertenece la empresa*</option>
                                             <option value="Cedula ciudadania">Agrícola</option>
                                             <option value="Cedula extranjeria">Industrial</option>
                                             <option value="Pasaporte">Servicios</option>
                                          </select>
                                       </span>
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="text" name="" id="" size="40" placeholder="Código CIUU*"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white"
                                          aria-required="true" aria-invalid="false">
                                       </span>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="form-group select-wrapper col-sm-6">
                                       <span class="wpcf7-form-control-wrap ticket-type">
                                          <select name="tipo_documento" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                             aria-required="true" aria-invalid="false" id="typeDocument">
                                             <option value="">Actividad principal*</option>
                                             <option value="Actividad 1">Actividad 1</option>
                                             <option value="Actividad 2">Actividad 2</option>
                                             <option value="Actividad 3">Actividad 3</option>
                                          </select>
                                       </span>
                                    </div>
                                    <div class="form-group select-wrapper col-sm-6">
                                       <span class="wpcf7-form-control-wrap ticket-type">
                                          <select name="tipo_documento" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                             aria-required="true" aria-invalid="false" id="typeDocument">
                                             <option value="">Actividad secundaria*</option>
                                             <option value="Actividad 1">Actividad 1</option>
                                             <option value="Actividad 2">Actividad 2</option>
                                             <option value="Actividad 3">Actividad 3</option>
                                          </select>
                                       </span>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="form-group col-sm-6">
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="text" name="nombre" id="nombre" size="40" placeholder="Dirección"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white required"
                                          aria-required="true" aria-invalid="false" onkeypress="return letras(event)">
                                       </span>
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="text" name="nombre" id="nombre" size="40" placeholder="Localidad"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white required"
                                          aria-required="true" aria-invalid="false" onkeypress="return letras(event)">
                                       </span>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <h5>Datos persona de contacto</h5>
                                 </div>

                                 <div class="row">
                                    <div class="form-group col-sm-6">
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="text" name="" id="" size="40" placeholder="Nombre de la persona de contacto"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white"
                                          aria-required="true" aria-invalid="false">
                                       </span>
                                    </div>
                                    <div class="form-group select-wrapper col-sm-6">
                                       <span class="wpcf7-form-control-wrap ticket-type">
                                          <select name="tipo_documento" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                             aria-required="true" aria-invalid="false" id="typeDocument">
                                             <option value="">Tipo de identificación*</option>
                                             <option value="Cedula ciudadania">Cédula de ciudadanía</option>
                                             <option value="Cedula extranjeria">Cédula de extranjería</option>
                                          </select>
                                       </span>
                                    </div>                                    
                                 </div>

                                 <div class="row">                                    
                                    <div class="form-group col-sm-6">
                                       <span class="wpcf7-form-control-wrap your-phone">
                                       <input type="text" name="numero_documento" id="numero_documento" size="40" placeholder="Número de documento*"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white"
                                          aria-required="true" aria-invalid="false">
                                       </span>
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="text" name="nombre" id="nombre" size="40" placeholder="Cargo dentro de la empresa"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white required"
                                          aria-required="true" aria-invalid="false" onkeypress="return letras(event)">
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
                                    <div class="form-group col-sm-6">
                                       <span class="wpcf7-form-control-wrap your-email">
                                       <input type="email" name="email" id="email" size="40" placeholder="Correo electrónico de la persona de contacto - Alternativa 2"
                                          class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control form-control--white"
                                          aria-required="true" aria-invalid="false" >
                                       </span>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="form-group col-sm-6">
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="text" name="nombre" id="nombre" size="40" placeholder="Número telefónico de la persona de contacto"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white required"
                                          aria-required="true" aria-invalid="false" onkeypress="return letras(event)">
                                       </span>
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="text" name="nombre" id="nombre" size="40" placeholder="Otro número telefónico de contacto"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white required"
                                          aria-required="true" aria-invalid="false" onkeypress="return letras(event)">
                                       </span>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <h5>Documentos para requisitos mínimos habilitantes</h5>
                                 </div>

                                 <div class="row">
                                    <div class="form-group col-sm-12">
                                       <label for="archivo" style="font-size:14px;font-weight:400;min-height:44px;">1. Certificado de Existencia y Representación legal con fecha de expedición no superior a treinta (30) días:</label>
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="file" name="" id="archivo" size="40" placeholder="Nombre de la persona de contacto" accept="image/png, image/jpeg, .doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white"
                                          aria-required="true" aria-invalid="false">
                                       </span>
                                    </div>
                                    <div class="form-group col-sm-12">
                                       <label for="archivo" style="font-size:14px;font-weight:400;min-height:44px;">2. Fotocopia de la cédula del representante legal:</label>
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="file" name="" id="archivo" size="40" placeholder="Nombre de la persona de contacto" accept="image/png, image/jpeg, .doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white"
                                          aria-required="true" aria-invalid="false">
                                       </span>
                                    </div>                                   
                                 </div>

                                 <div class="row">
                                    <div class="form-group col-sm-12">
                                       <label for="archivo" style="font-size:14px;font-weight:400;min-height:44px;">3. Boletín de responsables fiscales de la Contraloría General de la República:</label>
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="file" name="" id="archivo" size="40" placeholder="Nombre de la persona de contacto" accept="image/png, image/jpeg, .doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white"
                                          aria-required="true" aria-invalid="false">
                                       </span>
                                    </div>
                                    <div class="form-group col-sm-12">
                                       <label for="archivo" style="font-size:14px;font-weight:400;min-height:44px;">4. Antecedentes Disciplinarios expedidos por la Procuraduría General de la Nación:</label>
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="file" name="" id="archivo" size="40" placeholder="Nombre de la persona de contacto" accept="image/png, image/jpeg, .doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white"
                                          aria-required="true" aria-invalid="false">
                                       </span>
                                    </div>                                   
                                 </div>

                                 <div class="row">
                                    <div class="form-group col-sm-12">
                                       <label for="archivo" style="font-size:14px;font-weight:400;min-height:44px;">5. Antecedentes del sistema de Registro Nacional de Medidas Correctivas:</label>
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="file" name="" id="archivo" size="40" placeholder="Nombre de la persona de contacto" accept="image/png, image/jpeg, .doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white"
                                          aria-required="true" aria-invalid="false">
                                       </span>
                                    </div>
                                    <div class="form-group col-sm-12">
                                       <label for="archivo" style="font-size:14px;font-weight:400;min-height:44px;">6. Certificado de Antecedentes Judiciales:</label>
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="file" name="" id="archivo" size="40" placeholder="Nombre de la persona de contacto" accept="image/png, image/jpeg, .doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white"
                                          aria-required="true" aria-invalid="false">
                                       </span>
                                    </div>                                   
                                 </div>

                                 <div class="row">
                                    <div class="form-group col-sm-12">
                                       <label for="archivo" style="font-size:14px;font-weight:400;min-height:44px;">7. Copia del Registro Único Tributario (RUT):</label>
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="file" name="" id="archivo" size="40" placeholder="Nombre de la persona de contacto" accept="image/png, image/jpeg, .doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white"
                                          aria-required="true" aria-invalid="false">
                                       </span>
                                    </div>
                                    <div class="form-group col-sm-12">
                                       <label for="archivo" style="font-size:14px;font-weight:400;min-height:44px;">8. Planilla que evidencie el pago de seguridad social de los empleados directos en el periodo de abril, mayo y junio de 2020:</label>
                                       <span class="wpcf7-form-control-wrap your-name">
                                       <input type="file" name="" id="archivo" size="40" placeholder="Nombre de la persona de contacto" accept="image/png, image/jpeg, .doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white"
                                          aria-required="true" aria-invalid="false">
                                       </span>
                                    </div>                                   
                                 </div>

                                 <div class="row" style="height:20px;"></div>

                                 <div align="center" class="form-group col-sm-12">
                                    <input type="submit" value="Enviar registro" id="saveRegister"
                                       class="wpcf7-form-control wpcf7-submit btn btn-primary btn-block" style="width: 250px";>
                                 </div>
                              </div>
                              <input type="hidden" name="rol" value="7">
                              <input type="hidden" name="evento" value="20">
                              <input type="hidden" name="idBoleta" value="31">
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
   var urlApi = 'https://prod.gevents.co/public/api/';
   
   jQuery("#password").blur(function(){
       var password = jQuery("#password").val();
       var parametro =  new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[.,?¿=)(<>º!¡{}@#\$%\^&\*])");
       var res = parametro.test(password);
       var mensage='Por favor valide que su contraseña tenga 1-Mayúscula / 1-mínuscula / 1-número / 1-Caracter especial (*)'
       if (res!=true) {
           jQuery('#mensajePassword').css("display", "block");
           jQuery("#mensajePassword").addClass("error");
           jQuery("#mensajePassword").html(mensage);
           jQuery('#saveRegister').prop('disabled', true);
   
       }else{
           jQuery('#mensajePassword').css("display", "none");
           jQuery("#mensajePassword").removeClass("is-invalid");
           jQuery('#saveRegister').prop('disabled', false);
       }
   });
   
   jQuery("#cmFPassword").blur(function(){
       var password = jQuery("#confirmar_contraseña").val();
       var parametro =  new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[.,?¿=)(<>º!¡{}@#\$%\^&\*])");
       var res = parametro.test(password);
       var mensage='Por favor valide que su contraseña tenga 1-Mayúscula / 1-mínuscula / 1-número / 1-Caracter especial (*)'
       if (res!=true) {
           jQuery('#mensajePasswordR').css("display", "block");
           jQuery("#mensajePasswordR").addClass("error");
           jQuery("#mensajePasswordR").html(mensage);
           jQuery('#saveRegister').prop('disabled', true);
   
       }else{
           jQuery('#mensajePasswordR').css("display", "none");
           jQuery("#mensajePasswordR").removeClass("is-invalid");
           jQuery('#saveRegister').prop('disabled', false);
       }
   });
   
   jQuery("#saveRegister").on('click',function(){
       jQuery("#formulario_de_prueba").validate({
           rules: {
               tipo_documento: {
                   required: true,
               },
               numero_documento: {
                   required: true,
               },
               nombre: {
                   required: true,
                   minlength: 3,
                   maxlength: 60
               },
               apellidos: {
                   required: true,
                   minlength: 4,
                   maxlength: 60
               },
               email: {
                   required: true,
                   email: true,
                   maxlength: 50
               },
               cmfEmail: {
                   required: true,
                   email: true,
                   equalTo: "#email",
                   maxlength: 50
               },
               tipo_asistente: {
                   required: true,
               },
               compania: {
                   required: true,
                   maxlength: 120
               },
               celular: {
                   required: true,
                   minlength: 10,
                   maxlength: 20
               },
               cargo: {
                   required: true,
                   maxlength: 119
               },
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
               tnc: {
                   required: true
               }
   
           },
           messages: {
               tipo_documento: {
                   required: "El campo tipo de documento es requerido",
               },
               numero_documento: {
                   required: "El campo tipo de documento es requerido",
               },
               nombre: {
                   required: "El campo nombre es requerido",
                   minlength: "El campo debe tener mínimo {0} caracteres.",
                   maxlength: "El campo superera el máximo de  {0}caracteres permitidos."
   
               },
               apellidos: {
                   required: "El campo apellidos es requerido",
                   minlength: "El campo apellidoss debe tener mínimo {0} caracteres.",
                   maxlength: "El campo apellidoss superera el máximo de  {0}caracteres permitidos."
               },
               email: {
                   required: "El campo correo es requerido",
                   email: "Ingrese un correo valido",
                   maxlength: "El campo de correo supera el limite de {0} caracteres permitidos"
               },
               cmfEmail: {
                   required: "El campo correo es requerido",
                   email: "Ingrese un correo valido",
                   equalTo: "El campo no coincide con el correo",
                   maxlength: "El campo de correo supera el limite de {0} caracteres permitidos"
               },
               tipo_asistente: {
                   required: "El campo tipo de asistente es requerido",
               },
               compania: {
                   required: "El campo compañia es requerido",
                   maxlength: "El campo debe tener máximo {0} caracteres.",
               },
               cargo: {
                   required: "El campo cargo es requerido",
                   maxlength: "El campo debe tener máximo {0} caracteres.",
               },
               celular: {
                   required: "El campo celular es requerido",
                   minlength: "El campo celular debe tener mínimo {0} caracteres.",
                   maxlength: "El campo celular superera el máximo de {0} caracteres permitidos."
               },
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
               tnc: {
                   required: "Debes aceptar los  términos y condiciones"
               }
   
           }
       });
   
       var typeDocument = jQuery("#typeDocument").valid();
   
       var nombre = jQuery("#nombre").valid();
       var apellidos = jQuery("#apellidos").valid();
       var email = jQuery("#email").valid();
       var typeAssistant = jQuery("#typeAssistant option:selected").valid();
       var compania = jQuery("#compania").valid();
       var cargo = jQuery("#cargo").valid();
       var celular = jQuery("#celular").valid();
       var password = jQuery("#password").valid();
       var tnc = jQuery("#tnc").valid();
       var cmfEmail = jQuery("#cmfEmail").valid();
       var cmfPassword = jQuery("#cmfPassword").valid();
       var numero_documento = jQuery("#numero_documento").valid();
   
   
       if(typeDocument == true && nombre == true && apellidos == true && email == true && typeAssistant == true && compania == true &&
           cargo == true && celular == true && password == true && tnc == true && cmfEmail == true && cmfPassword == true
           && numero_documento == true){
   
   
           jQuery("#formulario_de_prueba").bind("submit",function(){
               jQuery('#saveRegister').prop('disabled', true);
   
               jQuery.ajax({
                   url: urlApi+"save_host_gevent",
                   dataType: "json",
                   type : 'post',
                   headers: {"Accept": "application/json"},
                   contentType: "application/x-www-form-urlencoded;charset=utf-8",
                   data:jQuery(this).serialize(),
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
       }else{
           jQuery("#saveRegister").css('disabled',true);
       }
   });
   
   jQuery(document).ready( function(){
   
       jQuery.ajax({
           url: urlApi+"get_typeAssistant",
           dataType: "json",
           headers: {"Accept": "application/json"},
           success: function(response) {
               var i;
               var div = '';
               div += '<option value="" selected>Tipo de asistente*</option>';
               for( i = 0; i < response.length; i++) {
                   div += '<option value="' + response[i]['id'] + '">' + response[i]['nombre_asistente'] + '</option>';
               }
               jQuery('#typeAssistant').html(div);
           }
       });
   });
</script>