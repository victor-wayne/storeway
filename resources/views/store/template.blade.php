<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield ('title', 'Mi Tienda Herrera')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/3.3.7/sandstone/bootstrap.min.css" rel="stylesheet" integrity="sha384-G3G7OsJCbOk1USkOY4RfeX1z27YaWrZ1YuaQ5tbuawed9IoreRDpWpTkZLXQfPm3" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Kanit" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="{{ asset('images/favicon/apple-touch-icon.png') }}">



</head>

<body>

    @if(\Session::has('message'))
        @include('store.partials.message')
    @endif

    @include('store.partials.nav')

    @yield ('content')

    @include('store.partials.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/pinterest_grid.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        function abrir() {
            document.getElementById("ventana").style.display="block";
            
        }

        function cerrar() {
            document.getElementById("ventana").style.display="none";

        }
    </script>
</body>

</html>
