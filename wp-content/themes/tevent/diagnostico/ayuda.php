<?php
  get_header();
  /*
  Template Name: landing-ayuda
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
						<li class=""><a href="../diagnostico/bienvenida">Bienvenida</a></li>
						<li class=""><a href="diagnostico/">Diagnóstico</a></li>
						<li class=""><a href="mi-cuenta/">Mi cuenta</a></li>
						<li class=""><a href="../diagnostico/ayuda/"  class="active">Ayuda</a></li>
						<li class=""><a href="../salir/">Salir</a></li>
					</ul>
		</nav>
		<div class="sections">
			<form action="">
				<!-- fase 1 -->
				<section class="active my-md-5 py-md-5 my-4 py-4 f1">
					<div class="menu_fases">
						<ul class="list-unstyled d-flex justify-content-center">
							<li class="active mx-2">
								<a href="javascript:void(0);"> <span class="d-md-block d-none">Fase 1</span></a>
							</li>
							<li class="mx-2">
								<a href="#" onclick="passForm('.f2');">  <span class="d-md-block d-none">Fase 2</span></a>
							</li>
							<li class="mx-2">
								<a href="#" onclick="passForm('.f3');"> <span class="d-md-block d-none">Fase 3</span></a>
							</li>
							<li class="mx-2">
								<a href="#" onclick="passForm('.f4');"> <span class="d-md-block d-none">Fase 4</span></a>
							</li>
						</ul>
					</div>
					<h3 class="text-center my-md-5 my-4 pt-md-5 pb-3 px-3">Postúlate</h3>
					<div class="px-lg-5 px-3 new_form">
						<div class="row">
							<div class="col-md-12 mb-12">
								<p>Preguntas fase 1</p>
							</div>
						</div>
						<div class="px-lg-5 px-4 mx-5 mt-4">
							<hr>
						</div>
						<div class="arrows clearfix mt-5">
							<a href="#" class="btns float-right text-white px-lg-5 px-3  arrow_right" onclick="passForm('.f2');">Fase 2</a>
						</div>
					</div>
				</section>
				<!-- fase 2-->
				<section class="my-md-5 py-md-5 my-4 py-4 f2">
					<div class="menu_fases">
						<ul class="list-unstyled d-flex justify-content-center">
							<li class="mx-2">
								<a href="#" onclick="passForm('.f1');"> <span class="d-md-block d-none">Fase 1</span></a>
							</li>
							<li class="mx-2 active">
								<a href="javascript:void(0);"><span class="d-md-block d-none">Fase 2</span></a>
							</li>
							<li class="mx-2">
								<a href="#" onclick="passForm('.f3');"><span class="d-md-block d-none">Fase 3</span></a>
							</li>
							<li class="mx-2">
								<a href="#" onclick="passForm('.f4');"> <span class="d-md-block d-none">Fase 4</span></a>
							</li>
						</ul>
					</div>
					<h3 class="text-center my-md-5 my-4 pt-md-5 pb-3 px-3">Preséntate ante expertos</h3>
					<div class="px-lg-5 px-3 new_form">
						<div class="row">
							<div class="col-md-12 mb-12">
								<p>Preguntas fase 2</p>
							</div>
						</div>
						<div class="px-lg-5 px-4 mx-5 mt-4">
							<hr>
						</div>
						<div class="arrows clearfix mt-5">
							<a href="#" class="btns float-left text-white px-lg-5 px-3  arrow_left" onclick="passForm('.f1');">Fase 1</a>
							<a href="#" class="btns float-right text-white px-lg-5 px-3  arrow_right" onclick="passForm('.f3');">Fase 3</a>
						</div>
					</div>
				</section>
				<!-- fase 3 -->
				<section class="my-md-5 py-md-5 my-4 py-4 f3">
					<div class="menu_fases">
						<ul class="list-unstyled d-flex justify-content-center">
							<li class="mx-2">
								<a href="#" onclick="passForm('.f1');"> <span class="d-md-block d-none">Fase 1</span></a>
							</li>
							<li class="mx-2">
								<a href="#" onclick="passForm('.f2');"> <span class="d-md-block d-none">Fase 2</span></a>
							</li>
							<li class="mx-2 active">
								<a href="javascript:void(0);"><span class="d-md-block d-none">Fase 3</span></a>
							</li>
							<li class="mx-2">
								<a href="#" onclick="passForm('.f4');"><span class="d-md-block d-none">Fase 4</span></a>
							</li>
						</ul>
					</div>
					<h3 class="text-center my-md-5 my-4 pt-md-5 pb-3 px-3">Reinventa tu negocio</h3>
					<div class="px-lg-5 px-3 new_form">
						<div class="row">
							<div class="col-md-12 mb-12">
								<p>Preguntas fase 3</p>
							</div>
						</div>
						<div class="px-lg-5 px-4 mx-5 mt-4">
							<hr>
						</div>
						<div class="arrows clearfix mt-5">
							<a href="#" class="btns float-left text-white px-lg-5 px-3  arrow_left" onclick="passForm('.f2');">Fase 2</a>
							<a href="#" class="btns float-right text-white px-lg-5 px-3  arrow_right" onclick="passForm('.f4');">Fase 4</a>
						</div>
					</div>
				</section>
				<!-- fase 4 -->
				<section class="my-md-5 py-md-5 my-4 py-4 f4">
					<div class="menu_fases">
						<ul class="list-unstyled d-flex justify-content-center">
							<li class="mx-2">
								<a href="#" onclick="passForm('.f1');"> <span class="d-md-block d-none">Fase 1</span></a>
							</li>
							<li class="mx-2">
								<a href="#" onclick="passForm('.f2');"> <span class="d-md-block d-none">Fase 2</span></a>
							</li>
							<li class="mx-2">
								<a href="#" onclick="passForm('.f3');"><span class="d-md-block d-none">Fase 3</span></a>
							</li>
							<li class="mx-2 active">
								<a href="javascript:void(0);"><span class="d-md-block d-none">Fase 4</span></a>
							</li>
						</ul>
					</div>
					<h3 class="text-center my-md-5 my-4 pt-md-5 pb-3 px-3">Conéctate con el mercado</h3>
					<div class="px-lg-5 px-3 new_form">
						<div class="row">
							<div class="col-md-12 mb-12">
								<p>Preguntas fase 4</p>
							</div>
						</div>
						<div class="px-lg-5 px-4 mx-5 mt-4">
							<hr>
						</div>
						<div class="arrows clearfix mt-5">
							<a href="#" class="btns float-left text-white px-lg-5 px-3  arrow_left" onclick="passForm('.f3');">Fase 3</a>
							<a href="/salir" class="btns float-right text-white px-lg-5 px-3  arrow_right">Salir</a>
						</div>
					</div>
				</section>
			</form>
		</div>
	</main>



<script src="<?php echo get_template_directory_uri(); ?>/diagnostico/_/scripts/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/diagnostico/_/scripts/functions.js"></script>
	<!-- #main -->
<?php get_footer(); ?>