<?php $pagename = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Geotem - Historia</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- -->

		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />

		<style>
			.tl-timenav {
		    width: 100%;
		    background-color: olive;
		    position: relative;
		    overflow: hidden;
		    border-top: 1px solid olive;
		}
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
			<section class="page-header page-header-xlg parallax " style="background-image:url('img/history.jpg');background-position-y:-30px;">
				<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<h1>Historia</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="index.php">Inicio</a></li>
						<li class="active">Historia</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->

			<!-- -->
			<section>
				<div class="container">

					<h4>Desde su fundación GEOTEM Ingeniería S.A. de C.V. se ha distinguido por su carácter innovador, ejemplo de ello es en el año 1992 cuando el Ing. Carlos Pita (actual Director de GEOTEM Ingeniería) en compañía del Ing. Jaime Ruiz† (Ex Director de CIGSA) introdujeron en México un nuevo servicio de exploración denominado Transitorio Electromagnético en el Dominio del Tiempo (TDEM). Pero no fue hasta 1994 cuando alcanzaron su máximo potencial en el Proyecto GEOTÉRMICO “Exploración geoeléctrica con sondeos TDEM en la región del volcán Sanganguey – Navajas, Estado de Nayarit”, proyecto realizado para Comisión Federal de Electricidad (CFE). Hoy en día Geotem Ingenieria cuenta con un poco mas de 20,000 sondeos TDEM a lo largo y ancho del territorio nacional para una variedad de objetivos.</h4>
					
				
					<div class="tl-timenav"></div>

					<div class="tl-timenav">
					<iframe src='//cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1wF42riRkrD2cwUTMj7I1sv_XMlld15KorEnsyTBovgc&font=Fjalla-Average&lang=es&initial_zoom=2&height=650' width='100%' height='650' frameborder='0'></iframe>
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
		
	</body>
</html>