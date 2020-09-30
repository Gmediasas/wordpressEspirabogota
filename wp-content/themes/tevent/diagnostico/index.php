<?php
session_start();

get_header();
  /*
  Template Name: landing-diagnostico
  */

  include 'services.php';
  $regExp=array();
  $enabledFields = array();
  $disabledFields = array();
  $hiddenFields = array();
  $showFields = array();
  $allFiedlInteractive = array();
  $mensajesValidacion = "";
  
  $respuestasCustom=array();
  foreach ($diagnosticoUserP["respuesta"] as $respuestasDiagnostico) { 
	$respuestasCustom[$respuestasDiagnostico["campo_form_custom_id"]] = $respuestasDiagnostico["response"];
  }


foreach ($cuestionarios["custom"] as $keyCustom => $cuestionario) { 
	if(isset($respuestasCustom[$cuestionario["id"]]) && empty($cuestionarios["custom"][$keyCustom]["response"]) ){
		$cuestionarios["custom"][$keyCustom]["response"] = $respuestasCustom[$cuestionario["id"]];
	}
  }
  
foreach ($cuestionariosp3["custom"] as $keyCustom => $cuestionario) { 
	if(isset($respuestasCustom[$cuestionario["id"]]) && empty($cuestionariosp3["custom"][$keyCustom]["response"]) ){
		$cuestionariosp3["custom"][$keyCustom]["response"] = $respuestasCustom[$cuestionario["id"]];
	}
  }
  
  
  $TodosLosCuestionarios = array($cuestionarios,$cuestionariosp3);
  foreach($TodosLosCuestionarios as $oneCuestionarios){
	  $campos="custom";
    foreach ($oneCuestionarios[$campos] as $cuestionario) { 
        
    $mensajesValidacion .= "'".$cuestionario['nombre_campo']."': {
         required: 'El campo (".preg_replace("[\n|\r|\n\r]", "", strip_tags($cuestionario['nombreCampo'])).") es requerido'
    },
    ";
      if(isset($cuestionario['regrecion']) && !empty($cuestionario['regrecion'])){
          $regExp[$cuestionario['nombre_campo']] = array("pattern"=>$cuestionario['regrecion'],
                'message'=>'El texto del campo ('.$cuestionario['nombreCampo'].') es invalido');
      }
      if(in_array($cuestionario['codigo'],array('select','radio-group'))){
          $arraySelect = json_decode($cuestionario['valores'] ,true);
          foreach($arraySelect as $dbA) { 
              if(isset($dbA['oculto']) && !empty($dbA['oculto']) && $dbA['oculto']!='oculto'){
                  $allFiedlInteractive[$cuestionario['nombre_campo']]="Interactive";
                  $arrayValues = explode(",",$dbA['oculto']);
                  foreach($arrayValues as $value){
                      if(($cuestionario['codigo'] == 'select' && "organizacion_16_16"!=$cuestionario['nombre_campo'])||"instalada_12_15"==$cuestionario['nombre_campo']){
						  $allFiedlInteractive[$cuestionario['nombre_campo']]="Interactives";
                          $hiddenFields[$cuestionario['nombre_campo']][$dbA['value']][$value]=$value;
						  $hiddenFields[$cuestionario['nombre_campo']][$dbA['value']][" "]=" ";
                      }
                      elseif(($cuestionario['codigo'] == 'radio-group' || "organizacion_16_16"==$cuestionario['nombre_campo'])&&"instalada_12_15"!=$cuestionario['nombre_campo']){
						  $allFiedlInteractive[$cuestionario['nombre_campo']]="Interactiver";
                          $disabledFields[$cuestionario['nombre_campo']][$dbA['value']][$value]=$value;
						  $disabledFields[$cuestionario['nombre_campo']][$dbA['value']][" "]=" ";
                      }
                  }
              }
              if(isset($dbA['mostrar']) && !empty($dbA['mostrar']) && $dbA['mostrar']!='mostrar'){
                  $arrayValues = explode(",",$dbA['mostrar']);
				  $allFiedlInteractive[$cuestionario['nombre_campo']]="Interactive";
                  foreach($arrayValues as $value){
                      if(($cuestionario['codigo'] == 'select' && "organizacion_16_16"!=$cuestionario['nombre_campo'])||"instalada_12_15"==$cuestionario['nombre_campo']){
						  $allFiedlInteractive[$cuestionario['nombre_campo']]="Interactives";
                          $showFields[$cuestionario['nombre_campo']][$dbA['value']][$value]=$value;
                      }
                      elseif(($cuestionario['codigo'] == 'radio-group' || "organizacion_16_16"==$cuestionario['nombre_campo'])||"instalada_12_15"!=$cuestionario['nombre_campo']){
						  $allFiedlInteractive[$cuestionario['nombre_campo']]="Interactiver";
                          $enabledFields[$cuestionario['nombre_campo']][$dbA['value']][$value]=$value;
                      }
                  }
              }
          }
      }
    }
  }
   
  
  
?>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="../wp-content/themes/tevent/diagnostico/_/styles/bootstrap.min.css">
	<link rel="stylesheet" href="../wp-content/themes/tevent/diagnostico/_/styles/main.css">

    <style>

