<div id="slider" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="{{ asset('img/carrito.png') }}" alt="slide1">
            <div class="carousel-caption">
                Lunes y Jueves de Descuentos
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('img/carrito1.png') }}" alt="slide2">
            <div class="carousel-caption">
                Sabados de Dermatologia
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('img/carrito2.png') }}" alt="slide3">
            <div class="carousel-caption">
                Farmacia Herrera
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

