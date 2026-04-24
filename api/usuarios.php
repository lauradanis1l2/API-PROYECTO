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
require_once('../Modelo/Usuarios.php');

try {
    $model = new Usuario();
    $accion = $_REQUEST['accion'] ?? '';

    switch($accion){
        case 'listar':
            $datos = $model->Listar();
            respuesta(true, 'Lista de usuarios', $datos);
            break;

        case 'obtener':
            $id = $_GET['id'] ?? null;
            if(!$id){ respuesta(false, 'Falta el id del usuario'); }
            $datos = $model->Obtener($id);
            respuesta(true, 'Usuario encontrado', $datos);
            break;

        case 'agregar':
            $tipoDocUsuario   = $_POST['tipoDocUsuario'] ?? '';
            $numdocUsuario    = $_POST['numdocUsuario'] ?? '';
            $nombreUsuario    = $_POST['nombreUsuario'] ?? '';
            $apellidoUsuario  = $_POST['apellidoUsuario'] ?? '';
            $direccionUsuario = $_POST['direccionUsuario'] ?? '';
            $telefonoUsuario  = $_POST['telefonoUsuario'] ?? '';
            $correoUsuario    = $_POST['correoUsuario'] ?? '';
            $passwordUsuario  = $_POST['passwordUsuario'] ?? '';
            $estadoUsuario    = $_POST['estadoUsuario'] ?? '';
            $idRolUsuarioFk   = $_POST['id_RolUsuario_fk'] ?? '';

            $model->Agregar(
                $tipoDocUsuario,
                $numdocUsuario,
                $nombreUsuario,
                $apellidoUsuario,
                $direccionUsuario,
                $telefonoUsuario,
                $correoUsuario,
                $passwordUsuario,
                $estadoUsuario,
                $idRolUsuarioFk
            );
            respuesta(true, 'Usuario agregado');
            break;

        case 'actualizar':
            $idUsuario        = $_POST['idUsuario'] ?? null;
            if(!$idUsuario){ respuesta(false, 'Falta idUsuario'); }

            $tipoDocUsuario   = $_POST['tipoDocUsuario'] ?? '';
            $numdocUsuario    = $_POST['numdocUsuario'] ?? '';
            $nombreUsuario    = $_POST['nombreUsuario'] ?? '';
            $apellidoUsuario  = $_POST['apellidoUsuario'] ?? '';
            $direccionUsuario = $_POST['direccionUsuario'] ?? '';
            $telefonoUsuario  = $_POST['telefonoUsuario'] ?? '';
            $correoUsuario    = $_POST['correoUsuario'] ?? '';
            $passwordUsuario  = $_POST['passwordUsuario'] ?? '';
            $estadoUsuario    = $_POST['estadoUsuario'] ?? '';
            $idRolUsuarioFk   = $_POST['id_RolUsuario_fk'] ?? '';

            $model->Actualizar(
                $tipoDocUsuario,
                $numdocUsuario,
                $nombreUsuario,
                $apellidoUsuario,
                $direccionUsuario,
                $telefonoUsuario,
                $correoUsuario,
                $passwordUsuario,
                $estadoUsuario,
                $idRolUsuarioFk,
                $idUsuario
            );
            respuesta(true, 'Usuario actualizado');
            break;

        case 'eliminar':
            $id = $_REQUEST['id'] ?? null;
            if(!$id){ respuesta(false, 'Falta id del usuario'); }
            $model->Eliminar($id);
            respuesta(true, 'Usuario eliminado');
            break;

        default:
            respuesta(false, 'Accion no valida');
    }
} catch(Throwable $e){
    respuesta(false, 'Error: ' . $e->getMessage());
}