.alert-info {
    color: #ffffff;
    border-left: 2px solid rgba(237,0,255,1) !important;
    background-color: rgb(255 255 255) !important;
    -webkit-box-shadow: 0px 3px 6px 0px rgba(183,31,56,0.3) !important;
    -moz-box-shadow: 0px 3px 6px 0px rgba(183,31,56,0.3) !important;
    box-shadow: 0px 3px 6px 0px rgb(237 0 255 / 30%) !important;
}

    @media (max-width: 1424px) {
    .btns {font-size: 14px;}
    }

    @media (min-width: 1024px){
    .btns {font-size: 14px;}
    }

    @media (max-width: 991px){
    .btns {font-size: 14px;}
    }

    @media (max-width: 767px) {
    .btns {font-size: 14px;}
    }
	iframe {
		width: 100%;
}

    </style>
  
    <?php 
    $fechahabilitacion= '2020-07-17';
     //$ulrPHPS= '/espiraBogota/wp-content/';
   $ulrPHPS= '/wp-content/';
    if(isset($_SESSION['token'])) {?>
        <script> 
          jQuery('#menu-item-976').css('display','none');  
          jQuery('#menu-item-1683').css('display','none');  
        </script>

    <?php }else{
         echo '<script type="text/javascript">
         window.location.href="iniciar-sesion/";
         </script>';
        }
    ?>

    <a href="javascript:void(0);" class="ico_menu d-block d-xl-none"></a>
    
	<main class="container_full mx-auto px-lg-4 px-3"> 
        <nav class="menu_new h-100 pb-3">
            <a href="javascript:void(0);" class="d-lg-none px-lg-4 px-3 tit_menu radius d-block">Selecciona una opción</a>
            <div class="row align-content-center h-100 no-gutters">
                <div class="c_menu col-12">
                    <ul class="list-unstyled mb-0">
                        <li class=""><a href="../diagnostico/bienvenida">Bienvenida</a></li>
                        <li class=""><a href="diagnostico/" class="active">Diagnóstico</a></li> 
                        <li class=""><a href="mi-cuenta/">Mi cuenta</a></li>
                        <li class=""><a href="../diagnostico/ayuda/">Ayuda</a></li>
                        <li class=""><a href="../salir/">Salir</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="sections">
            <form action="" method="post" id="formulariodiagnostico">
                <input type="hidden" name="anfitrionId" value="<?php echo $employee['employee']['id'] ?>">
                <input type="hidden" name="idProgram" value="<?php echo $idProgram ?>">
                <input type="hidden" name="idEstado" id="idEstado" value="38">
				<input type="hidden" name="arrayForm" id="idEstado" value="16,15">
            <!--paso1-->
                <section class="active my-md-5 py-md-5 my-4 py-4 f1">
                    <div class="menu_diagnostico">
                        <ul class="list-unstyled d-flex justify-content-center">
                            <li class="active mx-2">
                                <a href="javascript:void(0);"> <span class="d-md-block d-none">Información empresa </span></a>
                            </li>
                            <li class="mx-2">
                                <a href="javascript:passForm('.f2');">  <span class="d-md-block d-none">Información adicional</span></a>
                            </li>
                            <li class="mx-2">
                                <a href="javascript:passForm('.f3');"> <span class="d-md-block d-none">Cuestionario de diagnóstico</span></a>
                            </li>
                        </ul>
                    </div>
					<?php //pt-md-5 my-md-5 my-4 pb-3 px-3 ?>
					<h3 class="text-center my-md-5 ">Información de la empresa</h3>
					<?php if(isset($diagnosticoUserP['employee']) && $diagnosticoUserP['employee']['estado_diagnostico_id'] == 38){ ?>
						
						<div class="alert alert-info" role="alert">
							<p style="text-align: center;">Para continuar con el proceso de diagnóstico, debe dirigirse a la Evaluación de Expertos (internacionales y/o nacionales).</p>
							<hr style="margin-top: 10px !important;margin-bottom: 10px !important;">
							<p class="mb-0 mx-auto" style="text-align: center;">
								<button type="button" onclick="open_extern(0)" class="btns text-white px-5 d-inline-block mx-auto">Ir a evaluación de expertos</button>
							</p>
						</div>
						
					<?php } ?>
                    <div class="px-lg-5 px-3 new_form">
                        <div class="row">
                    
                            <div class="col-md-6 mb-4">
                                <label class="d-block px-3">Información empresa</label>
                                <input type="text" value="<?php echo $employee['employee']['empresa'] ?>" disabled>
                            </div>
                            <?php

                            foreach ($custom['customFormulario'] as $customCampos) {

                                if($customCampos['orden'] < 9){
                                    if($customCampos['campo_custom_id'] == 2)
                                        if($customCampos['valores'] == '*')
                                            include($_SERVER['DOCUMENT_ROOT'].$ulrPHPS."themes/tevent/diagnostico/forms/form_local.php");
                                        elseif($customCampos['valores'] == '+')
                                            include($_SERVER['DOCUMENT_ROOT'].$ulrPHPS."themes/tevent/diagnostico/forms/form_act.php");
                                        elseif($customCampos['valores'] == '-')
                                            include($_SERVER['DOCUMENT_ROOT'].$ulrPHPS."themes/tevent/diagnostico/forms/form_act2.php");
                                        else
                                            include($_SERVER['DOCUMENT_ROOT'].$ulrPHPS."themes/tevent/diagnostico/forms/form_select.php");
                                    else
                                        include($_SERVER['DOCUMENT_ROOT'].$ulrPHPS."themes/tevent/diagnostico/forms/form_1.php");
                                }
                            }

                            $typeDocument = '';
                            foreach ($custom['tipoIdentificacion'] as $typeId){

                                if($employee['userE']['tipo_identificacion_id'] == $typeId['id'])
                                $typeDocument = $typeId['tipo'];
                            }
                            ?>

                            <div class="col-md-6 mb-4">
                                <label class="d-block px-3">Nombre de la persona de contacto:</label>
                                <input type="text" value="<?php echo $employee['userE']['nombre'] ?>" disabled>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="d-block px-3">Apellido de la persona de contacto:</label>
                                <input type="text" value="<?php echo $employee['userE']['apellido'] ?>" disabled>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="d-block px-3">Tipo de identificación:</label>
                                <input type="text" value="<?php echo $typeDocument ?>" disabled>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="d-block px-3">Número de identificación:</label>
                                <input type="text" value="<?php echo $employee['userE']['documento'] ?>" disabled>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="d-block px-3">Cargo dentro de la empresa:</label>
                                <input type="text" value="<?php echo $employee['userE']['cargo'] ?>" disabled>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="d-block px-3">Correo electrónico principal:</label>
                                <input type="text" value="<?php echo $employee['employee']['correo'] ?>" disabled>
                            </div>
                            <?php

                            foreach ($custom['customFormulario'] as $customCampos) {

                                if($customCampos['orden'] == 9){
                                    include($_SERVER['DOCUMENT_ROOT'].$ulrPHPS."themes/tevent/diagnostico/forms/form_1.php");
                                }
                            }
                            ?>
                            <div class="col-md-6 mb-4">
                                <label class="d-block px-3">Número telefónico de la persona de contacto:</label>
                                <input type="text" value="<?php echo $employee['userE']['celular'] ?>" disabled>
                            </div>
                            <?php

                            foreach ($custom['customFormulario'] as $customCampos) {

                                if($customCampos['orden'] == 10){
                                    include($_SERVER['DOCUMENT_ROOT'].$ulrPHPS."themes/tevent/diagnostico/forms/form_1.php");
                                }
                            }
                            ?>
                        </div>
                        <div class="px-lg-5 px-4 mx-5 mt-4">
                            <hr>
                        </div>
                        <?php if( date( 'Y-m-d H:i:s' ) >=   $fechahabilitacion){?>
                        <div class="arrows clearfix mt-5">
                            <a  class="btns float-right text-white px-lg-5 px-3  arrow_right" onclick="passForm('.f2');">Continuar</a>
                        </div>
                        <?php }?>
                    </div>
                </section>
            <?php if( date( 'Y-m-d H:i:s' ) >=   $fechahabilitacion ){?>
            <!--paso2-->
                <section class="my-md-5 py-md-5 my-4 py-4 f2">
                    <div class="menu_diagnostico">
                        <ul class="list-unstyled d-flex justify-content-center">
                            <li class="active mx-2">
                                <a href="javascript:passForm('.f1');"> <span class="d-md-block d-none">Información empresa</span></a>
                            </li>
                            <li class="mx-2 active">
                                <a href="javascript:void(0);"> <span class="d-md-block d-none">Información adicional</span></a>
                            </li>
                            <li class="mx-2">
                                <a href="javascript:passForm('.f3');"><span class="d-md-block d-none">Cuestionario de diagnóstico</span></a>
                            </li>
                        </ul>
                    </div>
                    <h3 class="text-center  my-md-5">Información adicional </h3>
                    
                    <?php if(!empty($diagnosticoUser['custom'][0]['estado_diagnostico_id']) && $diagnosticoUser['custom'][0]['estado_diagnostico_id'] != 37){?>
                        <div class="px-lg-5 px-3 new_form">
                            <div class="row">
                                <?php foreach ($diagnosticoUser['custom'] as $cuestionario) { ?>
                                    <?php if($cuestionario['codigo'] == 'select'){ $arraySelect = json_decode($cuestionario['valores'] ,true);?>
                                        <div class="col-md-6  mb-4">
                                            <label class="d-block px-3"><?php echo $cuestionario['nombreCampo'] ?></label>
                                            <select  disabled readonly>
                                                <?php  foreach($arraySelect as $dbA) { 
                                                            if($cuestionario['response']== $dbA['value']){ ?>
                                                    <option value="<?php echo $dbA['value']?>" selected><?php echo $dbA['label']?></option>
                                                <?php       }else{ ?>
                                                    <option value="<?php echo $dbA['value']?>"><?php echo $dbA['label']?></option>
                                                <?php       }
                                                        }
                                                ?>
                                            </select>
                                        </div>

                                    <?php }else if($cuestionario['codigo'] == 'radio-group'){ $check = json_decode($cuestionario['valores'] ,true);?>
                                        <div class="col-md-6 mb-4">
                                            <label class="d-block px-3"><?php echo $cuestionario['nombreCampo'] ?></label>
                                            <div class="px-3 mt-3 pt-1">
                                                <?php foreach($check as $checkSelect) { $activeCheck = ''; if($cuestionario['response']== $checkSelect['value']){ $activeCheck = 'checked'; } ?>
                                                    <label>
                                                        <input type="radio" value="<?php echo $checkSelect['value']?>"  <?php echo $activeCheck?> disabled readonly>
                                                        <span><?php echo $checkSelect['label']?></span>
                                                    </label>
                                                <?php }?>
                                            </div>
                                        </div>
                                    <?php }else{ ?>
                                        <div class="col-md-6 mb-4">
                                            <label class="d-block px-3"><?php echo $cuestionario['nombreCampo'] ?></label>
                                            <input type="<?php echo $cuestionario['codigo'] ?>" value="<?php echo $cuestionario['response']?>"  disabled readonly>
                                        </div>
                                    <?php } ?>
                                <?php } ?>                                 
                            </div>
                            <div class="px-lg-5 px-4 mx-5 mt-4">
                                <hr>
                            </div>     
                            <div class="arrows clearfix mt-5">
                                <a class="btns float-left text-white px-lg-5 px-3  arrow_left" onclick="passForm('.f1');">Volver</a>
                                <a class="btns float-right text-white px-lg-5 px-3  arrow_right" onclick="passForm('.f3');">Continuar</a>
                            </div>
                        </div>
                    <?php } else{?>                     
                        <div class="px-lg-5 px-3 new_form">
                            <div class="row">
                                <?php  foreach ($cuestionarios['custom'] as $cuestionario) { $required = ''; 
                                        if($diagnosticoUser['custom'][1]['estado_diagnostico_id'] == 37){
                                            foreach ($diagnosticoUser['custom'] as $cuestionarioResp) {
                                           
                                                if($cuestionarioResp['campo_form_custom_id'] == $cuestionario['id']){ 
                                                    if($cuestionarioResp['codigo'] == 'select'){ 
                                                        $arraySelect = json_decode($cuestionario['valores'] ,true); 
                                                        foreach($arraySelect as $dbA) {   
                                                            if($cuestionarioResp['response']== $dbA['value']){  
                                                                $cuestionario['response']=$dbA['value']; ?>
                                                                    <input type="hidden" name="idrespuestas[]" value="<?php echo $cuestionarioResp['campo_form_custom_id'] ?>">
                                                            <?php } 
                                                        }   break;
                                                  
                                                    }else if($cuestionarioResp['codigo'] == 'radio-group'){ 
                                                        $check = json_decode($cuestionario['valores'] ,true);
                                                        foreach($check as $checkSelect) {   
                                                            if($cuestionarioResp['response']== $checkSelect['value']){  
                                                                $cuestionario['response']=$checkSelect['value'];?>
                                                                    <input type="hidden" name="idrespuestas[]" value="<?php echo $cuestionarioResp['campo_form_custom_id'] ?>">

                                                            <?php } 
                                                        }   break;
                                                      
                                                    }else{ 
                                                        $cuestionario['response']=$cuestionarioResp['response']; ?>
                                                           <input type="hidden" name="idrespuestas[]" value="<?php echo $cuestionarioResp['campo_form_custom_id'] ?>">

                                                        <?php break;
                                                        
                                                    }                                                   
                                                } 
                                            }
                                        }?>
                                        <?php  
                                        $className = substr($cuestionario['nombre_campo'],0,strrpos(substr($cuestionario['nombre_campo'],0,strrpos($cuestionario['nombre_campo'],"_")),"_"));
                                        $classInteractive = (isset($allFiedlInteractive[$cuestionario['nombre_campo']]))?" {$allFiedlInteractive[$cuestionario['nombre_campo']]} ":"";
                                        if($cuestionario['required'] == 1){
                                                $classInteractive .= " requerido ";
                                            }
                                        if($cuestionario['codigo'] == 'select'){ $arraySelect = json_decode($cuestionario['valores'] ,true); 
                                        
                                        ?>
                                            <div class="col-md-6  mb-4">
                                                <label class="d-block px-3"><?php echo $cuestionario['nombreCampo'] ?></label>
                                                <select name="<?php echo $cuestionario['nombre_campo'] ?>" id="" <?php echo $required?>  <?php echo "class='class_".$className." ".$classInteractive."'"?> >
                                                    <?php  foreach($arraySelect as $dbA) { if(  $dbA['value'] ==  $cuestionario['response']){ ?>
                                                        <option value="<?php echo $dbA['value']?>" selected><?php echo $dbA['label']?></option>
                                                    <?php   } else {  ?>
                                                        <option value="<?php echo $dbA['value']?>"><?php echo $dbA['label']?></option>
                                                    <?php   } }  ?>
                                                </select>
                                            </div>
                                        <?php  }else if($cuestionario['codigo'] == 'radio-group'){ $check = json_decode($cuestionario['valores'] ,true); ?>
                                            <div class="col-md-6 mb-4">
                                                <label class="d-block px-3"><?php echo $cuestionario['nombreCampo'] ?></label>
                                                <div class="px-3 mt-3 pt-1">
                                                    <?php foreach($check as $checkSelect) { if(  $checkSelect['value'] ==  $cuestionario['response']){ ?>
                                                        <div>
                                                            <input type="radio" checked <?php echo "class='class_".$className." ".$classInteractive."'"?> 
                                                                   value="<?php echo $checkSelect['value']?>" name="<?php echo $cuestionario['nombre_campo'] ?>" <?php echo $required?> >
                                                            <span><?php echo $checkSelect['label']?></span>
                                                        </div>
                                                        <?php   } else {  ?>
                                                        <div>
                                                            <input type="radio" <?php echo "class='class_".$className." ".$classInteractive."'"?> 
                                                                   value="<?php echo $checkSelect['value']?>" name="<?php echo $cuestionario['nombre_campo'] ?>" <?php echo $required?> >
                                                            <span><?php echo $checkSelect['label']?></span>
                                                        </div>
                                                    <?php } } ?>
                                                </div>
                                            </div>
                                        <?php }else{ ?>
                                                <div class="col-md-6 mb-4">
													<div>
                                                    <label class="d-block px-3"><?php echo $cuestionario['nombreCampo'] ?></label>
                                                    <input type="<?php echo $cuestionario['codigo'] ?>"  <?php echo "class='class_".$className." ".$classInteractive."'"?> 
                                                           name="<?php echo $cuestionario['nombre_campo'] ?>" 
                                                           id="<?php echo $cuestionario['nombre_campo'] ?>" <?php echo $required?> value="<?php echo $cuestionario['response'] ?>" >
													</div>
                                                </div>
                                        <?php } ?>
                                <?php } ?>  
                            </div>
                            <div class="px-lg-5 px-4 mx-5 mt-4">
                                <hr>
                            </div> 
                            <div class="arrows clearfix mt-4 text-center">
							<?php if(!isset($diagnosticoUserP['employee']) || $diagnosticoUserP['employee']['estado_diagnostico_id'] == 37 || empty($diagnosticoUserP['employee']['estado_diagnostico_id'])){ ?>
                                <button type="submit"  id="SaveTemp2" class="btns text-white px-5 d-inline-block">Guardar</button>
							<?php } ?>
                            </div>
                            <div class="arrows clearfix mt-5">
                                <a class="btns float-left text-white px-lg-5 px-3  arrow_left" onclick="passForm('.f1');">Volver</a>
                                <a class="btns float-right text-white px-lg-5 px-3  arrow_right" onclick="passForm('.f3');">Continuar</a>
                            </div>
                        </div>
                    <?php }?>
                </section>
            <!--paso 3-->
                <section class="my-md-5 py-md-5 my-4 py-4 f3">
                    <div class="menu_diagnostico">
                        <ul class="list-unstyled d-flex justify-content-center">
                            <li class="active mx-2">
                                <a href="javascript:passForm('.f1');"> <span class="d-md-block d-none">Información empresa</span></a>
                            </li>
                            <li class="mx-2 active">
                                <a href="javascript:passForm('.f2');"> <span class="d-md-block d-none">Información adicional</span></a>
                            </li>
                            <li class="mx-2 active">
                                <a href="javascript:void(0);"><span class="d-md-block d-none">Cuestionario de diagnóstico</span></a>
                            </li>
                        </ul>
                    </div>
                    <h3 class="text-center my-md-5">Cuestionario para diagnóstico de empresas</h3>
					<?php if(isset($diagnosticoUserP['employee']) && $diagnosticoUserP['employee']['estado_diagnostico_id'] == 38){ ?>

                        <div class="alert alert-info" role="alert">
							<p style="text-align: center;">Para continuar con el proceso de diagnóstico, debe dirigirse a la Evaluación de Expertos (internacionales y/o nacionales).</p>
							<hr style="margin-top: 10px !important;margin-bottom: 10px !important;">
							<p class="mb-0 mx-auto" style="text-align: center;">
								<button type="button" onclick="open_extern(0)" class="btns text-white px-5 d-inline-block mx-auto">Ir a evaluación de expertos</button>
							</p>
						</div>

					<?php } ?>
                    <div class="px-lg-5 px-3 new_form">  
			<?php	/*	var_dump($diagnosticoUserP['respuestasPuntaje']);
					var_dump($diagnosticoUser); 
					var_dump(count($diagnosticoUser["custom"]));*/
					?>
                        <?php //if(//!empty($diagnosticoUserP['respuestasPuntaje'][1]['respuesta'])  && $diagnosticoUserP['respuestasPuntaje'][1]['respuesta'] != 'N/A-DESCRIP' && 
						if(count($diagnosticoUser["custom"])>0 && $diagnosticoUser['custom'][0]['estado_diagnostico_id'] != 37){ ?>
                            <div class="kt-portlet__body">
                                <div class="row"> 
                                    <?php $array=[];
                                        foreach ($diagnosticoUserP['respuestasPuntaje'] as $respuestasPuntaje){
                                            if (!empty($respuestasPuntaje['grupo'])) {
                                                if (!in_array($respuestasPuntaje['grupo'], $array)) {
                                                    array_push($array, $respuestasPuntaje['grupo']); ?>
                                                    <div class="kt-portlet__head">
                                                        <div class="kt-portlet__head-label">
                                                            <h3 class="kt-portlet__head-title">
                                                                <?php  echo strip_tags($respuestasPuntaje['grupo']); ?>
                                                            </h3><br/>

                                                        </div>
                                                    </div>
                                                <?php }
                                            } ?> 
                                            <?php if(!empty($respuestasPuntaje['campo_custom_id'])){
                                                    if( $respuestasPuntaje['campo_custom_id'] == 1){ ?>
                                                    <div class=" col-sm-12">
                                                        <label> <?php echo strip_tags($respuestasPuntaje['pregunta'])?></label>  
                                                        <p> <?php  echo  $respuestasPuntaje['descripcion']; ?></p>
                                                        <?php if($respuestasPuntaje['respuesta'] != 'N/A-DESCRIP'){?>
                                                        <br/>
                                                        <label> Respuesta :</label><br/>
                                                        <div style="height: unset; background: #eee;" readonly><?php echo $respuestasPuntaje['respuesta']?></div> <br/><br/>
                                                        <?php }?>
                                                    </div>

                                                <?php }elseif($respuestasPuntaje['campo_custom_id'] == 7 || $respuestasPuntaje['campo_custom_id'] == 2 ){ ?>

                                                    <div class=" col-sm-12">
                                                        <label> <?php  echo strip_tags($respuestasPuntaje['pregunta'])?></label>  
                                                        <p> <?php  echo  $respuestasPuntaje['descripcion']; ?></p><br/>
                                                        <label> Respuesta :</label><br/>
                                                        <div style="height: unset; background: #eee;"readonly><?php echo $respuestasPuntaje['respuestaselect']?></div><br/>
                                                    </div>
                                                <?php }
                                            } ?>                                     
                                    <?php }  ?>
                                </div>
                            </div>  
                            <div class="px-lg-5 px-4 mx-5 mt-4">
                                <hr>
                            </div> 
                            <div class="arrows clearfix mt-5">
                                <a  class="btns float-left text-white px-lg-5 px-3  arrow_left" onclick="passForm('.f2');">Volver</a> 
                            </div>
                        <?php }else{?>
                            <div class="row">
                                <div class="col-12"> 
                        
                                    <?php							   
                                    $array=[];
                                    $display='';
                                    $suma=0; 
                                    
                                    foreach ($cuestionariosp3['custom'] as $cuestionariof3) { $required = '';
									//var_dump($cuestionariof3);
                                            
                                            if($diagnosticoUser['custom'][0]['estado_diagnostico_id'] == 37){
                                                foreach ($diagnosticoUserP['respuestasPuntaje'] as $respuestasPuntaje) { 
                                                 
                                                    if($respuestasPuntaje['respuesta'] != 'N/A-DESCRIP'){
                                                        if($respuestasPuntaje['id'] == $cuestionariof3['id']){ 
                                                         
                                                            if($respuestasPuntaje['campo_custom_id'] == 7 || $respuestasPuntaje['campo_custom_id'] == 2 ){ 
                                                                $arraySelect = json_decode($cuestionariof3['valores'] ,true); 
                                                                foreach($arraySelect as $dbA) {   
                                                                    if($respuestasPuntaje['respuesta']== $dbA['value']){  
                                                                        $cuestionariof3['response']=$dbA['value']; ?>
                                                                        <input type="hidden" name="idrespuestas[]" value="<?php echo $respuestasPuntaje['id'] ?>">
                                                                    <?php } 
                                                                }   break;
                                                        
                                                            }else{   
                                                                $cuestionariof3['response']=$respuestasPuntaje['respuesta']; ?>
                                                                <input type="hidden" name="idrespuestas[]" value="<?php echo $respuestasPuntaje['id'] ?>">

                                                                <?php break;
                                                                
                                                            }                                                   
                                                        } 
                                                    }
                                                }
                                            }?>
                                            <?php  if (!in_array($cuestionariof3['grupo_formulario'], $array)) {
                                                    array_push($array, $cuestionariof3['grupo_formulario']);
                                                /*if($suma === 0){
                                                    $display='style="display:block"'
                                                    ?>
                                                    
                                                    <a href="javascript:void(0);" class="text-white p-3 d-block text-decoration-none link_acordeon active"><?php echo strip_tags( $cuestionariof3['grupo_formulario'])?></a>	
                                                <?php }else{
                                                    $display='style="display:none"' ?>
                                                    
                                                    <a href="javascript:void(0);" class="text-white p-3 d-block text-decoration-none link_acordeon"><?php echo strip_tags($cuestionariof3['grupo_formulario'])?></a>
                                                <?php }*/?>											
                                                
                                            <?php }
                                            
                                            $className = substr($cuestionariof3['nombre_campo'],0,strrpos(substr($cuestionariof3['nombre_campo'],0,strrpos($cuestionariof3['nombre_campo'],"_")),"_"));
                                        
                                            $classInteractive = (isset($allFiedlInteractive[$cuestionariof3['nombre_campo']]))?" {$allFiedlInteractive[$cuestionariof3['nombre_campo']]} ":"";
                                            if($cuestionariof3['required'] == 1){
                                                    $classInteractive .= " requerido ";
                                                }
                                            ?>	 
                                                
                                            <div class="mt-4 radius container_question p-lg-4 p-3" style="display:block">
                                                <div>										 
                                                <?php //var_dump($cuestionariof3);
												if(!empty($cuestionariof3['nombreCampo'])){?><b><?php echo strip_tags( $cuestionariof3['nombreCampo']); ?></b><br><br><?php }	?>												 
                                                <?php if(!empty($cuestionariof3['descripcion'])){ ?> <div style=""> <?php echo  $cuestionariof3['descripcion'];?></div> <?php }	?>											 
                                                </div>
                                                <?php   if( $cuestionariof3['valores'] != 'N/A'){?>	
                                                    <div class="bg-purple radius p-lg-4 p-3 mt-4 c_options_question">
                                                        <?php if($cuestionariof3['codigo'] == 'radio-group'){ 
                                                                include($_SERVER['DOCUMENT_ROOT'].$ulrPHPS."themes/tevent/diagnostico/forms/radio-group.php");
                                                            }elseif($cuestionariof3['codigo'] == 'text'){
                                                                include($_SERVER['DOCUMENT_ROOT'].$ulrPHPS."themes/tevent/diagnostico/forms/text.php");
                                                            }elseif($cuestionariof3['codigo'] == 'select'){
                                                                include($_SERVER['DOCUMENT_ROOT'].$ulrPHPS."themes/tevent/diagnostico/forms/select.php");
                                                            }elseif($cuestionariof3['codigo'] == 'textarea'){
                                                                include($_SERVER['DOCUMENT_ROOT'].$ulrPHPS."themes/tevent/diagnostico/forms/textarea.php");
                                                            } ?>
                                                    </div>
                                                <?php }?>											
                                            </div> 
                                        
                                        <?php $suma++; ?>
                                    <?php }?>									
                                </div>    
                            </div>                         
                            <div class="px-lg-5 px-4 mx-5 mt-4">
                                <hr>
                            </div>
							<?php if(isset($diagnosticoUserP['employee']) && $diagnosticoUserP['employee']['estado_diagnostico_id'] == 38){ ?>
							<p class="text-center" style="font-size: 0.75rem;">
								<div class="text-center">
								<button type="button" onclick="open_extern(0)"  class="btns text-white px-5 d-inline-block">Ir a evaluación de expertos</button>
								<div>
							</p>
							<?php } ?>
							<?php if(!isset($diagnosticoUserP['employee']) || $diagnosticoUserP['employee']['estado_diagnostico_id'] == 37 || empty($diagnosticoUserP['employee']['estado_diagnostico_id'])){ ?>
                            <div class="arrows clearfix mt-4 text-center">
                                <button type="submit" id="SaveTemp" class="btns text-white px-5 d-inline-block">Guardar</button>
                            </div>
                            <div class="arrows clearfix mt-5">
                                <a class="btns float-left text-white px-lg-5 px-3  arrow_left" onclick="passForm('.f2');">Volver</a>
                                <button type="submit" id="save_diagnostico" class="btns float-right text-white px-lg-5 px-3  arrow_right">Finalizar</button>
                            </div>
							<?php } else{?>
                            <div class="arrows clearfix mt-4 text-center">
                            </div>
                            <div class="arrows clearfix mt-5">
                                <a class="btns float-left text-white px-lg-5 px-3  arrow_left" onclick="passForm('.f2');">Volver</a>
                            </div>
							<?php }
						}?> 
                    </div>
                        
                </section>
				<section class="my-md-5 py-md-5 my-4 py-4 f4">
                    <div class="menu_diagnostico" height="100%">
					<script type="text/javascript" src="https://static.younoodle.com/static/shared/scripts/embed.min.js"></script>
					<script type="text/javascript">
					YouNoodleEmbed.init({
						iframe: 'https://platform.younoodle.com/client/entry-rounds/entorno_bogota/apply',
						id: 'iframe_younoodle',
						scrolling : 'no',
						width : 800,
						height: 900
					});
					</script>
					</div>
				</section>
                
            <?php }else {?> 
                    <div class="alert alert-warning" role="alert">
                        La fase de diagnostico se encontrará disponible aquí a partir del de Julio 22 del 2020
                    </div>          
            <?php }?>

            </form>
        </div> 
	</main>
   

    <?php
        include($_SERVER['DOCUMENT_ROOT'].$ulrPHPS."themes/tevent/registro/modal/dataEnviadaTemp.php");
        include($_SERVER['DOCUMENT_ROOT'].$ulrPHPS."themes/tevent/registro/modal/dataEnviada.php");
        include($_SERVER['DOCUMENT_ROOT'].$ulrPHPS."themes/tevent/registro/modal/errorNit.php");
        include($_SERVER['DOCUMENT_ROOT'].$ulrPHPS."themes/tevent/registro/modal/error.php");
        include($_SERVER['DOCUMENT_ROOT'].$ulrPHPS."themes/tevent/registro/modal/loading.php");
        include($_SERVER['DOCUMENT_ROOT'].$ulrPHPS."themes/tevent/registro/modal/faild.php");
        include($_SERVER['DOCUMENT_ROOT'].$ulrPHPS."themes/tevent/registro/modal/faildDatos.php");
    ?>


