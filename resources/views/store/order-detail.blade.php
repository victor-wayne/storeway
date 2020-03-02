@extends('store.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-shopping-cart"></i>Detalle del Envio</h1>
        </div>


        <div class="page">
            <div class="table-responsive">
                <h3>Datos del Usuario</h3>
                <table class="table table-striped table-hover ">

                    <tr><td>Nombre:</td><td>{{ Auth::user()->name . " " . Auth::user()->last_name }}</td></tr>
                    <tr><td>Usuario:</td><td>{{ Auth::user()->user }}</td></tr>
                    <tr><td>E-mail:</td><td>{{ Auth::user()->email }}</td></tr>
                    <tr><td>Direccion:</td><td>{{ Auth::user()->address }}</td></tr>
                    <tr><td>Colonia:</td><td>{{ Auth::user()->colonia }}</td></tr>
                    <tr><td>Ciudad:</td><td>{{ Auth::user()->ciudad }}</td></tr>
                    <tr><td>Estado:</td><td>{{ Auth::user()->estado }}</td></tr>
                    <tr><td>Telefono:</td><td>{{ Auth::user()->telefono }}</td></tr>
                    <tr><td>Telefono 2:</td><td>{{ Auth::user()->telefono_2 }}</td></tr>
                    <tr><td>Codigo Postal:</td><td>{{ Auth::user()->codigo_postal }}</td></tr>
                </table>
            </div>
            <div class="table-responsive">
                <h3>Datos del Pedido</h3>
                <table class="table table-striped table-hover ">
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                    </tr>
                    @foreach($cart as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>${{ number_format($item->price,2) }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>${{ number_format((double)$item->price * (int)$item->quantity,2) }}</td>
                        </tr>
                    @endforeach
                </table><hr>

                <h3>
                    <span class="label label-success">
                        Total: ${{ number_format($total, 2) }}
                    </span>
                </h3><hr>

                <p>Se le cobrara la cantidad de $250 pesos por Gastos de Envio Extras al Total</p>

                <p>
                    <a href="{{ route('cart-show') }}" class="btn btn-primary">
                        <i class="fa fa-chevron-circle-left"></i>Regresar
                    </a>

                    <a href="{{ route('payment') }}" class="btn btn-warning">
                        Pagar con <i class="fa fa-paypal fa-2x"></i>
                    </a>
                </p>

            </div>
        </div>
    </div>
@stop