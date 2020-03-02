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


@yield ('apoyodeporte')
<hr>
<section id="about" class="about-section">

    <div class="section-title">
        <h2 align="center"><i class="fa fa-life-ring" style="font-size:24px"> <strong>Apoyo al Deporte</strong></i></h2>

    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="deporte-block">
                <h2 align="center"><strong>Region Salud</strong></h2>
                <iframe width="330" height="280" src="https://www.youtube.com/embed/bvbZTdOAoeg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

            </div>
        </div>

        <div class="col-md-6">
          <div class="about-me section-space-padding">
              <h2 align="center">Region Salud</h2>
              <p align="justify">
              Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
              Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un
              impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los
              mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que
              </p>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="deporte-block">
                <h2 align="center"><strong>Region Salud</strong></h2>
                <iframe width="330" height="280" src="https://www.youtube.com/embed/bvbZTdOAoeg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

            </div>
        </div>

        <div class="col-md-6">
            <div class="about-me section-space-padding">
                <h2 align="center">Region Salud</h2>
                <p align="justify">
                    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un
                    impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los
                    mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que
                </p>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="deporte-block">
                <h2 align="center"><strong>Region Salud</strong></h2>
                <iframe width="330" height="280" src="https://www.youtube.com/embed/bvbZTdOAoeg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

            </div>
        </div>

        <div class="col-md-6">
            <div class="about-me section-space-padding">
                <h2 align="center">Region Salud</h2>
                <p align="justify">
                    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un
                    impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los
                    mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que
                </p>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="deporte-block">
                <h2 align="center"><strong>Region Salud</strong></h2>
                <iframe width="330" height="280" src="https://www.youtube.com/embed/bvbZTdOAoeg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

            </div>
        </div>

        <div class="col-md-6">
            <div class="about-me section-space-padding">
                <h2 align="center">Region Salud</h2>
                <p align="justify">
                    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un
                    impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los
                    mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que
                </p>
            </div>
        </div>
    </div>

    <hr>

</section>


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
