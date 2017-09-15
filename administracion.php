<?php $pagename = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Geotem - Administración</title>
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
		<style>
        .gsc-search-button {
            -webkit-box-sizing: initial;
        }
        input.gsc-search-button,
        input.gsc-search-button:hover,
        input.gsc-search-button:focus {
            background-color: #2196F3;
        }
        @font-face {
            font-family: 'din';
            src: url('assets/fonts/DINPro-CondMedium.otf');
        }
        @media (max-width: 600px) {
            .imgresp {
                width: 144px;
            }
        }
        @media (max-width: 600px) {
            .letrars {
                zoom: 0.5;
            }
        }
        @media (max-width: 600px) {
            .rwp {
                display: inline-block;
            }
        }
    </style>

    <!-- Top Bar -->

    <div id="topBar" class="text-center rwp" style="display: flex; align-items: center; justify-content: space-between;">

        <!-- Logo -->

        <a class="logo" href="index.php" style="padding:10px;">

            <img class="imgresp" src="img/logo.png" width="555" height="auto" alt="" />

        </a>

        <div class="col-md-4">

            <div style="margin-left: 15px;">

                <a href="https://www.facebook.com/Geotem-Ingenier%C3%ADa-SA-de-CV-309754869161318/" target="_blank" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="bottom" title="Facebook">

                    <i class="icon-facebook"></i>

                    <i class="icon-facebook"></i>

                </a>

                <a href="https://twitter.com/geotem_" target="_blank" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="bottom" title="Twitter">

                    <i class="icon-twitter"></i>

                    <i class="icon-twitter"></i>

                </a>

                <a href="https://www.youtube.com/channel/UC7bH7EH66j8KWHNkNGqQBIw" target="_blank" class="social-icon social-icon-border social-youtube pull-left" data-toggle="tooltip" data-placement="bottom" title="YouTube">

                    <i class="icon-youtube"></i>

                    <i class="icon-youtube"></i>

                </a>

            </div>

            <script>
                (function() {
                    var cx = '012959982806626863026:ku9-p7lnlqu';
                    var gcse = document.createElement('script');
                    gcse.type = 'text/javascript';
                    gcse.async = true;
                    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                        '//cse.google.com/cse.js?cx=' + cx;
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(gcse, s);
                })();
            </script>

            <gcse:search></gcse:search>

        </div>

    </div>

    <!-- /Top Bar -->


		<!-- wrapper -->
		<div id="wrapper">

			<?php include 'inc/header.php'; ?>
			<section class="page-header page-header-xlg parallax " style="background-image:url('img/admon.jpg');">
				<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<h1>Administración</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="index.php">Inicio</a></li>
						<li class="active">Administración</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->


			<!-- -->
			<!-- <section>
				<div class="container">
				
					<div class="row">

						<div class="col-sm-6 col-md-3">
							<div class="thumbnail">
								<img class="img-responsive" src="img/CarlosPita.png" alt="" />
								<div class="caption">
									<h4 class="nomargin">Ing. Carlos Pita de la Paz </h4>
									<small class="margin-bottom-20 block">Director General</small>
	
									<a href="#" class="social-icon social-icon-sm social-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									</a>
									<a href="#" class="social-icon social-icon-sm social-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail">
								<img class="img-responsive" src="img/OliviaSllim.png" alt="" />
								<div class="caption">
									<h4 class="nomargin">Lic. Olivia Sllim Jaimes</h4>
									<small class="margin-bottom-20 block">Asistente de Director</small>

									<a href="#" class="social-icon social-icon-sm social-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-sm social-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-sm social-google">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-sm social-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail">
								<img class="img-responsive" src="img/OmarHernandez.png" alt="" />
								<div class="caption">
									<h4 class="nomargin">Ing. Omar Hernández</h4>
									<small class="margin-bottom-20 block">Gerente General</small>

									<a href="#" class="social-icon social-icon-sm social-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-sm social-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-sm social-google">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-sm social-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail">
								<img class="img-responsive" src="img/JulioQuintas.png" alt="" />
								<div class="caption">
									<h4 class="nomargin">Ing. Julio Quintas Granados</h4>
									<small class="margin-bottom-20 block">Gerente Técnico</small>

									<a href="#" class="social-icon social-icon-sm social-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-sm social-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-sm social-google">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-sm social-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail">
								<img class="img-responsive" src="img/zdeneck.JPG" alt="" />
								<div class="caption">
									<h4 class="nomargin">M. en C. Zdenek Duchosiav</h4>
									<small class="margin-bottom-20 block">Asesor Externo</small>

									<a href="#" class="social-icon social-icon-sm social-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-sm social-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-sm social-google">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-sm social-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail">
								<img class="img-responsive" src="img/smf_a.jpg" alt="" />
								<div class="caption">
									<h4 class="nomargin">L. Admón. Saúl Marín Fernández</h4>
									<small class="margin-bottom-20 block">Recursos Humanos </small>

									<a href="#" class="social-icon social-icon-sm social-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-sm social-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-sm social-google">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-sm social-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail">
								<img class="img-responsive" src="img/" alt="" />
								<div class="caption">
									<h4 class="nomargin">C.P. Juan Carlos Ochoa</h4>
									<small class="margin-bottom-20 block">Contabilidad</small>

									<a href="#" class="social-icon social-icon-sm social-facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="social-icon social-icon-sm social-twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="social-icon social-icon-sm social-google">
										<i class="fa fa-google-plus"></i>
										<i class="fa fa-google-plus"></i>
									</a>
									<a href="#" class="social-icon social-icon-sm social-linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>
								</div>
							</div>
						</div>

					</div>

				</div>
			</section> -->
			<!-- / -->

			<!-- -->
			<section style="padding:20px">
				<div class="container">
					<div class="heading-title heading-border-bottom heading-color">
						<h2>Orgranigrama</h2>
					</div>

					<!-- POST ITEM -->
					<div class="blog-post-item" style="padding-bottom: 0px;">

						<!-- OWL SLIDER -->
						<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": 1, "": 3000, "autoHeight": false, "navigation": true, "pagination": false, "transitionStyle":"", "":"false"}'>
							<div>
								<img class="img-responsive" src="img/Organigrama.png" alt="">
							</div>
						</div>
						<!-- /OWL SLIDER -->
					</div>
					<!-- /POST ITEM -->


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


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>

		<script type="text/javascript" src="assets/js/scripts.js"></script>
		
	</body>
</html>