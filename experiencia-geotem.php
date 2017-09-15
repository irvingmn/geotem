<?php $pagename = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>

<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->

<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->

<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->

	<head>

		<meta charset="utf-8" />

		<title>Experiencia Geotem</title>

		<meta name="keywords" content="HTML5,CSS3,Template" />

		<meta name="description" content="" />

		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />



		<!-- mobile settings -->

		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->



		<!-- WEB FONTS : use %7C instead of | (pipe) -->

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />



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

			.altoimg{

				height: 145px;

			}

			@media (max-width: @screen-xs-min) {
			  .modal-lg { width: @modal-sm; }
			}

		</style>

	</head>

	<body class="smoothscroll enable-animation has-video-bg" data-background="assets/images/backgrounds/default.jpg">



		<!-- wrapper -->

		<div id="wrapper">


			<div id="header" class=" shadow-after-3 clearfix">



				<!-- TOP NAV -->

				<header id="topNav">

					<div class="container">



						<!-- Mobile Menu Button -->



						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">



							<i class="fa fa-bars"></i>



						</button>  

						<div class="navbar-collapse pull-left nav-main-collapse collapse">

							<nav class="nav-main">


								<ul id="topMain" class="nav nav-pills nav-main">

									<li class="dropdown"><!-- HOME -->

										<a href="index.php">

											INICIO

										</a>

									</li>

									<li class="dropdown"><!-- PAGES -->

										<a class="dropdown-toggle">

											ACERCA DE

										</a>

										<ul class="dropdown-menu">

											<li><a href="nosotros.php">Perfil de la Compañía</a></li>

											<li><a href="administracion.php">Administración</a></li>

											<li><a href="historia.php">Historia</a</li>

											<li><a href="contacto.php">Contacto</a></li>

											<li><a href="privacidad.php">Privacidad</a></li>

										</ul>

									</li>

									<li class="dropdown">

										<a class="dropdown-toggle">

											SERVICIOS

										</a>

										<ul class="dropdown-menu">

											<li><a href="medio-ambiente.php">Medio Ambiente</a></li>

											<li><a href="hidrocarburos.php">Hidrocarburos</a></li>

											<li><a href="geotermia.php">Geotermia</a</li>

											<li><a href="geohidro.php">Geohidrología</a></li>

											<li><a href="mineria.php">Minería</a></li>

											<li><a href="geotecnica.php">Geotecnia</a></li>

											<li><a href="arqueologia.php">Arqueología</a></li>
											<li><a href="offshore.php">Offshore</a></li>

										</ul>

									</li>

									<li class="dropdown mega-menu"><!-- PORTFOLIO -->

										<a href="tecnologia.php">

											TECNOLOGÍA

											<i class="glyphicon glyphicon-chevron-down" style="font-size:9px; color:#E0E0E0;"></i>

										</a>

										<ul class="dropdown-menu">

											<li>

												<div class="row">



													<div class="col-md-2th">

														<ul class="list-unstyled">

															<li><a href="tecnologia/tx.php">TXM-22 & TXB-07</a></li>

															<li><a href="tecnologia/adu07.php">ADU-07e</a></li>

															<li><a href="tecnologia/terratem.php">TerraTEM</a></li>

															<li><a href="tecnologia/pro-rta.php">Pro Ex & RTA-30MHz</a></li>

															<li><a href="tecnologia/cmd.php">CMD Duo</a></li>

															<li><a href="tecnologia/grx8.php">GRx8-32 GDD</a></li>

														</ul>

													</div>



													<div class="col-md-2th">

														<ul class="list-unstyled">

															<li><a href="tecnologia/ares2.php">Ares II</a></li>

															<li><a href="tecnologia/gdp.php">GDP-32 ii</a></li>

															<li><a href="tecnologia/doremi.php">DoReMi</a></li>

															<li><a href="tecnologia/sl06.php">SL06</a></li>

															<li><a href="tecnologia/ss-bh.php">SS-BH</a></li>

															<li><a href="tecnologia/cg-5.php">CG-5</a></li>

															

														</ul>

													</div>



													<div class="col-md-2th">

														<ul class="list-unstyled">

															<li><a href="tecnologia/gsm.php">GSM-19W</a></li>

															<li><a href="tecnologia/stratbox.php">StrataBox 3510</a></li>

															<li><a href="tecnologia/bathy.php">Bathy-500DF</a></li>

															<li><a href="tecnologia/aquascan.php">AquaScan</a></li>

															<li><a href="tecnologia/gamma.php">Gamma Surveyor II</a></li>

															<li><a href="tecnologia/promark.php">Promark 500</a></li>

														</ul>

													</div>



												</div>

											</li>

										</ul>

									</li>

									<li class="dropdown" ><!-- PAGES -->

										<a href="metodos.php" >

											MÉTODOS

											<i class="glyphicon glyphicon-chevron-down" style="font-size:9px; color:#E0E0E0;"></i>

										</a>

										<ul class="dropdown-menu">

											<li class="dropdown">

												<a class="dropdown-toggle" href="electronicos.php">

													Electromagnéticos

												</a>

												<ul class="dropdown-menu">

													<li><a href="electromg1.php">Magnetotelúrico / Audio-Magnetotelúrico</a></li>

													<li><a href="electromg2.php">Audio Magnetotelúrico de Fuente Controlada Vectorial</a></li>

													<li><a href="electromg3.php">Audio Magnetotelúrico de Fuente Controlada Escalar</a></li>

													<li><a href="electromg4.php">Transitorio Electromagnético en el Dominio del Tiempo</a></li>

													<li><a href="electromg5.php">Radio-Magnetotelúrico</a></li>

													<li><a href="electromg6.php">Conductividad Electromagnética</a></li>

													<li><a href="electromg7.php">Georadar de Penetración Terrestre</a></li>

												</ul>

											</li>

											<li class="dropdown">

												<a class="dropdown-toggle" href="electricos.php">

													Eléctricos

												</a>

												<ul class="dropdown-menu">

													<li><a href="electrico1.php">Sondeo Eléctrico Vertical</a></li>

													<li><a href="electrico2.php">Polarización Inducida</a></li>

													<li><a href="electrico3.php">Polarización Inducida Espectral</a></li>

													<li><a href="electrico4.php">Tomografía de Resistividad Eléctrica</a></li>

												</ul>

											</li>

											<li class="dropdown">

												<a class="dropdown-toggle"  href="sismicos.php">

													Sísmicos

												</a>

												<ul class="dropdown-menu">

													<li><a href="sismico1.php">Autocorrelación Espacial </a></li>

													<li><a href="sismico2.php">Símica en Pozo</a></li>

													<li><a href="sismico3.php">Sísmica de Ondas Superficiales </a></li>

													<li><a href="sismico4.php">Sísmica de Refracción</a></li>

													<li><a href="sismico5.php">Sísmica de Reflexión</a></li>

													<li><a href="sismico6.php">Sísmica de Cocientes Espectrales</a></li>

												</ul>

											</li>

											<li class="dropdown">

												<a class="dropdown-toggle"  href="potenciales.php">

													Potenciales

												</a>

												<ul class="dropdown-menu">

													<li><a href="potencial1.php">Gravimetría </a></li>

													<li><a href="potencial2.php">Magnetometría</a></li>

												</ul>

											</li>



											<li class="dropdown">

												<a class="dropdown-toggle"  href="potenciales.php">

													Marinos

												</a>

												<ul class="dropdown-menu">

													<li><a href="marinos2.php">Sondeo Acústico Marino</a></li>

													<li><a href="marinos1.php">Batimetría</a></li>

													<li><a href="marinos3.php">Sonar Lateral</a></li>

													<li><a href="marinos4.php">Magnetometría</a></li>

												</ul>

											</li>



											<li><a href="registro.php">Registro Geofísico de Pozos</a></li>

											<li><a href="espectro.php">Espectrometría</a></li>

											<li><a href="posicionamiento.php">Sistema de Posicionamiento Global</a></li>

										</ul>

									</li>



									<li class="dropdown "><!-- BLOG -->

										<a href="experiencia-geotem.php">

											EXPERIENCIA GEOTEM

										</a>

									</li>

									<li class="dropdown"><!-- PRESENCIA -->

										<a class="dropdown-toggle" href="#">

											PRESENCIA INTERNACIONAL

										</a>

										<ul class="dropdown-menu pull-right">

											<li><a href="alianza.php">Alianza Comercial</a></li>

											<li><a href="proyectos-extranjero.php">Proyectos en elExtranjero</a></li>

										</ul>

									</li>



									<li class="dropdown"><!-- PRESENCIA -->

										<a class="dropdown-toggle" href="#">

											TRAYECTORIA

										</a>

										<ul class="dropdown-menu pull-right">

											<li><a class="active" href="clientes.php">Clientes</a></li>

										</ul>

									</li>

									

								</ul>



							</nav>

						</div>



					</div>

				</header>

				<!-- /Top Nav -->


			</div>


			<!-- SLIDER -->
			<!-- 
			<section id="slider" class="height-700 parallax parallax-2 transparent">

				<a href="#" id="video-volume"><i class="fa fa-volume-down"></i></a>

				<a id="YTPlayer" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=qZdkGKzuJ7E',containment:'body',autoPlay:true, mute:true, startAt:0, opacity:1}">youtube</a>

			</section> -->

			<!-- /SLIDER -->


			<!--Modal 10Aniv  -->

			<div class="modal fade bs-example-modal-lg6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

				<div class="modal-dialog modal-lg">

					<div class="modal-content">

						<!-- header modal -->

						<div class="modal-header" style="padding: 0px; border-bottom: 0px;">

							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i aria-hidden="true" class="glyphicon glyphicon-remove"></i></button>

						</div>

						<!-- body modal -->

						<div class="modal-body">

							<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->

							<embed src="img/GEOTEM_Ligera.pdf" width="100%" height="700">

						</div>

					</div>

				</div>

			</div>

			<!--Modal 10Aniv/-->

			<!--Modal servicios  -->

			<div class="modal fade bs-example-modal-lg5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

				<div class="modal-dialog modal-lg" >

					<div class="modal-content">

						<!-- header modal -->

						<div class="modal-header" style="padding: 0px; border-bottom: 0px;">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i aria-hidden="true" class="glyphicon glyphicon-remove"></i></button>
						</div>



						<!-- body modal -->

						<div class="modal-body">

							<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->

							<embed src="img/Servicios_2016.pdf" width="100%" height="700">

						</div>

					</div>

				</div>

			</div>

			<!--Modal servicios/-->

			<!--Modal folleto br  -->
			<div class="modal fade bs-example-modal-lg7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

				<div class="modal-dialog modal-lg" >

					<div class="modal-content">

						<!-- header modal -->

						<div class="modal-header" style="padding: 0px; border-bottom: 0px;">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i aria-hidden="true" class="glyphicon glyphicon-remove"></i></button>
						</div>



						<!-- body modal -->

						<div class="modal-body">

							<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->

							<embed src="img/reduFolleto.pdf" width="100%" height="700">

						</div>

					</div>

				</div>

			</div>

			<!--Modal folleto br/-->


			<!-- -->
			<section>
				<div class="container">

					<div id="portfolio" class="portfolio-gutter portfolio-title-over">


						<div class="row mix-grid">

							<div class="col-md-5 col-sm-6  "><!-- item -->

								<div class="item-box" >
									<figure>
										<div class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- details -->
												<a class="ico-rounded" href="" data-toggle="modal" data-target=".bs-example-modal-lg5">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>

											<!-- overlay title -->
											<div class="item-box-overlay-title">
												<h3>Catalogo de Servicios</h3>
											</div><!-- /overlay title -->

										</div>

										<img class="img-responsive" src="img/Foto-Catalogo-de-Servicios.jpg" width="600" height="399" alt="">
									</figure>
								</div>

							</div><!-- /item -->

							<div class="col-md-2"> </div><!-- /item -->


							<div class="col-md-4 col-sm-6  "><!-- item -->

								<div class="item-box" style="width: 333px;">
									<figure>
										<div class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">
												<!-- details -->
												<a class="ico-rounded" href="" data-toggle="modal" data-target=".bs-example-modal-lg6">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>

											<!-- overlay title -->
											<div class="item-box-overlay-title">
												<h3>Revista 10 Aniversario</h3>
											</div><!-- /overlay title -->

										</div>

										<img class="img-responsive" src="img/Foto-Revista.jpg" width="600" height="399" alt="">
									</figure>
								</div>

							</div><!-- /item -->

							<div class="col-md-3"> </div>

							<div class="col-md-8 col-sm-8  "><!-- item -->
								<div class="item-box" style="width: 500px;">
									<figure>
										<div class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">
												<!-- details -->
												<a class="ico-rounded" href="" data-toggle="modal" data-target=".bs-example-modal-lg7">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>

											<!-- overlay title -->
											<div class="item-box-overlay-title">
												<h3>Folleto Digital BR</h3>
											</div><!-- /overlay title -->

										</div>

										<img class="img-responsive" src="img/folleto.jpg" width="600" height="399" alt="">
									</figure>
								</div>
							</div><!-- /item -->

							

						</div>

					</div>
				</div>
			</section>
			<!-- / -->


			<!-- VIDEO -->
			<section>
				<div class="container">


					<!-- VIDEO -->
					<div class="row">
						<div class="col-md-6">
						
							<!-- VIMEO VIDEO -->
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="640" height="360" src="https://www.youtube.com/embed/TbC2jIbUNaM" frameborder="0" allowfullscreen></iframe>
							</div>

						</div>
						<div class="col-md-6">
							
							<!-- YOUTUBE VIDEO -->
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="640" height="360" src="https://www.youtube.com/embed/qZdkGKzuJ7E?rel=0" frameborder="0" allowfullscreen></iframe>
							</div>

						</div>
					</div>
					<!-- /VIDEO -->
				</div>
			</section>
			<!-- /VIDEO -->


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

