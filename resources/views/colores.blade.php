<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
            <div class="content">
                <div class="title m-b-md">
                    Laravel-Colores
                </div>
                <hr>

                <select id="colores">
                    <option value="0">-- Selecciona un Color</option>
                    <option value="1">Verde</option>
                    <option value="2">Azul</option>
                    <option value="3">Amarillo</option>
                    <option value="4">Dorado</option>
                    <option value="5">Negro</option>
                </select>
                <br>
                <button onclick="mostrar()">Mostrar color</button>
                <br><br>
                <hr>
                <h3 id="vercolor">Color Seleccionado</h3>

                <div class="links">
                    <a href="{{ route('inicio') }}">Inicio</a>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function mostrar(){
                var color = document.getElementById('colores').value;
                if(color == 0){
                    document.getElementById('vercolor').style.cssText = 'color: #FF0000; border: solid 1px #FF0000';
	                document.getElementById('vercolor').innerHTML = "Error: Seleccione un Color";
                }
                else{
                        if(color == 1){
                            document.getElementById('vercolor').style.cssText = 'color: #00FF00; border: solid 1px #00FF00';
                            document.getElementById('vercolor').innerHTML = "Color: Verde";
                        }
                        else{
                                if(color == 2){
                                        document.getElementById('vercolor').style.cssText = 'color: #0000FF; border: solid 1px #0000FF';
	                                    document.getElementById('vercolor').innerHTML = "Color: Azul";
                                }
                                else{
                                        if(color == 3){
                                                document.getElementById('vercolor').style.cssText = 'color: #FFFF00; border: solid 1px #FFFF00';
	                                            document.getElementById('vercolor').innerHTML = "Color: Amarillo";
                                        }
                                        else{
                                                if(color == 4){
                                                        document.getElementById('vercolor').style.cssText = 'color: #FFCC00; border: solid 1px #FFCC00';
	                                                    document.getElementById('vercolor').innerHTML = "Color: Dorado";
                                                }
                                                else{
                                                            document.getElementById('vercolor').style.cssText = 'color: #000000; border: solid 1px #000000';
	                                                        document.getElementById('vercolor').innerHTML = "Color: Negro";
                                                    }
                                            }
                                    }
                            }
                    }
            }
        </script>
    </body>
</html>
