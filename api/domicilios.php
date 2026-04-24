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
require_once('../Modelo/Domicilios.php');

try {
    $model = new Domicilio();
    $accion = $_REQUEST['accion'] ?? '';

    switch($accion){
        case 'listar':
            $datos = $model->Listar();
            respuesta(true, 'Lista de domicilios', $datos);
            break;

        case 'obtener':
            $id = $_GET['id'] ?? null;
            if(!$id){ respuesta(false, 'Falta el id del domicilio'); }
            $datos = $model->Obtener($id);
            respuesta(true, 'Domicilio encontrado', $datos);
            break;

        case 'agregar':
            $horaDomicilio   = $_POST['horaDomicilio'] ?? '';
            $estadoDomicilio = $_POST['estadoDomicilio'] ?? '';
            $idPedidoFK      = $_POST['idPedidoFK'] ?? '';
            $idUsuarioFK     = $_POST['idUsuarioFK'] ?? '';

            $model->Agregar(
                $horaDomicilio,
                $estadoDomicilio,
                $idPedidoFK,
                $idUsuarioFK
            );
            respuesta(true, 'Domicilio agregado');
            break;

        case 'actualizar':
            $idDomicilio     = $_POST['idDomicilio'] ?? null;
            if(!$idDomicilio){ respuesta(false, 'Falta idDomicilio'); }

            $horaDomicilio   = $_POST['horaDomicilio'] ?? '';
            $estadoDomicilio = $_POST['estadoDomicilio'] ?? '';
            $idPedidoFK      = $_POST['idPedidoFK'] ?? '';
            $idUsuarioFK     = $_POST['idUsuarioFK'] ?? '';

            $model->Actualizar(
                $idDomicilio,
                $horaDomicilio,
                $estadoDomicilio,
                $idPedidoFK,
                $idUsuarioFK
            );
            respuesta(true, 'Domicilio actualizado');
            break;

        case 'eliminar':
            $id = $_REQUEST['id'] ?? null;
            if(!$id){ respuesta(false, 'Falta id del domicilio'); }
            $model->Eliminar($id);
            respuesta(true, 'Domicilio eliminado');
            break;

        default:
            respuesta(false, 'Accion no valida');
    }
} catch(Throwable $e){
    respuesta(false, 'Error: ' . $e->getMessage());
}