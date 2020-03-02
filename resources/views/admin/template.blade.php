<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield ('title', 'Panel de Control')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/3.3.7/sandstone/bootstrap.min.css" rel="stylesheet" integrity="sha384-G3G7OsJCbOk1USkOY4RfeX1z27YaWrZ1YuaQ5tbuawed9IoreRDpWpTkZLXQfPm3" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Kanit" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/css/main.css')}}">

</head>

<body>

@if(\Session::has('message'))
    @include('admin.partials.message')
@endif

@include('admin.partials.nav')

@yield ('content')

@include('admin.partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{ asset('admin/js/main.js') }}"></script>
</body>

</html>