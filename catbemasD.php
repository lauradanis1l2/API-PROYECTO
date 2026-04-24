<!DOCTYPE html> <!-- Declaración del tipo de documento como HTML -->
<html lang="es"> <!-- Inicio del elemento HTML con el atributo "lang" que establece el idioma en español -->
<head>
    <meta charset="UTF-8"> <!-- Configura la codificación de caracteres a UTF-8 -->
    <meta http-equiv="X-UA-Compatible" content="IE=chrome"> <!-- Establece la compatibilidad con Internet Explorer en versiones específicas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura la vista de la página para dispositivos móviles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css"> <!-- Enlaza una hoja de estilo CSS externa llamada "style.css" -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Realiza una preconexión a "https://fonts.googleapis.com" -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Realiza una preconexión a "https://fonts.gstatic.com" con la especificación de crossorigin -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Enlaza una fuente de Google Fonts llamada "Roboto" con dos pesos específicos -->
</head> <!-- Cierre del elemento "head" que contiene metadatos y enlaces a recursos externos -->
<body> <!-- Inicio del elemento "body" que contiene el contenido principal de la página web -->
<div class="logo"> <!-- Un div con la clase "logo" -->
    <img src="img/logo.png" class="circle3-image" alt="Imagen circular"> <!-- Una imagen con la clase "circle3-image" y una descripción alternativa -->
</div> <!-- Cierre del div "logo" -->

<body> <!-- Inicio del cuerpo de la página -->

<title>CATEGORIA BEBIDAS</title> <!-- Título de la página que se muestra en la pestaña del navegador -->

</head> <!-- Cierre de la sección "head" -->

<body> <!-- Inicio del cuerpo de la página principal -->

<section class="contenido"> <!-- Una sección con la clase "contenido" -->
    <div class="mostrador" id="mostrador"> <!-- Un div con las clases "mostrador" y "id" "mostrador" -->
        <div class="fila"> <!-- Un div con la clase "fila" -->
            <!-- Primer elemento -->
            <div class="item" onclick="cargar(this)"> <!-- Un div con la clase "item" y un atributo "onclick" -->
                <div class="contenedor-foto"> <!-- Un div con la clase "contenedor-foto" -->
                    <img src="img/pañales.png" alt=""> <!-- Una imagen con una ruta "src" y una descripción alternativa "alt" -->
                </div> <!-- Cierre del div "contenedor-foto" -->
                <p class="descripcion">Pañales Hugges unidad</p> <!-- Un párrafo con la clase "descripcion" -->
                <span class="precio">$ 900</span> <!-- Un span con la clase "precio" -->
            </div> <!-- Cierre del primer "item" -->

            <!-- Los siguientes elementos siguen un patrón similar -->

            <!-- Segundo elemento -->
            <div class="item" onclick="cargar(this)">
                <div class="contenedor-foto">
                    <img src="img/toallitashu.jpg" alt="">
                </div>
                <p class="descripcion">Toallitas humedas Pequeñin</p>
                <span class="precio">$ 3.800</span>
            </div>

            <!-- Tercer elemento -->
            <div class="item" onclick="cargar(this)">
                <div class="contenedor-foto">
                    <img src="img/johnsons.png" alt="">
                </div>
                <p class="descripcion">SHAMPOO JOHNSON NIÑOS X25 ML</p>
                <span class="precio">$ 1.300</span>
            </div>

            <!-- Cuarto elemento -->
            <div class="item" onclick="cargar(this)">
                <div class="contenedor-foto">
                    <img src="img/creman4.jpeg" alt="">
                </div>
                <p class="descripcion">Crema N.4</p>
                <span class="precio">$ 9.950</span>
            </div>

        </div> <!-- Cierre del div "fila" -->
<div class="fila">
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/pedigree.jpg" alt="">
                    </div>
                    <p class="descripcion">Pedigree Alimento humedo perro </p>
                    <span class="precio">$ 2.900</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/whiskas.jpg" alt="">
                    </div>
                    <p class="descripcion">Whiskas alimento Humedo gato </p>
                    <span class="precio">$ 2.900</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/Hueso.jpg" alt="">
                    </div>
                    <p class="descripcion">Hueso natural 5 largo Perros</p>
                    <span class="precio">$ 4.700</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/petys.jpg" alt="">
                    </div>
                    <p class="descripcion">Shampoo Petys 235 ml perros gatos </p>
                    <span class="precio">$ 16.500</span>
                </div>
            </div> 
        </div>

<!-- CONTENEDOR DEL ITEM SELECCIONADO -->
<div class="seleccion" id="seleccion"> <!-- Un div con la clase "seleccion" y el atributo "id" "seleccion" -->
    <div class="cerrar" onclick="cerrar()"> <!-- Un div con la clase "cerrar" y un atributo "onclick" -->
        &#x2715 <!-- Un símbolo de "X" en formato hexadecimal (icono para cerrar la selección) -->
    </div> <!-- Cierre del div "cerrar" -->
    <div class="info"> <!-- Un div con la clase "info" -->
        <img src="img/bigcola.png" alt="" id="img"> <!-- Una imagen con una ruta "src", una descripción alternativa "alt" y un atributo "id" "img" -->
        <h2 id="modelo">Gaseosa big cola personal</h2> <!-- Un encabezado de nivel 2 con un atributo "id" "modelo" -->
        <p id="descripcion">Botella litro</p> <!-- Un párrafo con un atributo "id" "descripcion" -->
        <span class="precio" id="precio">$1.500</span> <!-- Un span con la clase "precio" y un atributo "id" "precio" -->
        <div class="fila"> <!-- Un div con la clase "fila" -->
            <div class="size"> <!-- Un div con la clase "size" -->

        </div> <!-- Cierre del div "fila" -->
    </div> <!-- Cierre del div "info" -->
</div> <!-- Cierre del div "seleccion" -->
</section> <!-- Cierre de la sección "contenido" -->

<script src="script.js"></script> <!-- Enlace a un archivo JavaScript externo llamado "script.js" -->
</body> <!-- Cierre del cuerpo de la página -->
</html> <!-- Cierre del elemento HTML -->

<head> <!-- Etiqueta de cabeza de HTML que contiene metainformación -->
  <title>Volver</title> <!-- El título de la página que aparecerá en la pestaña del navegador -->
  <ul class="meniu"> <!-- Una lista no ordenada (ul) con la clase "meniu" -->
    <li class="menu-item"><a href="inicioD.php">Inicio</a></li> <!-- Un elemento de lista (li) con la clase "menu-item" que contiene un enlace (a) a "inicio.php" con el texto "Inicio" -->
    <li class="menu-item"><a href="../index.php">Salir</a></li> <!-- Otro elemento de lista similar para "Salir" -->

    <li class="menu-item"><a href="inicioD.php">Volver</a></li> <!-- Un tercer elemento de lista para "Volver" -->
    <body>