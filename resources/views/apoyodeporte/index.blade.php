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


    <div class="home-section-backgroundad" data-stellar-background-ratio="0.6">
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


@yield ('apoyodeporte')

<section id="about" class="about-section">
<br>
    <div class="section-title">
        <h2 align="center"><i class="fa fa-life-ring" style="font-size:24px"> <strong>Apoyo al Deporte</strong></i></h2>

    </div>


    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">

                <h2 align="center"><strong>Duaclón Celaya</strong></h2>
                <img class="img-responsive" src="{{ asset('images/bg/duaclon.jpg') }}" draggable="false" alt="apoyo-al-deporte-farmacia-herrera">


        </div>

        <div class="col-md-6">
          <div class="about-me section-space-padding">
              <h2 align="center">Duaclón Celaya 2020</h2>
              <p align="justify">
                  Este es uno de los mejores eventos de Duatlón por qué es muy rápido,
                  la bici se realiza en una de las mejores avenidas de Celaya y el
                  recorrido en la carrera es dentro del parque lineal de Celaya ven y compruébalo.<br>

                  <a href="https://www.facebook.com/pg/duatloncelaya/about/?ref=page_internal" ><i class="fa fa-facebook-square" style="font-size:36px"></i></a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">

            <h2 align="center"><strong>MMT Celaya 2020</strong></h2>
            <img class="img-responsive" src="{{ asset('images/bg/mmt.jpg') }}" draggable="false" alt="apoyo-al-deporte-farmacia-herrera">


        </div>

        <div class="col-md-6">
            <div class="about-me section-space-padding">
                <h2 align="center">MMT 2020</h2>
                <p align="justify">
                    ¡ESTAMOS LISTOS!
                    No te puedes perder todas las sorpresas que tenemos para ti.
                    Acompáñanos a festejar los 25 años de MMT.¡ESTAMOS LISTOS!
                    No te puedes perder todas las sorpresas que tenemos para ti.
                    Acompáñanos a festejar los 25 años de MMT..<br>

                    <a href="https://www.facebook.com/Medio-Marat%C3%B3n-Rinc%C3%B3n-de-Tamayo-2020-XXV-Aniversario-1677049765901696/?epa=SEARCH_BOX" ><i class="fa fa-facebook-square" style="font-size:36px"></i></a>
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
