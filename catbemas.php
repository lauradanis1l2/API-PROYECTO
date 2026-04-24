<!DOCTYPE html> <!-- Declaración del tipo de documento como HTML -->
<html lang="es"> <!-- Inicio del elemento HTML con el atributo "lang" que establece el idioma en español -->
<head>
    <meta charset="UTF-8"> <!-- Configura la codificación de caracteres a UTF-8 -->
    <meta http-equiv="X-UA-Compatible" content="IE=chrome"> <!-- Establece la compatibilidad con Internet Explorer en versiones específicas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura la vista de la página para dispositivos móviles -->
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/style1.css"><!-- Enlaza una hoja de estilo CSS externa llamada "style.css" -->
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
                <button class="agregar-al-carrito-btn" onclick="agregarAlCarrito('Pañales Hugges unidad', 900,'img/pañales.png')">Agregar al Carrito</button>
            </div> <!-- Cierre del primer "item" -->

            <!-- Los siguientes elementos siguen un patrón similar -->

            <!-- Segundo elemento -->
            <div class="item" onclick="cargar(this)">
                <div class="contenedor-foto">
                    <img src="img/toallitashu.jpg" alt="">
                </div>
                <p class="descripcion">Toallitas humedas Pequeñin</p>
                <span class="precio">$ 3.800</span>
                <button  class="agregar-al-carrito-btn" onclick="agregarAlCarrito('Toallitas humedas Pequeñin', 3800,'img/toallitashu.jpg')">Agregar al Carrito</button>
            </div>

            <!-- Tercer elemento -->
            <div class="item" onclick="cargar(this)">
                <div class="contenedor-foto">
                    <img src="img/johnsons.png" alt="">
                </div>
                <p class="descripcion">SHAMPOO JOHNSON NIÑOS X25 ML</p>
                <span class="precio">$ 1.300</span>
                <button class="agregar-al-carrito-btn" onclick="agregarAlCarrito('SHAMPOO JOHNSON NIÑOS X25 ML', 1300,'img/johnsons.png')">Agregar al Carrito</button>
            </div>

            <!-- Cuarto elemento -->
            <div class="item" onclick="cargar(this)">
                <div class="contenedor-foto">
                    <img src="img/creman4.jpeg" alt="">
                </div>
                <p class="descripcion">Crema N.4</p>
                <span class="precio">$ 9.950</span>
                <button class="agregar-al-carrito-btn" onclick="agregarAlCarrito('Crema N.4', 9950,'img/creman4.jpeg')">Agregar al Carrito</button>
            </div>

        </div> <!-- Cierre del div "fila" -->
<div class="fila">
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/pedigree.jpg" alt="">
                    </div>
                    <p class="descripcion">Pedigree Alimento humedo perro </p>
                    <span class="precio">$ 2.900</span>
                    <button  class="agregar-al-carrito-btn" onclick="agregarAlCarrito('Pedigree Alimento humedo perro', 2900,'img/pedigree.jpg')">Agregar al Carrito</button>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/whiskas.jpg" alt="">
                    </div>
                    <p class="descripcion">Whiskas alimento Humedo gato </p>
                    <span class="precio">$ 2.900</span>
                    <button class="agregar-al-carrito-btn" onclick="agregarAlCarrito('Whiskas alimento Humedo gato ', 2900,'img/whiskas.jpg')">Agregar al Carrito</button>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/Hueso.jpg" alt="">
                    </div>
                    <p class="descripcion">Hueso natural 5 largo Perros</p>
                    <span class="precio">$ 4.700</span>
                <button class="agregar-al-carrito-btn" onclick="agregarAlCarrito('Hueso natural 5 largo Perros', 4700,'img/Hueso.jpg')">Agregar al Carrito</button>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/petys.jpg" alt="">
                    </div>
                    <p class="descripcion">Shampoo Petys 235 ml perros gatos </p>
                    <span class="precio">$ 16.500</span>
                    <button class="agregar-al-carrito-btn" onclick="agregarAlCarrito('Shampoo Petys 235 ml perros gatos', 16500,'img/petys.jpg')">Agregar al Carrito</button>
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
    <li class="menu-item"><a href="inicio.php">Inicio</a></li> <!-- Un elemento de lista (li) con la clase "menu-item" que contiene un enlace (a) a "inicio.php" con el texto "Inicio" -->
    <li class="menu-item"><a href="../index.php">Salir</a></li> <!-- Otro elemento de lista similar para "Salir" -->

    <li class="menu-item"><a href="inicio.php">Volver</a></li> <!-- Un tercer elemento de lista para "Volver" -->
    <body>
