@extends('store.template')

@section('content')

    @include('store.partials.slider')



    <div class="container">
        <h1 align="center">¿Buscas algun Producto?</h1>
        <h4 align="center">Utiliza nuestro boton categorizador para una mejor busqueda</h4>
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Categorizador
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li class="dropdown-header">Dermatologia</li>
                <li><a href="{{ route('productos-avene') }}">Avene</a></li>
                <li><a href="{{ route('productos-laroche') }}">La Roche-Posay</a></li>
                <li><a href="{{ route('productos-vichy') }}">Vichy</a></li>
                <li><a href="{{ route('productos-isdin') }}">Isdin</a></li>
                <li class="dropdown-header">Patente</li>
                <li><a href="{{ route('productos-patente') }}">Todos</a></li>
                <li class="dropdown-header">Generico</li>
                <li><a href="{{ route('productos-genericos') }}">Todos</a></li>
                <li class="dropdown-header">OTC</li>
                <li><a href="{{ route('productos-otc') }}">Todos</a></li>
            </ul>
        </div>
    </div>

    <hr>

    <h1 align="center">Genericos</h1>

    <div class="container text-center">


        <!-- Ruta en donde se carga el index principal muestro productos principales -->
        <div id="products">
            @foreach($products as $product)
                <div class="white-panel">
                    <h3>{{ $product->name }}</h3><hr>
                    <img src="{{ asset('products/dermatologia/genericos/'.$product->image) }}" width="200">
                    <div class="product-info panel">
                        <p>{{ $product->extract }}</p>
                        <h3><span class="label label-success">Precio: ${{ number_format($product->price,2) }}</span></h3>
                        <p>
                            <a class="btn btn-warning" href="{{ route('cart-add', $product->slug) }}">
                                <i class="fa fa-cart-plus"></i> Lo quiero
                            </a>
                            <a class="btn btn-primary" href="{{ route('product-detail', $product->slug) }}">
                                <i class="fa fa-chevron-circle-right"></i> Leer mas</a>
                        </p>
                    </div>
                </div>
            @endforeach

        </div><hr>
        <?php echo $products->render(); ?>
    </div>

@stop

