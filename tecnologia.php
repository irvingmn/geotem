<?php $pagename = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>Geotem - Tecnología</title>
    <meta name="keywords" content="HTML5,CSS3,Template" />
    <meta name="description" content="" />
    <meta name="Author" content="" />
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
    <link href="assets/css/hover.css" rel="stylesheet" media="all">
    <style>
        .equip {
            display: flex !important;
            cursor: pointer;
            justify-content: space-between;
        }
        @font-face {
            font-family: 'din';
            src: url('assets/fonts/DINPro-CondMedium.otf');
        }
    </style>
</head>


<body class="smoothscroll enable-animation">
    <!-- wrapper -->
    <div id="wrapper">
 
        <?php include 'inc/header.php'; ?>
        <section class=" baner page-header page-header-xlg parallax  ">
            <div class="overlay dark-1"><!-- dark overlay [1 to 9 opacity] --></div>

            <div class="container">

                <h1>Tecnología</h1>
                <span class="font-lato size-18 weight-300">Instrumental y Equipo Geofísico</span>

                <!-- breadcrumbs -->
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Tecnología</li>
                </ol><!-- /breadcrumbs -->

            </div>
        </section>
        <style>
            .fondo {
                position: relative;
                width: 420px;
                z-index: 1;
            }
            .baner{
                background-image:url('img/Banner-Tecnologia.jpg');
                 background-size: contain !important; 
                 background-position-y: 30px;
            }

            @media(max-width: 1000px) {
                .baner{
                    background-size: cover; 
                }
            }
        </style>
        <!-- -->
        <section>
            <div class="container">
                <div id="portfolio">
                    <map name="planetmap">
                        <area shape="rect" coords="100,100,100" href="sun.htm" class="" alt="Sun">
                        <!-- <area shape="circle" coords="300,300,300" class="hvr-pulse" href="mercur.htm" alt="Mercury"> -->
                        <area shape="circle" coords="124,58,8" href="venus.htm" alt="Venus"> </map>
                    <ul class="nav nav-pills mix-filter margin-bottom-60 equip">
                        <li data-filter="electromg" class="filter metod">
                            <a href="#"><img src="img/iconos/electromagnetico.png" width="130" alt="sara"> </a>
                        </li>
                        <li data-filter="potencial" class="filter">
                            <a href="#"><img src="img/iconos/potenciales.png" width="130" alt="radar"> </a>
                        </li>
                        <li data-filter="sismico" class="filter">
                            <a href="#"><img src="img/iconos/sismicos.png" width="130" alt="monex"> </a>
                        </li>
                        <li data-filter="electrico" class="filter">
                            <a href="#"><img src="img/iconos/electrico.png" width="130" alt="metronux"> </a>
                        </li>
                        <li data-filter="mar" class="filter">
                            <a href="#"><img src="img/iconos/marinos.png" width="130" alt="GF"> </a>
                        </li>
                        <li data-filter="gps" class="filter">
                            <a href="#"><img src="img/iconos/levantGPS.png" width="130" alt="GEM"> </a>
                        </li>
                        <li data-filter="espectro" class="filter">
                            <a href="#"><img src="img/iconos/espectrometria.png" width="130" alt="GEM"> </a>
                        </li>
                    </ul>
                    <!-- <ul class="nav nav-pills mix-filter margin-bottom-60 equip">



                            <li></li>



                            <li></li>



                            <li data-filter="sara" class="filter metod"><a href="#"><img src="img/iconos/electromagnetico.png" width="160" alt="sara"></a></li>



                            <li data-filter="gem" class="filter"><a href="#"><img src="img/iconos/levantGPS.png" width="160" alt="GEM"></a></li>



                            <li></li>



                            <li></li>



                        </ul> -->
                    <div class="mix-grid">
                        <div class="row mix sismico">
                            <!-- item1 -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/equip/sara/DoReMi-ayb.png"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/doremi.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/equip/sara/DoReMi-ayb.png" width="800" height="533" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="portfolio-single-slider.php">Sismógrafo DoReMi</a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>Desarrollado por SARA en Italia, el sistema DOREMI es un geófono de transmisión digital, portable, de fácil operación por lo cual se ajusta conforme a los objetivos de investigación. Cada canal representa un sismógrafo independiente conectado a otros elementos a través del cable para de esta manera crear una red, configuración que permite ajustarse a cualquier tamaño de proyecto. En el sistema DOREMI cada elemento es independiente, es posible agregar o remover elementos y diseñar tu topología simplemente agregando o removiendo adaptadores adicionales.</p>
                                </div>
                            </div>
                            <!-- /description -->
                        </div>
                        <!-- /item -->
                        <div class="row mix potencial">
                            <!-- item2 -->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="portfolio-single-slider.php">MAGNETOMETRO OVERHOUSER GSM-19</a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>El magnetómetro OVERHAUSER es un revolucionario instrumento geofísico desarrollado por GEM, del tipo protón que utiliza una mezcla especial de energización y medición, ofreciendo un gran número de beneficios significativos sobre otros tipos de dispositivos. Es de calidad primaria para la exploración minera y observatorios magnéticos.</p>
                                </div>
                            </div>
                            <!-- /description -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/equip/gem/GSM19.png"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/gsm.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/equip/gem/GSM19.png" width="900" height="auto" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                        </div>
                        <!-- /item -->
                        <div class="row mix electrico">
                            <!-- item3 -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/equip/gf/Ares II.png"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/ares2.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/equip/gf/Ares II.png" width="800" height="533" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="portfolio-single-slider.php">Sistema de Resistividad Automático de 10 Canales ARES II</a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>ARES II representa un sistema de registro de Resistividad automático bien equipado. Su ventaja radica en que puede ser aplicado para estudios 2D y 3D (manteniendo operativos más de 65,000 electrodos), aunado a esto su fácil operación en campo (sin la necesidad de un PC), la alimentación proporcionada por una batería de 12 V (o por un generador), el soporte que ofrece para arreglos especiales de electrodos …..hace del sistema ARES II una herramienta de gran utilidad para la exploración geofísica.</p>
                                </div>
                            </div>
                            <!-- /description -->
                        </div>
                        <!-- /item -->
                        <div class="row mix electromg">
                            <!-- item4 -->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="portfolio-single-slider.php">Grabador de datos Magnetotelúricos ADU-07e</a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>Resultado de 30 años de investigación el ADU-07e es un equipo que colecta oscilaciones naturales del campo magnético terrestre y del campo eléctrico. Es un sistema de radio frecuencia, donde se conectan sensores eléctricos y magnéticos al acondicionador de señal que sirve para adquirir datos magnetotelúricos. </p>
                                </div>
                            </div>
                            <!-- /description -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/equip/metro/ADU07e.png"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/adu07.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/equip/metro/ADU07e.png" width="800" height="533" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                        </div>
                        <!-- /item -->
                        <div class="row mix electromg">
                            <!-- item5 -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/equip/monex/TerraTEM.png"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/terratem.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/equip/monex/TerraTEM.png" width="800" height="533" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="portfolio-single-slider.php">Equipo de Adquisición por Transitorio Electromagnético TerraTEM</a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>El TerraTEM es un sistema robusto de adquisición por transitorio electromagnético de alta resolución en lo que se refiere a imágenes de conductividad. Las aplicaciones para el TerraTEM incluyen la exploración mineral, investigaciones de ingeniería estudio de agua subterránea y estudio del medio ambiente. Este sistema es resultado de años de investigación combinados con la experiencia en lo que se refiere a la interpretación de datos geofísicos.</p>
                                </div>
                            </div>
                            <!-- /description -->
                        </div>
                        <!-- /item -->
                        <div class="row mix radar">
                            <!-- item6 -->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="portfolio-single-slider.php">Georadar Python-3</a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>Es un radar portable digital fácil de operar especialmente para sondeos a profundidad (mayores a 50 m) en condiciones de suelo favorables. La unidad está diseñada para resolver un amplio rango de tareas geotécnicas, geológicas, de ingeniería y otras donde sea necesario el monitoreo no destructivo. Durante la adquisición el operador obtiene una imagen en tiempo real de las condiciones del subsuelo.</p>
                                </div>
                            </div>
                            <!-- /description -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/equip/radar/Python-3.png"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href=""> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/equip/radar/Python-3.png" width="800" height="533" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                        </div>
                        <!-- /item -->
                        <div class="row mix sismico">
                            <!-- itemsa -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="assets/images/demo/mockups/1200x800/7-min.jpg"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/sl06.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/equip/sara/SL06.png" width="800" height="533" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="portfolio-single-slider.php">Sismógrafo SL-06</a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>El sistema SL06 está diseñado para detectar y registrar terremotos y vibraciones. Es compacto, seguro y flexible, gracias a su código abierto en plataforma LINUX , el registro de la señal sísmica es mediante una simple USB.</p>
                                </div>
                            </div>
                            <!-- /description -->
                        </div>
                        <!-- /item -->
                        <div class="row mix gem">
                            <!-- item7 -->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="portfolio-single-slider.php">Magnetómetro de Protones GSM-19T</a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>Los Magnetómetro de protones con precisión avanzada como el GSM-19T es uno de los principales instrumentos del mundo para la investigación y la exploración del subsuelo. Entre sus propiedades está la energetización de protón altamente efectiva con 3 modos de adquisición de datos (caminante, móvil, estación base); con alta capacidad de almacenamiento en memoria y con gps de alta resolución (0.06m) integrado. Uno de los primero magnetómetros en el mundo en ofrecer esta tecnología efectiva que optimiza la adquisición de datos.</p>
                                </div>
                            </div>
                            <!-- /description -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/equip/radar/GSM19T.png"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/gsm.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/equip/gem/GSM19T.png" width="800" height="533" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                        </div>
                        <!-- /item -->
                        <div class="row mix electromg">
                            <!-- item8 -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/equip/gf/CMD-Duo.png"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/cmd.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/equip/gf/CMD-Duo.png" width="800" height="533" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="portfolio-single-slider.php">Conductivimetro Electromagnético de Exploración Profunda CMD-DUO</a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>El CMD-DUO es un conductivímetro electromagnético de fácil operación con distancia variable entre sus bobinas, permitiendo de esta manera sondeos multi-profundidad con resultados referidos a valores de conductividad aparente.</p>
                                </div>
                            </div>
                            <!-- /description -->
                        </div>
                        <!-- /item -->
                        <div class="row mix electromg">
                            <!-- item12 -->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="portfolio-single-slider.php">Georadar de penetracion terrestre Pro Ex & RTA 30-100 MHz </a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>El sistema MALA ProEX es un sistema radar de penetracion terrestre de alto rango, muy superior a cualquier otro de su categoría su diseño y propiedades técnicas lo convierte en la unidad mas versátil del mercado.</p>
                                </div>
                            </div>
                            <!-- /description -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/tecgeotem/proex.jpg"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/pro-rta.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/tecgeotem/proex.jpg" width="800" height="533" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                        </div>
                        <!-- /item -->
                        <div class="row mix electromg">
                            <!-- item9 -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/equip/metro/TXB-TXM.png"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/tx.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/equip/metro/TXB-TXM.png" width="800" height="533" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="portfolio-single-slider.php">Caja Controladora de Transmisión TXB-07</a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>El sistema TXM-22 es una fuente de poder multipropósito, diseñada para utilizarse en conexión con la unidad de control TXB-07 formando de esta manera un poderoso transmisor para aplicaciones geofísicas, tal como lo es el Método Magnetotelúrico de fuente controlada (CSAMT).</p>
                                </div>
                            </div>
                            <!-- /description -->
                        </div>
                        <!-- /item -->
                        <div class="row mix mar">
                            <!-- item12 -->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="tecnologia/aquascan.php">Side Scan Sonar Aqua Scan</a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>Diseñado exclusivamente para sondeos en aguas poco profundas (250m). Las frecuencias utilizadas van de los 100 kHz a 1 MHz. La resolución de este sistema esta en función de la longitud del pulso, entre mas corto sea este, mejor será la resolución. Generalmente la longitud del pulso se selecciona a manera de optimizar la resolución y el rango de manera que tan corto como sea el pulso menor es la distancia oblicua de la imagen de barrido lateral. La longitud del pulso va de 5 a 800 microsegundos. La resolución que se alcanza es de hasta 1 cm. Para cubrir ambos lados durante el barrido, se cuenta con dos transductores.</p>
                                </div>
                            </div>
                            <!-- /description -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/tecgeotem/aquascan.jpg"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/aquascan.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/tecgeotem/aquascan.jpg" width="800" height="533" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                        </div>
                        <!-- /item -->
                        <div class="row mix gem">
                            <!-- item10 -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/equip/gem/GSMP-35.png"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="#"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/equip/gem/GSMP-35.png" width="800" height="533" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="portfolio-single-slider.php">Magnetómetro de Potasio <span>GSMP-35</span></a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>El sistema de tierra GSMP-35 es el instrumento de más alta sensibilidad para las investigaciones del subsuelo en varios campos y ofrece frecuencias de muestreo rápido. El sistema está diseñado para los clientes que requieren el máximo absoluto en la calidad de datos, superior a la de los magnetómetro de Cesio convencionales.</p>
                                </div>
                            </div>
                            <!-- /description -->
                        </div>
                        <!-- /item -->
                        <div class="row mix sismico">
                            <!-- item11 -->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="portfolio-single-slider.php">Geófono de Pozo SS-HB</a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>El sensor SSBH mide las vibraciones en pozos para configuraciones Down-Hole, Up-Hole y Cross-Hole. Su estructura de acero inoxidable lo hace un sistema robusto y ligero, el cual puede ser equipado con geófonos de 4.5, 8 o 10 Hz. Puede ser utilizado con cualquier sismógrafo de exploración especialmente con el sistema DOREMI.</p>
                                </div>
                            </div>
                            <!-- /description -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/equip/sara/SS-HB.png"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/ss-bh.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/equip/sara/SS-HB.png" width="800" height="533" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                        </div>
                        <!-- /item -->
                        <div class="row mix espectro">
                            <!-- item12 -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/equip/gf/GammaSurveyor.png"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/gamma.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/equip/gf/GammaSurveyor.png" width="800" height="533" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="portfolio-single-slider.php">Espectrómetro Gamma Surveyor II</a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>Representa un sistema súper compacto para la medición de todo tipo de radiación. Debido a la gran experiencia en lo que se refiere a analizadores de rayos gamma y el desarrollo técnico en esta disciplina, el GAMMA SURVEYOR II ofrece una técnica de evaluación espectral única y eficiente con una rápida energía de estabilización. Estas propiedades se complementan con un método de operación transparente. Permite la determinación de concentraciones radiactivas por rayos gamma en el elementos como el Torio, el Uranio y el Potasio.</p>
                                </div>
                            </div>
                            <!-- /description -->
                        </div>
                        <!-- /item -->
                        <div class="row mix metro">
                            <!-- item13-->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="portfolio-single-slider.php">Transmisor Geofísico TXM-22 </a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>El sistema TXM-22 es una fuente de poder multipropósito, diseñada para utilizarse en conexión con la unidad de control TXB-07 formando de esta manera un poderoso transmisor para aplicaciones geofísicas, tal como lo es el Método Magnetotelúrico de fuente controlada (CSAMT).</p>
                                </div>
                            </div>
                            <!-- /description -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/equip/metro/TXB-TXM.png"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/tx.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/equip/metro/TXB-TXM.png" width="800" height="533" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                        </div>
                        <!-- /item -->
                        <div class="row mix potencial">
                            <!-- item14 -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/tecgeotem/cg5.jpg"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/cg-5.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/tecgeotem/cg5.jpg" width="800" height="533" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="portfolio-single-slider.php">Gravímetro Scintrex CG-5</a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>El gravímetro CG-5 maximiza la productividad en exploración, mediante una repetibilidad superior en datos adquiridos en campo las posiciones de las estaciones son medidas mediante un GPS interno. El sistema tiene una resolución de 1 microGal con una desviación estándar mayor a 5 microGales. Es el gravímetro mas ligero y eficiente en el mercado hoy en día. </p>
                                </div>
                            </div>
                            <!-- /description -->
                        </div>
                        <!-- /item -->
                        <div class="row mix electrico">
                            <!-- item15-->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="tecnologia/grx8.php">Transmisor  y Receptor para Polarización Inducida  GDD (TxII & GRx8-32)</a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>Se utiliza para medir resistividad en el dominio del tiempo mediante el efecto de polarización inducida (IP). El sistema trabaja con cualquier tipo de generador con fase regulada de 220-240 V/50-60 Hz. Es muy útil para entornos rocosos donde se requiere una salida de voltaje superior a los 2400 V. El transmisor es capaz de enviar una corriente de hasta 10 Amperes.El receptor GDD permite trabajar en cualquier condición de trabajo, es versátil ya que puede utilizar configuraciones 2D y 3D tales como Polo-Dipolo, Dipolo-Dipolo, Polo-Polo, Wenner, Schlumberger y gradiente y leer de forma simultanea mas de 32 dipolos.</p>
                                </div>
                            </div>
                            <!-- /description -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/tecgeotem/txllgrx.jpg"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/grx8.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/tecgeotem/txllgrx.jpg" width="800" height="533" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                        </div>
                        <!-- /item -->
                        <div class="row mix mar">
                            <!-- item16-->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/tecgeotem/bathy.jpg"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/tx.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/tecgeotem/bathy.jpg" style="width: 300px;" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="tecnologia/bathy.php">Sistema Batimétrico Bathy-500DF</a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>Información hidrográfica precisa es esencial para la cartografía náutica y seguridad de la navegación marítima. La ecosonda de doble frecuencia Bathy-500DF de SyQwest opera en rangos que van de los 5 hasta los 640 [m] de profundidad, y frecuencias en el rango de 33 kHz a 200 kHz, con una resolución de 0.001 unidades para profundidades menores a 100 [m] y 0.1 unidades para profundidades mayores a 100 [m]. El sistema Bathy-500DF tiene una velocidad de pulso de 1400 a 1600 m/s.</p>
                                </div>
                            </div>
                            <!-- /description -->
                        </div>
                        <!-- /item -->
                        <div class="row mix mar">
                            <!-- item16-->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="tecnologia/stratbox.php">Perfilador Acústico Marino Stratabox 3510 (Frecuencia Dual)</a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>ddddddddddddd</p>
                                </div>
                            </div>
                            <!-- /description -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/tecgeotem/strata3510.jpg"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/stratbox.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/tecgeotem/strata3510.jpg" width="800" height="533" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                        </div>
                        <!-- /item -->
                        <div class="row mix gps">
                            <!-- item17-->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/tecgeotem/promark500.jpg"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/promark.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/tecgeotem/promark500.jpg" style="width: 130px;" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="tecnologia/promark.php">Sistema de Posicionamiento Global ProMark 500</a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>Sistema de posicionamiento de frecuencia dual. Constituye una potente solución de levantamiento centimetrico RTK que ofrece posicionamiento GNSS preciso en un diseño inteligente y robusto sin cables.</p>
                                </div>
                            </div>
                            <!-- /description -->
                        </div>
                        <!-- /item -->
                        <div class="row mix mar">
                            <!-- item16-->
                            <div class="col-md-7">
                                <!-- description -->
                                <h2>



                                        <a href="tecnologia/stratbox.php">Magnetómetro Marino  Geometrics G-882</a>



                                    </h2>
                                <div class="margin-top-30">
                                    <!-- description -->
                                    <p>Este instrumento consiste en un magnetómetro de alta resolución (+/- 0.2 nT) (Geometrics G-882) diseñado para sondeos magnéticos marinos en aguas someras y profundas, el cual puede ser instalado tanto en embarcaciones ligeras como en embarcaciones de gran calado. La instalación y operación presentan facilidad y calidad, permitiendo explorar grandes áreas con buena resolución en poco tiempo. </p>
                                </div>
                            </div>
                            <!-- /description -->
                            <div class="col-md-5">
                                <!-- image -->
                                <div class="item-box">
                                    <figure> <span class="item-hover">



                                                <span class="overlay dark-5"></span> <span class="inner">
                                        <!-- lightbox -->
                                        <a
                                        class="ico-rounded lightbox"
                                        href="img/tecgeotem/geoma.JPG"
                                        data-plugin-options='{"type":"image"}'>
                                            <span
                                            class="fa fa-plus size-20"></span> </a>
                                        <!-- details -->
                                        <a class="ico-rounded" href="tecnologia/stratbox.php"> <span class="glyphicon glyphicon-option-horizontal size-20"></span> </a>
                                        </span>
                                        </span> <img class="img-responsive" src="img/tecgeotem/geoma.JPG" width="800" height="533" alt=""> </figure>
                                </div>
                            </div>
                            <!-- /image -->
                        </div>
                        <!-- /item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- / -->
        <!-- FOOTER -->
        <?php   include 'inc/footer.php'; ?>
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