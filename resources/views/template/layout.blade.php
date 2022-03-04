<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Blog UPT</title>


    <!-- Archivos Adicionales CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-lava.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

</head>

<body>

    <!-- ***** Inicio Encabezado ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Inicio Logo ***** -->
                        <a href="{{route('index')}}" class="logo">
                            Blog UPT
                        </a>
                        <!-- ***** Fin del logo ***** -->

                        <!-- ***** Inicio del Menu ***** -->
                        <ul class="nav">

                            <li class="scroll-to-section"><a href="{{route('index')}}" class="">Inicio</a></li>

                            <!-- ***** Opcion 1 ***** -->
                            <li class="submenu">
                                <a href="javascript:;">Unidad 1</a>
                                <ul>
                                    <li><a href="{{route('introduccion')}}" class="">Cliente/Servidor</a></li>
                                    <li><a href="{{route('componentes')}}" class="">Componentes </a></li>
                                </ul>
                            </li>

                            <!-- ***** Opcion 2 ***** -->
                            <li class="submenu">
                                <a href="javascript:;">Unidad 2</a>
                                <ul>
                                    <li><a href="{{route('estrategias')}}" class="">Estrategias</a></li>
                                    <li><a href="{{route('modelos')}}" class="">Modelos</a></li>
                                    <li><a href="{{route('mvc')}}" class="">MVC</a></li>
                                    <li><a href="{{route('sockets')}}" class="">Sockets</a></li>
                                </ul>
                            </li>

                        </ul>
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Fin del Encabezado ***** -->


    <!-- ***** Area de Bienvenida ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Inicio del encabezadso de texto ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-14 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">

                        @yield('inicio')
                        
                    </div>

                </div>
            </div>
        </div>
        <!-- ***** Fin del encabezado de texto ***** -->
    </div>
    <!-- ***** Fin del area de bienvenida ***** --> 

    <div class="left-image-decor"></div>
    


    <!-- ***** Indice ***** -->
    
            @yield('indice')



    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="right-heading">
                        @yield('contenido')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->

    <div class="right-image-decor"></div>

    
    <!-- ***** Inicio pie de pagina ***** -->
    <footer id="contact-us">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    
                    <!-- ***** Contact Form End ***** -->
                    <div class="right-content col-lg-6 col-md-12 col-sm-12">
                        <h2><em>Gracias por visitar nuestro Blog UPT</em></h2>
                        <p>
                            <br><br>Esperemos que nuestro Blog haya sido de vuestro agrado</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>
                            <span>Copyright &copy; 2020 Blog UPT</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</body>
<script>
$(document).ready(function(){ irArriba(); }); //Hacia arriba

function irArriba(){
  $('.ir-arriba').click(function(){ $('body,html').animate({ scrollTop:'0px' },1000); });
  $(window).scroll(function(){
    if($(this).scrollTop() > 0){ $('.ir-arriba').slideDown(600); }else{ $('.ir-arriba').slideUp(600); }
  });
  $('.ir-abajo').click(function(){ $('body,html').animate({ scrollTop:'1000px' },1000); });
}

</script>
</html>