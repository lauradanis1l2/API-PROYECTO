<?php
// Conexión a la base de datos (reemplaza con tus credenciales)
$host = "localhost";
$username = "root";
$password = "";
$database = "gestiondomiciliosdv";

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Error de conexión a la base de datos: " . $mysqli->connect_error);
}

// Consulta SQL para obtener los detalles de la factura (reemplaza con tu lógica)
$sql = "SELECT producto.descripProducto, detallepedido.cantidadProducto, producto.precioProducto, detallepedido.subtotalProducto, pedido.totalPedido, usuario.nombreUsuario, pedido.fechaPedido
FROM pedido
JOIN detallepedido ON pedido.idPedido = detallepedido.idPedidoFK
JOIN producto ON detallepedido.idProductoFK = producto.idProducto
JOIN usuario ON pedido.idUsuarioFK = usuario.idUsuario
WHERE pedido.idPedido = 1";

$result = $mysqli->query($sql);

if (!$result) {
    die("Error en la consulta: " . $mysqli->error);
}

// Recupera los datos de la consulta
if ($row = $result->fetch_assoc()) {
    // Reemplaza los marcadores de posición en el archivo HTML
    $html = file_get_contents("factura.html");
    $html = str_replace("[Fecha]", $row['fechaPedido'], $html);
    $html = str_replace("[Cliente]", $row['nombreUsuario'], $html);

    // Genera la tabla de detalles de la factura
    $tablaDetalles = "<tr>
        <td>{$row['descripProducto']}</td>
        <td>{$row['cantidadProducto']}</td>
        <td>{$row['precioProducto']}</td>
        <td>{$row['subtotalProducto']}</td>
    </tr>";

    // Reemplaza el contenido de la tabla en el archivo HTML
    $html = str_replace("<!-- Aquí se insertarán los detalles de la factura desde la base de datos -->", $tablaDetalles, $html);

    // Reemplaza el total en el pie de página
    $html = str_replace("[Total]", $row['totalPedido'], $html);

    // Muestra la factura generada
    echo $html;
}

// Cierra la conexión a la base de datos
$mysqli->close();
?>
