<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Biblioteca</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

            fieldset {
                border-radius: .5em;
                width:300px;
                padding: 25px;
                border: 5px solid gray;
                display:block;
                margin:0;
            }
        

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <form action="/libro/{{$libro->id}}" method="post">
        @csrf
        @method('PATCH')
            <fieldset>
                <h1>Editar Datos del Estudiante</h1>
				<h1> {{ $libro->nombre }} </h1>
				<h2>{{ $libro->editorial}}</h2><br>
				<h1> {{ $libro->anio }} </h1>
				<h2>{{ $libro->ubicacion}}</h2>
				<h1> {{ $libro->autor }} </h1>
				<h2>{{ $libro->tipo}}</h2>
				<h1> {{ $libro->area }} </h1>
				<h2>{{ $libro->prestamo}}</h2>
                <button type="submit">Editar Datos</button>
                </div> 
            </fieldset>
        </form>
    </body>
</html>


<h1> {{ $libro->nombre }} </h1>
<h2>{{ $libro->cedula}}</h2>
<p><a href="/libro/{{$libro->id}}/edit">Edit</a></p>