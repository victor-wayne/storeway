@extends('store.template')

@section('content')

    @include('store.partials.slider')

       <!-- Ruta en donde se encuentran todos los productos
                <a class="btn btn-primary" href="{{ route('all-products') }}">
                    <i class="fa fa-plus-square" style="font-size: 24px;"></i> Buscar un producto
                </a><hr>
         -->
    <!-- <div class="ventana" id="ventana">
        <div id="cerrar"> <a href="javascript:cerrar()"><i class="fa fa-close" style="font-size:24px"></i></a> </div>

        <img src="{{ asset('img/promo-tizo.jpg') }}">
    </div>

    -->
    <div class="overlay active" id="overlay">
        <div class="popup" id="popup">
            <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"> <i class="fa fa-close" style="font-size: 24px;"></i></a>
            <h1>¡Súper Promoción!</h1>
            <img src="{{ asset('img/promo-tizo.jpg') }}"><hr>
            <p>
                <a class="btn btn-success" href="https://bit.ly/3b0e72n">
                    <i class="fa fa-whatsapp" style="font-size: 20px"></i> Ordena Aqui </a>
            </p>
        </div>

        </div>
    </div>


    <div class="container">
        <h1 align="center"><strong>Pedidos en Celaya Sin Costo!</strong></h1>
        <h4 align="center">Para pedidos en Celaya Gto, contactanos via WhatsApp</h4>
        <p align="center">
            <a class="btn btn-success" href="https://bit.ly/3b0e72n">
                <i class="fa fa-whatsapp" style="font-size: 20px"></i> Mi Pedido</a>
        </p>

        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Categorizador
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li class="dropdown-header">Dermatologia</li>
                <li><a href="#">Avene</a></li>
                <li><a href="#">La Roche-Posay</a></li>
                <li><a href="#">Vichy</a></li>
                <li><a href="#">Isdin</a></li>
                <li class="dropdown-header">Patente</li>
                <li><a href="#">Todos</a></li>
                <li class="dropdown-header">Generico</li>
                <li><a href="#">Todos</a></li>
                <li class="dropdown-header">OTC</li>
                <li><a href="#">Todos</a></li>
            </ul>
        </div>
    </div>




            <hr>
        <div class="container text-center">


        <!-- Ruta en donde se carga el index principal muestro productos principales -->
            <div id="products">
                @foreach($products as $product)
                    <div class="white-panel">
                        <h3><strong>{{ $product->name }}</strong></h3><hr>
                        <img src="{{ asset('products/'.$product->image) }}" width="200">
                        <div class="product-info panel">
                            <p><strong>{{ $product->extract }}</strong></p>
                            <h3><span class="label label-success">Precio: ${{ number_format($product->price,2) }}</span></h3><br>
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
        </div>

        <div class="container text-center">
           <?php echo $products->render(); ?>
        </div>
<br>
<br>
<br>
<br>
<br>
@stop


