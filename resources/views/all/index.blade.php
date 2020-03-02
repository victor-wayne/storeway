@extends('store.template')

@section('content')

    @include('store.partials.slider')


                <html>
                <head>
                    <title>Ajax Autocomplete Textbox in Laravel using JQuery</title>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                    <style type="text/css">
                        .box{
                            width:600px;
                            margin:0 auto;
                        }
                    </style>
                </head>
                <body>
                <br />
                <div class="container box">
                    <h3 align="center">Consulte su Medicamento</h3><br/>

                    <div class="form-group">
                        <input type="text" name="descripcion" onKeyUp="this.value=this.value.toUpperCase();" id="descripcion" class="form-control input-lg" placeholder="Ingresa el Nombre del Medicamento" />
                        <div id="productList">
                        </div>
                    </div>
                    {{ csrf_field() }}
                </div>
                </body>
                </html><hr>


    <script>
        $(document).ready(function(){

            $('#descripcion').keyup(function(){
                var query = $(this).val();
                if(query != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autocomplete-fetch') }}",
                        method:"POST",
                        data:{query:query, _token:_token},
                        success:function(data){
                            $('#productList').fadeIn();
                                $('#productList').html(data);
                        }
                    });
                }
            });

            $(document).on('click', 'li', function(){
                $('#descripcion').val($(this).text());
                $('#productList').fadeOut();
            });

        });
    </script>

@stop