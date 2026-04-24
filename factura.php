<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factura de Compra</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="logo">
        <img src="img/logo.png" class="circle3-image" alt="Imagen circular">
    </div>

    <h1>Factura de Compra</h1>

    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se generarán las filas de la factura dinámicamente -->
        </tbody>
        <tfoot>
            <tr>
                <td>Total:</td>
                <td id="total">0</td>
            </tr>
        </tfoot>
    </table>

    <button id="generarFactura">Generar Factura</button>

    <script>
        const carrito = []; // Deberías mantener la lista de productos en el carrito aquí
        const totalCarritoElement = document.getElementById("total");
        const facturaTableBody = document.querySelector("tbody");
        const generarFacturaButton = document.getElementById("generarFactura");

        // Función para agregar productos al carrito
        function agregarAlCarrito(nombre, precio) {
            carrito.push({ nombre, precio });
            mostrarCarritoEnUI();
        }

        // Función para mostrar el carrito en la interfaz de usuario
        function mostrarCarritoEnUI() {
            facturaTableBody.innerHTML = "";
            let total = 0;

            carrito.forEach((producto) => {
                const fila = document.createElement("tr");
                fila.innerHTML = `
                    <td>${producto.nombre}</td>
                    <td>$${producto.precio}</td>
                `;
                facturaTableBody.appendChild(fila);
                total += producto.precio;
            });

            totalCarritoElement.textContent = `$${total}`;
        }

        // Generar la factura al hacer clic en el botón
        generarFacturaButton.addEventListener("click", () => {
            if (carrito.length === 0) {
                alert("El carrito está vacío. Agrega productos antes de generar una factura.");
            } else {
                // Aquí puedes realizar acciones adicionales, como enviar la factura por correo electrónico o guardarla en una base de datos.
                alert("¡Factura generada con éxito!");
            }
        });

        // Agrega productos de ejemplo al carrito (puedes eliminar esto en producción)
        agregarAlCarrito("Gaseosa big cola personal", 1500);
        agregarAlCarrito("Natu malta familiar", 3500);

        // Muestra el carrito en la interfaz de usuario
        mostrarCarritoEnUI();
    </script>
</body>
</html>