<li class="boton" id="mostrar-carrito">Mostrar Carrito</a></li>
    <div id="carrito">
        <h2>Carrito de Compras</h2> 
        <button id="cerrar_carrito">Cerrar</button> <!-- Botón de cierre -->
        <div id="lista-carrito">
            <!-- Los productos seleccionados se mostrarán aquí -->
        </div>
        <p>Total: $<span id="total">0</span></p>
        <button class="boton" id="pagar">Pagar</button>
    </div>

  </ul> <!-- Cierre de la lista no ordenada (ul) -->
</head> <!-- Cierre de la etiqueta de cabeza (head) -->


    <style>
        /* Estilos CSS para el carrito */
        /* Puedes personalizar estos estilos según tus preferencias */
        #carrito {
            position: fixed;
            top: 0;
            right: 0;
            background-color: #6d4c41;
            padding: 10px;
            border-left: 1px solid #ccc;
            width: 250px;
            height: 100%;
            overflow-y: auto;
            display: none;
        }

        #carrito .producto {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
            padding: 5px;
            border-bottom: 1px solid #ccc;
        }

        #carrito .producto button {
            background-color: #6d4c41;
            color: white;
            border: none;
            padding: 3px 8px;
            cursor: pointer;
        }

        #carrito .producto button:hover {
            background-color: darkred;
        }

        .mostrar-carrito-cafe {
    background-color: #6d4c41; /* Color de fondo marrón */
    color: #fff; /* Color del texto blanco */
    border: none; /* Sin borde */
    padding: 10px 20px; /* Espaciado interior */
    font-size: 16px; /* Tamaño de fuente */
    cursor: pointer; /* Cambiar el cursor a una mano cuando se pasa por encima */
    border-radius: 5px; /* Borde redondeado */
    margin: 10px; /* Margen exterior */
}

.mostrar-carrito-cafe:hover {
    background-color: #4a3428; /* Color de fondo marrón oscuro al pasar el mouse */
}

/* Estilos para el carrito de compras */
.carrito {
    display: none; /* Oculta el carrito de compras por defecto */
    background-color: #6d4c41; /* Color de fondo marrón */
    color: #fff; /* Color del texto blanco */
    padding: 20px; /* Espaciado interior */
    position: absolute; /* Posición absoluta para superponer en la página */
    right: 20px; /* Alineado a la derecha */
    top: 50px; /* Alineado hacia abajo */
    width: 300px; /* Ancho del carrito */
    border-radius: 5px; /* Borde redondeado */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); /* Sombra */
}

/* Estilos para el botón de cierre (x) */
.cerrar-carrito {
    background-color: transparent; /* Fondo transparente */
    color: #fff; /* Color del texto blanco */
    border: none; /* Sin borde */
    font-size: 20px; /* Tamaño de fuente */
    cursor: pointer; /* Cambiar el cursor a una mano cuando se pasa por encima */
    position: absolute; /* Posición absoluta */
    top: 10px; /* Alineado hacia abajo */
    right: 10px; /* Alineado a la derecha */
    padding: 0;
    margin: 0;
}

        }

        #mostrar-carrito:hover {
            background-color: #555;
        }
    }
    /* styles.css */

/* Estilos para el encabezado del carrito */
.cart-header {
    background-color: #6d4c41; /* Color de fondo marrón */
    color: #fff; /* Color del texto blanco */
    padding: 10px; /* Espaciado interior */
    display: flex;
    justify-content: space-between; /* Alinear contenido a la derecha */
    align-items: center; /* Alinear verticalmente al centro */
}

/* Estilos para el botón de cierre (x) */
#cerrar_carrito {
    background-color: transparent; /* Fondo transparente */
    color: #fff; /* Color del texto blanco */
    border: none; /* Sin borde */
    font-size: 20px; /* Tamaño de fuente */
    cursor: pointer; /* Cambiar el cursor a una mano cuando se pasa por encima */
}

