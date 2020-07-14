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

$apiUrlCuestionario = $url.'/get_edit_consult_form/15';
$curlCuestionario = curl_init($apiUrlCuestionario);
curl_setopt($curlCuestionario, CURLOPT_ENCODING, "");
curl_setopt($curlCuestionario, CURLOPT_HTTPHEADER, $postToken);
curl_setopt($curlCuestionario, CURLOPT_RETURNTRANSFER, true);
$jsonCuestionario = curl_exec($curlCuestionario);
$cuestionarios = json_decode($jsonCuestionario, true);
curl_close($curlCuestionario);

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
			<form action="">
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

                            ?>
							<div class="col-md-6 mb-4">
								<label class="d-block px-3"><?php echo $cuestionario['nombreCampo'] ?></label>
								<input type="<?php echo $cuestionario['codigo'] ?>" name="<?php echo $cuestionario['nombre_campo'] ?>">
							</div>
                            <?php }} ?>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-6  mb-4">
										<label class="d-block px-3">Tipo de documento</label>
										<select name="" id="">
											<option value="">-Selecciona</option>
										</select>
									</div>
									<div class="col-md-6  mb-4">
										<label class="d-block px-3">Número de documento</label>
										<input type="text">
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-4">
								<label class="d-block px-3">Expedida en la ciudad:</label>
								<input type="text">
							</div>
							<div class="col-md-6 mb-4">
								<label class="d-block px-3">País:</label>
								<input type="text">
							</div>
							<div class="col-md-6 mb-4">
								<label class="d-block px-3">Matrícula Cámara de Comercio:</label>
								<input type="text">
							</div>
							<div class="col-md-6 ">
								<div class="row">
									<div class="col-md-6 mb-4">
										<label class="d-block px-3">Fecha de constitución:</label>
										<input type="date">
									</div>
									<div class="col-md-6 mb-4">
										<label class="d-block px-3">Teléfono de la empresa</label>
										<input type="text">
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-4">
								<label class="d-block px-3">Correo electrónico:</label>
								<input type="text">
							</div>
							<div class="col-md-6 mb-4">
								<label class="d-block px-3">Activos Totales a diciembre de 2019:</label>
								<input type="text">
							</div>
							<div class="col-md-6 mb-4">
								<label class="d-block px-3">Valor ventas Totales a diciembre de 2019:</label>
								<input type="text">
							</div>
							<div class="col-md-6 mb-4">
								<label class="d-block px-3">Exporta actualmente:</label>
								<div class="px-3 mt-3 pt-1">
									<label>
										<input type="radio">
										<span>Si</span>
									</label>
									<label class="pl-4">
										<input type="radio">
										<span>No</span>
									</label>
								</div>
							</div>
							<div class="col-md-6 mb-4">
								<label class="d-block px-3">Porcentaje de ventas en el exterior:</label>
								<input type="text">
							</div>
							<div class="col-md-6 mb-4">
								<label class="d-block px-3">Países destino de las exportaciones:</label>
								<input type="text">
							</div>
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
							  <h4 class="text-white p-3">1. NIVEL DE MADUREZ DIGITAL DE LA EMPRESA</h4>
							  <div class="mt-4 radius container_question p-lg-4 p-3">
								  <div>
									  <b>1.1. Nivel de madurez digital de la empresa</b><br><br>
									  ¿Cuenta con alguna herramienta digital que apoye el desarrollo de actividades fundamentales para la subsistencia de la empresa? Por favor indicar a cuál de las siguientes opciones corresponde:<br><br>
									
									  <b><i>Actividades fundamentales para la subsistencia de la empresa:</i></b> (por ejemplo: producción, venta de producto, prestación del servicio.)<br><br>
									
									  Dentro de herramienta digital considerar todo tipo de sistemas especializados y/o apps.<br><br>
									
									  Los  <b><i>Sistemas especializados</i></b> corresponden a software instalado y/o online, que está diseñado para apoyar un proceso específico, a través del cual se registra información, se registran reportes, se analizan datos, etc. Algunos ejemplos son: ERP, CRM, BPM, MES, etc.
								  </div>
								  <div class="bg-purple radius p-lg-4 p-3 mt-4 c_options_question">
									  <label>
										  <input type="radio">
										  <p>No cuenta con herramienta digital.</p>
									  </label>
									  <label>
										  <input type="radio">
										  <p>Sí, herramientas ofimáticas usadas de forma básica (Word, Excel, PowerPoint…)</p>
									  </label>
									  <label>
										  <input type="radio">
										  <p>Sí, se hace uso de Apps especializadas y Herramientas ofimáticas usadas de forma avanzada y básica.</p>
									  </label>
									  <label>
										  <input type="radio">
										  <p>Sí, además de la opción anterior se hace uso de Sistemas especializados.</p>
									  </label>
									  <label>
										  <input type="radio">
										  <p>Sí, además de las opciones anteriores se hace uso de Sistemas especializados interconectados con otros sistemas de la empresa o bases de datos de la empresa. La información es analizada para tomar decisiones que impactan en el comportamiento de la empresa.</p>
									  </label>
								  </div>
							  </div>
						  </div>
							<div class="col-12 mt-4">
								<h4 class="text-white p-3">2. Producto / Servicio que genera principalmente los ingresos</h4>
								<div class="mt-4 radius container_question p-lg-4 p-3">
									<div>
										<b>3.1. Producto/servicio que genera principalmente los ingresos de su compañía (desde el mes de febrero 2020 – Actualidad)</b><br><br>
										Considerando el siguiente periodo, mes de febrero 2020 – Actualidad: ¿Cuál es el producto que le genera más ingresos a la organización?
									</div>
									<div class="bg-purple radius p-lg-4 p-3 mt-4 c_options_question">
										<div class="row">
											<div class="col-md-6 mb-4">
												<label class="d-block px-3">Producto fabricado</label>
												<input type="text" placeholder="¿Cuál?">
											</div>
											<div class="col-md-6 mb-4">
												<label class="d-block px-3">Venta de servicio</label>
												<input type="text" placeholder="¿Qué servicio?">
											</div>
											<div class="col-md-6 mb-4">
												<label class="d-block px-3">Comercialización</label>
												<input type="text" placeholder="¿Qué tipo de productos?">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="px-lg-5 px-4 mx-5 mt-4">
							<hr>
						</div>
						<div class="arrows clearfix mt-5">
							<a href="#" class="btns float-left text-white px-lg-5 px-3  arrow_left" onclick="passForm('.f2');">Volver</a>
							<a href="#" class="btns float-right text-white px-lg-5 px-3  arrow_right">Finalizar</a>
						</div>
					</div>
				</section>
			</form>
		</div>
	</main>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="../wp-content/themes/tevent/diagnostico/_/scripts/functions.js"></script>
	<!-- #main -->
<?php get_footer(); ?>