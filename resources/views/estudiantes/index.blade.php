e<!doctype html>
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
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <a href="{{ url('/') }}">Home</a>
                        
            </div>   
            <div class="content">
                <div class="title m-b-md">
                    Estudiantes
                </div>




                <div class="links">
                    <a href="estudiante/create">Registrar Estudiante</a>
                    <a href="#">Listas</a>
                    <a href="estudiante/edit">Editar y modificar</a>
                </div>
        <h1>Lista de Estudiantes</h1>
        <table>
            <tr>
                
                <th>
                    Nombre
                </th>
                <th>C.I.</th>
            </tr>
            @foreach($estudiantes as $estudiante)
            <tr>

                <td>{{ $estudiante->nombre }}</td>
                <td>{{ $estudiante->cedula}}</td>
                <td>
                    <a href="/estudiante/{{$estudiante->id}}/edit">Editar Datos</a>
                </td>
            </tr>
            @endforeach
        </table>
        
            </div>
        </div>
    </body>
</html>