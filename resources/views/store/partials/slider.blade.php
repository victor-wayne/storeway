<div id="slider" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
        <li data-target="#slider" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

       <div class="item active">
            <img src="{{ asset('img/promociones-octubre.jpeg') }}" alt="farmacia-herrera">
            <div class="carousel-caption">
                Promóciones Octubre
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('img/semana-de-dermtologia-farmacia-herrera.jpg') }}" alt="semanas-de-dermatologia-farmacia-herrera">
            <div class="carousel-caption">
                Semanas de Dermatologia
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('img/sabados-de-dermatologia.jpg') }}" alt="sabados-de-dermatologia">
            <div class="carousel-caption">
                Sabados de Dermatologia
            </div>
        </div>
        <div class="item">
            <img  src="{{ asset('img/lunes-y-jueves-descuento.jpg') }}" alt="lunes-y-jueves-de-descuento">
            <div class="carousel-caption">
                Lunes y Jueves de Descuento
            </div>
        </div>
    </div>


    <!-- Controls -->
    <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#slider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

