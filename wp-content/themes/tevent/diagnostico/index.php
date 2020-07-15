<?php
session_start();

get_header();
  /*
  Template Name: landing-diagnostico
  */

$userId = $_SESSION['user']['id'];
$idProgram = 1;
//Gestión de errores
$postHeaders = array('Content-Type: application/json');

$url = 'http://localhost/middleware/public/api';

$apiUrl = $url.'/getFormCustomProgram/'.$idProgram;
$curl = curl_init($apiUrl);
curl_setopt($curl, CURLOPT_ENCODING, "");
curl_setopt($curl, CURLOPT_HTTPHEADER, $postHeaders);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($curl);
$custom = json_decode($json, true);
curl_close($curl);


$postToken = array('Content-Type: application/json','Authorization: Bearer '.$_SESSION['token']);
$apiUrlResponse = $url.'/consult_employee_user_program/'.$idProgram."/".$userId;
$curlResponse = curl_init($apiUrlResponse);
curl_setopt($curlResponse, CURLOPT_ENCODING, "");
curl_setopt($curlResponse, CURLOPT_HTTPHEADER, $postToken);
curl_setopt($curlResponse, CURLOPT_RETURNTRANSFER, true);
$jsonResponse = curl_exec($curlResponse);
$response = json_decode($jsonResponse, true);
curl_close($curlResponse);

$apiUrlEmployee = $url.'/consult_employee_admin/'.$response['employee']['id'];
$curlEmployee = curl_init($apiUrlEmployee);
curl_setopt($curlEmployee, CURLOPT_ENCODING, "");
curl_setopt($curlEmployee, CURLOPT_HTTPHEADER, $postToken);
curl_setopt($curlEmployee, CURLOPT_RETURNTRANSFER, true);
$jsonEmployee = curl_exec($curlEmployee);
$employee = json_decode($jsonEmployee, true);
curl_close($curlEmployee);

$apiUrlCuestionario = $url.'/get_edit_consult_form/7';
$curlCuestionario = curl_init($apiUrlCuestionario);
curl_setopt($curlCuestionario, CURLOPT_ENCODING, "");
curl_setopt($curlCuestionario, CURLOPT_HTTPHEADER, $postToken);
curl_setopt($curlCuestionario, CURLOPT_RETURNTRANSFER, true);
$jsonCuestionario = curl_exec($curlCuestionario);
$cuestionarios = json_decode($jsonCuestionario, true);
curl_close($curlCuestionario);

$apiUrlCuestionariof3 = $url.'/get_edit_consult_form/5';
$curlCuestionariof3 = curl_init($apiUrlCuestionariof3);
curl_setopt($curlCuestionariof3, CURLOPT_ENCODING, "");
curl_setopt($curlCuestionariof3, CURLOPT_HTTPHEADER, $postToken);
curl_setopt($curlCuestionariof3, CURLOPT_RETURNTRANSFER, true);
$jsonCuestionariof3 = curl_exec($curlCuestionariof3);
$cuestionariosp3 = json_decode($jsonCuestionariof3, true);
curl_close($curlCuestionariof3);

