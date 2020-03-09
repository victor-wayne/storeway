<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand main-title" href="{{ route('home') }}">Herrera</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('store') }}"><h5>Compra en Linea</h5> <span class="sr-only">(current)</span></a></li>


            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart" style="font-size: 24px"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><h4>Promociones Circulo de la Salud</h4></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><h4>Promociones Enlace Vital</h4></a>
                </li>

                @include('store.partials.menu-user')
            </ul>
        </div>
    </div>
</nav>











