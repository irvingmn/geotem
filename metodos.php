<?php $pagename = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>Geotem - Métodos</title>
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
        @font-face {
            font-family: 'din';
            src: url('assets/fonts/DINPro-CondMedium.otf');
        }
        .rotar {
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            font-size: 20px;
            writing-mode: vertical-lr;
            text-orientation: upright;
            letter-spacing: -3em;
        }
        .colorred {
            background-color: #FF7E7E;
        }
        .colorpink {
            background-color: #FFC3C4;
        }
        .tipo {
            font-weight: bold;
            font-size: larger;
        }
    </style>
</head>

<body class="smoothscroll enable-animation">
    <!-- wrapper -->
    <div id="wrapper" style="min-height: 0px;">
        <?php include 'inc/header.php'; ?>
        <section class="page-header page-header-xlg parallax " style="background-image:url('img/metod.jpg'); background-size:contain !important;">
            <div class="overlay dark-5">
                <!-- dark overlay [1 to 9 opacity] -->
            </div>
            <h1 style="text-align:center !important;">

                        Métodos De Exploración: 


                        <span class="word-rotator" data-delay="3000">

                            <span class="items">

                                <span style="color:#E815B0">Espectrometría</span>

                                <span style="color:#BAA567">Registros Geofísicos</span>

                                <span style="color:#913F75">GPS</span> 

                                <span style="color:#70DE41">SPAC</span> 

                                <span style="color:#70DE41">Cross, Up, Down - Hole</span>

                                <span style="color:#70DE41">MASW</span>

                                <span style="color:#70DE41">Reflexión</span>

                                <span style="color:#70DE41">Refracción</span>

                                <span style="color:#70DE41">ReMi</span>

                                <span style="color:#FDD835">SEV</span>

                                <span style="color:#FDD835">IP</span>

                                <span style="color:#FDD835">SIP</span>

                                <span style="color:#FDD835">TRE</span>

                                <span style="color:#FF0700">MAG</span>

                                <span style="color:#FF0700">GRV</span>

                                <span style="color:#4551FF">AMT / MT</span>

                                <span style="color:#4551FF">CMD</span>

                                <span style="color:#4551FF">CSAMT</span>

                                <span style="color:#4551FF">CSAMT</span>

                                <span style="color:#4551FF">GPR</span>

                                <span style="color:#4551FF">RMT</span>

                                <span style="color:#4551FF">TEM</span>

                            </span>

                        </span><!-- /word rotator -->

                    </h1>
            <!-- <span class="font-lato size-25 weight-300" style="text-align:center !important;"></span> -->
            <!-- breadcrumbs -->
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a> </li>
                <li class="active">Métodos de Exploración</li>
            </ol>
            <!-- /breadcrumbs -->
    </div>
    </section>
    <!-- /PAGE HEADER -->
    <section>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-bordered table-striped " style="color:#000;">
                    <thead>
                        <tr class="tableizer-firstrow">
                            <th colspan="2" style="background-color:#00DBFF;">Tipo</th>
                            <th style="background-color:#00DBFF;">Campo</th>
                            <th style="background-color:#00DBFF;">Metodo geofisico</th>
                            <th style="background-color:#00DBFF;">Propiedad fisica</th>
                            <th style="background-color:#9E9E9E;">Petróleo < 5km </th>
                            <th style="background-color:#FFC200;">Geotermia < 3km</th>
                            <th style="background-color:#00B3F6;">Geohidrologia < 1km</th>
                            <th style="background-color:#FFFF00;">Mineria < 1km</th>
                            <th style="background-color:#DADADA;">Geotecnia < 100m</th>
                            <th style="background-color:#00D22C;">Ambiental < 50m</th>
                            <th style="background-color:#C3A2CD; font-size:12px;">Cartografia Subterránea < 50m</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--Fila 1 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred"><a href="electromg4.php">Transitorio Electromagnético (TDEM)</a> </td>
                            <td>Resistividad Eléctrica</td>
                            <td>P</td>
                            <td>P</td>
                            <td>P</td>
                            <td>P</td>
                            <td>C</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <!--Fila 2 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred"></td>
                            <td class="colorred"><a href="electromg2.php">Audio Magnetotelúrico de fuente controlada Tensorial (CSAMT)</a> </td>
                            <td>Resistividad Eléctrica</td>
                            <td>P</td>
                            <td>P</td>
                            <td>P</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <!--Fila 3 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred">Electromagnéticos</td>
                            <td class="colorred"><a href="electromg7.php">Radar de Penetración Terrestre (GPR)</a> </td>
                            <td>Permitividad Fl4ctrira</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>C</td>
                            <td>P</td>
                        </tr>
                        <!--Fila 4 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred"><a href="electromg6.php">Perfilaie Electromagnético (CMD)</a></td>
                            <td>Conductividad Eléctrica, Susceptibilidad Magnética</td>
                            <td>&nbsp;</td>
                            <td>C</td>
                            <td>&nbsp;</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>P</td>
                            <td>P</td>
                        </tr>
                        <!--Fila 5 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred">Sísmicos</td>
                            <td class="colorred"><a href="sismico5.php">Sísmica de Reflexión</a> </td>
                            <td>Módulo elástico, Densidad</td>
                            <td>P</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <!--Fila 6 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred"><a href="sismico4.php">Sísmica de Refracción</a> </td>
                            <td>Módulo elástico, Densidad</td>
                            <td>C</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <!--Fila 7 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorred tipo">Controlada</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred"><a href="sismico3.php">Análisis Multicanal (MASW)</a></td>
                            <td>Módulo elástico, Densidad</td>
                            <td>C</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <!--Fila 8 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred"><a href="electrico1.php">Sondeo Eléctrico Vertical (SEV)</a> </td>
                            <td>Resistividad Eléctrica</td>
                            <td>P</td>
                            <td>C</td>
                            <td>C</td>
                            <td>C</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <!--Fila 9 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred">Eléctricos</td>
                            <td class="colorred"><a href="electrico4.php">Tomografia de Resistividad (TRE)</a> </td>
                            <td>Resistividad Eléctrica</td>
                            <td>C</td>
                            <td>C</td>
                            <td>C</td>
                            <td>C</td>
                            <td>C</td>
                            <td>P</td>
                            <td>C</td>
                        </tr>
                        <!--Fila 10 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred">Polarización Inducida en el Dominio del Tiempo (IP)</td>
                            <td>Resistividad Eléctrica, Capacitancia</td>
                            <td>C</td>
                            <td>C</td>
                            <td>C</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>P</td>
                            <td>C</td>
                        </tr>
                        <!--Fila 11 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred"><a href="electrico3.php">Polarización Inducida Espectral (IP)</a> </td>
                            <td>Resistividad Eléctrica, Capacitancia</td>
                            <td>C</td>
                            <td>C</td>
                            <td>C</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>P</td>
                            <td>C</td>
                        </tr>
                        <!--Fila 12 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred">Sísimicos de pozo</td>
                            <td class="colorred"><a href="sismico2.php">Downhole</a></td>
                            <td>Módulo elástico, Densidad</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <!--Fila 13 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred"><a href="sismico2.php ">Crosshole</a></td>
                            <td>Módulo elástico, Densidad</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <!--Fila 14 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred"><a href="registro.php">Registros Geofísicos</a></td>
                            <td>Módulo elástico, Densidad</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <!--Fila 15 -->
                        <tr>
                            <td class="rotar"> sertserreT </td>
                            <td class="colorpink">&nbsp;</td>
                            <td class="colorpink">&nbsp;</td>
                            <td class="colorpink"><a href="electromg1.php">Magnetotelúrico (MT)</a></td>
                            <td>Resistividad Eléctrica</td>
                            <td>P</td>
                            <td>P</td>
                            <td>P</td>
                            <td>C</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <!--Fila 16 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorpink">&nbsp;</td>
                            <td class="colorpink">Electromagnéticos</td>
                            <td class="colorpink"><a href="electromg1.php">Audio Magnetotelúrico (AMT)</a></td>
                            <td>Resistividad Eléctrica</td>
                            <td>C</td>
                            <td>P</td>
                            <td>P</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <!--Fila 17 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorpink">&nbsp;</td>
                            <td class="colorpink">&nbsp;</td>
                            <td class="colorpink"><a href="electromg5.php">Radio Magnetotelúrico (RMT)</a></td>
                            <td>Resistividad Eléctrica</td>
                            <td>C</td>
                            <td>P</td>
                            <td>P</td>
                            <td>P</td>
                            <td>C</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <!--Fila 18 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorpink">&nbsp;</td>
                            <td class="colorpink">Potenciales</td>
                            <td class="colorpink"><a href="potencial1.php">Gravimetría</a> </td>
                            <td>Densidad</td>
                            <td>P</td>
                            <td>P</td>
                            <td>C</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <!--Fila 19 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorpink tipo">Natural</td>
                            <td class="colorpink">&nbsp;</td>
                            <td class="colorpink"><a href="potencial2.php">Magnetometría</a> </td>
                            <td>Susceptibilidad Magnética</td>
                            <td>P</td>
                            <td>P</td>
                            <td>C</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>C</td>
                        </tr>
                        <!--Fila 20 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorpink">&nbsp;</td>
                            <td class="colorpink">Sísmicos</td>
                            <td class="colorpink">Vibración Ambiental (Espectro de sitio, SPAC, ReMi)</td>
                            <td>Módulo elástico, Densidad</td>
                            <td>C</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <!--Fila 21 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorpink">&nbsp;</td>
                            <td class="colorpink">&nbsp;</td>
                            <td class="colorpink">Monitoreo Sismológico</td>
                            <td>Módulo elástico, Densidad</td>
                            <td>C</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>r</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <!--Fila 22 -->
                        <!-- <tr>
                            <td>&nbsp;</td>
                            <td class="colorpink">&nbsp;</td>
                            <td class="colorpink">&nbsp;</td>
                            <td class="colorpink">Inclinómetro</td>
                            <td>Direccionalidad</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr> -->
                        <!--Fila 23 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorpink">&nbsp;</td>
                            <td class="colorpink">Espectrometria</td>
                            <td class="colorpink"> <a href="espectro.php">Espectrometria de Rayos Gamma</a></td>
                            <td>Composición Radioactiva</td>
                            <td>C</td>
                            <td>C</td>
                            <td>&nbsp;</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>P</td>
                            <td>C</td>
                        </tr>
                        <!--Fila 24 -->
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorred tipo">Controlada</td>
                            <td class="colorred">Electromagnéticos</td>
                            <td class="colorred"><a href="electromg4.php">Transitorio Electromagnético (TDEM)</a></td>
                            <td>Resistividad Eléctrica</td>
                            <td>P</td>
                            <td>P</td>
                            <td>P</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorpink tipo">Natural</td>
                            <td class="colorpink">Potenciales</td>
                            <td class="colorpink"><a href="potencial1.php">Gravimetría</a> </td>
                            <td>Densidad</td>
                            <td>&nbsp;</td>
                            <td>P</td>
                            <td>P</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="letter-spacing: -2em;" class="rotar"> soeréA </td>
                            <td class="colorpink">&nbsp;</td>
                            <td class="colorpink">&nbsp;</td>
                            <td class="colorpink"><a href="potencial2.php">Magnetometría</a> </td>
                            <td>Susceptibilidad Magnética</td>
                            <td>&nbsp;</td>
                            <td>P</td>
                            <td>P</td>
                            <td>P</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorred tipo">Controlada</td>
                            <td class="colorred">Acústicos</td>
                            <td class="colorred"><a href="">Sondeo Acústico Marino(SBP)</a></td>
                            <td>Impedancia Acústica</td>
                            <td>P</td>
                            <td>C</td>
                            <td>&nbsp;</td>
                            <td>C</td>
                            <td>P</td>
                            <td>C</td>
                            <td>P</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred"><a href="marinos1.php">Sondeo Hidrográfico</a></td>
                            <td>Impedancia Acústica</td>
                            <td>P</td>
                            <td>C</td>
                            <td>&nbsp;</td>
                            <td>C</td>
                            <td>P</td>
                            <td>C</td>
                            <td>P</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred">&nbsp;</td>
                            <td class="colorred">Sonar Lateral</td>
                            <td>Impedancia Acústica</td>
                            <td>&nbsp;</td>
                            <td>C</td>
                            <td>&nbsp;</td>
                            <td>C</td>
                            <td>P</td>
                            <td>C</td>
                            <td>P</td>
                        </tr>
                        <tr>
                            <td style="letter-spacing: -2em;" class="rotar">soniraM</td>
                            <td class="colorpink tipo">Natural</td>
                            <td class="colorpink">Potenciales</td>
                            <td class="colorpink"><a href="marinos4.php">Magnetometría Marina</a></td>
                            <td>Susceptibilidad Magnética</td>
                            <td>&nbsp;</td>
                            <td>C</td>
                            <td>&nbsp;</td>
                            <td>C</td>
                            <td>P</td>
                            <td>C</td>
                            <td>C</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="panel panel-default" style="border-color: #fff;">
                <div class="panel-body">

                    <!-- metod1 -->
                    <section class="heading-title parallax" style="background-image: url('img/metodos/inicial/transelg.jpg');">
                        <div class="overlay azul">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Método: Transitorio Electromagnético en el Dominio del Tiempo</p>
                                <p class="size-25">Caracterización electro estratigráfica del subsuelo</p>
                                <p class="size-25">100m a 1500m</p>
                                <div class="col-sm-3">
                                    <a href="electromg4.php" class="btn btn-3d btn-reveal btn-aqua"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- metod2 -->
                    <section class="heading-title parallax" style="background-image: url('img/metodos/inicial/amfct.jpg');">
                        <div class="overlay azul">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Audio Magnetotelúrico de Fuente Controlada (Tensorial)</p>
                                <p class="size-25">Sistema de Inyección de Corriente Multidipolar</p>
                                <p class="size-25">100m a 3000m</p>
                                <div class="col-sm-3">
                                    <a href="electromg2.php" class="btn btn-3d btn-reveal btn-aqua"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- metod3 -->
                    <section class="heading-title parallax" style="background-image: url('img/metodos/inicial/radarpt.jpg');">
                        <div class="overlay azul">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Método: Radar de Penetracion Terrestre</p>
                                <p class="size-25">Exploración Electromagnética somera de Alta Resolución</p>
                                <p class="size-25">1m a 50m</p>
                                <div class="col-sm-3">
                                    <a href="electromg7.php" class="btn btn-3d btn-reveal btn-aqua"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- metod4 -->
                    <section class="heading-title parallax" style="background-image: url('img/metodos/inicial/electromulti.jpg');">
                        <div class="overlay azul">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Perfilaje Electromagnético Multiprofundidad </p>
                                <p class="size-25">Caracterización de la Conductividad Eléctrica del Subsuelo</p>
                                <p class="size-25">0.1m a 40m </p>
                                <div class="col-sm-3">
                                    <a href="#" class="btn btn-3d btn-reveal btn-aqua"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- metod5 -->
                    <section class="heading-title parallax" style="background-image: url('img/metodos/inicial/sisreflex.jpg');">
                        <div class="overlay verde">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Sísmica Somera de Reflexión</p>
                                <p class="size-25">Caracterización Elástica del Subsuelo</p>
                                <p class="size-25">10 a 70m</p>
                                <div class="col-sm-3">
                                    <a href="sismico5.php" class="btn btn-3d btn-reveal btn-green"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- metod6 -->
                    <section class="heading-title parallax" style="background-image: url('img/metodos/inicial/sisrefrac.jpg');">
                        <div class="overlay verde">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Sísmica Somera de Refracción</p>
                                <p class="size-25">Caracterización Sismo - Elástica y Estimación de Espesores</p>
                                <p class="size-25">10 a 70m</p>
                                <div class="col-sm-3">
                                    <a href="sismico4.php" class="btn btn-3d btn-reveal btn-green"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- metodo 7 -->
                    <section class="heading-title parallax" style="background-image: url('img/metodos/inicial/ondasuper.jpg');">
                        <div class="overlay verde">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Análisis Multicanal de Ondas Superficiales</p>
                                <p class="size-25">Dispersión de ondas sísmicas superficiales</p>
                                <p class="size-25">5m a 40m</p>
                                <div class="col-sm-3">
                                    <a href="sismico3.php" class="btn btn-3d btn-reveal btn-green"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                                <br> </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- metodo8 -->
                    <section class="heading-title parallax" style="background-image: url('img/metodos/inicial/sondelctv.jpg');">
                        <div class="overlay amarillo">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Sondeo Eléctrico Vertical</p>
                                <p class="size-25">Técnica eléctrica de corriente directa y de amplio uso en la caracterización del subsuelo</p>
                                <p class="size-25">10m a 1000m</p>
                                <div class="col-sm-3">
                                    <a href="electrico1.php" class="btn btn-3d btn-reveal btn-yellow"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- metodo9 -->
                    <section class="heading-title parallax" style="background-image: url('img/metodos/inicial/tomoelect.jpg');">
                        <div class="overlay amarillo">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25"> Tomografía de Resistividad Eléctrica</p>
                                <p class="size-25">Caracterización electro estratigráfica del subsuelo</p>
                                <p class="size-25">1m a 500m</p>
                                <div class="col-sm-3">
                                    <a href="electrico4.php" class="btn btn-3d btn-reveal btn-yellow"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- metodo10 -->
                    <section class="heading-title parallax" style="background-image: url('img/metodos/inicial/poladomin.jpg');">
                        <div class="overlay amarillo">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Polarización Inducida en el Dominio del Tiempo</p>
                                <p class="size-25">Mediciones de la impedancia eléctrica del subsuelo.</p>
                                <p class="size-25">1m a 500m</p>
                                <div class="col-sm-3">
                                    <a href="#" class="btn btn-3d btn-reveal btn-yellow"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- metodo11 -->
                    <section class="heading-title parallax" style="background-image: url('img/metodos/inicial/polindespect.jpg');">
                        <div class="overlay amarillo">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Polarización Inducida Espectral</p>
                                <p class="size-25">Caracterización geofísica y monitoreo de sitios contaminados</p>
                                <p class="size-25">1m a 500m</p>
                                <div class="col-sm-3">
                                    <a href="electrico3.php" class="btn btn-3d btn-reveal btn-yellow"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- metodo12 -->
                    <section class="heading-title parallax" style="background-image: url('img/metodos/inicial/sisdownhole.jpg');">
                        <div class="overlay verde">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Sísmica de Pozo (Down Hole, Cross Hole)</p>
                                <p class="size-25">Obtención de Módulos Elásticos y Caracterización Geosismica</p>
                                <p class="size-25">10m a 300m</p>
                                <div class="col-sm-3">
                                    <a href="sismico2.php" class="btn btn-3d btn-reveal btn-green"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color ">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- metodo13 -->
                    <section class="heading-title parallax " style="background-image: url('img/metodos/inicial/gefiscpozo.jpg');">
                        <div class="overlay dorado">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25"> Registros Geofísicos de Pozo</p>
                                <p class="size-25">Evaluación geofísica In-SITU multíparamétrica</p>
                                <div class="col-sm-3">
                                    <a href="registro.php" class="btn btn-3d btn-reveal btn-brown"> <i class="fa fa-battery-full"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- metod14 -->
                    <section class="heading-title parallax" style="background-image: url('img/metodos/inicial/magnetofnatural.jpg');">
                        <div class="overlay azul">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Magnetotelúrico de Fuente Natural</p>
                                <p class="size-25">Exploración profunda de Resistividad Eléctrica</p>
                                <p class="size-25">1 km a 50km</p>
                                <div class="col-sm-3">
                                    <a href="electromg1.php" class="btn btn-3d btn-reveal btn-aqua"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- metod14 -->
                    <section class="heading-title parallax" style="background-image: url('img/metodos/inicial/audiofnatural.jpg');">
                        <div class="overlay azul">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Audio Magnetotelurico de Fuente Natural</p>
                                <p class="size-25">Caracterización electromagnética del subsuelo</p>
                                <p class="size-25">100m a 3km.</p>
                                <div class="col-sm-3">
                                    <a href="#" class="btn btn-3d btn-reveal btn-aqua"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- metod15-->
                    <section class="heading-title parallax" style="background-image: url('img/metodos/inicial/radiomagneto.jpg');">
                        <div class="overlay azul">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Radio-Magnetotelúrico</p>
                                <p class="size-25">Caracterización de estructuras y cuerpos someros</p>
                                <p class="size-25">10 m a 250m.f</p>
                                <div class="col-sm-3">
                                    <a href="electromg5.php" class="btn btn-3d btn-reveal btn-aqua"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- metodo16 -->
                    <section class="heading-title parallax" style="background-image: url('img/metodos/inicial/gravietria.jpg');">
                        <div class="overlay rojo">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Gravimetría</p>
                                <p class="size-25"> Variaciones en densidad de los materiales geológicos del subsuelo</p>
                                <!-- <p class="size-25">Caracterización Regional</p> -->
                                <div class="col-sm-3">
                                    <a href="potencial1.php" class="btn btn-3d btn-reveal btn-red"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- metodo17 -->
                    <section class="heading-title parallax" style="background-image: url('img/metodos/inicial/magnometr.jpg');">
                        <div class="overlay rojo">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Magnetometría</p>
                                <p class="size-25">Medición de la Susceptibilidad Magnética de los materiales geológicos </p>
                                <!-- <p class="size-25">Caracterización Regional</p> -->
                                <div class="col-sm-3">
                                    <a href="potencial2.php" class="btn btn-3d btn-reveal btn-red"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- metodo18 -->
                    <section class="heading-title parallax" style="background-image: url('img/metodos/inicial/vivracionamb.jpg');">
                        <div class="overlay verde">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Vibración ambiental (espectros de sitio, SPAC, REMI, monitoreo sismológico)</p>
                                <p class="size-25">Registro de Ruido Sísmico Ambiental</p>
                                <p class="size-25">10m a 3000m</p>
                                <div class="col-sm-3">
                                    <a href="#" class="btn btn-3d btn-reveal btn-green"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- metodos19 -->
                    <section class="heading-title parallax " style="background-image: url('img/metodos/inicial/rayosgama.jpg');">
                        <div class="overlay morado">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Espectrometría de Rayos Gamma</p>
                                <p class="size-25">Caracterización Geológica de minerales radioactivos</p>
                                <!-- <p class="size-25">Caracterización Superficial </p> -->
                                <div class="col-sm-3">
                                    <a href="espectro.php" class="btn btn-3d btn-reveal btn-purple"> <i class="fa fa-battery-full"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!--metodo20  -->
                    <section class="heading-title parallax " style="background-image: url('img/metodos/inicial/electromulti.jpg');">
                        <div class="overlay morado">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Método: Sistema de Posicionamiento Global</p>
                                <p class="size-25">Resolución: +/- 5 mm</p>
                                <p class="size-25">Referencia geográfica </p>
                                <div class="col-sm-3">
                                    <a href="#" class="btn btn-3d btn-reveal btn-purple"> <i class="fa fa-battery-full"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <!-- verde -->
                    <section class="heading-title parallax" style="background-image: url('img/metodos/inicial/electromulti.jpg');">
                        <div class="overlay verde">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Método: Autocorrelación Espacial</p>
                                <p class="size-25">Fuente: Natural</p>
                                <p class="size-25">Profundidad de Investigación: 0-100 m </p>
                                <div class="col-sm-3">
                                    <a href="#" class="btn btn-3d btn-reveal btn-green"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <section class="heading-title parallax" style="background-image: url('img/banner/slider12.jpg');">
                        <div class="overlay azul">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Método: Audio-Magnetotelúrico Escalar</p>
                                <p class="size-25">Fuente: Controlada</p>
                                <p class="size-25">CProfundidad de Investigación: 0.5-2.5 km</p>
                                <div class="col-sm-3">
                                    <a href="#" class="btn btn-3d btn-reveal btn-aqua"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="divider divider-center divider-color">
                        <!-- divider --><i class="fa fa-chevron-down"></i> </div>
                    <section class="heading-title parallax" style="background-image: url('img/banner/slider12.jpg');">
                        <div class="overlay azul">
                            <!-- dark overlay [1 to 9 opacity] -->
                        </div>
                        <div class="container">
                            <div class="text-left">
                                <p class="size-25">Método: Audio-Magnetotelúrico Tensorial</p>
                                <p class="size-25">Fuente: Controlada</p>
                                <p class="size-25">Profundidad de Investigación: 0.5-2.5 km</p>
                                <div class="col-sm-3">
                                    <a href="#" class="btn btn-3d btn-reveal btn-aqua"> <i class="et-megaphone"></i> <span>Ver Más</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <?php  include 'inc/footer.php'; ?>
    <!-- /FOOTER -->
    </div>
    <!-- /wrapper -->
    <!-- SCROLL TO TOP -->
    <a href="#" id="toTop"></a>
    <!-- PRELOADER -->
    <div id="preloader">
        <div class="inner"> <span class="loader"></span> </div>
    </div>
    <!-- /PRELOADER -->
    <!-- JAVASCRIPT FILES -->
    <script type="text/javascript">
        var plugin_path = 'assets/plugins/';
    </script>
    <script type="text/javascript" src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
</body>

</html>