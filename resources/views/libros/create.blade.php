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
                margin:center;
            }
        

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: center;
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
                <a href="{{ url('/libro') }}">Libros</a>

        <form action="/libro" method="post">
        @csrf

            <fieldset>
                <legend><h3>Datos del Libro</h3></legend>

                <div>
                Nombre del Libro:<br>
                <input type="text" name="nombre" required>
                </div>
                <br>
                
                <div>
                Editorial:<br>
                <input type="text" name="editorial" required>
                </div>
                <br>

                <div>
                Año:<br>
                <input id="anio" type="date" required>
                </div>
                <br>

                <div>
                Ubicación del Libro:<br>
                <input type="text" name="ubicacion" required>
                </div>
                <br>

                <div>
                Autor:<br>
                <input type="text" name="autor" required>
                </div>
                <br>

                <div>
                Tipo (Normal/Reserva):<br>
                <select name="tipo" form="carform" requerid>
                    <option value="normal">Normal</option>
                    <option value="reserva">Reserva</option>
                </select>
                </div>
                <br>

                <div>
                Area de Conocimiento:<br>
                <input type="text" name="area" required>
                </div>
                <br>

                <div>
                Días de prestamo:<br>
                <input type="number" name="prestamo" requerid>
                </div>
                <br>

                <div>
                <button type="submit">Subir Datos</button>
                </div>
            </fieldset>
        </form>
    </body>
</html>