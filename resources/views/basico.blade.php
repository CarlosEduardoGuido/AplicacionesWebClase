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
        <script type="text/javascript">
            console.log("Datos en consola");
            document.write("Datos en navegador");
            alert("Datos en ventana");

            //-------------------------------------------------------
            if(confirm("Presione aceptar o cancelar")){
                    document.write("Si <br>");
                }
            else{
                    document.write("No <br>");
                }
            /*
                var: Variables
                let: Variables bloque(funciones y condicionales)
                const: Variables inmutables
            */

            let dattos = "datossss";
            var x;
            var nombre = "Carlos";
            var edad = 38;
            var lista = ["Hugo","Paco","Luis"];

            var res1 = 2+3;
            var res2 = edad-res1;
            //-----------------------------------------------------------

            var y = 1;
            for(var x=1; x<=10; x++){
                    console.log("for: " + x);
            }
            while(y<=10){
                    y++;
                    console.log("while:" + y);
            }
            do{
                console.log("do: "+ y);
                y++;
            }while(y<=10);
            for(z in lista){
                console.log(lista[z]);
            }

            //------------------------------------------------------------------
            var dato= prompt("Indica un valor");
                console.log(dato+10);
                document.write(dato+10);
                alert(dato+10);


        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Laravel-JS
                </div>

                <div class="links">
                    <a href="{{ route('inicio') }}">Inicio</a>
                </div>
            </div>
        </div>
    </body>
</html>
