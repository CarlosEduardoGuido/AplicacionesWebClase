<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ">
         <h1 class="navbar-brand">Calculadora</h1>
    </nav>
      
    <div class="calculadora">
            <div id="pantalla" class="pantallas">0</div>

          <div id="teclas" class="teclas">

            <div class="numeros">
              <div class="teclas3">
              <button id="tecla12" type="button" class="btn btn-outline-primary " data-numero="7">7</button>
              <button id="tecla13" type="button" class="btn btn-outline-primary " data-numero="8">8</button>
              <button id="tecla14" type="button" class="btn btn-outline-primary " data-numero="9">9</button>
            </div>

            <div class="teclas2" >
              <button id="tecla9" type="button" class="btn btn-outline-primary tecla" data-numero="4">4</button>
              <button id="tecla10" type="button" class="btn btn-outline-primary tecla" data-numero="5">5</button>
              <button id="tecla11" type="button" class="btn btn-outline-primary tecla" data-numero="6">6</button>
            </div>

            <div class="teclas1">
              <button id="tecla6" type="button" class="btn btn-outline-primary tecla" data-numero="1">1</button>
              <button id="tecla7" type="button" class="btn btn-outline-primary tecla" data-numero="2">2</button>
              <button id="tecla8" type="button" class="btn btn-outline-primary tecla" data-numero="3">3</button>
            </div>
          </div>              
            
            <div class="ope">
              <button id="tecla4" type="button" class="btn btn-outline-primary" data-operacion="limpiar">C</button>
              <button id="tecla15" type="button" class="btn btn-outline-primary" data-numero="0">0</button>
              <button id="tecla5" type="button" class="btn btn-outline-primary" data-operacion="igual">=</button>
            </div>  

            <div class="op">
                <button id="tecla" type="button" class="btn btn-outline-primary tecla" data-matematica="suma">+</button>
                <button id="tecla1" type="button" class="btn btn-outline-primary tecla" data-matematica="resta">-</button>
                <button id="tecla2" type="button" class="btn btn-outline-primary tecla" data-matematica="multi">x</button>
                <button id="tecla3" type="button" class="btn btn-outline-primary tecla" data-matematica="divide">/</button>
            </div>

          
        </div>
    </div>
  
    
    <script type="text/javascript">
    //Creo la funcion para tomar los datos del boton al dar click
      const teclas = document.getElementById('teclas'),
            pantallas = document.getElementById('pantalla')
      
      let operacionEstado = false,
          numero1,
          tipoOperacion,
          puntos


      const calculadora = () => {
          if(!teclas) return
          teclas.addEventListener('click', e => {
              const t = e.target,
                    d = t.dataset
              //Detecta si pulsamos un numero
              if (d.numero) writeScreen(d.numero)
              //Detecta si pulsamos una operacion matematicas
              if (d.matematica) getOperation(t,d.matematica)
              //Detecta si pulsamos operacion de lipiar o igual
              if (d.operacion) runOperation(d.operacion)
          })
      }  

      //Esta funcion es para tomar los numeros y concatenarlos
      const writeScreen = numero => {
          pantallas.textContent === '0'|| operacionEstado === true
              ? pantallas.textContent = numero
              : pantallas.textContent += numero
          operacionEstado = false    
      }

      // Esta funcion selecciono la operacion matematica
      const getOperation = (elemento, opMatematica) => {
          operacionEstado = true
          numero1 = Number (pantallas.textContent)
          tipoOperacion = opMatematica
          pantallas.textContent = elemento.textContent
          //return {numero1, tipoOperacion}
      }

      //Esta Funcion es hacer los calculos
      const runOperation = operacion => {

          const getresult = (numero1, tipoOperacion) => {
              const numero2 = Number (pantallas.textContent)
              let resultado
              switch (tipoOperacion) {
                  case 'suma':
                      resultado = numero1  + numero2
                      break
                  
                  case 'multi' :
                      resultado = numero1  * numero2
                      break
                  
                  case 'resta' : 
                      resultado = numero1 - numero2
                      break

                  case 'divide' :
                      resultado = numero1 / numero2
                      break   
                  default:
                      break;
              }

              resultado === Infinity
              ? pantallas.textContent = 'Error!!!'
              : pantallas.textContent = resultado
          }    

          operacion === 'limpiar'
              ? pantallas.textContent = '0'
              : getresult(numero1, tipoOperacion)
              operacionEstado = true
      } 

      calculadora()

      
    </script>
  </body>
</html>

