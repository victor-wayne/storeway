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


@yield ('tips')

<!-- About Start -->
<section id="about" class="about-section">
    <div class="row">

        <div class="col-md-6 col-sm-12 col-xs-12">
            <img class="img-responsive" src="{{ asset('images/tips/aceite-de-papa.jpg') }}" draggable="false" alt="">
        </div>




        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="about-me section-space-padding">

                <h2 align="center"><strong>Aceite de Papa</strong></h2>

                <p align="justify"> El aceite de papa cuenta con números beneficios para la piel,
                    el cabello y la salud en general. El uso de  es que este oleo ha sido utilizado
                    desde tiempos inmemorables como solución natural para curar y reducir diferentes
                    dolencias óseas y del aparato digestivo.
                    Conoce los beneficios del aceite de papa.
                    Producto ideal para:
                    <ul>
                    <li> 🦟Picaduras de insectos y erupciones</li>
                    <li> 🍃Limpiador y exfoliador</li>
                    <li> 👌Ayuda contra la piel seca</li>
                    <li> 🌞Quemaduras Solares</li>
                    <li> 😲Antiarrugas</li>
                </ul>

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

                <h2 align="center">Evita Resfriados</h2>

                <p align="justify">
                    Es un mensaje que merece la pena repetir: <br>
                    Lavarse las manos es, con diferencia, la mejor manera de evitar la
                    propagación de gérmenes y de proteger a sus hijos de las enfermedades.<br>
                    Lavarse la manos adecuadamente es la primera línea de defensa contra la propagación
                    de muchas enfermedades, desde un resfriado o catarro común hasta enfermedades más graves,
                    como la meningitis, la bronquiolitis, la gripe, la hepatitis A, y muchos tipos de diarrea.<br>
                    Si los niños entran en contacto con gérmenes, se pueden infectar solo al tocarse los ojos, la
                    nariz o la boca. Y una vez infectados, solo suele ser cuestión de tiempo que toda la familia se
                    contagie y acabe contrayendo la misma enfermedad.<br>

                    Fuente: https://kidshealth.org/es/parents/hand-washing-esp.html

                </p>

            </div>
        </div>



        <div class="col-md-6 col-sm-12 col-xs-12">
            <img class="img-responsive" src="{{ asset('images/tips/evita-resfriados.jpg') }}" draggable="false" alt="">
        </div>

    </div>


</section><hr>
<!-- About End -->


<section id="about" class="about-section">
    <div class="row">

        <div class="col-md-6 col-sm-12 col-xs-12">
            <img class="img-responsive" src="{{ asset('images/tips/desayuno.jpg') }}" draggable="false" alt="">
        </div>




        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="about-me section-space-padding">

                <h2 align="justify"><strong>Buen desayuno</strong></h2>


                <p align="justify">
                    ¿En qué consiste un buen desayuno?  Un buen desayuno aporta 400 calorías en promedio, este se debe componer
                    por un lácteo (semidescremado o descremado, como leche o yogurt)  y un cereal (Pan marraqueta, pan de molde,
                    pan integral, pan de pita, galletas de agua o soda, cereales integrales o avena). <br>
                    Puedes elegir algunos de estos  alimentos, para acompañar tu cereal: huevo, quesillo, queso fresco, palta,
                    mermelada light o 0% azúcar, jamón de pavo, tomate lechuga o margarina. 
                    Beneficios del tomar un buen desayuno:

                    <ul>
                        <li> <i class="fa fa-plus-square"></i> Mejora el rendimiento físico y escolar.</li>
                        <li> <i class="fa fa-plus-square"></i> Ayuda a mantener un peso corporal normal.</li>
                        <li> <i class="fa fa-plus-square"></i> Mejora la concentración y el comportamiento.</li>
                        <li> <i class="fa fa-plus-square"></i> Aumenta el rendimiento y la productividad en el trabajo.</li>
                        <li> <i class="fa fa-plus-square"></i> Te permite mantener un buen crecimiento y desarrollo.</li>
                        <li> <i class="fa fa-plus-square"></i> Contribuye a mantener tu salud y bienestar.</li>
                    </ul><br>


                    Fuente: http://www.becaticketjunaeb.cl/contenido/vida-saludable/la-importancia-de-tomar-un-buen-desayuno-en-la-ma%C3%B1ana

                </p>


            </div>
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
