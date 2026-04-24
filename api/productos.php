<?php
header('Content-Type: application/json; charset=utf-8');

function respuesta($ok, $mensaje, $datos = null){
    echo json_encode([
        "ok" => $ok,
        "mensaje" => $mensaje,
        "datos" => $datos
    ], JSON_UNESCAPED_UNICODE);
    exit;
}
require_once('../Modelo/Productos.php');

try {
    $model = new Producto();
    $accion = $_REQUEST['accion'] ?? '';

    switch($accion){
        case 'listar':
            $datos = $model->Listar();
            respuesta(true, 'Lista de productos', $datos);
            break;

        case 'obtener':
            $id = $_GET['id'] ?? null;
            if(!$id){ respuesta(false, 'Falta el id del producto'); }
            $datos = $model->Obtener($id);
            respuesta(true, 'Producto encontrado', $datos);
            break;

        case 'agregar':
            $nombreProducto      = $_POST['nombreProducto'] ?? '';
            $descripcionProducto = $_POST['descripcionProducto'] ?? '';
            $precioProducto      = $_POST['precioProducto'] ?? '';
            $categoriaProducto   = $_POST['categoriaProducto'] ?? '';
            $imagenProducto      = $_POST['imagenProducto'] ?? '';

            $model->Agregar(
                $nombreProducto,
                $descripcionProducto,
                $precioProducto,
                $categoriaProducto,
                $imagenProducto
            );
            respuesta(true, 'Producto agregado');
            break;

        case 'actualizar':
            $idProducto          = $_POST['idProducto'] ?? null;
            if(!$idProducto){ respuesta(false, 'Falta idProducto'); }

            $nombreProducto      = $_POST['nombreProducto'] ?? '';
            $descripcionProducto = $_POST['descripcionProducto'] ?? '';
            $precioProducto      = $_POST['precioProducto'] ?? '';
            $categoriaProducto   = $_POST['categoriaProducto'] ?? '';
            $imagenProducto      = $_POST['imagenProducto'] ?? '';

            $model->Actualizar(
                $nombreProducto,
                $descripcionProducto,
                $precioProducto,
                $categoriaProducto,
                $imagenProducto,
                $idProducto
            );
            respuesta(true, 'Producto actualizado');
            break;

        case 'eliminar':
            $id = $_REQUEST['id'] ?? null;
            if(!$id){ respuesta(false, 'Falta id del producto'); }
            $model->Eliminar($id);
            respuesta(true, 'Producto eliminado');
            break;

        default:
            respuesta(false, 'Accion no valida');
    }
} catch(Throwable $e){
    respuesta(false, 'Error: ' . $e->getMessage());
}