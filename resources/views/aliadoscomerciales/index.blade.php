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
                                    <li><a class="smoth-scroll" href="#">TIENDA</a>
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


    <div class="home-section-backgroundac" data-stellar-background-ratio="0.6">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="header-text">
                                <p>¡Hola! Bienvenido a</p>
                                <h2><span class="typing"></span></h2>

                                <div class="margin-top-60">
                                    <a class="button button-style button-style-icon fa fa-long-arrow-right smoth-scroll" href="#">Tienda</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</header>

@yield ('aliadoscomerciales')

<section id="about" class="about-section">
    <br>
    <div class="section-title">
        <h2 align="center"><i class="fa fa-handshake-o" style="font-size:24px"> <strong>Aliados Comerciales</strong></i></h2>

    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="info-block">
                <h2 align="center"><strong>Región Salud</strong></h2>
                <iframe width="330" height="280" src="https://www.youtube.com/embed/ezZno68VQM8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

            </div>
        </div>

        <div class="col-md-6">
            <div class="about-me section-space-padding">
                <h2 align="center">Región Salud</h2>
                <p align="justify">
                    <strong>Región Salud</strong> es una empresa que busca fomentar la salud mediante la promoción de la misma.
                    Entra a nuestras redes sociales y encontraras entrevistas con médicos de la región,
                    tips de salud e información de interés llevada a ti de la forma más simple posible.
                    Disfruta de nuestro contenido en Facebook, YouTube, e Instragam<br>

                    <span class="fa fa-laptop" style="font-size:20px"></span><strong> </strong>
                    <a href="http://regionsalud.com.mx/">http://regionsalud.com.mx/</a>
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">

            <h2 align="center"><strong>Circulo de la Salud</strong></h2>
            <img class="img-responsive" src="{{ asset('images/bg/circulo-salud.jpg') }}" draggable="false" alt="circulo-de-la-salud-farmacia-herrera">


        </div>

        <div class="col-md-6">
            <div class="about-me section-space-padding">
                <h2 align="center">Circulo de la Salud</h2>
                <p align="justify">
                    Círculo de la Salud Oro es el programa nacional de beneficios con la
                    única multitarjeta, que ayuda a los pacientes a cumplir con el tratamiento
                    prescrito por el médico; recibiendo beneficios diferenciados disponibles en
                    las farmacias afiliadas en todo el país.<br>

                    <span class="fa fa-laptop" style="font-size:20px"></span><strong> </strong>
                    <a href="https://www.circulodelasalud.mx/">https://www.circulodelasalud.mx/</a>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">

            <h2 align="center"><strong>Enlace Vital</strong></h2>
            <img class="img-responsive" src="{{ asset('images/bg/enlace-vital2.png') }}" draggable="false" alt="enlace-vital-farmacia-herrera">


        </div>

        <div class="col-md-6">
            <div class="about-me section-space-padding">
                <h2 align="center">Enlace vital</h2>
                <p align="justify">
                    Programa de apego que brinda apoyo a tu salud y la de tu familia con
                    grandes beneficios por tus compras recurrentes en la red de farmacias
                    más grande a nivel Nacional.<br>

                    <span class="fa fa-laptop" style="font-size:20px"></span><strong> </strong>
                    <a href="https://enlacevital.com.mx/">https://enlacevital.com.mx/</a>

            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">

            <h2 align="center"><strong>Enlace Vital</strong></h2>
            <img class="img-responsive" src="{{ asset('images/bg/osias.jpeg') }}" draggable="false" alt="red-sias">
        </div>

        <div class="col-md-6">
            <div class="about-me section-space-padding">
                <h2 align="center">SIAS</h2>
                <p align="justify">
                    RED SIAS es un sistema innovador, eficaz y único para la atención de la salud.<br>
                </p>
                <p align="justify">
                    A través de nuestras membresías, te ofrecemos una amplia gama de servicios orientados
                    al manejo de la salud, atendiendo de manera integral a toda tu familia. <br> <br>
                    Además añadimos protección médica a aquellos miembros especiales de la familia: Tus mascotas.<br>





                    <span class="fa fa-laptop" style="font-size:20px"></span><strong> </strong>
                    <a href="http://redsias.com/">http://redsias.com/</a>
                </p>

            </div>
        </div>
    </div>

</section>

<hr>

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
