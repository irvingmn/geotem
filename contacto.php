<?php $pagename = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Geotem -Conacto</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
		
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

			<section class="page-header page-header-xs dark">
				<div class="container">

					<h1>CONTACTO</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Contacto</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->




			<!-- -->
			<section>

				<!-- 
				Available heights
					height-100
					height-150
					height-200
					height-250
					height-300
					height-350
					height-400
					height-450
					height-500
					height-550
					height-600
				-->
				<iframe class="contact-over-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10652.617872114877!2d-99.14320361713582!3d19.270657464338655!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xee0bf79ba70f2895!2sGeotem+Ingenier%C3%ADa+S.A.+de+C.V.!5e0!3m2!1ses-419!2smx!4v1468612646199" width="100%" height="700" frameborder="0" style="border:0" allowfullscreen></iframe>			


				<div class="container">

					<div class="contact-over-box pull-right">


						
						<!-- INFO -->
						<div class="col-md-12 col-sm-12" style="zoom:1.3;">

							<h2>Contactanos </h2>
							<p>
								<span class="block"><strong><i class="fa fa-map-marker"></i>Dirección:</strong> Alhelí Mz.7 Lt.13-A, Col. Ejidos San Pedro Martir, C.P. 14640, Tlalpan, México D.F.</span>
								<hr />
								<span class="block"><strong><i class="fa fa-phone"></i> Telefonos:</strong> <a href="tel: +525554856032">+52 55 54 85 60 32</a></span>
								</strong> <a href="tel: +525554851437">+52 55 54 85 14 37</a></span>
								<hr />
								<span class="block"><strong><i class="fa fa-envelope"></i>Email:</strong> <a href="mailto:cpita@geotem.com.mx">cpita@geotem.com.mx</a> <a href="mailto:admin@geotem.com.mx">admin@geotem.com.mx</a></span>
							</p>
							<hr/>
						<!-- Social Icons -->
							<div class="margin-top-20">
								<a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

							</div>
							<!-- /Social Icons -->

						</div>
						<!-- /INFO -->


					</div>
				
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

		<script type="text/javascript" src="assets/js/scripts.js"></script>
		
		<!-- 
			GMAP.JS 
			http://hpneo.github.io/gmaps/
		-->
		<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="assets/plugins/gmaps.js"></script>
		<script type="text/javascript">

			jQuery(document).ready(function(){

				/**
					@BASIC GOOGLE MAP
				**/
				var map2 = new GMaps({
					div: '#map2',
					lat: 19.271708, 
					lng: -99.155228,
					scrollwheel: false

				});

				var marker = map2.addMarker({
					lat: 19.271708, 
					lng: -99.155228,
					title: 'Geotem Ingeniería S.A de C.V.'
				});

			});

		</script>
	</body>
</html>