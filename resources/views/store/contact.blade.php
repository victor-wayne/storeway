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


    <div class="home-section-backgroundv" data-stellar-background-ratio="0.6">
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

@yield ('contact')

<!-- Contact Start -->
<section id="contact" class="contact-us section-space-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2><strong>Contactos</strong></h2>
                    <p align="justify">Requieres una Atencion Especializada, llame a los <strong>telefonos</strong> que aparecen en <strong>contacto</strong> o visite alguna de nuestras
                        <strong>sucursales.</strong><br>
                    </p>
                    <p align="center">
                        <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=524611881811&text=Necesito información sobre alguno de sus productos. ¿Me pueden ayudar? ">
                            <i class="fa fa-whatsapp" style="font-size: 24px"></i> Contacto WhatsApp</a>
                    </p>

                </div>
            </div>
        </div><hr>

        <div class="section-title">
            <h1><strong>Sucursal Matriz</strong></h1>
        </div>

        <div class="text-center margin-top-10 margin-bottom-50">

            <div class="row">

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <img class="img-responsive" src="{{ asset('images/portfolio/ubicacion-3.jpg') }}" draggable="false" alt="farmacia-herrera-sucursal-zaragoza">
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="contact-us-detail">
                            <i class="fa fa-mobile color-6"></i>
                            <h4><strong>Telefonos</strong></h4>
                            <p><a href="tel:4616122173">4616122173</a></p>
                            <p><a href="tel:4611740699">4611740699</a></p>
                        </div>
                    </div>


                    <div class="contact-us-detail">
                        <i class="fa fa-clock-o color-3"></i>
                        <h4><strong>Domicilio</strong></h4>
                        <p> Zaragoza #206<br>
                            Lunes - Sabado 09:00 – 20:30<br>
                            Domingo 11:00 – 14:00
                        </p>
                    </div>
                </div>

                <hr>

                <div class="section-title">
                    <h1><strong>Sucursal Bulevar</strong></h1>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <img class="img-responsive" src="{{ asset('images/portfolio/suc-alfa.jpg') }}" draggable="false" alt="">
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="contact-us-detail">
                            <i class="fa fa-mail-reply color-5"></i>
                            <h4><strong>E-mail</strong></h4>
                            <p><a href="mailto:sistemas@farmaciaherrera.com.mx">direccion@farmaciaherrera.com.mx</a></p>
                        </div>
                    </div>




                    <div class="contact-us-detail">
                        <i class="fa fa-clock-o color-3"></i>
                        <h4><strong>Domicilio</strong></h4>
                        <p> Boulevard Adolfo Lopez Mateos #802<br>
                        <h4><strong>Horario</strong></h4>
                        lunes - Sabado 09:00 – 20:30
                        </p>
                    </div>
                </div>

            </div>

        </div>


                    <hr>

                    <div class="section-title">
                        <h3><strong>Formulario de Contacto</strong></h3>
                    </div>

        <div class="row">

            <div class="col-md-6">

                <div class="row">

                    <div class="container">
                        <div class="row">
                            <div class="col col-md-6 col-md-offset-3"   >
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Forumulario de contacto</h3></div>
                                    <div class="panel-body">

                                        {!! Form::open(['route' => 'contactus.store', 'method' => 'post']) !!}
                                        <div class="form-group">
                                            {!! Form::label('email', 'E-Mail') !!}
                                            {!! Form::email('email', null, ['class' => 'form-control' ]) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('body', 'Asunto') !!}
                                            {!! Form::text('body', null, ['class' => 'form-control' ]) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('message', 'Mensaje') !!}
                                            {!! Form::textarea('message', null, ['class' => 'form-control' ]) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                                        </div>
                                        {!! Form::close() !!}

                                    </div>

                                </div>



                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="margin-top-80">

        <ul class="social-icon">
            <li><a href="https://www.facebook.com/farmaherrera/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/farmacia_herrera/?hl=es-la" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://farmaherrera.blogspot.com/" target="_blank" class="google-plus"><i class="fa fa-book"></i></a></li>
            <li><a href="https://www.youtube.com/watch?v=mQWyyQClMN4&list=PLzll3Dv3I6F3yHFXcO7MeR4nGhiDAnBg4" target="_blank" class="youtube"><i class="fa fa-youtube"></i></a></li>

        </ul>
    </div>




</section>







<!-- Footer Start -->
<footer class="footer-section">
    <div class="container">
        <div class="row">

            <div class="col-md-4 text-left">
                <p><span><a href="#about" class="smoth-scroll">Aviso de Privacidad</a></span> | <span><a href="#portfolio" class="smoth-scroll">Politicas de Uso</a></span></p>
            </div>

            <div class="col-md-4 text-center">
                <p>© Faramacia Herrera.</p>
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>

