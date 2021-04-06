<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

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
        <script src="{{ asset('js/jquery-3.3.1.js')}}"></script>
        <script src="{{ asset('js/jquery-ui.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                    console.log("Salida de informacion en consola");

                    $('#porid').html('campo por id');
                    $('.porclase').html('campo por clase');
                    $('span').text('Campo por objeto|tag');
                    $('span#texto').text('campo por atributo de objeto');
                    $('#porid').css({
                            "position":"absolute",
                            "background-color":"#FFA07A",
                            "font-size":"200%",
                            "height":"100px",
                            "width":"100px"
                        });
                    //----------------------------------------------------
                    num1 = 10.5;
                    num2 = 100;
                    nombre = "Carlos";

                    for(x=0; x<10; x++){ console.log(x+1+" dato de "+nombre);}
                    if(num1!=num2){alert(num1+num2);}
                    //----------------------------------------------------------
                    $('#calcular').click(function(e){
                            e.preventDefault();
                            var num1 = $('#num1').val();
                            var num2 = $('#num2').val();
                            var res = parseFloat(num1)+parseFloat(num2);
                            alert(res);
                            $('#calcular').html(res);
                        });
            });
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Laravel-Jquery: Basico
                </div>
                <br><hr>

                <center>
                    <div id="porid">Campo-01</div>
                    <div class="porclase">Campo-02</div>
                    <br>
                    <span>Campo-03</span><br>
                    <span id="texto">Campo-04</span><br>
                    <span>Campo-05</span><br>
                    <div id="texto">Campo-06</div>
                    <br><hr>

                    Primer numero: <input type="text" id="num1"><br>
                    Segundo numero: <input type="text" id="num2"><br>
                    <button id="calcular">Calcular</button>
                </center>

                <div class="links">
                    <a href="{{ route('inicio') }}">Inicio</a>
                </div>
            </div>
        </div>
    </body>
</html>