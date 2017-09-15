<?php $pagename = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>

<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->

<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->

<!--[if gt IE 9]><!-->	<html lang="es"> <!--<![endif]-->

	<head>

		<meta charset="utf-8" />

		<title>Geotem - Espectrometría de Rayos Gama</title>

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

											<li class="dropdown ">

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

											<li class="dropdown ">

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

											<li class="active"><a href="espectro.php">Espectrometría</a></li>

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

									<img src="img/banner/bmetodos/Espectro.jpg"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

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

										style="z-index: 6; zoom:0.7;"><a href="geotermia.php"><img class="footer-logo" src="img/iconos/icongeotermia.png"  width="50" height="auto" alt="geotermia" /></a>

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
										

										style="z-index: 6; zoom:0.47; zoom:0.7"><a href="#"><img class="footer-logo" src="img/iconos/iconmineria.png"  width="100" height="auto" alt="" /></a>

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

							<img class="img-responsive" src="img/metodos/espectro/titulo17.png" alt="">

						</div>



						<div class="col-sm-6">

							<p class=" justify weight-400 letter-spacing-1 size-25">Los minerales son los componentes básicos de las rocas, los elementos químicos que las conforman  pueden contener variaciones en su número de neutrones conocidos como isotopos. Algunos de estos elementos son inestables o radioactivos  y sufren un proceso de desintegración espontanea para llegar a formar elementos más estables. </p>

							<hr style="margin-bottom: -20px;"/>

							<div align="center"><img align="center" src="img/iconos/espectrometria.png" alt="espectrometria"></div>

							

							<p class=" text-center weight-400 letter-spacing-1 size-30">Fuente: Natural <br>Modalidad Terrestre</p>
						</div>





						<div class="col-sm-6">


							<div class="masonry-gallery columns-2 clearfix lightbox" data-img-big="1" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>

								<a class="image-hover" href="img/metodos/espectro/02-ProcesoGRS.png">

									<img src="img/metodos/espectro/02-ProcesoGRS.png" alt="...">

								</a> <br>



							</div>
						</div>

					</div>

				</div>

			</section>

			<!-- /WELCOME -->



			<!--2 -->

			<section class="alternate" >

				<div class="container">



					<div class="row">


						<div class="col-sm-6" style="padding-top: 40px;">


							<div class="masonry-gallery columns-2 clearfix lightbox" data-img-big="1" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>



								<a class="image-hover" href="img/metodos/espectro/Potasio3D.png">

									<img src="img/metodos/espectro/Potasio3D.png" alt="...">

									<h5>Modelado 3D de potasio con fines de exploración de minerales par la industria energética y para la localización de fuentes de energía alterna.</h5>

								</a> <br>
							</div> <br> <br>

							<div class="masonry-gallery columns-3 clearfix lightbox" data-img-big="" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>
								<h4>La radiactividad natural es el proceso particular que produce rayos gamma de interés geológico y las tres fuentes naturales más significantes son:</h4>



								<a class="image-hover" href="img/metodos/espectro/03-PotasioMap.jpg" >

									<img src="img/metodos/espectro/03-PotasioMap.jpg" alt="...">

									<h4 class="text-left"><b>El potasio (K):</b> El proceso de decaimiento radiactivo de K40 produce rayos gamma de sólo una energía. </h4>

								</a>

								<a class="image-hover" href="img/metodos/espectro/UranioMap.jpg" >

									<img src="img/metodos/espectro/UranioMap.jpg" alt="...">
									<h4 class="justify"><b>Uranio (U):</b> U238 producen radiación gamma de varias energías cuando ellos decaen.</h4>

								</a>

								<a class="image-hover" href="img/metodos/espectro/ThorioMap.jpg" >

									<img src="img/metodos/espectro/ThorioMap.jpg" alt="...">
									<h4 style="text-align:right;"><b>Torio (Th):</b> Th232 La serie del torio tiene 11 productos que producen un espectro gamma complejo, y siempre se encuentra en un estado de equilibrio. </h4>

								</a>

							</div>

						</div>



						<div class="col-sm-6">

							<p class=" justify weight-400 letter-spacing-1 size-28">La espectrometría  por rayos gamma consiste en el registro de la radioactividad natural de las formaciones rocosas, la liberación de energía gamma se debe a isotopos como el Torio (Th), Uranio (U) y el Potasio (K). Los rayos gamma se manifiestan como impulsos de ondas electromagnéticas, formadas por fotones muy excitados o de alta frecuencia. Este tipo de ondas electromagnéticas poseen una gran cantidad de energía, con la cual son capaces de atravesar la materia sólida, durante su recorrido dan lugar a partículas cargadas eléctricamente llamadas iones los cuales son utilizados para captar o medir la radiactividad del material en cuestión. <br> En la espectrometría de rayos gamma la información registrada corresponde a los primeros centímetros de la superficie, por ejemplo: rocas aflorantes, cobertura de sedimentos no consolidados, etc. <br> <br> La principal aplicación del método se refiere al mapeo geológico registrando las variaciones en contenido de Potasio, Uranio y Torio en las formaciones rocosas.  Otro tipo de aplicación radica en la detección de zonas con alteración hidrotermal definida como un proceso geológico donde los sedimentos sufren efectos debidos a  la circulación de fluidos a altas temperaturas.  </p>

							<hr />							

						</div>



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