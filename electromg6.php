<?php $pagename = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html lang="es"> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Geotem - Conductividad Electromagnética</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		

		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />

		<!-- REVOLUTION SLIDER -->
		<link href="assets/plugins/slider.revolution.v5/css/pack.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/thematics-restaurant.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/lightgrey.css" rel="stylesheet" type="text/css" id="color_scheme" />
		<link href="assets/css/hover.css" rel="stylesheet" media="all">

	</head>
	<body class="smoothscroll enable-animation">
		<style>
    		@font-face{
				font-family: 'din';
				src:url('assets/fonts/DINPro-CondMedium.otf');
			}
		</style>

		<!-- wrapper -->
		<div id="wrapper">

			<div id="header" class="sticky header-sm clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->

						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">

							<i class="fa fa-bars"></i>

						</button>  
						<div class="navbar-collapse pull-left nav-main-collapse collapse">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
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
									<li class="dropdown active" ><!-- PAGES -->
										<a href="metodos.php" >
											MÉTODOS
											<i class="glyphicon glyphicon-chevron-down" style="font-size:9px; color:#E0E0E0;"></i>
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown active">
												<a class="dropdown-toggle" href="electronicos.php">
													Electromagnéticos
												</a>
												<ul class="dropdown-menu">
													<li><a href="electromg1.php">Magnetotelúrico / Audio-Magnetotelúrico</a></li>
													<li><a href="electromg2.php">Audio Magnetotelúrico de Fuente Controlada Vectorial</a></li>
													<li><a href="electromg3.php">Audio Magnetotelúrico de Fuente Controlada Escalar</a></li>
													<li><a href="electromg4.php">Transitorio Electromagnético en el Dominio del Tiempo</a></li>
													<li><a href="electromg5.php">Radio-Magnetotelúrico</a></li>
													<li class="active"><a href="electromg6.php">Conductividad Electromagnética</a></li>
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


			<section style="padding:0;">
				<div class="container">
					<div id="rev_slider_18_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="highlight-showcase18" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
						<!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
						<div id="rev_slider_18_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
							<ul>


								<!-- SLIDE 1 -->
								<li data-index="rs-59" data-transition="slideoverhorizontal" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="assets/images/demo/rs5/newspaper_bg1-100x50.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off"  data-title="Construcción" data-description="">
									<!-- MAIN IMAGE -->
									<img src="img/banner/bmetodos/contuctelect.jpg"wid  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
									<div class="overlay dark-4"></div>
									<!-- LAYERS -->

									<!-- LAYER NR. 1 -->
									<div class="tp-caption News-Title   tp-resizeme rs-parallaxlevel-0" 
										id="slide-59-layer-1" 
										data-x="['left','left','left','left']" data-hoffset="['1000','800','400','400']" 
										data-y="['top','top','top','top']" data-voffset="['490','490','290','190']" 
										data-width="15em"
										data-height="133"
										data-whitespace="normal"
										data-transform_idle="o:1;"
							 
										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
										data-transform_out="y:[100%];s:1000;s:1000;" 
										data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
										data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
										data-start="500" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on" 

										
										style="z-index: 5; min-width: 464px; max-width: 464px; max-width: 233px; max-width: 233px; white-space: normal;">Aplicaciones
									</div>

									<!-- LAYER NR. ADQUIS-->
									<div class="tp-caption   rs-parallaxlevel-0" 
										id="slide-20-layer-2" 
										data-x="['left','left','left','left']" data-hoffset="['1270','880','383','183']" 
										data-y="['top','top','top','top']" data-voffset="['440','440','-40','-40']" 
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
							 
										data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
										data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
										data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
										data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
										data-start="500" 
										data-responsive_offset="on" 

										
										style="z-index: 6; zoom:0.7;"><a href="geotecnica.php"><img class="footer-logo" src="img/iconos/icongeotecnia.png"  width="50" height="auto"alt="geotermia" /></a>
									</div>

									<!-- LAYER NR. INTEGRA -->
									<div class="tp-caption   rs-parallaxlevel-0" 
										id="slide-20-layer-2" 
										data-x="['left','left','left','left']" data-hoffset="['1390','1580','1540','1540']" 
										data-y="['top','top','top','top']" data-voffset="['440','440','-40','-40']" 
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
							 
										data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
										data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
										data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
										data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
										data-start="500" 
										data-responsive_offset="on" 

										
										style="z-index: 6; zoom:0.47; zoom:0.7"><a href="medio-ambiente.php"><img class="footer-logo" src="img/iconos/icoambiental.png"  width="100" height="auto"alt="" /></a>
									</div>

									<!-- LAYER NR. ENTRENA -->
									<div class="tp-caption   rs-parallaxlevel-0" 
										id="slide-20-layer-2" 
										data-x="['left','left','left','left']" data-hoffset="['1510','1580','1540','1540']" 
										data-y="['top','top','top','top']" data-voffset="['440','440','-40','-40']" 
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
							 
										data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
										data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
										data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
										data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
										data-start="500" 
										data-responsive_offset="on" 

										
										  style="z-index: 6; zoom:0.7;"><a href="arqueologia.php"><img class="footer-logo" src="img/iconos/iconeduca.png"  width="100" height="auto"alt="" /></a>
									</div>

								</li>								
							</ul>
							
							<div class="tp-bannertimer" style="height: 6px; background-color: rgba(46, 209, 255, 1.00);"></div>	
						</div>
					</div><!-- END REVOLUTION SLIDER -->

				</div>
			</section>



			<!-- WELCOME -->
			<section style="padding-top: 20px;">
				<div class="container">

					<div class="row">
						<div style="margin-bottom: 30px;"class="heading-title heading-dotted text-center">
							<img class="img-responsive" src="img/metodos/electromg6/titulo6.png" alt="">
						</div>

						<div class="col-sm-6">
							<p class=" justify weight-400 letter-spacing-1 size-25">Algunos equipos miden la conductividad eléctrica del subsuelo, utilizando la susceptibilidad magnética de los materiales.Las mediciones se basan en la cuantificación de un campo magnético inducido, orientado a un dipolo vertical/horizontal. El campo magnético medido está conformado por una parte imaginaria (fuera de fase), proporcional a la conductividad del subsuelo (unidades en SI mS/m) y una parte real (en fase) determinada por las propiedades magnéticas mostradas en el campo primario.</p>
							<hr style="margin-bottom: -20px;"/>
							<div align="center"><img align="center" src="img/iconos/electromagnetico.png" alt="electro1"></div>
							
							<p class=" text-center weight-400 letter-spacing-1 size-30">Profundidad: 0.35 a 60 [m]<br>Fuente: Controlada <br>Modalidad Terrestre</p>

						</div>


						<div class="col-sm-6">

							<!-- 
								controlls-over		= navigation buttons over the image 
								buttons-autohide 	= navigation buttons visible on mouse hover only
								
								data-plugin-options:
									"singleItem": true
									"autoPlay": true (or ms. eg: 4000)
									"navigation": true
									"pagination": true
									"transitionStyle":"fadeUp" (fade,backSlide,goDown,fadeUp)
							-->

							<div class="masonry-gallery columns-2 clearfix lightbox" data-img-big="1" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>

								<a class="image-hover" href="img/metodos/electromg6/7.png">
									<img src="img/metodos/electromg6/7.png" alt="...">
								</a> <br>

							</div>
							<div class="masonry-gallery columns-2 clearfix lightbox" data-img-big="1" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>

								<a class="image-hover" href="img/metodos/electromg6/E.png" >
									<img src="img/metodos/electromg6/E.png" alt="...">
								</a>
							</div>

						</div>

					</div>
				</div>
			</section>
			<!-- /WELCOME -->

			<!--2 -->
			<section class="alternate">
				<div class="container">

					<div class="row">
						

						<div class="col-sm-6">

							<!-- 
								controlls-over		= navigation buttons over the image 
								buttons-autohide 	= navigation buttons visible on mouse hover only
								
								data-plugin-options:
									"singleItem": true
									"autoPlay": true (or ms. eg: 4000)
									"navigation": true
									"pagination": true
									"transitionStyle":"fadeUp" (fade,backSlide,goDown,fadeUp)
							-->

							<div class="masonry-gallery columns-2 clearfix lightbox" data-img-big="1" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>

								<a class="image-hover" href="img/metodos/electromg6/RadioMagneto.jpg">
									<img src="img/metodos/electromg6/RadioMagneto.jpg" alt="...">
								</a> <br>

							</div>
							<div class="masonry-gallery columns-2 clearfix lightbox" data-img-big="1" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>

								<a class="image-hover" href="img/metodos/electromg6/F.png" >
									<img src="img/metodos/electromg6/F.png" alt="...">
								</a>
							</div>

						</div>

						<div class="col-sm-6">
							<p class=" justify weight-400 letter-spacing-1 size-28">Con el equipo desarrollado por GF Instruments se puede realizar un mapeo rápido de la conductividad eléctrica aparente y susceptibilidad magnética de los materiales, con posibilidad de interpretar mapas hechos mediante inversión EM 1D. En el mapeo EM por CMD la profundidad de investigación está en función de la longitud existente entre los dipolos magnéticos; por esta razón el sistema CMD cuenta con longitudes especificas del dipolo magnético para prospectar a una profundidad de investigación nominal.</p>
							<hr />							
						</div>

					</div>
				</div>

				</div>
			</section>
			<!-- / -->

			<!-- FOOTER -->
			<footer id="footer">
				<div class="container">

					<div class="row">
	
						
						<div class="col-md-4">
							<!-- Footer Logo -->
							 <img class="footer-logo" src="img/Logogt.png"  width="100" height="auto"alt="" />

							<!-- Small Description -->
							<p>Empresa certificada en ISO9001:2008</p>

							<!-- Contact Address -->
							<address>
								<ul class="list-unstyled">
									<li class="footer-sprite address">
										Alhelí Mz.7 Lt.13-A<br>
										Col. Ejidos San Pedro Martir<br>
										C.P. 14640, Tlalpan, México D.F<br>
									</li>
									<li class="footer-sprite phone">
										Telefonos: +52 55 54 85 60 32 / +52 55 54 85 14 37
									</li>
									<li class="footer-sprite email">
										<a href="mailto:cpita@geotem.com.mx">cpita@geotem.com.mx</a> / <a href="mailto:geotem@geote.com.mx"> geotem@geotem.com.mx</a>
									</li>

								</ul>
							</address>
							<!-- /Contact Address -->

						</div>
						<div class="col-md-1"></div>

						<div class="col-md-2">

							<!-- Links -->
							<h4 class="letter-spacing-1">Mapa de Sitio</h4>
							<ul class="footer-links list-unstyled">
								<li><a href="index.php">Inicio</a></li>
								<li><a href="nosotros.php">Acerca de</a></li>
								<li><a href="medio-ambiente.php">Servicios</a></li>
								<li><a href="tecnologia.php">Tecnología</a></li>
								<li><a href="experiencia-geotem.php">Experiencia Geotem</a></li>
								<li><a href="metodos.php">Métodos</a></li>
								<li><a href="alianza.php">Presencia Internacional</a></li>
								<li><a href="clientes.php">Trayectoria</a></li>
							</ul>
							<!-- /Links -->

						</div>
						<div class="col-md-1"></div>

						<div class="col-md-4">

							<!-- Newsletter Form -->
							<h4 class="letter-spacing-1">Mantente en Contacto</h4>
							<!-- <p>Subscribe to Our Newsletter to get Important News &amp; Offers</p> -->

							<form class="validate" action="php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="email" id="email" name="email" class="form-control required" placeholder="Ingresa tu Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Suscríbete</button>
									</span>
								</div>
							</form>
							<!-- /Newsletter Form -->

							<!-- Social Icons -->
							<div class="margin-top-20">
								<a href="https://www.facebook.com/Geotem-Ingenier%C3%ADa-SA-de-CV-309754869161318/"  target="_blank" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="https://twitter.com/geotem_"  target="_blank"class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="https://www.google.com/maps/@19.271668,-99.1553694,3a,75y,62.21h,104.75t/data=!3m6!1e1!3m4!1su-aONBniCv0nzcnvuEtkHw!2e0!7i13312!8i6656!6m1!1e1?hl=es-419" target="_blank" class="social-icon social-icon-border social-google pull-left" data-toggle="tooltip" data-placement="top" title="Google Maps">
									<i class="icon-google"></i>
									<i class="icon-google"></i>
								</a>

								<a href="https://www.linkedin.com/company/geotem-ingenier%C3%ADa-sa-de-cv"  target="_blank" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
							</div>
							<!-- /Social Icons -->

						</div>



					</div>

				</div>

				<div class="copyright">
					<div class="container">
						<ul class="pull-right nomargin list-inline mobile-block">
							<!-- <li><a href="#">Terms &amp; Conditions</a></li> -->
							<li>&bull;</li>
							<li><a href="privacidad.php">Privacidad</a></li>
						</ul>
						&copy; 2016 GEOTEM Ingeniería S.A. de C.V. Todos los derechos reservados.
					</div>
				</div>
			</footer>
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

		<script type="text/javascript"  src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="assets/js/scripts.js"></script>


		<script type="text/javascript">
			jQuery(document).ready(function() {
				if(jQuery("#rev_slider_18_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_18_1");
				}else{
					revapi18 = jQuery("#rev_slider_18_1").show().revolution({
						sliderType:"standard",
						jsFileLocation:plugin_path + "slider.revolution.v5/js/",
						sliderLayout:"100%",
						dottedOverlay:"none",
						delay:10000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
							onHoverStop:"off",
							touch:{
								touchenabled:"on",
								swipe_threshold: 75,
								swipe_min_touches: 1,
								swipe_direction: "horizontal",
								drag_block_vertical: false
							}
							,
						},
						viewPort: {
							enable:true,
							outof:"pause",
							visible_area:"80%"
						},
						responsiveLevels:[1240,1024,778,480],
						gridwidth:[2000,1024,767,480],
						gridheight:[620,620,380,260],
						lazyType:"none",
						parallax: {
							type:"scroll",
							origo:"enterpoint",
							speed:400,
							levels:[5,10,15,20,25,30,35,40,45,50],
						},
						shadow:0,
						spinner:"off",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			});
		</script>
		<script type="text/javascript" src="assets/plugins/slider.revolution.v5/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="assets/plugins/slider.revolution.v5/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="assets/plugins/slider.revolution.v5/js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="assets/plugins/slider.revolution.v5/js/extensions/revolution.extension.parallax.min.js"></script>
		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
	

		<!-- REVOLUTION SLIDER -->
		<script type="text/javascript" src="assets/plugins/slider.revolution.v5/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="assets/plugins/slider.revolution.v5/js/jquery.themepunch.revolution.min.js"></script>

	</body>
</html>