?>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="../wp-content/themes/tevent/diagnostico/_/styles/bootstrap.min.css">
	<link rel="stylesheet" href="../wp-content/themes/tevent/diagnostico/_/styles/main.css">


	<a href="javascript:void(0);" class="ico_menu d-block d-xl-none"></a>
	<main class="container_full mx-auto px-lg-4 px-3">
		<nav class="menu_new h-100 pb-3">
			<a href="javascript:void(0);" class="d-lg-none px-lg-4 px-3 tit_menu radius d-block">Selecciona una opción</a>
			<div class="row align-content-center h-100 no-gutters">
				<div class="c_menu col-12">
					<ul class="list-unstyled  mb-0">
						<li class=""><a href="javascript:void(0);">Bienvenida</a></li>
						<li class=""><a href="javascript:void(0);" class="active">Diagnóstico</a></li>
						<li class=""><a href="javascript:void(0);">Mi cuenta</a></li>
						<li class=""><a href="javascript:void(0);">Ayuda</a></li>
						<li class=""><a href="javascript:void(0);">Salir</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="sections">
		<form action="" method="post" id="formulariodiagnostico">
                <input type="hidden" name="anfitrionId" value="<?php echo $employee['employee']['id'] ?>">
                <input type="hidden" name="idProgram" value="<?php echo $idProgram ?>">
	<!--			paso1-->
				<section class="active my-md-5 py-md-5 my-4 py-4 f1">
				  <div class="menu_diagnostico">
					  <ul class="list-unstyled d-flex justify-content-center">
						  <li class="active mx-2">
							  <a href="javascript:void(0);"> <span class="d-md-block d-none">Información empresa</span></a>
						  </li>
						  <li class="mx-2">
							  <a href="javascript:void(0);">  <span class="d-md-block d-none">Información adicional</span></a>
						  </li>
						  <li class="mx-2">
							  <a href="javascript:void(0);"> <span class="d-md-block d-none">Cuestionario de diagnóstico</span></a>
						  </li>
					  </ul>
				  </div>
					<h3 class="text-center my-md-5 my-4 pt-md-5 pb-3 px-3">Información de la empresa</h3>
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
                                            include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/diagnostico/forms/form_local.php");
                                        elseif($customCampos['valores'] == '+')
                                            include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/diagnostico/forms/form_act.php");
                                        elseif($customCampos['valores'] == '-')
                                            include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/diagnostico/forms/form_act2.php");
                                        else
                                            include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/diagnostico/forms/form_select.php");
                                    else
                                        include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/diagnostico/forms/form_1.php");
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
                                    include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/diagnostico/forms/form_1.php");
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
                                    include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/diagnostico/forms/form_1.php");
                                }
                            }
                            ?>
						</div>
						<div class="px-lg-5 px-4 mx-5 mt-4">
							<hr>
						</div>
						<div class="arrows clearfix mt-5">
							<a href="#" class="btns float-right text-white px-lg-5 px-3  arrow_right" onclick="passForm('.f2');">Continuar</a>
						</div>
					</div>
				</section>
	<!--			paso2-->
				<section class="my-md-5 py-md-5 my-4 py-4 f2">
					<div class="menu_diagnostico">
						<ul class="list-unstyled d-flex justify-content-center">
							<li class="active mx-2">
								<a href="javascript:void(0);"> <span class="d-md-block d-none">Información empresa</span></a>
							</li>
							<li class="mx-2 active">
								<a href="javascript:void(0);"> <span class="d-md-block d-none">Información adicional</span></a>
							</li>
							<li class="mx-2">
								<a href="javascript:void(0);"><span class="d-md-block d-none">Cuestionario de diagnóstico</span></a>
							</li>
						</ul>
					</div>
					<h3 class="text-center my-md-5 my-4 pt-md-5 pb-3 px-3">Información adicional</h3>
					<div class="px-lg-5 px-3 new_form">
						<div class="row">
                            <?php
                                foreach ($cuestionarios['custom'] as $cuestionario) {
                                    if($cuestionario['orden'] == 1){
                                        if($cuestionario['required'] == 1){
                                            $required = 'required';
                                        }else{
                                            $required = '';
                                        }
                            ?>
							<div class="col-md-6 mb-4">
								<label class="d-block px-3"><?php echo $cuestionario['nombreCampo'] ?></label>
								<input type="<?php echo $cuestionario['codigo'] ?>" name="<?php echo $cuestionario['nombre_campo'] ?>"
                                    <?php echo $required?>>
							</div>
                            <?php }} ?>


							<div class="col-md-6">
								<div class="row">
                                    <?php
                                    foreach ($cuestionarios['custom'] as $cuestionario) {
                                        if($cuestionario['required'] == 1){
                                            $required = 'required';
                                        }else{
                                            $required = '';
                                        }

                                        if($cuestionario['orden'] == 2 || $cuestionario['orden'] == 3){
                                    ?>
                                    <?php
                                        if($cuestionario['codigo'] == 'select'){

                                            $arraySelect = json_decode($cuestionario['valores'] ,true);
                                    ?>
                                        <div class="col-md-6  mb-4">
                                            <label class="d-block px-3"><?php echo $cuestionario['nombreCampo'] ?></label>
                                            <select name="<?php echo $cuestionario['nombre_campo'] ?>" id="" <?php echo $required?> >
                                                <?php
                                                    foreach($arraySelect as $dbA) {
                                                ?>
                                                    <option value="<?php echo $dbA['value']?>"><?php echo $dbA['label']?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                    <?php }else{ ?>
                                            <div class="col-md-6 mb-4">
                                                <label class="d-block px-3"><?php echo $cuestionario['nombreCampo'] ?></label>
                                                <input type="<?php echo $cuestionario['codigo'] ?>"
                                                       name="<?php echo $cuestionario['nombre_campo'] ?>" <?php echo $required?>>
                                            </div>
                                    <?php } ?>
                                    <?php }} ?>
								</div>
							</div>

                            <?php
                            foreach ($cuestionarios['custom'] as $cuestionario) {
                                if($cuestionario['required'] == 1){
                                    $required = 'required';
                                }else{
                                    $required = '';
                                }
                            if($cuestionario['orden'] >= 4){
                            ?>
                            <?php
                                if($cuestionario['codigo'] == 'select'){
                                    $array = json_decode($cuestionario['valores'] ,true);
                            ?>
                                <div class="col-md-6 mb-4">
                                    <label class="d-block px-3"><?php echo $cuestionario['nombreCampo'] ?></label>
                                    <select name="<?php echo $cuestionario['nombre_campo'] ?>" id="" <?php echo $required?>>
                                        <?php
                                        foreach($arraySelect as $dbA) {
                                            ?>
                                            <option value="<?php echo $dbA['value']?>"><?php echo $dbA['label']?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            <?php
                                }else if($cuestionario['codigo'] == 'radio-group'){
                                    $check = json_decode($cuestionario['valores'] ,true);
                            ?>
                                    <label class="d-block px-3">Exporta actualmente:</label>
                                    <div class="px-3 mt-3 pt-1">
                                        <?php
                                        foreach($check as $checkSelect) {
                                            ?>
                                            <label>
                                                <input type="radio" value="<?php echo $checkSelect['value']?>" name="<?php echo $cuestionario['nombre_campo'] ?>" <?php echo $required?>>
                                                <span><?php echo $checkSelect['label']?></span>
                                            </label>
                                        <?php
                                        }
                                        ?>

                                    </div>
                            <?php }else{ ?>
                                    <div class="col-md-6 mb-4">
                                        <label class="d-block px-3"><?php echo $cuestionario['nombreCampo'] ?></label>
                                        <input type="<?php echo $cuestionario['codigo'] ?>" name="<?php echo $cuestionario['nombre_campo'] ?>" <?php echo $required?>>
                                    </div>
                            <?php } ?>
                            <?php }} ?>
						</div>
						<div class="px-lg-5 px-4 mx-5 mt-4">
							<hr>
						</div>
						<div class="arrows clearfix mt-5">
							<a href="#" class="btns float-left text-white px-lg-5 px-3  arrow_left" onclick="passForm('.f1');">Volver</a>
							<a href="#" class="btns float-right text-white px-lg-5 px-3  arrow_right" onclick="passForm('.f3');">Continuar</a>
						</div>
					</div>
				</section>
	<!--			paso 3-->
				<section class="my-md-5 py-md-5 my-4 py-4 f3">
					<div class="menu_diagnostico">
						<ul class="list-unstyled d-flex justify-content-center">
							<li class="active mx-2">
								<a href="javascript:void(0);"> <span class="d-md-block d-none">Información empresa</span></a>
							</li>
							<li class="mx-2 active">
								<a href="javascript:void(0);"> <span class="d-md-block d-none">Información adicional</span></a>
							</li>
							<li class="mx-2 active">
								<a href="javascript:void(0);"><span class="d-md-block d-none">Cuestionario de diagnóstico</span></a>
							</li>
						</ul>
					</div>
					<h3 class="text-center my-md-5 my-4 pt-md-5 pb-3 px-3">Cuestionario para diagnóstico de empresas</h3>
					<div class="px-lg-5 px-3 new_form">  
						<div class="row">
						  	<div class="col-12">  
								<?php							   
								 $array=[];
								 $display='';
								 $suma=0;
								foreach ($cuestionariosp3['custom'] as $cuestionariof3) {
										
									foreach ($cuestionariosp3['grupos'] as $key=>$grupos) {  
										  
										if($cuestionariof3['required'] == 1){
											$required = 'required';
										}else{
											$required = '';
										}
									 
										if (!in_array($cuestionariof3['grupo_formulario'], $array)) {
												array_push($array, $cuestionariof3['grupo_formulario']);
											if($suma === 0){
												$display='style="display:block"'
												?>
												
												<a href="javascript:void(0);" class="text-white p-3 d-block text-decoration-none link_acordeon active"><?php echo  $cuestionariof3['grupo_formulario']?></a>	
											<?php }else{
												$display='style="display:none"' ?>
												
												<a href="javascript:void(0);" class="text-white p-3 d-block text-decoration-none link_acordeon"><?php echo $cuestionariof3['grupo_formulario']?></a>
											<?php }?>											
										 	
										<?php }?>	 
										 	
										<div class="mt-4 radius container_question p-lg-4 p-3" style="display:block">
											<div>										 
											<?php if(!empty($cuestionariof3['descripcion'])){?><b><?php echo $cuestionariof3['nombreCampo']; ?></b><br><br><?php }	?>												 
											<?php if(!empty($cuestionariof3['descripcion'])){ ?> <div style=""> <?php echo  $cuestionariof3['descripcion'];?></div> <?php }	?>											 
											</div>
											<?php   if( $cuestionariof3['valores'] != 'N/A'){?>	
												<div class="bg-purple radius p-lg-4 p-3 mt-4 c_options_question">
													<?php if($cuestionariof3['codigo'] == 'radio-group'){ 
															include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/diagnostico/forms/radio-group.php");
														}elseif($cuestionariof3['codigo'] == 'text'){
															include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/diagnostico/forms/text.php");
														} ?>
												</div>
											<?php }?>											
										</div> 
									  
									<?php $suma++;  break;	} ?>
								<?php }?>									
							</div>
						</div>
						<div class="px-lg-5 px-4 mx-5 mt-4">
							<hr>
						</div>
						<div class="arrows clearfix mt-5">
							<a href="#" class="btns float-left text-white px-lg-5 px-3  arrow_left" onclick="passForm('.f2');">Volver</a>
							<button type="submit" id="save_diagnostico" class="btns float-right text-white px-lg-5 px-3  arrow_right">Finalizar</button>
						</div>
					</div>
				</section>
			</form>
		</div>
	</main>


    <?php
        include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/modal/errorNit.php");
        include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/modal/error.php");
        include($_SERVER['DOCUMENT_ROOT']."/espiraBogota/wp-content/themes/tevent/registro/modal/loading.php");
    ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="../wp-content/themes/tevent/diagnostico/_/scripts/functions.js"></script>
	<!-- #main -->
<?php get_footer(); ?>