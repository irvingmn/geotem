<?php $pagename = basename($_SERVER['PHP_SELF']); ?>

<?php $pagename = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Geotem - Electromagnéticos</title>
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
    		@font-face{
				font-family: 'din';
				src:url('assets/fonts/DINPro-CondMedium.otf');
			}
		</style>
	</head>

	<body class="smoothscroll enable-animation">



		<!-- wrapper -->
		<div id="wrapper">

			<?php include 'inc/header.php'; ?>
			<section class="page-header dark page-header-xs">
				<div class="container">

					<h1>PORTFOLIO</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Portfolio</a></li>
						<li class="active">Grid - 3 Columns</li>
					</ol><!-- /breadcrumbs -->

					<!-- page tabs -->
					<ul class="page-header-tabs list-inline">
						<li><a href="portfolio-grid-3-columns.php">With Gutter</a></li>
						<li><a href="portfolio-grid-3-columns-gutter-title.php">Gutter + Title</a></li>
						<li><a href="portfolio-grid-3-columns-nogutter.php">No Gutter</a></li>
						<li><a href="portfolio-grid-3-columns-title.php">No Gutter + Title</a></li>
						<li class="active"><a href="portfolio-grid-3-columns-overlay.php">Title Overlay</a></li>
						<li><a href="portfolio-grid-3-columns-over.php">Title Over</a></li>
						<li><a href="portfolio-grid-3-columns-fullwidth.php">Fullwidth</a></li>
						<li><a href="portfolio-grid-3-columns-fullwidth-title.php">Fullwidth + Title</a></li>
					</ul><!-- /page tabs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->

				<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">

							<!-- header modal -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
							</div>

							<!-- body modal -->
							<div class="modal-body">
								<section class="page-header page-header-xlg parallax parallax-3" style="background-image:url('assets/images/demo/1200x800/17-min.jpg')">
									<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

									<div class="container">

										<h1>PAGE TITLE</h1>
										<span class="font-lato size-18 weight-300">We believe in Simple & Creative</span>

										<!-- breadcrumbs -->
										<ol class="breadcrumb">
											<li><a href="#">Home</a></li>
											<li><a href="#">Features</a></li>
											<li class="active">Page Title</li>
										</ol><!-- /breadcrumbs -->

									</div>
								</section>
							</div>

						</div>
					</div>
				</div>




			<!-- -->
			<section>
				<div class="container">

					<div id="portfolio" class="portfolio-gutter portfolio-title-over">

						<ul class="nav nav-pills mix-filter margin-bottom-60">
							<li data-filter="all" class="filter active"><a href="#">All</a></li>
							<li data-filter="development" class="filter"><a href="#">Development</a></li>
							<li data-filter="photography" class="filter"><a href="#">Photography</a></li>
							<li data-filter="design" class="filter"><a href="#">Design</a></li>
						</ul>


						<div class="row mix-grid">


							<div class="col-md-4 col-sm-4 mix photography"><!-- item -->

								<div class="item-box">
									<figure>
										<div class="item-hover">
											<span class="overlay azul"></span>
											<span class="inner">

												<!-- details -->
												<a class="ico-rounded "data-toggle="modal" data-target=".bs-example-modal-lg">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>

											<!-- overlay title -->
											<div class="item-box-overlay-title" style="background-color: rgba(3, 169, 244, 0.37);">
												<h3>AMT/MT</h3>
												<ul class="list-inline categories nomargin">
													<li><a href="#">Magnetotelúrico / Audio-Magnetotelúrico</a></li>
												</ul>
											</div><!-- /overlay title -->

										</div>

										<img class="img-responsive" src="img/metodos/emg/AMT-MT.png" width="600" height="399" alt="">
									</figure>
								</div>

							</div><!-- /item -->

							<div class="col-md-4 col-sm-4 mix photography"><!-- item -->

								<div class="item-box">
									<figure>
										<div class="item-hover">
											<span class="overlay azul"></span>
											<span class="inner">

												<!-- details -->
												<a class="ico-rounded "data-toggle="modal" data-target=".bs-example-modal-lg">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>

											<!-- overlay title -->
											<div class="item-box-overlay-title" style="background-color: rgba(3, 169, 244, 0.37);">
												<h3>CSAMTv</h3>
												<ul class="list-inline categories nomargin">
													<li><a>Audio Magnetotelúrico de Fuente Controlada Vectorial</a></li>
												</ul>
											</div><!-- /overlay title -->

										</div>

										<img class="img-responsive" src="img/metodos/emg/CSAMTv.png" width="600" height="399" alt="">
									</figure>
								</div>
							</div><!-- /item -->


							<div class="col-md-4 col-sm-4 mix photography"><!-- item -->

								<div class="item-box">
									<figure>
										<div class="item-hover">
											<span class="overlay azul"></span>
											<span class="inner">

												<!-- details -->
												<a class="ico-rounded "data-toggle="modal" data-target=".bs-example-modal-lg">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>

											<!-- overlay title -->
											<div class="item-box-overlay-title" style="background-color: rgba(3, 169, 244, 0.37);">
												<h3>CSAMTe</h3>
												<ul class="list-inline categories nomargin">
													<li><a>Audio Magnetotelúrico de Fuente Controlada Escalar</a></li>
												</ul>
											</div><!-- /overlay title -->

										</div>

										<img class="img-responsive" src="img/metodos/emg/CSAMTe.png" width="600" height="399" alt="">
									</figure>
								</div>

							</div><!-- /item -->

							<div class="col-md-4 col-sm-4 mix photography"><!-- item -->

								<div class="item-box">
									<figure>
										<div class="item-hover">
											<span class="overlay azul"></span>
											<span class="inner">

												<!-- details -->
												<a class="ico-rounded "data-toggle="modal" data-target=".bs-example-modal-lg">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>

											<!-- overlay title -->
											<div class="item-box-overlay-title" style="background-color: rgba(3, 169, 244, 0.37);">
												<h3>TEM</h3>
												<ul class="list-inline categories nomargin">
													<li><a>Transitorio Electromagnético en el Dominio del Tiempo</a></li>
												</ul>
											</div><!-- /overlay title -->

										</div>

										<img class="img-responsive" src="img/metodos/emg/TEM.png" width="600" height="399" alt="">
									</figure>
								</div>
							</div><!-- /item -->


							<div class="col-md-4 col-sm-4 mix photography"><!-- item -->

								<div class="item-box">
									<figure>
										<div class="item-hover">
											<span class="overlay azul"></span>
											<span class="inner">

												<!-- details -->
												<a class="ico-rounded "data-toggle="modal" data-target=".bs-example-modal-lg">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>

											<!-- overlay title -->
											<div class="item-box-overlay-title" style="background-color: rgba(3, 169, 244, 0.37);">
												<h3>RMT</h3>
												<ul class="list-inline categories nomargin">
													<li><a>Radio-Magnetotelúrico</a></li>
												</ul>
											</div><!-- /overlay title -->

										</div>

										<img class="img-responsive" src="img/metodos/emg/RMT.png" width="600" height="399" alt="">
									</figure>
								</div>

							</div><!-- /item -->

							<div class="col-md-4 col-sm-4 mix photography"><!-- item -->

								<div class="item-box">
									<figure>
										<div class="item-hover">
											<span class="overlay azul"></span>
											<span class="inner">

												<!-- details -->
												<a class="ico-rounded "data-toggle="modal" data-target=".bs-example-modal-lg">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>

											<!-- overlay title -->
											<div class="item-box-overlay-title" style="background-color: rgba(3, 169, 244, 0.37);">
												<h3>CMD</h3>
												<ul class="list-inline categories nomargin">
													<li><a>Conductividad Electromagnética</a></li>
												</ul>
											</div><!-- /overlay title -->

										</div>

										<img class="img-responsive" src="img/metodos/emg/CMD.png" width="600" height="399" alt="">
									</figure>
								</div>

							</div><!-- /item -->

							<div class="col-md-4 col-sm-4 mix photography"><!-- item -->

								<div class="item-box">
									<figure>
										<div class="item-hover">
											<span class="overlay azul"></span>
											<span class="inner">

												<!-- details -->
												<a class="ico-rounded "data-toggle="modal" data-target=".bs-example-modal-lg">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>

											<!-- overlay title -->
											<div class="item-box-overlay-title" style="background-color: rgba(3, 169, 244, 0.37);">
												<h3>GPR</h3>
												<ul class="list-inline categories nomargin">
													<li><a>Georadar de Penetración Terrestre</a></li>
												</ul>
											</div><!-- /overlay title -->

										</div>

										<img class="img-responsive" src="img/metodos/emg/GPR.png" width="600" height="399" alt="">
									</figure>
								</div>

							</div><!-- /item -->


						</div>

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