<?php
session_start();

get_header();
11/*
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
    }
    
h3, .h3 {
            font-size: 24px;
            text-align: center;
            padding-top:10px;
            color: #7629dd;
        }
h3:after{ content: ''; width: 50px; height: 1px; background: #7629dd; display: block; margin: 10px auto;}


    label {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: 700;
        color: #000;

    }

    label.error { color: red;font-size: 12px; }




    .carga-archivo-input {
        position: relative;
        overflow: hidden;
        margin: 0px;
        color: #333;
        background-color: #fff;
        border-color: #ccc;
    }
    .carga-archivo-input input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
    .carga-archivo-input-title {
        margin-left:2px;
    }


    /** SPINNER CREATION **/

    .loader {
        position: relative;
        text-align: center;
        margin: 15px auto 35px auto;
        z-index: 9999;
        display: block;
        width: 80px;
        height: 80px;
        border: 10px solid rgba(0, 0, 0, .3);
        border-radius: 50%;
        border-top-color: #000;
        animation: spin 1s ease-in-out infinite;
        -webkit-animation: spin 1s ease-in-out infinite;
    }

    @keyframes spin {
        to {
            -webkit-transform: rotate(360deg);
        }
    }
    @-webkit-keyframes spin {
        to {
            -webkit-transform: rotate(360deg);
        }
    }

    /** MODAL STYLING **/
    .modal-content {
        border-radius: 0px;
        box-shadow: 0 0 20px 8px rgba(0, 0, 0, 0.7);
    }

</style>

<?php


    $numberFile=0;
    $idPrograma=1;
    $customForm=14;
    $postHeaders = array('Content-Type: application/json');

     // $apiUrl = 'https://prod.gevents.co/public/api/getFormCustomProgram/'.$idPrograma;
    $apiUrl = 'https://middlepp.gevents.co/public/api/getFormCustomProgram/'.$idPrograma.'/'.$customForm;
    $curl = curl_init($apiUrl);
    curl_setopt($curl, CURLOPT_ENCODING, "");
    curl_setopt($curl, CURLOPT_HTTPHEADER, $postHeaders);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($curl);
    $responseForm = json_decode($json, true);
    curl_close($curl);
    //$cuestionarios = json_decode($responseForm["formularios"]["json"], true);
    $cuestionarios = $responseForm["customFormulario"];
    
    
    $regExp=array();
  $enabledFields = array();
  $disabledFields = array();
  $hiddenFields = array();
  $showFields = array();
  $allFiedlInteractive = array();
  $mensajesValidacion = "";
  
  
  $TodosLosCuestionarios = array($cuestionarios);
  $Path = dirname( __FILE__ );
  
  foreach($TodosLosCuestionarios as $Cuestionarios){
    foreach ($cuestionarios as $cuestionario) { 
        
     if(isset($cuestionario['regrecion']) && !empty($cuestionario['regrecion'])){
          $regExp[$cuestionario['nombre_campo']] = array("pattern"=>$cuestionario['regrecion'],
                'message'=>'El texto del campo ('.$cuestionario['nombreCampo'].') es invalido');
      
          $mensajesValidacion .= "'".$cuestionario['nombre_campo']."': {
         required: 'El campo (".$cuestionario['nombreCampo'].") es requerido',
         regex: 'El texto del campo (".$cuestionario['nombreCampo'].") es invalido'
        },
        ";
     } else {
        $mensajesValidacion .= "'".$cuestionario['nombre_campo']."': {
         required: 'El campo (".$cuestionario['nombreCampo'].") es requerido'
    },
    ";
     }
     
      if(in_array($cuestionario['codigo'],array('select','radio-group'))){
          $arraySelect = json_decode($cuestionario['valores'] ,true);
          foreach($arraySelect as $dbA) { 
              if(isset($dbA['oculto']) && !empty($dbA['oculto']) && $dbA['oculto']!='oculto'){
                  $allFiedlInteractive[$cuestionario['nombre_campo']]="Interactive";
                  $arrayValues = explode(",",$dbA['oculto']);
                  foreach($arrayValues as $value){
                      if($cuestionario['codigo'] == 'select'){
                          $hiddenFields[$cuestionario['nombre_campo']][$dbA['value']][$value]=$value;
                      }
                      elseif($cuestionario['codigo'] == 'radio-group'){
                          $disabledFields[$cuestionario['nombre_campo']][$dbA['value']][$value]=$value;
                      }
                  }
              }
              if(isset($dbA['mostrar']) && !empty($dbA['mostrar']) && $dbA['mostrar']!='mostrar'){
                  $arrayValues = explode(",",$dbA['mostrar']);
                  $allFiedlInteractive[$cuestionario['nombre_campo']]="Interactive";
                  foreach($arrayValues as $value){
                      if($cuestionario['codigo'] == 'select'){
                          $showFields[$cuestionario['nombre_campo']][$dbA['value']][$value]=$value;
                      }
                      elseif($cuestionario['codigo'] == 'radio-group'){
                          $enabledFields[$cuestionario['nombre_campo']][$dbA['value']][$value]=$value;
                      }
                  }
              }
          }
      }
    }
  }
    
    include('modal/loading.php');
    include('modal/faild.php');
    include('modal/errorNit.php');
    include('modal/error.php');