#cerrar_carrito:hover {
    color: #d32f2f; /* Color de texto rojo cuando se pasa el mouse por encima */
}

.agregar-al-carrito-btn {
    background-color: #8B4513; /* Café */
    color: white; /* Texto en blanco */
    border: 2px solid #8B4513; /* Borde de color café */
    padding: 5px 15px; /* Espaciado interno del botón */
    cursor: pointer; /* Cambia el cursor al pasar el ratón sobre el botón */
}

.agregar-al-carrito-btn:hover {
    background-color: white; /* Cambia el fondo a blanco al pasar el ratón sobre el botón */
    color: #8B4513; /* Cambia el texto a café al pasar el ratón sobre el botón */
}

    </style>
</head>

    <script>
        const carrito = [];
        const mostrarCarrito = document.getElementById("mostrar-carrito");
        const carritoContainer = document.getElementById("carrito");
        const listaCarrito = document.getElementById("lista-carrito");
        const totalCarrito = document.getElementById("total");

        // Función para agregar productos al carrito
        function agregarAlCarrito(nombre, precio, imagen) {
            carrito.push({ nombre, precio, imagen });
            mostrarCarritoEnUI();
        }


        // Función para mostrar el carrito en la interfaz de usuario
      function mostrarCarritoEnUI() {
   listaCarrito.innerHTML = "";
   let total = 0;

   carrito.forEach((producto, index) => {
       const productoDiv = document.createElement("div");
       productoDiv.classList.add("producto");

       const imagenProducto = document.createElement("img");
       imagenProducto.src = producto.imagen;
       imagenProducto.alt = producto.nombre;

       // Aplicar un estilo para hacer las imágenes más pequeñas
       imagenProducto.style.maxWidth = "60px";  // Ajusta el tamaño máximo de la imagen
       imagenProducto.style.maxHeight = "60px";

       productoDiv.appendChild(imagenProducto);

       const infoProducto = document.createElement("div");
       infoProducto.classList.add("info");
       infoProducto.innerHTML = `
           <p>${producto.nombre} - $${producto.precio}</p>
           <button onclick="eliminarDelCarrito(${index})">Eliminar</button>
       `;

       productoDiv.appendChild(infoProducto);
       listaCarrito.appendChild(productoDiv);
       total += producto.precio;
   });

   totalCarrito.textContent = total;
   carritoContainer.style.display = "block";
}



        // Función para eliminar productos del carrito
        function eliminarDelCarrito(index) {
            carrito.splice(index, 1);
            mostrarCarritoEnUI();
        }

        // Mostrar u ocultar el carrito al hacer clic en el botón
        mostrarCarrito.addEventListener("click", () => {
            if (carritoContainer.style.display === "block") {
                carritoContainer.style.display = "none";
            } else {
                carritoContainer.style.display = "block";
            }
        });

        // Función para simular el proceso de pago
const pagarButton = document.getElementById("pagar");
const totalElement = document.getElementById("total"); // Elemento del total

pagarButton.addEventListener("click", () => {
    const total = parseFloat(totalElement.textContent);

    if (total === 0) {
        // Verifica si el total es igual a 0 y muestra un mensaje de advertencia
        alert("Agrega productos al carrito para poder hacer tu compra.");
    } else {
        // Aquí puedes agregar lógica de pago (por ejemplo, redireccionar a una pasarela de pago real)
        alert("¡Pago completado! Gracias por tu compra.");
        carrito.length = 0; // Vacía el carrito después del pago
        mostrarCarritoEnUI();
    }
});
    
        // Obtén una referencia al botón de cerrar carrito
        var cerrarCarritoBtn = document.getElementById("cerrar_carrito");

        // Agrega un evento de clic al botón de cerrar carrito
        cerrarCarritoBtn.addEventListener("click", function() {
            // Oculta el carrito de compras estableciendo su estilo "display" a "none"
            document.getElementById("carrito").style.display = "none";
        });
    </script>
</body>
</html>

  </ul> <!-- Cierre de la lista no ordenada (ul) -->
</head> <!-- Cierre de la etiqueta de cabeza (head) -->

