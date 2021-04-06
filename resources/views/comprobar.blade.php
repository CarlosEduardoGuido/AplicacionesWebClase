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
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Laravel-JS: Comprobar
                </div>
                <hr>
                <center>
                    contraseña: <input type="text" id="pass1" onkeyup="evaluar(this);">
                    <b id="nivel"></b><br>
                    <b id="error"></b><br>
                    confirmacion: <input type="text" id="pass2" onkeyup="evaluar(this);">
                </center>

                <div class="links">
                    <a href="{{ route('inicio') }}">Inicio</a>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function evaluar(obj){
                    var pass = obj.value;           //recibe contraseña
                    var conteo = obj.value.length;  //cuenta los caracteres de contraseña
                    var cadena = pass.split("");    //divide la contraseña en caracteres en un arreglo
                    var cont = 0;                   //cuenta los caracteres especiales
                    var let_a = 0;                  //cuenta las letras minusculas
                    var let_b = 0;                  //cuenta las letras mayusculas
                    var let_c = 0;                  //cuenta los numeros 
                    if(conteo > 3){
                            if(cadena[0].search(/[A-Z]/g)+1 > 0){
                                let_a = 0;
                                let_b = 0;
                                let_c = 0;
                                cont = 0;
                                //--------------Evaluar caracter x caracter----------
                                for(var i=0; i < cadena.length; i++){
                                    var letra = cadena[i];
                                    if(letra.search(/[a-z]/g)+1 > 0){let_a = let_a+1;}
                                    else{
                                            if(letra.search(/[A-Z]/g)+1 > 0){let_b = let_b+1;}
                                            else{
                                                    if(letra.search(/[0-9]/g)+1 > 0){let_c = let_c+1;}
                                                    else{cont = cont+1;}
                                            }
                                    }

                                }
                                //--------------Evaluar cantidad de caracteres--------------
                                if(conteo >= 8){
                                        document.getElementById("nivel").style.cssText = 'color: #FFF; background-style: #0D8E1A;';
                                        document.getElementById("nivel").innerHTML = 'Segura';

                                }
                                else{
                                        if(conteo >= 6){
                                                document.getElementById("nivel").style.cssText = 'color: #FFF; background-style: #EFDD0F;';
                                                document.getElementById("nivel").innerHTML = 'Poco segura';

                                        }
                                        else{
                                                document.getElementById("nivel").style.cssText = 'color: #FFF; background-style: #F00;';
                                                document.getElementById("nivel").innerHTML = 'Insegura';
                                        }


                                }
                                //--------------Evaluar si existen letras y numeros --------------
                                
                                //--------------Evaluar si existen caracteres especiales--------------

                            }
                            else{
                                    document.getElementById("pass1").style.cssText = 'color: #F00; border: solid 1px #F00;';
                                    document.getElementById("nivel").style.cssText = 'border-style: none;';
                                    document.getElementById("nivel").innerHTML = ' ';
                                    document.getElementById("error").innerHTML = 'Error: el primer caracter debe de ser una letra mayuscula ';
                            }

                    }
                    else{
                            document.getElementById("pass1").style.cssText = 'color: #000; border: solid 1px #000;';
                            document.getElementById("nivel").innerHTML = ' ';
                            document.getElementById("error").innerHTML = ' ';
                    }

            }
        </script>
    </body>
</html>