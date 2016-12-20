<!-- Sesiones Usuarios  --> 
<?php
    session_start();
    include 'php/serv.php';
    if(isset($_SESSION['email'])){
    echo '<script> window.location="user/index.php"; </script>';
    }
?>
<!-- -->

<!DOCTYPE html>
<html ng-app="fetch" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- importante para el responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Uniquebiz is a responsive creative business template">
        <meta name="keywords" content="onepage, portfolio, corporate, business, parallax, creative, agency">
        <meta name="author" content="trendytheme.net">

        <title>Montaplast</title>

        <!--  favicon -->
        <link rel="shortcut icon" href="assets/images/ico/icon.png">
        <!--  apple-touch-icon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">


        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700' rel='stylesheet' type='text/css'>
        <!-- Animate CSS -->
        <link href="assets/css/animate.css" rel="stylesheet">
        <!-- jvectormap CSS -->
        <link href="assets/css/jquery-jvectormap.css" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- magnific-popup -->
        <link href="assets/magnific-popup/magnific-popup.css" rel="stylesheet">
        <!-- owl.carousel -->
        <link href="assets/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
        <link href="assets/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Style CSS -->
        <link href="style.css" rel="stylesheet">

        
    </head>

    <body ng-controller="dbCtrl"  id="page-top" data-spy="scroll" data-target=".navbar">

        <!-- top-bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <div class="cta-wrapper">
                            <ul class="list-inline">
                               
                                <li><a href="#"><i class="fa fa-phone"></i> +52 442 575 5643</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> montaplastdesarrollo@montaplas.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-5">
                        <div class="social-wrapper text-right">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- top-bar end-->


        <!-- Navigation start -->
        <nav class="navbar navbar-custom" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img src="assets/images/logo.gif" alt="logo">
                </div>

                <div class="collapse navbar-collapse" id="custom-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a class="page-scroll" href="#home">Inicio</a></li>
                        <li><a class="page-scroll" href="#about">Empresa</a></li>
                        <li><a class="page-scroll" href="#service">Tecnologias</a></li>
                        <li><a class="page-scroll" href="#work">Productos</a></li>
                        <li><a class="page-scroll" href="#team">Servicios</a></li>
                        <li><a class="page-scroll" href="#blog">Ofertas de Empleo</a></li>
                        <li><a class="page-scroll" href="#contact">Contacto</a></li>
                        <li><a data-toggle="modal" class="page-scroll" href="#ventana1">Ingresar</a></li>
                    </ul>
                </div>

            </div><!-- .container -->
        </nav>
        <!-- Navigation end -->

        <!--   Login Ventana Emergente -->
        <div class="modal fade" id="ventana1">
            <div class="modal-dialog" id="login">
                <div class="modal-content" >
                    <div class="modal-header"  >
                        <form action="php/validar.php" method="post" name="userForm">                                                            
                            <h3 class="title" style="color: white">Login.</h3>
                            <input type="email" class="form-control" placeholder="E-Mail" required  name="email">                            
                            <input type="password" class="form-control"  placeholder="Contraseña" required="" name="password">                            
                            <input type="password" class="form-control" placeholder="Numero de Empleado" required="" name="id_empleado">
                            </br>                        
                            <input align="center" type="submit" class="btn btn-primary" name="login" value="Ingresar">                            
                        </form> 
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Section -->
        <section id="home" class="slider-section">
          <div id="tt-carousel" class="carousel tt-carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#tt-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#tt-carousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <div class="carousel-intro">
                          <h1 class="animated fadeInDown animation-delay-6 carousel-title">Bienvenido a Montaplas!</h1>
                          <h2 class="animated fadeInDown animation-delay-4 crousel-subtitle">de Mexico </h2>
                          <p class="animated fadeInUp animation-delay-10">Los automóviles modernos necesitan soluciones de sistemas integrados. Durante más de cinco décadas, el centro de todo "Made by Montaplast" sistemas ha sido nuestras piezas de plástico de alta calidad.</p>
                          <a href="#vermas" class=" btn btn-default animated fadeInUp animation-delay-10">Leer mas</a>
                        </div><!-- /.carousel-intro -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6 col-sm-5 hidden-xs">
                      <div class="carousel-img layer-one">
                        <img src="assets/images/layer-2.png" class="img-responsive animated bounceInDown animation-delay-3" alt="Image">
                      </div><!-- /.carousel-img-->
                    </div><!-- /.col-md-6 -->
                  </div><!-- /.row -->
                </div><!-- /.container -->
              </div><!-- /.item -->

              <div class="item">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 col-sm-8">
                        <div class="carousel-intro">
                          <h1 class="animated fadeInDown animation-delay-6 carousel-title">Somos una Empresa</h1>

                          <h2 class="animated fadeInDown animation-delay-4  crousel-subtitle"> Internacional</h2>

                          <p class="animated fadeInUp animation-delay-10">Una Empresa Socialmente responsable con el cuidado del medio ambiente y  cada uno de nuestros productos están certificados a nivel mundial, teniendo plantas de trabajo en "China, Alemania, Estados Unidos y México.</p>
                          <a href="#vermas" class=" btn btn-default animated fadeInUp animation-delay-10">Leer mas</a>
                        </div><!-- /.carousel-intro -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6 col-sm-4 hidden-xs carousel-img-wrap">
                      <div class="carousel-img layer-two">
                        <img src="assets/images/banner.png" class="img-responsive animated fadeIn animation-delay-3" alt="Image" >
                      </div><!-- /.carousel-img-->
                    </div><!-- /.col-md-6 -->
                  </div><!-- /.row -->
                </div><!-- /.container -->
              </div><!-- /.item -->

            </div><!-- /.carousel-inner -->
          </div>
        </section>
        <!-- Slider Section End -->



        <!-- Feature Section -->
        <section id="vermas" class="feature-section section-padding">
            <div class="container">
                <div class="section-title">
                    <h2>El Sistema <span class="light-text" style="color:green">Montaplast&reg;</span></h2>
                    <div class="title-border-container">
                        <div class="title-border"></div>
                    </div>
                </div><!-- /.section-title -->

                <div class="row mt-70">
                    <div class="col-md-6">
                        <div class="feature-img">
                            <img class="img-responsive" src="assets/images/sistema.png" >
                        </div><!-- /.post-img -->
                    </div>

                    <div class="col-md-6">
                        <div class="featured-item mb-30">
                            <div class="icon square">
                                <i class="fa fa-institution"></i>
                            </div>
                            <div class="title">
                                <h3>Filosofia</h3>
                            </div>
                            <div class="desc">
                                <p class="post-contenido text-justify">El Sistema Montaplast La perfecta integración de todos los componentes - que es el Sistema Montaplast. Cuando un producto sale Montaplast, a menudo después de años de cuidadosa planificación, el desarrollo y la mejora constante, todos los involucrados puede decir que fue un esfuerzo de equipo original.</p>
                            </div>
                        </div><!-- /.featured-item -->

                        <div class="featured-item mb-30">
                            <div class="icon square">
                                <i class="fa fa-history"></i>
                            </div>
                            <div class="title">
                                <h3>Historia</h3>
                            </div>
                            <div class="desc">
                                <p class="post-contenido text-justify">Fundada en 1958 por Albert Stulz Sr. en Morsbach, Alemania, Montaplast es una empresa de tamaño medio que representa cinco décadas de experiencia en la producción de piezas de precisión de plástico y sistemas - en primer lugar para los electrodomésticos y ahora para la industria del automóvil. Cuando Montaplast de América del Norte, Inc. fue fundada en 1992 en Frankfort, Kentucky, el negocio de la familia se trasladó a una nueva fase expansiva. .</p>
                            </div>
                        </div><!-- /.featured-item -->

                        <div class="featured-item">
                            <div class="icon square">
                                <i class="fa fa-line-chart"></i>
                            </div>
                            <div class="title">
                                <h3>Tiempo</h3>
                            </div>
                            <div class="desc">
                                <p class="post-contenido text-justify">
                                1990 SOP del primer colector de admisión de aire de plástico en la tecnología de núcleo perdido para Porsche 
                                1992 Apertura de la oficina de ventas y de ingeniería en Detroit 
                                1993 Fundación de Montaplast de América del Norte, Inc. en Frankfort, Kentucky 1999 Inauguración del centro de la tecnología en la oficina central en Morsbach 2006 Establecimiento de Montaplast Automotive System (SIP) Co., Ltd. en Suzhou, China
                            </p>
                            </div>
                        </div><!-- /.featured-item -->
                    </div>

                </div>
            </div><!-- /.container -->
        </section>
        <!-- Feature Section End -->



        <!-- About Section -->
        <section id="about" class="about-section section-padding gray-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Sobre <span class="light-text" style="color:green">Montaplast</span></h2>
                    <div class="title-border-container">
                        <div class="title-border"></div>
                    </div>
                </div>

                <div class="row mt-70">

                    <div class="col-md-6">
                        <div class="post-desc">
                            <p class="post-contenido text-justify">¿Quieres saber el tiempo en Detroit? Puede recurrir a nuestros empleados en Puebla Mexico o Morsbach, Munich, Stuttgart, o Suzhou!
                              Ellos sabrán a ciencia cierta, porque nuestros pequeños equipos internacionales trabajan juntos en tres zonas de tiempo
                              que abarcan varios continentes. Montaplast puede haber crecido de manera impresionante en los últimos diez años, pero hemos
                               tenido mucho cuidado para asegurar que nuestras estructuras de comunicación crecen con ella.</p>

                            <ul class="check-list list-half clearfix mb-20">
                                <li>
                                    Simulación y Examenes 
                                </li>
                                <li>
                                    Simulación y pruebas
                                </li>
                                <li>
                                    Ingeniería y Diseño 
                                </li>
                                <li>
                                    Disciplina
                                </li>
                            </ul>

                            <div>
                                <a href="#service" class="btn btn-primary text-uppercase"> Detalles </a>
                            </div>
                        </div><!-- /.post-desc -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <div class="post-img">
                            <img class="img-responsive" src="assets/images/mac2.png" alt="">
                        </div><!-- /.post-img -->
                    </div><!-- /.col-md-6 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- About Section End -->


        <!-- Video Section -->
        <section class="video-section text-center">
            <div class="dark-overlay"></div>
            <div class="video-intro">
                <h3>Reproducir Demo Montaplast</h3>
                <a class="external-link popup-youtube" href="https://www.youtube.com/watch?v=lj5Izo6u7os" title=""><i class="fa fa-play-circle"></i></a>
            </div>
        </section>
        <!-- Video Section End -->


        <!-- Service Section -->
        <section id="service" class="service-section section-padding">
            <div class="container">
                <div class="section-title">
                    <h2>La <span class="light-text" style="color:green">Tecnología</span></h2>
                    <div class="title-border-container">
                        <div class="title-border"></div>
                    </div>
                </div><!-- /.section-title -->

                <div class="row mt-70">
                    <div class="col-md-4">
                        <div class="featured-item mb-30">
                            <div class="icon square">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <div class="title">
                                <h3>Simulación y pruebas</h3>
                            </div>
                            <div class="desc">
                                <p class="post-contenido text-justify">La simulación y las pruebas van de la mano en Montaplast. Desde el principio, nuestros ingenieros se aprovechan de la simulación numérica y el intercambio permanente de información y resultados con nuestros laboratorios de pruebas.</p>
                            </div>
                        </div><!-- /.featured-item -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-md-4">
                        <div class="featured-item mb-30">
                            <div class="icon square">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <div class="title">
                                <h3>Ingeniería y Diseño </h3>
                            </div>
                            <div class="desc">
                                <p class="post-contenido text-justify">Para Montaplast significaba que hemos diseñado y producido piezas de plástico de alto valor. Pero hoy en día, los clientes necesitan mucho más apoyo de su proveedor - y aquí es donde el Sistema Montaplast realmente puede demostrar su flexibilidad!.</p>
                            </div>
                        </div><!-- /.featured-item -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-md-4">
                        <div class="featured-item mb-30">
                            <div class="icon square">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <div class="title">
                                <h3>Tecnologías de producción</h3>
                            </div>
                            <div class="desc">
                                <p class="post-contenido text-justify">Descubrimos la tecnología de núcleos de metal con recubrimiento por extrusión de plástico a mediados de los años 80 en la industria de artículos deportivos - y luego se aplica a la producción de volumen de colectores de admisión de Porsche!.</p>
                            </div>
                        </div><!-- /.featured-item -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-md-4">
                        <div class="featured-item">
                            <div class="icon square">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <div class="title">
                                <h3>Estampación</h3>
                            </div>
                            <div class="desc">
                                <p class="post-contenido text-justify">Las formas adecuadas para prototipos y utillaje de serie se hacen en nuestro propio taller de herramientas, donde todos los pasos están controlados y supervisados por el up-to-the-minute de software und máquinas CNC-herramienta implementan contornos complicados.</p>
                            </div>
                        </div><!-- /.featured-item -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-md-4">
                        <div class="featured-item">
                            <div class="icon square">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <div class="title">
                                <h3>Gestión de Calidad</h3>
                            </div>
                            <div class="desc">
                                <p class="post-contenido text-justify">En Montaplast, preferimos evitar fallos en lugar de descubrir más tarde! Gestión de calidad total desde el primer momento garantiza que cada componente salir de nuestras instalaciones de producción cumpla con los requisitos más altos de calidad.</p>
                            </div>
                        </div><!-- /.featured-item -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-md-4">
                        <div class="featured-item">
                            <div class="icon square">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <div class="title">
                                <h3>Color Verde y Otros Colores</h3>
                            </div>
                            <div class="desc">
                                <p class="post-contenido text-justify">Proteger el medio ambiente es nuestro objetivo para numerosas técnicas que empleamos: Cuando los componentes interiores están backmolded directamente, adhesivos son reducidos. Cuando se utilizan plásticos en una base a la nanotecnología, o múltiples funciones están integradas en los componentes, se reduce el peso.</p>
                            </div>
                        </div><!-- /.featured-item -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->


                <!--promo theme color box start-->
                <div class="promo-box theme-bg mt-50">
                    <div class="promo-info">
                        <h3  class="white-color">Montaplast Mexico comprometido en el cuidado del Medio Ambiente</h3>
                    </div>                    
                </div>
                <!--promo theme color box end-->


            </div><!-- /.container -->
        </section>
        <!-- Service Section End -->


        <!-- Work Section -->
        <section id="work" class="latest-work-section section-padding">
            <div class="container">
                <div class="section-title">
                    <h2 class="white-color">Galería <span class="light-text" style="color: green">Motors.</span></h2>
                    <div class="title-border-container">
                        <div class="title-border"></div>
                    </div>
                </div><!-- /.section-title -->


                <div class="work-carousel mt-70">

                    <figure class="thumb-wrapper">
                        <img class="img-responsive" src="assets/images/portfolio/image1.jpg" alt="image">

                        <div class="bg-overlay">
                          <div class="portfolio-content">
                            <!-- Portfolio Icons -->
                            <div class="portfolio-icon-wrapper">
                              <a href="single-project.html"><i class="fa fa-link"></i></a>
                              <a class="tt-lightbox" href="assets/images/portfolio/image1.jpg"><i class="fa fa-search"></i></a>
                            </div>
                            <!-- End Portfolio Icons -->

                            <!-- Portfolio Title & Info -->
                            <div class="portfolio-text">
                              <h3>Portfolio Title</h3>
                              <div class="portfolio-meta">
                                <a href="#">UX Design</a>
                              </div>
                            </div>
                            <!-- End Portfolio Title & Info -->
                          </div>
                        </div>
                    </figure>

                    <figure class="thumb-wrapper">
                        <img class="img-responsive" src="assets/images/portfolio/image2.jpg" alt="image">

                        <div class="bg-overlay">
                          <div class="portfolio-content">
                            <!-- Portfolio Icons -->
                            <div class="portfolio-icon-wrapper">
                              <a href="single-project.html"><i class="fa fa-link"></i></a>
                              <a class="tt-lightbox" href="assets/images/portfolio/image2.jpg"><i class="fa fa-search"></i></a>
                            </div>
                            <!-- End Portfolio Icons -->

                            <!-- Portfolio Title & Info -->
                            <div class="portfolio-text">
                              <h3>Portfolio Title</h3>
                              <div class="portfolio-meta">
                                <a href="#">UX Design</a>
                              </div>
                            </div>
                            <!-- End Portfolio Title & Info -->
                          </div>
                        </div>
                    </figure>

                    <figure class="thumb-wrapper">
                        <img class="img-responsive" src="assets/images/portfolio/image3.jpg" alt="image">

                        <div class="bg-overlay">
                          <div class="portfolio-content">
                            <!-- Portfolio Icons -->
                            <div class="portfolio-icon-wrapper">
                              <a href="single-project.html"><i class="fa fa-link"></i></a>
                              <a class="tt-lightbox" href="assets/images/portfolio/image3.jpg"><i class="fa fa-search"></i></a>
                            </div>
                            <!-- End Portfolio Icons -->

                            <!-- Portfolio Title & Info -->
                            <div class="portfolio-text">
                              <h3>Portfolio Title</h3>
                              <div class="portfolio-meta">
                                <a href="#">UX Design</a>
                              </div>
                            </div>
                            <!-- End Portfolio Title & Info -->
                          </div>
                        </div>
                    </figure>

                    <figure class="thumb-wrapper">
                        <img class="img-responsive" src="assets/images/portfolio/image4.jpg" alt="image">

                        <div class="bg-overlay">
                          <div class="portfolio-content">
                            <!-- Portfolio Icons -->
                            <div class="portfolio-icon-wrapper">
                              <a href="single-project.html"><i class="fa fa-link"></i></a>
                              <a class="tt-lightbox" href="assets/images/portfolio/image4.jpg"><i class="fa fa-search"></i></a>
                            </div>
                            <!-- End Portfolio Icons -->

                            <!-- Portfolio Title & Info -->
                            <div class="portfolio-text">
                              <h3>Portfolio Title</h3>
                              <div class="portfolio-meta">
                                <a href="#">UX Design</a>
                              </div>
                            </div>
                            <!-- End Portfolio Title & Info -->
                          </div>
                        </div>
                    </figure>

                    <figure class="thumb-wrapper">
                        <img class="img-responsive" src="assets/images/portfolio/image5.jpg" alt="image">

                        <div class="bg-overlay">
                          <div class="portfolio-content">
                            <!-- Portfolio Icons -->
                            <div class="portfolio-icon-wrapper">
                              <a href="single-project.html"><i class="fa fa-link"></i></a>
                              <a class="tt-lightbox" href="assets/images/portfolio/image5.jpg"><i class="fa fa-search"></i></a>
                            </div>
                            <!-- End Portfolio Icons -->

                            <!-- Portfolio Title & Info -->
                            <div class="portfolio-text">
                              <h3>Portfolio Title</h3>
                              <div class="portfolio-meta">
                                <a href="#">UX Design</a>
                              </div>
                            </div>
                            <!-- End Portfolio Title & Info -->
                          </div>
                        </div>
                    </figure>                    
                </div><!-- /.latest-work-carousel -->

            </div><!-- /.container -->
        </section>
        <!-- Works Section End -->


        <!-- Team Section -->
        <section id="team" class="team-section section-padding">
            <div class="container">
                <div class="section-title center">
                    <h2>Meet <span>Our Team</span></h2>
                </div>
                <div class="team-section-intro text-center mt-30">
                    <p>Progressively exploit cost effective technologies after value-added e-markets. Distinctively productize B2C value rather than market positioning methods of empowerment. Quickly evolve next-generation data after long-term high-impact sources.</p>
                </div>
            </div>

            <div class="team-bg-container text-center">
                <img src="assets/images/team-bg.jpg" alt="">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="team-member text-center">
                            <div class="team-img">
                                <img src="assets/images/team/team-1.jpg" alt=""/>
                                <div class="team-intro">
                                    <h3>John Doe</h3>
                                </div>
                            </div><!-- /.team-img -->
                            <div class="team-hover">
                                <div class="desk">
                                    <h4>John Doe</h4>
                                    <p>Authoritatively re-engineer enterprise data for cross-unit products.</p>
                                </div>
                                <div class="social-link">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div><!-- /.team-hover -->
                        </div><!-- /.team-member -->
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">
                        <div class="team-member text-center">
                            <div class="team-img">
                                <img src="assets/images/team/team-2.jpg" alt=""/>
                                <div class="team-intro">
                                    <h3>Bin Jonathon</h3>
                                </div>
                            </div><!-- /.team-img -->
                            <div class="team-hover">
                                <div class="desk">
                                    <h4>Bin Jonathon</h4>
                                    <p>Authoritatively re-engineer enterprise data for cross-unit products.</p>
                                </div>
                                <div class="social-link">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div><!-- /.team-hover -->
                        </div><!-- /.team-member -->
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">
                        <div class="team-member text-center">
                            <div class="team-img">
                                <img src="assets/images/team/team-3.jpg" alt=""/>
                                <div class="team-intro">
                                    <h3>Farhana Bithi</h3>
                                </div>
                            </div><!-- /.team-img -->
                            <div class="team-hover">
                                <div class="desk">
                                    <h4>Farhana Bithi</h4>
                                    <p>Authoritatively re-engineer enterprise data for cross-unit products.</p>
                                </div>
                                <div class="social-link">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div><!-- /.team-hover -->
                        </div><!-- /.team-member -->
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">
                        <div class="team-member text-center">
                            <div class="team-img">
                                <img src="assets/images/team/team-4.jpg" alt=""/>
                                <div class="team-intro">
                                    <h3>Asfaq Nipun</h3>
                                </div>
                            </div><!-- /.team-img -->
                            <div class="team-hover">
                                <div class="desk">
                                    <h4>Asfaq Nipun</h4>
                                    <p>Authoritatively re-engineer enterprise data for cross-unit products.</p>
                                </div>
                                <div class="social-link">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div><!-- /.team-hover -->
                        </div><!-- /.team-member -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->

        </section>
        <!-- Team Section End -->



        <!-- Client Section -->
        <section class="client-section section-padding gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="client-testimonial">
                            <h2>What others say about us</h2>
                            <ul class="testimonial mt-30">
                                <li>
                                    <div class="avatar">
                                        <a href="#"><img src="assets/images/client-thumb-1.jpg" alt="Customer Thumb"></a>
                                    </div>
                                    <div class="content">
                                        <div class="testimonial-meta">
                                            Bin Burhan
                                            <span>trendytheme.com</span>
                                        </div>

                                        <p>Phosfluorescently create long-term high-impact leadership skills after cooperative niches. Quickly optimize technically sound web-readiness. </p>
                                    </div>
                                </li>

                                <li>
                                    <div class="avatar">
                                        <a href="#"><img src="assets/images/client-thumb-2.jpg" alt="Customer Thumb"></a>
                                    </div>
                                    <div class="content">
                                        <div class="testimonial-meta">
                                            John Doe
                                            <span>trendytheme.com</span>
                                        </div>

                                        <p>Phosfluorescently create long-term high-impact leadership skills after cooperative niches. Quickly optimize technically sound web-re.</p>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- /.client-testimonial -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <div class="client-logo">
                            <h2>Some of our best clinets</h2>
                            <ul class="clients plus-box grid-3 mt-30">
                                <li><a href="#"><img src="assets/images/client-logo/client-logo-1.png" alt="Clients"></a></li>
                                <li><a href="#"><img src="assets/images/client-logo/client-logo-2.png" alt="Clients"></a></li>
                                <li><a href="#"><img src="assets/images/client-logo/client-logo-3.png" alt="Clients"></a></li>
                                <li><a href="#"><img src="assets/images/client-logo/client-logo-4.png" alt="Clients"></a></li>
                                <li><a href="#"><img src="assets/images/client-logo/client-logo-5.png" alt="Clients"></a></li>
                                <li><a href="#"><img src="assets/images/client-logo/client-logo-6.png" alt="Clients"></a></li>
                            </ul>
                        </div><!-- /.client-logo -->
                    </div><!-- /.col-md-6 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- Client Section End -->



        <!-- Counter Section -->
        <section class="counter-section">
            <div class="dark-overlay"></div>
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-3 col-xs-3 counter-wrap">
                      <i class="fa fa-pencil"></i>
                      <span class="timer">1249</span>
                      <span class="count-description">Coffe Cups</span>
                    </div> <!-- /.col-xs-3 -->

                    <div class="col-lg-3 col-xs-3 counter-wrap">
                      <i class="fa fa-code"></i>
                      <span class="timer">5164</span>
                      <span class="count-description">Lines Code</span>
                    </div><!-- /.col-xs-3 -->

                    <div class="col-lg-3 col-xs-3 counter-wrap">
                      <i class="fa fa-pencil"></i>
                      <span class="timer">2142</span>
                      <span class="count-description">Pixel Design </span>
                    </div><!-- /.col-xs-3 -->

                    <div class="col-lg-3 col-xs-3 counter-wrap">
                      <i class="fa fa-user"></i>
                      <span class="timer">1142</span>
                      <span class="count-description">Happy Clients</span>
                    </div><!-- /.col-xs-3 -->
                </div>
            </div><!-- /.container -->
        </section>
        <!-- Counter Section -->


        <!-- News Section -->
        <section id="blog" class="news-section section-padding">
            <div class="container">
                <div class="section-title">
                    <h2>Latest <span class="light-text">News</span></h2>
                    <div class="title-border-container">
                        <div class="title-border"></div>
                    </div>
                </div>

                <div class="row mt-70">
                    <div class="col-md-6">
                        <ul class="latest-blog-list">
                            <li>
                                <div class="date">
                                    27
                                    <span>Nov 2015</span>
                                </div>
                                <div class="blog-post">
                                    <h3><a href="#">Phosfluorescently architect high-quality deliverables rather than client-based e-business.</a></h3>
                                    <ul class="post-meta">
                                        <li>By: <a href="#">admin</a></li>
                                        <li>Cetagory: <a href="#">Internet</a>, <a href="#">Technlogy</a></li>
                                        <li>Comment:<a href="#">0</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <div class="date">
                                    26
                                    <span>Nov 2015</span>
                                </div>
                                <div class="blog-post">
                                    <h3><a href="#">Phosfluorescently architect high-quality deliverables rather than client-based e-business.</a></h3>
                                    <ul class="post-meta">
                                        <li>By: <a href="#">admin</a></li>
                                        <li>Cetagory: <a href="#">Internet</a>, <a href="#">Technlogy</a></li>
                                        <li>Comment:<a href="#">0</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <div class="date">
                                    25
                                    <span>Nov 2015</span>
                                </div>
                                <div class="blog-post">
                                    <h3><a href="#">Phosfluorescently architect high-quality deliverables rather than client-based e-business.</a></h3>
                                    <ul class="post-meta">
                                        <li>By: <a href="#">admin</a></li>
                                        <li>Cetagory: <a href="#">Internet</a>, <a href="#">Technlogy</a></li>
                                        <li>Comment:<a href="#">0</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <div class="subscribe-wrapper text-center">
                            <h3>Get a news letter</h3>
                            <p>Objectively extend adaptive value whereas standardized models. Monotonectally pontificate high-payoff architectures vis-a-vis viral e-services.</p>

                            <form class="subscribe-form mailchimp" role="form" method="post">

                                <!-- to showing error message -->
                                <label for="subscribeEmail" class="error"></label>

                                <div class="input-group">
                                    <input type="email" class="form-control" id="subscribeEmail" name="EMAIL" placeholder="Type your email">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary text-uppercase">submit</button>
                                    </span>
                                </div><!-- /input-group -->

                                <!-- to showing success messages -->
                                <p class="subscription-success"></p>
                            </form>
                        </div>
                    </div>

                </div>


            </div><!-- /.container -->
        </section>
        <!-- News Section End -->


        <section class="map-section">
        <div class="text-center">
                <h2 style="color: green">Montaplast Maps</h2>
            </div>
            <div id="world-map-markers"></div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact-section">
            <div class="container">
                <div class="text-center">
                    <h3 class="text-uppercase white-color">Contacto</h3>
                </div>

                <div class="contact-form-wrapper text-center">
                    <form name="contact-form" id="contactForm" action="sendemail.php" method="POST">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label class="sr-only" for="name">Nombre</label>
                                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label class="sr-only" for="email">Correo Electronico</label>
                                  <input type="email" name="email" class="form-control" id="email" placeholder="Correo Electronico">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label class="sr-only" for="subject">Motivo</label>
                                  <input type="text" name="subject" class="form-control" id="subject" placeholder="Motivo">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                          <label class="sr-only" for="message">Mensaje</label>
                          <textarea name="message" class="form-control" id="message" rows="7" placeholder="Escribe El Mensaje"></textarea>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary btn-lg text-uppercase">Enviar</button>
                    </form>
                </div>

            </div><!-- /.container -->
        </section>
        <!-- Contact Section End-->


        <!-- Footer Section -->
        <footer class="footer-section">
            <div class="container">
                <div class="row" align="center">
                    <div class="col-sm-6" align="center">
                        <center><span align="center" class="copy-text">&copy; Copyright 2016 Montaplast de Mexico &reg;</span></center>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->


        <!-- Preloader -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- End Preloader -->
        <script type="text/javascript">
        
        </script>


        <!--Mis jQuery -->
        <script src="assets/js/jquery-2.1.3.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/smoothscroll.min.js"></script>
        <script src="assets/js/jquery.sticky.js"></script>
        <script src="assets/js/jquery.inview.min.js"></script>
        <script src="assets/js/jquery.countTo.min.js"></script>
        <script src="assets/js/jquery.shuffle.min.js"></script>
        <script src="assets/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/jquery.BlackAndWhite.min.js"></script>
        <script src="assets/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/js/ajaxchimp.js"></script>
        <script src="assets/js/jquery-jvectormap-2.0.3.min.js"></script>
        <script src="assets/js/jquery-jvectormap-world-mill-en.js"></script>            
        <script src="assets/js/scripts.js"></script>
            
    </body>

</html>
