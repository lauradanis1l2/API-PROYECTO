<!DOCTYPE html> <!-- Declaración del tipo de documento -->
<html lang="es"> <!-- Inicio del documento HTML con especificación de idioma -->
<head> <!-- Inicio de la cabeza del documento -->
    <meta charset="UTF-8"> <!-- Configuración de la codificación de caracteres a UTF-8 -->
    <meta http-equiv="X-UA-Compatible" content="IE=chrome"> <!-- Configuración para Internet Explorer -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configuración de la vista para dispositivos móviles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css"> <!-- Enlace a una hoja de estilo CSS externa -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Establece una preconexión a un dominio -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Establece una preconexión a otro dominio con permisos -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Enlace a una fuente de Google Fonts -->
<body> <!-- Inicio del cuerpo del documento -->

<!-- Aquí comienza la estructura del contenido HTML -->

<div class="logo"> <!-- Un div con la clase "logo" -->
    <img src="img/logo.png" class="circle3-image" alt="Imagen circular"> <!-- Una imagen circular con la clase "circle3-image" y un atributo "alt" para la descripción de la imagen -->
</div>

<title>CATEGORIA FARMACIA</title> <!-- Título de la página -->
</head> <!-- Fin de la cabeza del documento -->
<body> <!-- Fin del cuerpo del documento -->

<section class="contenido"> <!-- Inicio de una sección con la clase "contenido" -->
    <div class="mostrador" id="mostrador"> <!-- Un div con la clase "mostrador" y un atributo "id" de "mostrador" -->
        <div class="fila"> <!-- Un div con la clase "fila" -->
            <!-- Cuatro elementos "item" con imágenes, descripciones y precios -->
            <div class="item" onclick="cargar(this)">
                <div class="contenedor-foto">
                    <img src="img/ibu.png" alt="">
                </div>
                <p class="descripcion">Pastilla de ibuprofeno de 800mg</p>
                <span class="precio">$ 500</span>
            </div>
          <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/alka.png" alt="">
                    </div>
                    <p class="descripcion">Pastilla de Alka-Seltzer</p>
                    <span class="precio">$ 1.000</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/noxpi.png" alt="">
                    </div>
                    <p class="descripcion">Noxpirin panela limón en sobre </p>
                    <span class="precio">$ 1.800</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/aspirina.png" alt="">
                    </div>
                    <p class="descripcion">Pastilla de aspirina efervescente</p>
                    <span class="precio">$ 1.200</span>
                </div>
            </div>
            <div class="fila">
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/curitas.png" alt="">
                    </div>
                    <p class="descripcion">Curitas para la piel unidad</p>
                    <span class="precio">$ 200</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/alcohol.png" alt="">
                    </div>
                    <p class="descripcion">Alcohol antiséptico 350ml</p>
                    <span class="precio">$ 5.000</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/advil.png" alt="">
                    </div>
                    <p class="descripcion">Capsula advil max unidad</p>
                    <span class="precio">$ 2.200</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/algodon.png" alt="">
                    </div>
                    <p class="descripcion">Algodon 50g</p>
                    <span class="precio">$ 4.500</span>
                </div>
            </div> 
        </div>
     

    <!-- CONTENEDOR DEL ITEM SELECCIONADO -->
    <div class="seleccion" id="seleccion"> <!-- Un div con la clase "seleccion" y un atributo "id" de "seleccion" -->
        <div class="cerrar" onclick="cerrar()"> <!-- Un div con la clase "cerrar" y un evento "onclick" para cerrar -->
            &#x2715 <!-- Un símbolo en formato hexadecimal -->
        </div>
        <div class="info"> <!-- Un div con la clase "info" -->
            <!-- Imagen, título, descripción, precio y selección de cantidad con un botón -->
            <img src="img/bigcola.png" alt="" id="img">
            <h2 id="modelo"> Gaseosa big cola personal</h2>
            <p id="descripcion"> Botella litro </p>
            <span class="precio" id="precio">$1.500</span>

            <div class="fila"> <!-- Un div con la clase "fila" -->
                <div class="size"> <!-- Un div con la clase "size" -->
                    
    </div>
</section> <!-- Fin de la sección "contenido" -->



<script src="script.js"></script> <!-- Enlace a un archivo JavaScript externo llamado "script.js" -->
</body> <!-- Cierre del cuerpo de la página -->
</html> <!-- Cierre del elemento HTML -->

<head> <!-- Etiqueta de cabeza de HTML que contiene metainformación -->
  <title>Volver</title> <!-- El título de la página que aparecerá en la pestaña del navegador -->
  <ul class="meniu"> <!-- Una lista no ordenada (ul) con la clase "meniu" -->
    <li class="menu-item"><a href="inicioD.php">Inicio</a></li> <!-- Un elemento de lista (li) con la clase "menu-item" que contiene un enlace (a) a "inicio.php" con el texto "Inicio" -->
    <li class="menu-item"><a href="../index.php">Salir</a></li> <!-- Otro elemento de lista similar para "Salir" -->

    <li class="menu-item"><a href="inicioD.php">Volver</a></li> <!-- Un tercer elemento de lista para "Volver" -->
