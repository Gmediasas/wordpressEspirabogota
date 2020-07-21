<?php
  get_header();
  /*
  Template Name: landing-bienvenida
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
        }
    ?>


	<a href="javascript:void(0);" class="ico_menu d-block d-xl-none"></a>
	<main class="container_full mx-auto px-lg-4 px-3">
		<nav class="menu_new h-100 pb-3">
			<a href="javascript:void(0);" class="d-lg-none px-lg-4 px-3 tit_menu radius d-block">Selecciona una opción</a>
			<div class="row align-content-center h-100 no-gutters">
				<div class="c_menu col-12">
				<ul class="list-unstyled  mb-0">
						<li class=""><a href="../diagnostico/bienvenida"  class="active">Bienvenida</a></li>
						<li class=""><a href="diagnostico/">Diagnóstico</a></li>
						<li class=""><a href="mi-cuenta/">Mi cuenta</a></li>
						<li class=""><a href="../diagnostico/ayuda/">Ayuda</a></li>
						<li class=""><a href="../salir/">Salir</a></li>
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
								<p>Bienvenido a Entorno, el nuevo programa de la Alcaldía Mayor de Bogotá liderado por la Secretaría de Desarrollo Económico en alianza con Tecnalia Colombia,  que brinda a Mipymes de la capital asesorías especializadas en oportunidades de sostenibilidad, reconfiguración y fortalecimiento de modelos negocio, para  mejorar su capacidad de adaptación y flexibilidad frente a entornos cambiantes.</p>
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



<script src="<?php echo get_template_directory_uri(); ?>/diagnostico/_/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../../wp-content/themes/tevent/diagnostico/_/scripts/functions.js"></script>
	<!-- #main -->
<?php get_footer(); ?>