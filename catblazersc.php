<!DOCTYPE html> <!-- Declaración del tipo de documento -->
<html lang="es"> <!-- Inicio del documento HTML con especificación de idioma -->
<head> <!-- Inicio de la cabeza del documento -->
    <meta charset="UTF-8"> <!-- Configuración de la codificación de caracteres a UTF-8 -->
    <meta http-equiv="X-UA-Compatible" content="IE=chrome"> <!-- Configuración para Internet Explorer -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configuración de la vista para dispositivos móviles -->
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/style1.css"><!-- Enlace a una hoja de estilo CSS externa -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Establece una preconexión a un dominio -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Establece una preconexión a otro dominio con permisos -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Enlace a una fuente de Google Fonts -->
<body> <!-- Inicio del cuerpo del documento -->

<!-- Aquí comienza la estructura del contenido HTML -->

<div class="logo"> <!-- Un div con la clase "logo" -->
    <img src="img/logoe.png" class="circle3-image" alt="Imagen circular"> <!-- Una imagen circular con la clase "circle3-image" y un atributo "alt" para la descripción de la imagen -->
</div>

<title>Blazers</title> <!-- Título de la página -->
</head> <!-- Fin de la cabeza del documento -->
<body> <!-- Fin del cuerpo del documento -->

<section class="contenido"> <!-- Inicio de una sección con la clase "contenido" -->
    <div class="mostrador" id="mostrador"> <!-- Un div con la clase "mostrador" y un atributo "id" de "mostrador" -->
        <div class="fila"> <!-- Un div con la clase "fila" -->
            <!-- Cuatro elementos "item" con imágenes, descripciones y precios -->
            <div class="item" onclick="cargar(this)">
                <div class="contenedor-foto">
                    <img src="img/blazerclasico.png" alt="">
                </div>
                <p class="descripcion">Blazer Clásico de Lana</p>
                <span class="precio">$ 80.000</span>
                <button class="agregar-al-carrito-btn" onclick="agregarAlCarrito(Blazer Clásico de Lana', 80000,'img/blazerclasico.png')">Agregar al Carrito</button>
            </div>
            <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/blazerslim.png" alt="">
                    </div>
                    <p class="descripcion">Blazer Tejido Slim Fit</p>
                    <span class="precio">$ 80.000</span>
                    <button class="agregar-al-carrito-btn" onclick="agregarAlCarrito('Blazer Tejido Slim Fit', 80000,'img/blazerslim.png')">Agregar al Carrito</button>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/blazerligero.png" alt="">
                    </div>
                    <p class="descripcion">Blazer de Hilo Ligero</p>
                    <span class="precio">$ 78.000</span>
                    <button class="agregar-al-carrito-btn" onclick="agregarAlCarrito('Blazer de Hilo Ligero', 78000,'img/blazerslim.png')">Agregar al Carrito</button>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/blazeroversize.png" alt="">
                    </div>
                    <p class="descripcion">Blazer Oversize Moderno</p>
                    <span class="precio">$ 85.000</span>
                    <button class="agregar-al-carrito-btn" onclick="agregarAlCarrito('Blazer Oversize Moderno', 85000,'img/blazeroversize.png')">Agregar al Carrito</button>
                </div>
            </div>
            <div class="fila">
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/blazercuelloalto.png" alt="">
                    </div>
                    <p class="descripcion">Blazer de Lana Cuello Alto</p>
                    <span class="precio">$ 90.000</span>
                    <button class="agregar-al-carrito-btn" onclick="agregarAlCarrito('Blazer de Lana Cuello Alto', 90000,'img/blazercuelloalto.png')">Agregar al Carrito</button>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/blazerhiloabieto.png" alt="">
                    </div>
                    <p class="descripcion">Blazer Casual Abierto</p>
                    <span class="precio">$ 80.000</span>
                    <button  class="agregar-al-carrito-btn" onclick="agregarAlCarrito('Blazer Casual Abierto', 90000,'img/blazerhiloabieto.png')">Agregar al Carrito</button>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/blazerbotones.png" alt="">
                    </div>
                    <p class="descripcion">Blazer Tejido con Botones</p>
                    <span class="precio">$ 85.000</span>
                    <button  class="agregar-al-carrito-btn" onclick="agregarAlCarrito('Blazer Tejido con Botones', 85000,'img/blazerbotones.png')">Agregar al Carrito</button>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/blazercinturaajustada.png" alt="">
                    </div>
                    <p class="descripcion">Blazer Elegante Cintura Ajustada</p>
                    <span class="precio">$ 80.000</span>
                    <button class="agregar-al-carrito-btn" onclick="agregarAlCarrito('Blazer Elegante Cintura Ajustada', 80000,'img/blazercinturaajustada.png')">Agregar al Carrito</button>
                </div>
            </div> 
        </div>
        </div>
        <!-- Contenedor del item seleccionado -->
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
        </div>
    </div>

    <script src="script.js"></script> <!-- Inclusión de un archivo JavaScript externo -->
</section> <!-- Fin de la sección "contenido" -->

</body> <!-- Fin del cuerpo del documento HTML -->
</html> <!-- Fin del documento HTML -->
<script src="script.js"></script> <!-- Enlace a un archivo JavaScript externo llamado "script.js" -->
</body> <!-- Cierre del cuerpo de la página -->
</html> <!-- Cierre del elemento HTML -->

<head> <!-- Etiqueta de cabeza de HTML que contiene metainformación -->
  <title>Volver</title> <!-- El título de la página que aparecerá en la pestaña del navegador -->
  <ul class="meniu"> <!-- Una lista no ordenada (ul) con la clase "meniu" -->
    <li class="menu-item"><a href="inicioC.php">Inicio</a></li> <!-- Un elemento de lista (li) con la clase "menu-item" que contiene un enlace (a) a "inicio.php" con el texto "Inicio" -->
    <li class="menu-item"><a href="../index.php">Salir</a></li> <!-- Otro elemento de lista similar para "Salir" -->

    <li class="menu-item"><a href="inicioC.php">Volver</a></li> <!-- Un tercer elemento de lista para "Volver" -->
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


