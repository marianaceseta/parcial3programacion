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
                <h1>Editar Datos del Libro</h1>
                <div>
                <input type="text" name="nombre" placeholder="Nombre del Libro" value="{{ $libro->nombre }}" required>
                </div>

                <div>
                <input type="text" name="editorial" placeholder="Editorial" value="{{ $libro->editorial }}" required>
                </div>

                <div>
                <input type="text" name="anio" placeholder="}
                Anio" value="{{ $libro->anio }}" required>
                </div>

                <div>
                <input type="text" name="ubicacion" placeholder="Ubicacion" value="{{ $libro->ubicacion }}" required>
                </div>

                <div>
                <input type="text" name="autor" placeholder="Autor" value="{{ $libro->autor }}" required>
                </div>

                <div>
                <input type="text" name="tipo" placeholder="Tipo" value="{{ $libro->tipo }}" required>
                </div>

                <div>
                <input type="text" name="area" placeholder="Area de Conocimiento" value="{{ $libro->area }}" required>
                </div>

                <div>
                <input type="text" name="prestamo" placeholder="Dias de prestamo" value="{{ $libro->prestamo }}" required>
                </div>



                <div>
                <button type="submit">Editar Datos</button>
                </div>
            </fieldset>
        </form>
    </body>
</html>
