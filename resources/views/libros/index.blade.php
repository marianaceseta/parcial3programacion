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
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <a href="{{ url('/') }}">Home</a>
                        
            </div>   
            <div class="content">
                <div class="title m-b-md">
                    Libros
                </div>




                <div class="links">
                    <a href="libro/create">Registrar Libro</a>
                    <a href="#">Listas</a>
                    <a href="libro/edit">Editar y modificar</a>
                </div>

                <h1>Lista de Estudiantes</h1>
                <table>
                <tr>
                    
                    <th>
                        Nombre
                    </th>
                    <th>Otros datos...</th>
                </tr>
                @foreach($libros as $libro)
                <tr>

                    <td>{{ $libro->nombre }}</td>
                    <td>{{ $libro->editorial}}</td>
                    <td>{{ $libro->anio}}</td>
                    <td>{{ $libro->ubicacion}}</td>
                    <td>{{ $libro->autor}}</td>
                    <td>{{ $libro->tipo}}</td>
                    <td>{{ $libro->area}}</td>
                    <td>{{ $libro->prestamo}}</td>
                    <td>
                        <a href="/libro/{{$libro->id}}/edit">Editar Datos</a>
                    </td>
                </tr>
                @endforeach
                </table>

            </div>
        </div>
    </body>
</html>