<script src="<?php echo get_template_directory_uri(); ?>/diagnostico/_/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../wp-content/themes/tevent/diagnostico/_/scripts/functions.js"></script>

	<!-- #main -->

        <script type="text/javascript" src="../wp-content/themes/tevent/diagnostico/_/scripts/jquery.validate.min.js"></script>
        <script type='text/javascript'>
            $( document ).ready(function() {
        $.validator.addMethod(
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
    echo "$('#formulariodiagnostico').validate({
        rules: {
            ".$patterns."
        },
        messages: {
            ".$mensajesValidacion."
            ".$mensajes."
            },
        errorPlacement: function(error, element) {
                            if (element.is(':radio'))
                                    error.appendTo(element.parent().parent());
                            else if (element.is(':checkbox'))
                                    error.appendTo(element.parent().parent());
                            else error.appendTo(element.parent());
                            
                    }
    });";
    
       
//Ocultar todos los campos que se muestran segun una condicion dada
if(count($showFields)>0 || count($hiddenFields)>0){
    foreach($showFields as $field =>$values){
        foreach($values as $items){
            foreach($items as $value){
                echo '$(".class_'.$value.'").parent().parent().hide();';
                echo '$(".class_'.$value.'").attr("disabled", true);';
            }
        }
    }
    foreach($hiddenFields as $field =>$values){
        foreach($values as $items){
            foreach($items as $value){
                echo '$(".class_'.$value.'").parent().parent().hide();';
                echo '$(".class_'.$value.'").attr("disabled", true);';
            }
        }
    }
}
//deshabilitar todos los campos de dependencias
 if(count($enabledFields)>0 || count($disabledFields)>0){
    foreach($enabledFields as $field =>$values){
        foreach($values as $items){
            foreach($items as $value){
                echo '$(".class_'.$value.'").attr("disabled", true);';
				echo '$(".class_'.$value.'").addClass("class_disable");';
            }
        }
    }
    foreach($disabledFields as $field =>$values){
        foreach($values as $value){
            echo '$(".class_'.$value.'").attr("disabled", true);';
			echo '$(".class_'.$value.'").addClass("class_disable");';
        }
    }
}
//mostrar las que esten seleccionadas
?>
    function ShowHideSelect(obj){
        valueSelected = $(obj).val();
        nameSelected = $(obj).attr("name");
        
        <?php
            
            foreach($showFields as $field =>$values){
                foreach($values as $key =>$items){
                    echo 'if(nameSelected=="'.$field.'" && valueSelected=="'.$key.'"){';
                    foreach($items as $value){
                        echo '$(".class_'.$value.'").parent().parent().show();';
                        echo '$(".class_'.$value.'").attr("disabled", false);';
						echo '$(".class_'.$value.'").removeClass("class_disable");';
                    }
                    echo '}
                        ';
                }
            }
            foreach($hiddenFields as $field =>$values){
                foreach($values as $key =>$items){
                    echo 'if(nameSelected=="'.$field.'" && valueSelected=="'.$key.'"){';
                    foreach($items as $value){
                        echo '$(".class_'.$value.'").parent().parent().hide();';
                        echo '$(".class_'.$value.'").attr("disabled", true);';
						echo '$(".class_'.$value.'").addClass("class_disable");';
                    }
                    echo '}
                        ';
                }
            }
        ?>
        
    }
    function EnabledDisabled(obj){
        valueSelected = $(obj).val();
        nameSelected = $(obj).attr("name");
        
        <?php
            
            foreach($enabledFields as $field =>$values){
                foreach($values as $key =>$items){
                    echo 'if(nameSelected=="'.$field.'" && valueSelected=="'.$key.'"){';
                    foreach($items as $value){
                        echo '$(".class_'.$value.'").attr("disabled", false);';
						echo '$(".class_'.$value.'").removeClass("class_disable");';
                    }
                    echo '}
                        ';
                }
            }
            foreach($disabledFields as $field =>$values){
                foreach($values as $key =>$items){
                    echo 'if(nameSelected=="'.$field.'" && valueSelected=="'.$key.'"){';
                    foreach($items as $value){
                        echo '$(".class_'.$value.'").attr("disabled", true);';
						echo '$(".class_'.$value.'").addClass("class_disable");';
                    }
                    echo '}
                        ';
                }
            }
        ?>
        
    }
    
    $("select.Interactives").each(function(){
        ShowHideSelect(this);
    });
    $("select.Interactives").change(function(){
        ShowHideSelect(this);
    });
	$("input.Interactives").each(function(){
        ShowHideSelect(this);
    });
    $("input.Interactives").change(function(){
        ShowHideSelect(this);
    });
	$("select.Interactiver").each(function(){
        EnabledDisabled(this);
    });
    $("select.Interactiver").change(function(){
        EnabledDisabled(this);
    });

    $("input.Interactiver").each(function(){
        EnabledDisabled(this);
    });
    $("input.Interactiver").click(function(){
        EnabledDisabled(this);
    });
});
</script>
<?php
get_footer(); ?>