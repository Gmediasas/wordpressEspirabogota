<?php
   session_start();
   
   get_header();
   /*
   Template Name: landing-registro-proveedor
   */
   
   ?>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../wp-content/themes/tevent/registro-proveedor/_/styles/bootstrap.min.css">
<link rel="stylesheet" href="../wp-content/themes/tevent/registro-proveedor/_/styles/main.css">
<style>
	a:hover,
	a:focus{
	 color: #3c3fe2 !important;
	}
   .form-control {
   border: 1px solid #eae7e7;
   border-radius: 5px;
   height: 45px;
   display: block;
   width: 100%;
   padding: 0 1rem;
   background: rgba(255,255,255, .6);
   color: rgba(102,102,102, 1);
   transition: all .3s;
   }
   .new_form input[type=text], .new_form input[type=number], .new_form input[type=tel], .new_form input[type=email], .new_form input[type=date], .new_form select {
   border: 1px solid #eae7e7;
   border-radius: 5px;
   height: 45px;
   display: block;
   width: 100%;
   padding: 0 1rem;
   background: rgba(255,255,255, .6);
   color: rgba(102,102,102, 1);
   transition: all .3s;
   }
   progress {
    vertical-align: baseline;
    margin-bottom: 5px !important;
    }
    input[type=file] {
    display: block;
    padding-top: 10px;
    }
    #formulario_de_registro label.error {
    color: red;
    font-size: 0.75rem;
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
   //var_dump($responseForm);
   $array_estilos_fijos=array(4,5,7,11,34,36,38,40,42);
   $array_checkboxMultiple=array(19);
   
   
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
               'message'=>'El texto del campo es invalido');
     
         $mensajesValidacion .= "'".preg_replace("[\n|\r|\n\r]", "", strip_tags($cuestionario['nombre_campo']))."': {
        required: 'El campo  es requerido',
        regex: 'El texto del campo es invalido'
       },
       ";
    } else {
        $nombre=preg_replace("[\n|\r|\n\r]", "", strip_tags($cuestionario['nombre_campo']));
        if(in_array($cuestionario['orden'],$array_checkboxMultiple)){
            $nombre.="_chk";
        }
        if($cuestionario['campo_custom_id'] == '4'){
            $nombre="archivo_".$cuestionario['idFormulario'];
        }
            $mensajesValidacion .= "'".$nombre."': {
        required: 'El campo es requerido'
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
<main id="main" class="container_full mx-auto px-lg-4 px-3 mb-3">
   <script src="https://kit.fontawesome.com/fc6bfbfb08.js" crossorigin="anonymous"></script>
   		

   <div class="container">
        <!-- Opción para alerta de guardado-->
        <div id="alertSuccess"><strong></strong></div>
		<!-- Fin Opción para alerta de guardado-->
        <div role="form" class="" id="wpcf7-f240-p116-o1" >
			
            <div class="screen-reader-response"></div>
            <form id="formulario_de_registro" name="formulario_de_registro" method="post"  action="" enctype="multipart/form-data" >
		<div style="font-size: 1rem;width: 100%;text-align: right;padding-top:3rem;">
				<u><a target="_blank" style="color: #000000;" href="http://entornobogota.com/wp-content/uploads/2020/08/TDR-ActoresEcosistemaEmprendimientoInnovacion.pdf" download=""><strong>Consulta los términos de referencia</strong></a></u>
				</div>		
				
                <div class="">
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
                    <h3 class="col-md-12 text-center mt-md-5 mb-md-1 my-4 pt-md-5 pb-3 px-3"><?php echo $nombreGrupo?></h3>
                    <?php
                    if ("DOCUMENTOS PARA EVALUACIÓN TÉCNICA"==$nombreGrupo){ ?>
                        <h5 class="col-md-12 text-center mb-md-5 my-4 pt-md-0 pb-3 px-3">(El proveedor de innovación deberá adjuntar los siguientes documentos como requisito para la evaluación técnica)</h5>
                    <?php
                    }
                    if ("DOCUMENTOS PARA REQUISITOS MÍNIMOS HABILITANTES"==$nombreGrupo){ ?>
                        <h5 class="col-md-12 text-center mt-md-1 mb-md-5 pt-md-0 pb-3 px-3">(El proveedor de innovación deberá adjuntar los siguientes documentos como requisito mínimo habilitante)</h5>
                    <?php
                    }
                        }
                        
                        $className = substr($customCampos['nombre_campo'],0,strrpos(substr($customCampos['nombre_campo'],0,strrpos($customCampos['nombre_campo'],"_")),"_"));
                        $classInteractive = (isset($allFiedlInteractive[$customCampos['nombre_campo']]))?" Interactive ":"";
                        
                        $classInteractive = (isset($allFiedlInteractive[$customCampos['nombre_campo']]))?" Interactive ":"";
                        
                        $required = "";
                        if($customCampos['required'] == 1){
                                $classInteractive .= " wpcf7-validates-as-required requerido ";
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
                    <div class="col-md-<?php echo (in_array($customCampos["orden"],$array_estilos_fijos))?"6":"12"?> mb-4" style="overflow: hidden;">
                        <label class="d-block px-3"><?php echo $customCampos['nombreCampo'] ?></label>
                        <span class="ticket-type">
                            <select name="<?php echo $customCampos['nombre_campo'] ?>" 
                             style="border: 1px solid #eae7e7;
                            border-radius: 5px;
                            height: 45px;
                            display: block;
                            width: 100%;
                            padding: 0 1rem;
                            background: rgba(255,255,255, .6);
                            color: rgba(102,102,102, 1);
                            transition: all .3s;
                            overflow: hidden;
                            "
                            class="wpcf7-form-control wpcf7-select <?php echo " class_".$className." ".$classInteractive." "?> form-control responseSelectAct"
                            aria-required="true" aria-invalid="false" id=""  <?php echo $required?>>
                            <option value=""><?php echo $placeholder ?>*</option>
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
                        </span>
                    </div>
                    <?php  }else if($customCampos['campo_custom_id'] == '7' && in_array($customCampos['orden'],$array_checkboxMultiple)){//radio-group 
                        $check = json_decode($customCampos['valores'] ,true); 
                        ?>
                    <!-- Inicia fila de checkboxs -->
                    <div class="col-md-12 mb-4">
                        <label class="d-block px-3"><?php echo $customCampos['nombreCampo'] ?></label>
                        <div class="px-3 mt-3 pt-1">
                            <?php foreach($check as $checkSelect) { 
                            $checked ="" ;
                                /*if(  $checkSelect['value'] ==  $customCampos['response']){ 
                                    $checked = "checked";
                                }*/
                                ?>
                            <div>
                            <input type="checkbox" style="margin-right: 10px;" 
                                   name="<?php echo $customCampos['nombre_campo'] ?>_chk" 
                                   checkname="<?php echo $customCampos['nombre_campo'] ?>"
                                   <?php echo $required?>
                                <?php echo $checked?> 
                                <?php echo "class='removeForm multiple class_".$className." ".$classInteractive."'"?> 
                                value="<?php echo $checkSelect['value']?>" 
                                >
                            <span><?php echo $checkSelect['label']?></span>
                            </div>
                            <?php }  ?>
                            <input type="hidden" name="<?php echo $customCampos['nombre_campo'] ?>" <?php echo $required?>>
                        </div>
                    </div>
                    <!-- Termina fila de checkboxs -->
                    <?php }else if($customCampos['campo_custom_id'] == '7'){//radio-group 
                        $check = json_decode($customCampos['valores'] ,true); 
                        ?>
                    <div class="col-md-12 mb-4">
                        <label class="d-block px-3"><?php echo $customCampos['nombreCampo'] ?></label>
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
                            <?php }  ?>
                        </div>
                    </div>
                    <?php }else if($customCampos['campo_custom_id'] == '4'){//file 
                        $numberFile++;
                        ?>
                    <div class="col-md-12 mb-4">
                        <hr style="margin-top: 30px;margin-bottom: 30px;border-top: 3px dotted #3c3fe2;">
                        <label class="d-block px-3" for="archivo">
                        <?php  if($customCampos['orden'] >= 30 || $customCampos['orden'] >= 39){ ?>
                            <?php echo $customCampos['nombreCampo']?> 
                            <a style="color: #3c3fe2" href="http://entornobogota.com/wp-content/uploads/2020/07/AnexosActoresEcosistema.zip"> Descarga el formato aquí  </a>
                        <?php }else{  ?>
                        <?php echo $customCampos['nombreCampo']?>
                        <?php  } ?>
                        </label>
                        <!--a style="color: #3c3fe2" href="http://entornobogota.com/wp-content/uploads/2020/07/ANEXO-1.-Formato-de-autorización-para-la-revisión-de-antecedentes..docx">
                            Descarga el formato aquí
                            </a-->
                        <span class="wpcf7-form-control-wrap your-name">
                        <progress id="progressBar_<?php echo$customCampos['idFormulario']?>" value="0" max="100" 
                            style="width:100%;margin-bottom: -10px;" 
                            aria-placeholder="<?php echo $placeholder ?>"></progress>
                        <input onchange="uploadFile(<?php echo $customCampos['idFormulario']?>,'<?php echo "File_".$customCampos['nombre_campo']?>');" 
                            type="file"  
                            id="archivo_<?php echo$customCampos['idFormulario']?>" 
                            name="archivo_<?php echo$customCampos['idFormulario']?>" 
                            size="40" 
                            norden="<?php echo $customCampos['orden'] ?>"
                            accept="image/png, image/jpg,.doc,.docx,.ppt,.pptx,.xlsx,.pdf,.zip,.rar"
                            class="<?php echo " removeForm class_".$className." ".$classInteractive." "?> wpcf7-form-control wpcf7-text form-control form-control--white" 
                            aria-required="true" aria-invalid="false" <?php echo $required?> >
                        <input type="hidden" readonly name="file[]" id="file_<?php echo $customCampos['idFormulario']?>">
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
                    <!-- Inicia fila de inputs superiores -->
                    <div class="col-md-<?php echo (in_array($customCampos["orden"],$array_estilos_fijos))?"12":"6"?> mb-4">
                        <label class="d-block px-3"><?php echo $label?></label>
                        <span class="wpcf7-form-control-wrap your-name">
                        <input type="<?php echo $type?>" 
                            name="<?php echo $customCampos['nombre_campo']?>" 
                            norden="<?php echo $customCampos['orden'] ?>"
                            id="<?php echo $customCampos['nombre_campo']?>" size="40" 
                            placeholder="<?php echo $placeholder ?>"  <?php echo $required?>
                            class="wpcf7-form-control wpcf7-text <?php echo "class_".$className." ".$classInteractive." "?> form-control form-control--white"
                            aria-required="true" aria-invalid="false">
                        <?php echo (isset($customCampos['descripcion']))?"<span>".$customCampos['descripcion']."</span>":""?></span>
                        </span>
                    </div>
                    <!-- Finaliza fila de inputs superiores -->
                    <?php } 
                        }
                        ?>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        <input type="checkbox" id="cbox2"  name="cbox2"  class="removeForm form-group" value="second_checkbox" required style="margin: 0px 0px 0px !important;width:20px !important;height: 20px !important;">
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
                </div>
                <div class="px-lg-5 px-4 mx-5 mt-4">
                    <hr>
                </div>
                <!-- <div class="alert alert-warning" role="alert">
                    Tareas de mantenimiento en jornada de 8:00 pm a 12:00 pm del 6 de julio de 2020, agradecemos su comprensión y ejecución de registro fuera de este periodo.
                    </div> -->
                <div class="arrows clearfix mt-4 text-center">
                    <input type="button" value="Finalizar postulaci&oacute;n" id="saveRegister" class="btns text-white px-5 d-inline-block">
                </div>
                </div>
                <input type="hidden" name="totalArchivos" id="totalArchivos" value="0">
                <input type="hidden" name="programaId" value="<?php echo $idPrograma ?>">
                <input type="hidden" name="rol" value="8">
                <input type="hidden" name="arrayForm" value="19">
                <input type="hidden" name="FormularioId" value="19">
                <input type="hidden" name="ipUsuario" value="<?php echo $_SERVER["REMOTE_ADDR"]; ?>">
                <input type="hidden" name="usuario_creacion" value="438">
                <!-- <input type="hidden" name="usuario_creacion" value="438"> -->
                <input type="hidden" readonly name="codigo" id="codigo" required>
            </form>
        </div>
        <div role="form" class="" id="wpcf7-f240-p116-o1">
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

   <!-- Sections -->

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
                case 'ppt':
                case 'pptx':
                case 'xlsx':
                case 'zip':
                case 'rar':
                case 'pdf': break;
                default:
                    alert('El archivo no tiene la extensión adecuada');
                    this.value = ''; // reset del valor
                    this.files[0].name = '';
            }
        }
    });
    
        /*jQuery("#formulario_de_registro").on("submit", function(e) {
                    
            
        });*/
     jQuery("#saveRegister").on("click", function(e) {
         jQuery('label.error').remove(); 
        if(!jQuery("#formulario_de_registro").valid()){
             jQuery('#saveRegister').attr("disabled", false);
             jQuery('.error:first').focus();
             e.preventDefault();
             return false;
         }
         var filedevdata=0;
         jQuery("#loadMe").modal({
             backdrop: "static", //remove ability to close modal with click
             keyboard: false, //remove option to close with keyboard
             show: true //Display loader!
            });
			
            jQuery('#saveRegister').attr("disabled", true);
            //var urlApi = 'http://localhost/middleware/public/api/';
            var urlApi = 'https://middlepp.gevents.co/public/api/';
   
            //var valuesForm =  jQuery("input[name='idFormularioF\\[\\]']").map(function() { return jQuery('#archivo_'+ jQuery(this).val()).prop('files')[0];}).get();
            var valuesForm =  jQuery("input[name='idFormularioF\\[\\]']").map(function() {
                 /* se realiza para saber cuantos documentos son los cargados */
                if(jQuery('#archivo_'+ jQuery(this).val()).val().length > 0){   filedevdata ++;  }
                jQuery('#totalArchivos').val( filedevdata); 
                return jQuery('#archivo_'+ jQuery(this).val()).prop('files')[0];
            }).get();
            var ajaxData = new FormData(document.getElementById("formulario_de_registro"));
            ajaxData.append("servicio_metodo","storeResponseCustom");
            
            jQuery(".removeForm").each(function(){
        	    ajaxData.delete(jQuery(this).attr("name"));
        	});
                
           //e.preventDefault();
            jQuery.ajax({
                type: 'POST',
                url: '/loadpost',
                contentType: false,
                processData: false,
                data: ajaxData,
                success: function(response) {
                    if (response == 200) {
                       jQuery("#loadMe").modal("hide");
                        jQuery('#formulario_de_registro').trigger("reset");
                        jQuery('#saveRegister').attr("disabled", true);
                        window.location.href="/gracias-aliado/";
                    }else if(response.response == 100){
                        jQuery("#loadMe").modal("hide");
                        jQuery('#modalErrorNit').modal('show');
                        jQuery('#saveRegister').attr("disabled", false);
                    }else if(response.response == 400){
                        jQuery("#loadMe").modal("hide");
                        jQuery('#modalErrorEmail').modal('show');
                        jQuery('#saveRegister').attr("disabled", false);
                    }else if(response.response == 4031){
                        jQuery("input[name='idFormularioF\\[\\]']").map(function() { 
                                /* se realiza para saber cuantos documentos son los cargados */
                            jQuery('#archivo_'+ jQuery(this).val()).val('');
                                 
                        }).get();
                        jQuery('#codigo').val('');
                        jQuery("#loadMe").modal("hide");
                        jQuery('#modalFail').modal('show');
                        jQuery('#saveRegister').attr("disabled", false);
                        jQuery(".progressBar").val(0);
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
                            cadena = request.responseJSON.response.status;
                            if(cadena.indexOf("Fail") < 0){
                                jQuery('.span-body-fail').html(request.responseJSON.response.status);
                            }
                        }else{
                            jQuery('.span-body-fail').html(" ");
                        }
                        jQuery('#modalFail').modal('show');
                        jQuery('#saveRegister').attr("disabled", false);
                    }
                }
            });
            e.preventDefault();
            return false;
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
            if(textSelect==""){
                jQuery('input[checkname="'+nameCheck+'"]').attr("required",true);
            }else{
                jQuery('input[checkname="'+nameCheck+'"]').attr("required",false);
            }
        });
        
       jQuery.extend(jQuery.validator.messages, {
            required: "El campo es requerido.",
        }); 
        
        jQuery.validator.addMethod(
            "regex",
            function(value, element, regexp) {
                var check = false;
                return this.optional(element) || regexp.test(value);
            },
            "Favor revisa el valor ingresado."
        );
        <?php
        
    $patterns = "";
    $mensajes = "";
    
    foreach($regExp as $nombreCampo => $value){
        $expresion =  $value["pattern"];
        $patterns.='"'.$nombreCampo.'"'.": {
            regex: ".$expresion."
        },
        ";
        $mensajes .= $nombreCampo.": {
            regex: '".$value["message"]."'
        },
        "; 
        
    }
    echo "jQuery('#formulario_de_registro').validate({
        rules: {
            ".$patterns."
        },
        messages: {
            ".$mensajesValidacion."
            },
        errorPlacement: function(error, element) {
                            if (element.is(':radio'))
                                    error.appendTo(element.parent().parent());
                            else if (element.is(':checkbox'))
                                    error.appendTo(element.parent().parent());
                            else error.appendTo(element.parent());
                            
                    }
    });";
    if(count($showFields)>0 || count($hiddenFields)>0){
    foreach($showFields as $field =>$values){
        foreach($values as $items){
            foreach($items as $value){
                echo 'jQuery(".class_'.$value.'").parent().hide();';
                echo 'jQuery(".class_'.$value.'").attr("disabled", true);';
            }
        }
    }
    foreach($hiddenFields as $field =>$values){
        foreach($values as $items){
            foreach($items as $value){
                echo 'jQuery(".class_'.$value.'").parent().hide();';
                echo 'jQuery(".class_'.$value.'").attr("disabled", true);';
            }
        }
    }
}
//deshabilitar todos los campos de dependencias
 if(count($enabledFields)>0 || count($disabledFields)>0){
    foreach($enabledFields as $field =>$values){
        foreach($values as $items){
            foreach($items as $value){
                echo 'jQuery(".class_'.$value.'").attr("disabled", true);';
            }
        }
    }
    foreach($disabledFields as $field =>$values){
        foreach($values as $value){
            echo 'jQuery(".class_'.$value.'").attr("disabled", true);';
        }
    }
}
//mostrar las que esten seleccionadas
?>
    function ShowHideSelect(obj){
        valueSelected = jQuery(obj).val();
        nameSelected = jQuery(obj).attr("name");
        
        <?php
            
            foreach($showFields as $field =>$values){
                foreach($values as $key =>$items){
                    echo 'if(nameSelected=="'.$field.'" && valueSelected=="'.$key.'"){';
                    foreach($items as $value){
                        echo 'jQuery(".class_'.$value.'").parent().show();';
                        echo 'jQuery(".class_'.$value.'").attr("disabled", false);';
                    }
                    echo '}
                        ';
                }
            }
            foreach($hiddenFields as $field =>$values){
                foreach($values as $key =>$items){
                    echo 'if(nameSelected=="'.$field.'" && valueSelected=="'.$key.'"){';
                    foreach($items as $value){
                        echo 'jQuery(".class_'.$value.'").parent().hide();';
                        echo 'jQuery(".class_'.$value.'").attr("disabled", true);';
                    }
                    echo '}
                        ';
                }
            }
        ?>
        
    }
    function EnabledDisabled(obj){
        valueSelected = jQuery(obj).val();
        nameSelected = jQuery(obj).attr("name");
        
        <?php
            
            foreach($enabledFields as $field =>$values){
                foreach($values as $key =>$items){
                    echo 'if(nameSelected=="'.$field.'" && valueSelected=="'.$key.'"){';
                    foreach($items as $value){
                        echo 'jQuery(".class_'.$value.'").attr("disabled", false);';
                    }
                    echo '}
                        ';
                }
            }
            foreach($disabledFields as $field =>$values){
                foreach($values as $key =>$items){
                    echo 'if(nameSelected=="'.$field.'" && valueSelected=="'.$key.'"){';
                    foreach($items as $value){
                        echo 'jQuery(".class_'.$value.'").attr("disabled", true);';
                    }
                    echo '}
                        ';
                }
            }
        ?>
        
    }
    
    jQuery("select.Interactive").each(function(){
        ShowHideSelect(this);
    });
    jQuery("select.Interactive").change(function(){
        ShowHideSelect(this);
    });
    jQuery("input.Interactive").each(function(){
        EnabledDisabled(this);
    });
    jQuery("input.Interactive").click(function(){
        EnabledDisabled(this);
    });
        //33 - 34
        //35 - 36
        //37 - 38
        //39-40
        //41 - 42
     jQuery(document).on('change','input[norden="33"]',function(){
         if(jQuery(this).val()==""){ 
             jQuery(this).attr('required',true);
             jQuery('input[norden="34"]').attr('required',true);
             jQuery('input[norden="34"]').removeAttr('disabled');
        }else {
            jQuery(this).attr('required',true);
            jQuery('input[norden="34"]').removeAttr('required');
            jQuery('input[norden="34"]').attr('disabled','disabled');
        }
     });
     jQuery(document).on('change','input[norden="34"]',function(){
         if(jQuery(this).val()==""){ 
             jQuery(this).attr('required',true);
             jQuery('input[norden="33"]').attr('required',true);
             jQuery('input[norden="33"]').removeAttr('disabled');
        }else {
            jQuery(this).attr('required',true);
             jQuery('input[norden="33"]').removeAttr('required');
             jQuery('input[norden="33"]').attr('disabled','disabled');
        }
     });
     
     jQuery(document).on('change','input[norden="35"]',function(){
         if(jQuery(this).val()==""){ 
             jQuery(this).attr('required',true);
             jQuery('input[norden="36"]').attr('required',true);
             jQuery('input[norden="36"]').removeAttr('disabled');
        }else {
            jQuery(this).attr('required',true);
            jQuery('input[norden="36"]').removeAttr('required');
            jQuery('input[norden="36"]').attr('disabled','disabled');
        }
     });
     jQuery(document).on('change','input[norden="36"]',function(){
         if(jQuery(this).val()==""){ 
             jQuery(this).attr('required',true);
             jQuery('input[norden="35"]').attr('required',true);
             jQuery('input[norden="35"]').removeAttr('disabled');
        }else {
            jQuery(this).attr('required',true);
             jQuery('input[norden="35"]').removeAttr('required');
             jQuery('input[norden="35"]').attr('disabled','disabled');
        }
     });
     
     jQuery(document).on('change','input[norden="37"]',function(){
         if(jQuery(this).val()==""){ 
             jQuery(this).attr('required',true);
             jQuery('input[norden="38"]').attr('required',true);
             jQuery('input[norden="38"]').removeAttr('disabled');
        }else {
            jQuery(this).attr('required',true);
            jQuery('input[norden="38"]').removeAttr('required');
            jQuery('input[norden="38"]').attr('disabled','disabled');
        }
     });
     jQuery(document).on('change','input[norden="38"]',function(){
         if(jQuery(this).val()==""){ 
             jQuery(this).attr('required',true);
             jQuery('input[norden="37"]').attr('required',true);
             jQuery('input[norden="37"]').removeAttr('disabled');
        }else {
            jQuery(this).attr('required',true);
             jQuery('input[norden="37"]').removeAttr('required');
             jQuery('input[norden="37"]').attr('disabled','disabled');
        }
     });
     
     jQuery(document).on('change','input[norden="39"]',function(){
         if(jQuery(this).val()==""){ 
             jQuery(this).attr('required',true);
             jQuery('input[norden="40"]').attr('required',true);
             jQuery('input[norden="40"]').removeAttr('disabled');
        }else {
            jQuery(this).attr('required',true);
            jQuery('input[norden="40"]').removeAttr('required');
            jQuery('input[norden="40"]').attr('disabled','disabled');
        }
     });
     jQuery(document).on('change','input[norden="40"]',function(){
         if(jQuery(this).val()==""){ 
             jQuery(this).attr('required',true);
             jQuery('input[norden="39"]').attr('required',true);
             jQuery('input[norden="39"]').removeAttr('disabled');
        }else {
            jQuery(this).attr('required',true);
             jQuery('input[norden="39"]').removeAttr('required');
             jQuery('input[norden="39"]').attr('disabled','disabled');
        }
     });
     
     jQuery(document).on('change','input[norden="41"]',function(){
         if(jQuery(this).val()==""){ 
             jQuery(this).attr('required',true);
             jQuery('input[norden="42"]').attr('required',true);
             jQuery('input[norden="42"]').removeAttr('disabled');
        }else {
            jQuery(this).attr('required',true);
            jQuery('input[norden="42"]').removeAttr('required');
            jQuery('input[norden="42"]').attr('disabled','disabled');
        }
     });
     jQuery(document).on('change','input[norden="42"]',function(){
         if(jQuery(this).val()==""){ 
             jQuery(this).attr('required',true);
             jQuery('input[norden="41"]').attr('required',true);
             jQuery('input[norden="41"]').removeAttr('disabled');
        }else {
            jQuery(this).attr('required',true);
             jQuery('input[norden="41"]').removeAttr('required');
             jQuery('input[norden="41"]').attr('disabled','disabled');
        }
     });
});
   
</script>