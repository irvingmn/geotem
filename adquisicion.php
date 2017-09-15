<?php $pagename = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Geotem - Adquisicion</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- -->

		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />

		<!-- REVOLUTION SLIDER -->
		<link href="assets/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
		<style>
    		@font-face{
				font-family: 'din';
				src:url('assets/fonts/DINPro-CondMedium.otf');
			}
		</style>
	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">



		<!-- wrapper -->
		<div id="wrapper">
			<?php include 'inc/header.php'; ?>



			<!-- REVOLUTION SLIDER -->
			<section id="slider" class="slider fullwidthbanner-container roundedcorners">
				<!--
					Navigation Styles:
					
						data-navigationStyle="" theme default navigation
						
						data-navigationStyle="preview1"
						data-navigationStyle="preview2"
						data-navigationStyle="preview3"
						data-navigationStyle="preview4"
						
					Bottom Shadows
						data-shadow="1"
						data-shadow="2"
						data-shadow="3"
						
					Slider Height (do not use on fullscreen mode)
						data-height="300"
						data-height="350"
						data-height="400"
						data-height="450"
						data-height="500"
						data-height="550"
						data-height="600"
						data-height="650"
						data-height="700"
						data-height="750"
						data-height="800"
				-->
				<div class="fullwidthbanner" data-height="400">
					<ul class="hide">

						<!-- SLIDE  -->
						<li data-transition="slideup" data-slotamount="1" data-masterspeed="1000" data-saveperformance="on"  data-title="Slide">

							<img src="assets/images/1x1.png" data-lazyload="img/servicios/Adqui.png" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="120" data-bgpositionend="center top" />

							<div style="font-size: 50px;"class="tp-caption very_large_text lfb ltt tp-resizeme"
								data-x="right" data-hoffset="-350"
								data-y="center" data-voffset="-50"
								data-speed="600"
								data-start="800"
								data-easing="Power4.easeOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="500"
								data-endeasing="Power4.easeIn">
								Adquisición de datos
							</div>


						</li>

					</ul>
					<div class="tp-bannertimer"></div>
				</div>
			</section>
			<!-- /REVOLUTION SLIDER -->

			<!-- -->
			<section class="padding-top-30">
				<div class="container margin-bottom-20 ">

					<!-- CALLOUT -->
					<div class="callout alert alert-default">

						<div class="row">

							<div class="col-md-12 col-sm-12"><!-- left text -->
								<p class="lead size-20">Resultado directo de la planeación y estrategia de campo, el siguiente paso consiste en la adquisición de los datos geofísicos, es decir una serie de mediciones discretas con el instrumental geofísico apropiado  (requerimientos de precisión), generalmente la obtención de dichas mediciones se lleva a cabo en perfiles de medición a intervalos regulares (en concordancia con la teoría de muestreo de información digital) cada uno de estos puntos recibe el nombre de estación o sondeo en dependencia de la técnica geofísica implementada.</p>
							</div><!-- /left text -->

						</div>

					</div>
					<!-- /CALLOUT -->
				</div>


				<div class="container">

					<!-- CALLOUT -->
					<div class="callout alert alert-default">

						<div class="row">

							<div class="col-md-12 col-sm-12"><!-- left text -->
								<p class="lead size-20">Durante esta etapa y con el fin de asegurar la calidad de registro en cada una de las lecturas se lleva a cabo un pre-procesado de la información asegurando mejorar la relación señal-ruido en nuestras mediciones, ejemplo de esto es la repetición y promediado de las lecturas anulando de esta manera aquellas contribuciones de ruido aleatorio y manteniendo una mayor estadística en los datos, que a nivel de proceso será requerida.</p>
							</div><!-- /left text -->

						</div>

					</div>
					<!-- /CALLOUT -->
				</div>
			</section>
			<!-- / -->


			 <!-- FOOTER -->
	        <?php include 'inc/footer.php'; ?>
	        <!-- /FOOTER -->



		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>

		<!-- REVOLUTION SLIDER -->
		<script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="assets/js/view/demo.revolution_slider.js"></script>

		<!-- SCRIPTS -->
		<script type="text/javascript" src="assets/js/scripts.js"></script>
		
	</body>
</html>