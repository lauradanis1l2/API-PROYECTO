<?php
session_start();
require_once('../Modelo/Login.php');
require_once('../Modelo/Conexion.php');

if ($_POST) {
    $Usuario = $_POST['email'];
    $Password = $_POST['password'];
    $id_RolUsuario_fk = $_POST['id_RolUsuario_fk'];

    $model = new Login();
    $entrada = $model->login($Usuario, $Password);

    if ($entrada != false) {
        $pdo = Conexion::StartUp();

        $consulta = $pdo->prepare("SELECT idUsuario, id_RolUsuario_fk FROM usuario WHERE correoUsuario = :Usuario");
        $consulta->bindParam(':Usuario', $Usuario);
        $consulta->execute();
        $resultado = $consulta->fetch();

        if ($resultado) {
            $rolUsuario = $resultado['id_RolUsuario_fk'];

            // ✅ GUARDAR DATOS EN SESIÓN
            $_SESSION["idUsuario"] = $resultado["idUsuario"];
            $_SESSION["rolUsuario"] = $resultado["id_RolUsuario_fk"];
            $_SESSION["correoUsuario"] = $Usuario;

            if ($rolUsuario == $id_RolUsuario_fk) {
                switch ($rolUsuario) {
                    case 1:
                        header('Location: ../Vista/inicioC.php');
                        break;
                    case 2:
                        header('Location: ../Vista/inicio.php');
                        break;
                    case 3:
                        header('Location: ../Vista/inicioD.php');
                        break;
                    default:
                        header('Location: ../Vista/pagina-de-error.php');
                        break;
                }
            } else {
                header('Location: ../Vista/pagina-de-error.php');
            }
        } else {
            header('Location: ../Vista/pagina-de-error.php');
        }
    } else {
        header('Location: ../index.php');
    }
}
