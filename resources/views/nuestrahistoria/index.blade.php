@include('store.partials.menu')

<!-- Home & Menu Section Start -->
<header id="home" class="home-section">

    <div class="header-top-area">
        <div class="container">
            <div class="row">

                <div class="col-sm-3">
                    <div class="logo">
                        <a href="{{ route('home') }}">Farmacia Herrera</a>
                    </div>
                </div>


                <div class="col-sm-9">
                    <div class="navigation-menu">
                        <div class="navbar">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">

                                    <li><a class="smoth-scroll" href="{{ route('historia') }}">NUESTRA HISTORIA</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="{{ route('aliados-comerciales') }}">ALIADOS COMERCIALES</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="{{ route('apoyodeporte') }}">APOYO AL DEPORTE</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="{{ route('store') }}">TIENDA</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="{{ route('tips') }}">TIPS</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="{{ route('contactanos') }}">Contacto</a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="home-section-backgroundh" data-stellar-background-ratio="0.6">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="header-text">
                                <p>¡Hola! Bienvenido a</p>
                                <h2><span class="typing"></span></h2>

                                <div class="margin-top-60">
                                    <a class="button button-style button-style-icon fa fa-long-arrow-right smoth-scroll" href="{{ route('store') }}">Tienda</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</header>

@yield ('historia')

<!-- About Start -->
<section id="about" class="about-section">
    <div class="row">

        <div class="col-md-6 col-sm-12 col-xs-12">
            <img class="img-responsive" src="{{ asset('images/bg/farmacia-herrera-cambio.jpg') }}" draggable="false" alt="historia-farmacia-herrera">
        </div>




        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="about-me section-space-padding">

                <h2 align="center"><strong>Nuestra Historia</strong></h2>

                <p align="justify"> En <strong>Farmacia Herrera </strong> encontrarás lo que necesitas para tu salud, higiene y bienestar, ya que
                    contamos con un amplio surtido de medicinas a excelentes precios, elaboradas por los mejores
                    laboratorios del mundo.<br>

                    El 15 de abril de 1965 fuimos fundados en el Centro Histórico de la <strong>Ciudad de Celaya, Guanajuato</strong>.
                    Desde entonces somos promotores activos del bienestar integral de las personas, fomentando el
                    deporte y la cultura para mantener una vida saludable.<br>

                    Desde su fundación, en nuestra <strong>botica</strong>, preparamos recetas con garantía de calidad de nuestras
                    fórmulas. Para ello, usamos envases de excelente calidad.
                    Además contamos con un área especializada en <strong>dermatología</strong>, la cual ofrece laboratorios de todo
                    el mundo, así como asesoría para el cuidado de la piel.<br>

                    Hemos evolucionado, poniendo a tu disposición una gran diversidad de <strong>productos, entre otros
                        medicamentos de alta especialidad, herbolarios, homeopatía y equipos de diagnóstico.</strong>


                </p>


            </div>
        </div>
    </div>

</section>
<!-- About End -->



<!-- About Start -->
<section id="about" class="about-section">
    <div class="row">

        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="about-me section-space-padding">

                <h2 align="center">Nosotros</h2>

                <p align="justify">
                    En <strong>Farmacia Herrera </strong> cuidamos de tu salud y bienestar, pues somos un negocio sólido con 55 años
                    en el mercado. Nuestro compromiso es continuar sirviendo, escuchar, asesorar personalmente y
                    ofrecer el mejor surtido, variedad y precio de productos frente a otros establecimientos de
                    México.<br>

                    Somos tu <strong>farmacia</strong> de siempre. Tradición <strong>celayense</strong> de toda la vida. Visítanos, brindamos atención
                    a médicos, damos cotizaciones sin costo, envíos y ventas al por mayor, aceptamos tarjetas de
                    crédito, débito, VISA y MasterCard.
                    <strong>Farmacia Herrera </strong> simplemente la mejor atención.<br>
                    ¡Tradición que da confianza!

                </p>

            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="col-md-6 col-sm-12 col-xs-12">
            <iframe width="500" height="400" src="https://www.youtube.com/embed/mQWyyQClMN4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>

    </div>


</section>
<!-- About End -->







<!-- Footer Start -->
<footer class="footer-section">
    <div class="container">
        <div class="row">

            <div class="col-md-4 text-left">
                <p><span><a href="#about" class="smoth-scroll">Aviso de Privacidad</a></span> | <span><a href="#portfolio" class="smoth-scroll">Polìticas de Uso</a></span></p>
            </div>

            <div class="col-md-4 text-center">
                <p>© Faramacia Herrera.</p>
                <div class="margin-top-80">
                    <ul class="social-icon">
                        <li><a href="https://www.facebook.com/farmaherrera/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/farmacia_herrera/?hl=es-la" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://farmaherrera.blogspot.com/" target="_blank" class="google-plus"><i class="fa fa-book"></i></a></li>
                        <li><a href="https://www.youtube.com/watch?v=mQWyyQClMN4&list=PLzll3Dv3I6F3yHFXcO7MeR4nGhiDAnBg4" target="_blank" class="youtube"><i class="fa fa-youtube"></i></a></li>

                    </ul>
                </div>
            </div>

            <div class="col-md-4 uipasta-credit text-right">
                <p>programmed by <a href="https://www.facebook.com/victorwatsdj.riverahernandez" target="_blank" title="victor">victor</a></p>
            </div>

        </div>
    </div>
</footer>
<!-- Footer End -->




<!-- Back to Top Start -->
<a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
<!-- Back to Top End -->


<!-- All Javascript Plugins  -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugin.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('http://maps.google.com/maps/api/js?key=AIzaSyC0HAKwKinpoFKNGUwRBgkrKhF-sIqFUNA') }}"></script>

<!-- Main Javascript File  -->
<script type="text/javascript" src="{{ asset('js/scriptsp.js') }}"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>



</body>
</html>
