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
require_once('../Modelo/Pedidos.php');

try {
    $model = new Pedido();
    $accion = $_REQUEST['accion'] ?? '';

    switch($accion){
        case 'listar':
            $datos = $model->Listar();
            respuesta(true, 'Lista de pedidos', $datos);
            break;

        case 'obtener':
            $id = $_GET['id'] ?? null;
            if(!$id){ respuesta(false, 'Falta el id del pedido'); }
            $datos = $model->Obtener($id);
            respuesta(true, 'Pedido encontrado', $datos);
            break;

        case 'agregar':
            $fechaPedido   = $_POST['fechaPedido'] ?? '';
            $horaPedido    = $_POST['horaPedido'] ?? '';
            $totalPedido   = $_POST['totalPedido'] ?? '';
            $estadoPedido  = $_POST['estadoPedido'] ?? '';
            $idUsuarioFK   = $_POST['idUsuarioFK'] ?? '';

            $model->Agregar(
                $fechaPedido,
                $horaPedido,
                $totalPedido,
                $estadoPedido,
                $idUsuarioFK
            );
            respuesta(true, 'Pedido agregado');
            break;

        case 'actualizar':
            $idPedido      = $_POST['idPedido'] ?? null;
            if(!$idPedido){ respuesta(false, 'Falta idPedido'); }

            $fechaPedido   = $_POST['fechaPedido'] ?? '';
            $horaPedido    = $_POST['horaPedido'] ?? '';
            $totalPedido   = $_POST['totalPedido'] ?? '';
            $estadoPedido  = $_POST['estadoPedido'] ?? '';
            $idUsuarioFK   = $_POST['idUsuarioFK'] ?? '';

            $model->Actualizar(
                $fechaPedido,
                $horaPedido,
                $totalPedido,
                $estadoPedido,
                $idUsuarioFK,
                $idPedido
            );
            respuesta(true, 'Pedido actualizado');
            break;

        case 'eliminar':
            $id = $_REQUEST['id'] ?? null;
            if(!$id){ respuesta(false, 'Falta id del pedido'); }
            $model->Eliminar($id);
            respuesta(true, 'Pedido eliminado');
            break;

        default:
            respuesta(false, 'Accion no valida');
    }
} catch(Throwable $e){
    respuesta(false, 'Error: ' . $e->getMessage());
}