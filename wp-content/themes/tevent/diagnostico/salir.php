<?php
  get_header();
  /*
  Template Name: landing-salir
  */

?>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/diagnostico/_/styles/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/diagnostico/_/styles/main.css">



	<?php if(isset($_SESSION['token'])) {?>
        <script> 
          jQuery('#menu-item-976').css('display','none');  
          jQuery('#menu-item-1683').css('display','none');  
        </script>

    <?php }else{
         echo '<script type="text/javascript">
         window.location.href="iniciar-sesion/";
         </script>';
	 } ?>

	<a href="javascript:void(0);" class="ico_menu d-block d-xl-none"></a>
	<main class="container_full mx-auto px-lg-4 px-3">
		<nav class="menu_new h-100 pb-3">
			<a href="javascript:void(0);" class="d-lg-none px-lg-4 px-3 tit_menu radius d-block">Selecciona una opción</a>
			<div class="row align-content-center h-100 no-gutters">
				<div class="c_menu col-12">
					<ul class="list-unstyled  mb-0">
						<li class=""><a href="../diagnostico/bienvenida">Bienvenida</a></li>
						<li class=""><a href="diagnostico/" >Diagnóstico</a></li>
						<li class=""><a href="mi-cuenta/">Mi cuenta</a></li>
						<li class=""><a href="../diagnostico/ayuda/">Ayuda</a></li>
						<li class=""><a href="../salir/" class="active">Salir</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="sections">
			<form action="">
				<!--paso1-->
				<section class="active my-md-5 py-md-5 my-4 py-4 f1">
					<div class="text-center my-md-2 my-4 pt-md-2 pb-3 px-3">
						<img class="logo_entorno" src="http://entornobogota.com/wp-content/uploads/2020/07/logo_entorno_cut.png">
					</div>
					<div class="px-lg-5 px-3 new_form">
						<div class="row">
							<div class="col-md-12 mb-12">
								<p>
									<!-- Button trigger modal -->
							<!--   	<button  type="button" id="abrirmodal"class="btn btn-primary" data-toggle="modal" data-target="#modalnuevo">
									Abrir modal
									</button>   -->

									<!-- Modal -->
									<div class="modal fade in" id="modalnuevo" tabindex="-1" style="display: block;" role="dialog" aria-labelledby="exampleModalCenterTitle">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header" style="text-align:center;">
													<h5 class="modal-title" id="exampleModalLongTitle">Mensaje de confirmación</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:none;">
													<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body" align="center" style="text-align:center;">
													<p>¿Está seguro que desea salir?</p>
												</div>
												<div align="center" class="modal-footer" style="text-align:center;">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
													<a type="button" class="btn btn-primary" href="../../wp-content/themes/tevent/login/api/logout.php">Salir</a>
												</div>
											</div>
										</div>
									</div>
								</p>
							</div>
						</div>
						<div class="px-lg-5 px-4 mx-5 mt-4">
							<hr>
						</div>
						<div class="arrows clearfix mt-5">
							<a href="/diagnostico" class="btns float-right text-white px-lg-5 px-3  arrow_right">Diagnóstico</a>
						</div>
					</div>
				</section>
			</form>
		</div>
	</main>
	<?php
        include($_SERVER['DOCUMENT_ROOT']."/wp-content/themes/tevent/registro/modal/errorNit.php");
        include($_SERVER['DOCUMENT_ROOT']."/wp-content/themes/tevent/registro/modal/error.php");
        include($_SERVER['DOCUMENT_ROOT']."/wp-content/themes/tevent/registro/modal/loading.php");
    ?>


<script src="<?php echo get_template_directory_uri(); ?>/diagnostico/_/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../../wp-content/themes/tevent/diagnostico/_/scripts/functions.js"></script>
	<!-- #main -->
	<script> 
	$(function(){
		console.log('hola1');
	 
			console.log('hola');
		$("#modalnuevo").modal({
            backdrop: "static", //remove ability to close modal with click
            keyboard: false, //remove option to close with keyboard
            show: true //Display loader!
      
        });
        
	});
        
    </script>
    
    
<?php get_footer(); ?>