?>
<main id="main" class="site-main" role="main">
    <script src="https://kit.fontawesome.com/fc6bfbfb08.js" crossorigin="anonymous"></script>
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
                                    <form id="formulario_de_registro" name="formulario_de_registro" method="post"  action="" enctype="multipart/form-data" class="wpcf7-form demo" >
                                        <div class="bg-black-transparent u-BorderRadius4 u-BoxShadow40 u-PaddingTop40 u-PaddingLeft40 u-PaddingRight40" style="background-color: #f2f2f2;">
                                            <div class="row" style="height:20px;"></div>

                                            <div class="row">

                                                

                                                <?php
                                                $nombreGrupo = "";
                                                
                                                //foreach ($responseForm['customFormulario'] as $customCampos) {
                                                foreach ($cuestionarios as $customCampos) {
                                                    $placeholder = preg_replace("/[\r\n|\n|\r]+/", " " ,strip_tags($customCampos['placeholder']));
                                                    
                                                     if(isset($customCampos["grupo_formulario"]) && $nombreGrupo!=$customCampos["grupo_formulario"]
                                                             && "CampoEstado_43_19"!=$customCampos['nombre_campo']){
                                                         if($nombreGrupo!="") {echo '</div><div class="row">';}
                                                         $nombreGrupo=$customCampos["grupo_formulario"];
                                                         ?>
                                                    <h3 class="text-center my-md-5 my-4 pt-md-5 pb-3 px-3"><?php echo $nombreGrupo?></h3>
                                                        <?php
                                                     }
                                                    
                                                    $className = substr($customCampos['nombre_campo'],0,strrpos(substr($customCampos['nombre_campo'],0,strrpos($customCampos['nombre_campo'],"_")),"_"));
                                                    $classInteractive = (isset($allFiedlInteractive[$customCampos['nombre_campo']]))?" Interactive ":"";
                                                    $required = "";
                                                    if($customCampos['required'] == 1){
                                                            //$classInteractive .= " required ";
                                                            $required = " required ";
                                                        }
                                                    if("CampoEstado_43_19"==$customCampos['nombre_campo']){
                                                        echo '<input type="hidden" name="CampoEstado_43_19" value="9">';
                                                        
                                                    }elseif($customCampos['campo_custom_id'] == '2'){//select 
                                                        $valueOption="";
                                                        $labelOption="";
                                                        $labelOption2="";
                                                        if($customCampos['valores'] == '$'){
                                                            $arraySelect=$responseForm['country'];
                                                            $valueOption="";
                                                            $labelOption="";
                                                        }elseif($customCampos['valores'] == '#'){
                                                            $arraySelect=$responseForm['tipoIdentificacion'];
                                                            $valueOption="abreviatura";
                                                            $labelOption="tipo";
                                                        }elseif($customCampos['valores'] == '!'){
                                                            $arraySelect=$responseForm['codigoCIIU'];
                                                            $valueOption="id";
                                                            $labelOption="name";
                                                            $labelOption2="codigo";
                                                        }elseif($customCampos['valores'] == '*'){
                                                            $arraySelect=$responseForm['localidades'];
                                                            $valueOption="id";
                                                            $labelOption="name";
                                                        }elseif($customCampos['valores'] == '+'){
                                                            $arraySelect=$responseForm['codigoCIIU'];
                                                            $valueOption="id";
                                                            $labelOption="name";
                                                            $labelOption2="codigo";
                                                        }elseif($customCampos['valores'] == '-'){
                                                            $arraySelect=$responseForm['codigoCIIU'];
                                                            $valueOption="id";
                                                            $labelOption="name";
                                                            $labelOption2="codigo";
                                                        }else{
                                                            $arraySelect = json_decode($customCampos['valores'] ,true); 
                                                            $valueOption="value";
                                                            $labelOption="label";
                                                        }
                                        
                                        ?>
                                             <div class="form-group select-wrapper col-sm-6">
                                                 <span><?php echo $customCampos['nombreCampo'] ?></span>
                                                <span class="wpcf7-form-control-wrap ticket-type">
                                                    
                                                    <select name="<?php echo $customCampos['nombre_campo'] ?>" 
                                                            class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                                        aria-required="true" aria-invalid="false" id=""  <?php echo $required?>>
                                                        <option value="">"<?php echo $customCampos['nombreCampo'] ?>"*</option>
                                                        <?php
                                                        foreach($arraySelect as $dbA)
                                                        {
                                                            ?>
                                                            <option value="<?php echo $dbA[$valueOption]?>"><?php 
                                                                if($labelOption2!="") {
                                                                    echo "(".$dbA[$labelOption2].") ";
                                                                }
                                                                echo $dbA[$labelOption]?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <input type="hidden" xname="idFormularioS[]" value="<?php echo $customCampos['idFormulario']?>">
                                                </span>
                                            </div>
                                            
                                        <?php  }else if($customCampos['campo_custom_id'] == '7' && $customCampos['formulario_custom_id']=='19'){//radio-group 
                                            $check = json_decode($customCampos['valores'] ,true); 
                                            ?>
                                            <div class="form-group col-sm-6">
                                                <span><?php echo $customCampos['nombreCampo'] ?></span>
                                                <div class="px-3 mt-3 pt-1">
                                                    <?php foreach($check as $checkSelect) { 
                                                       $checked ="" ;
                                                        /*if(  $checkSelect['value'] ==  $customCampos['response']){ 
                                                            $checked = "checked";
                                                        }*/
                                                        ?>
                                                        <div>
                                                            <input type="checkbox"  checkname="<?php echo $customCampos['nombre_campo'] ?>"
                                                                <?php echo $checked?> <?php echo "class='multiple class_".$className." ".$classInteractive."'"?> 
                                                                   value="<?php echo $checkSelect['value']?>" 
                                                                     >
                                                            <span><?php echo $checkSelect['label']?></span>
                                                        </div>
                                                    
                                                    <?php }  ?>
                                                    <input type="hidden" name="<?php echo $customCampos['nombre_campo'] ?>" <?php echo $required?>>
                                                </div>
                                            </div>
                                        <?php }else if($customCampos['campo_custom_id'] == '7'){//radio-group 
                                            $check = json_decode($customCampos['valores'] ,true); 
                                            ?>
                                            <div class="form-group col-sm-6">
                                                <span><?php echo $customCampos['nombreCampo'] ?></span>
                                                <div class="px-3 mt-3 pt-1">
                                                    <?php foreach($check as $checkSelect) { 
                                                       $checked ="" ;
                                                        ?>
                                                        <div>
                                                            <input type="radio" 
                                                                <?php echo $checked?> <?php echo "class='class_".$className." ".$classInteractive."'"?> 
                                                                   value="<?php echo $checkSelect['value']?>" name="<?php echo $customCampos['nombre_campo'] ?>" <?php echo $required?> >
                                                            <span><?php echo $checkSelect['label']?></span>
                                                        </div>
                                                    <input type="hidden" xname="xidFormularioI[]" value="<?php echo $customCampos['idFormulario']?>">
                                                    <?php }  ?>
                                                </div>
                                            </div>
                                        <?php }else if($customCampos['campo_custom_id'] == '4'){//file 
                                            $numberFile++;
                                            ?>
                                            <div class="form-group col-md-12">
                                                <label for="archivo" style="font-size:14px;font-weight:400;min-height:44px;">
                                                    <?php echo $customCampos['nombreCampo']?>
                                                </label>
                                                <!--a style="color: #3c3fe2" href="http://entornobogota.com/wp-content/uploads/2020/07/ANEXO-1.-Formato-de-autorización-para-la-revisión-de-antecedentes..docx">
                                                    Descarga el formato aquí
                                                </a-->
                                                <span class="wpcf7-form-control-wrap your-name">
                                                    <progress id="progressBar_<?php echo$customCampos['idFormulario']?>" value="0" max="100" 
                                                              style="width:100%;margin-bottom: -10px;" 
                                                              aria-placeholder="<?php echo $placeholder ?>"></progress>
                                                    <input onchange="uploadFile(<?php echo $customCampos['idFormulario']?>,'<?php echo "File_".$customCampos['idFormulario']?>');" type="file"  
                                                           id="archivo_<?php echo$customCampos['idFormulario']?>" size="40" accept="image/png, image/jpg,.doc,.docx,.xlsx,.pdf,.zip"
                                                               class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white" aria-required="true" aria-invalid="false" <?php echo $required?> >
                                                    <input type="hidden" readonly name="file[]" id="file_<?php echo $customCampos['idFormulario']?>" required>
                                                </span>
                                                <span><?php echo (isset($customCampos['descripcion']))?$customCampos['descripcion']:""?></span>
                                            </div>
                                            <input type="hidden" name="idFormularioF[]" value="<?php echo$customCampos['idFormulario']?>">
                                        <?php }else{ 
                                            $alt = $customCampos['nombreCampo'];
                                            $label = strip_tags(preg_replace("/[\r\n|\n|\r]+/", " " ,$customCampos['nombreCampo']));
                                            $label1="";
                                            $type="text";
                                            if($customCampos['campo_custom_id'] == '1') $type="text";
                                            if($customCampos['campo_custom_id'] == '8') $type="numeric";
                                            //if(strpos())
                                            ?>
                                            <div class="form-group col-sm-6">
                                                <span><?php echo $label?></span>
                                                <span class="wpcf7-form-control-wrap your-name">
                                                <input type="<?php echo $type?>" 
                                                       name="<?php echo $customCampos['nombre_campo']?>" 
                                                       id="<?php echo $customCampos['nombre_campo']?>" size="40" 
                                                       placeholder="<?php echo $placeholder ?>"  <?php echo $required?>
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white"
                                                    aria-required="true" aria-invalid="false">
                                                <?php echo (isset($customCampos['descripcion']))?"<span>".$customCampos['descripcion']."</span>":""?></span>
                                                <input type="hidden" xname="xidFormularioI[]" value="<?php echo$customCampos['idFormulario']?>">
                                                </span>
                                            </div>
                                            <?php } 
                                                }
                                                ?>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                    <input type="checkbox" id="cbox2"  class="form-group" value="second_checkbox" required style="margin: 0px 0px 0px !important;width:20px !important;height: 20px !important;">
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                    <label for="cbox2" class="form-group" style="font-size: 14px;font-weight: 400;font-family: Roboto;">
                                                        Autorizo a la Fundación Tecnalia Colombia y a la Secretaria Distrital de
                                                        Desarrollo Económico a usar los datos de este formulario de acuerdo a la
                                                        Ley 1581 de 2012, ley de protección de datos personales y la política de
                                                        manejo de datos de la SDDE y la Fundación Tecnalia.<br>
                                                        Así mismo, declaro que conozco los términos de referencia y condiciones de participación en la presente convocatoria del programa ENTORNO.
                                                    </label>
                                                </div>
                                            </div><br>
                                            <!--                        <div class="alert alert-warning" role="alert">
                                                                       Tareas de mantenimiento en jornada de 8:00 pm a 12:00 pm del 6 de julio de 2020, agradecemos su comprensión y ejecución de registro fuera de este periodo.
                                                                   </div>
                        -->
                                            <div align="center" class="form-group col-sm-12" style="display:block">
                                                <input type="submit" value="Finalizar postulaci&oacute;n" id="saveRegister"
                                                       class="wpcf7-form-control wpcf7-submit btn btn-primary btn-block" style="width: 250px";>
                                            </div>
                                        </div>
                                        <input type="hidden" name="programaId" value="<?php echo $idPrograma ?>">
                                        <input type="hidden" name="rol" value="15">
                                        <input type="hidden" name="arrayForm" value="19">
                                        <input type="hidden" name="FormularioId" value="19">
                                        <input type="hidden" name="ipUsuario" value="<?php echo $_SERVER["REMOTE_ADDR"]; ?>">
                                        <input type="hidden" name="usuario_creacion" value="438">
                                     <!--    <input type="hidden" name="usuario_creacion" value="438"> -->
                                        
                                     
                                        <input type="hidden" readonly name="codigo" id="codigo" required>
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


          <!--   <form id="upload_form" enctype="multipart/form-data" method="post">
                <input type="file" name="file1" id="file1" onchange="uploadFile()"><br>
                <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
                <h3 id="status"></h3>
                <p id="loaded_n_total"></p>
            </form> -->
        </div>
        <!-- .entry-content -->
    </div>

    <?php
        include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro-proveedor/modal/errorNit.php");
        include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro-proveedor/modal/error.php");
        include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro-proveedor/modal/loading.php");
    ?>

    <!-- #post-116 -->
</main>
<?php get_footer(); ?>
<script type="text/javascript" src="../wp-content/themes/tevent/registro-proveedor/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../wp-content/themes/tevent/registro-proveedor/js/caracterEspecial.js"></script>
<script type="text/javascript" src="../wp-content/themes/tevent/registro-proveedor/js/cargarArchivos.js"></script><!-- pasar -->
<script>
 
   //  var urlApi = 'http://localhost/middleware/public/api/';
    var urlApi = 'https://middlepp.gevents.co/public/api/';
  //  var urlApi ='https://prod.gevents.co/public/api/';

    jQuery(document).on('change','input[type="file"]',function(){
        // this.files[0].size recupera el tamaño del archivo
        // alert(this.files[0].size);
        //uploadFile(this.files[0]);
        var fileName = this.files[0].name;
        var fileSize = this.files[0].size;

        if(fileSize > 2000000){
            alert('El archivo no debe superar los 2MB');
            this.value = '';
            this.files[0].name = '';
        }else{
            // recuperamos la extensión del archivo
            var ext = fileName.split('.').pop();

            // Convertimos en minúscula porque
            // la extensión del archivo puede estar en mayúscula
            ext = ext.toLowerCase();

            // console.log(ext); .doc,.docx,.xlsx,.pdf,.zip
            switch (ext) {
                case 'jpg':
                case 'png':
                case 'doc':
                case 'docx':
                case 'xlsx':
                case 'zip':
                case 'pdf': break;
                default:
                    alert('El archivo no tiene la extensión adecuada');
                    this.value = ''; // reset del valor
                    this.files[0].name = '';
            }
        }
    });
    
     jQuery("#formulario_de_registro").on("submit", function(e) {
            jQuery("#loadMe").modal({
             backdrop: "static", //remove ability to close modal with click
             keyboard: false, //remove option to close with keyboard
             show: true //Display loader!
            });
            jQuery('#saveRegister').attr("disabled", true);
            //var urlApi = 'http://localhost/middleware/public/api/';
            var urlApi = 'https://middlepp.gevents.co/public/api/';

            //var valuesForm =  jQuery("input[name='idFormularioF\\[\\]']").map(function() { return jQuery('#archivo_'+ jQuery(this).val()).prop('files')[0];}).get();

            var ajaxData = new FormData(document.getElementById("formulario_de_registro"));
           //e.preventDefault();
            jQuery.ajax({
                type: 'POST',
                url: urlApi + 'storeResponseCustom',
                contentType: false,
                processData: false,
                data: ajaxData,
                success: function(response) {
                    if (response == 200) {
                       jQuery("#loadMe").modal("hide");
                        jQuery('#formulario_de_registro').trigger("reset");
                        jQuery('#saveRegister').attr("disabled", true);
                        window.location.href="gracias/";
                    }else if(response.response == 100){
                        jQuery("#loadMe").modal("hide");
                        jQuery('#modalErrorNit').modal('show');
                        jQuery('#saveRegister').attr("disabled", false);
                    }else if(response.response == 400){
                        jQuery("#loadMe").modal("hide");
                        jQuery('#modalErrorEmail').modal('show');
                        jQuery('#saveRegister').attr("disabled", false);
                    }

                },
                error: function(request, status, error) {
                    if(request.status == 401){
                        jQuery("#loadMe").modal("hide");
                        jQuery('#modalFail').modal('show');
                        jQuery('#saveRegister').attr("disabled", false);
                    }else{
                        jQuery("#loadMe").modal("hide");
                        if(request.responseJSON.response.status != undefined){
                            jQuery('.span-body-fail').html(request.responseJSON.response.status);
                        }else{
                            jQuery('.span-body-fail').html(" ");
                        }
                        jQuery('#modalFail').modal('show');
                        jQuery('#saveRegister').attr("disabled", false);
                    }
                }
            });
            e.preventDefault();
        });
    
    jQuery( document ).ready(function() {
            jQuery('input.multiple').change(function() {
            var nameCheck = jQuery(this).attr("checkname");
            var textSelect="";
            var separador="";
            
            jQuery('input[checkname="'+nameCheck+'"]').each(function(){
                if (this.checked) {
                    textSelect += separador + jQuery(this).val();
                    separador = ",";
                }
            });
            jQuery('input[name="'+nameCheck+'"]').val(textSelect);
        });
        
    });

</script>
