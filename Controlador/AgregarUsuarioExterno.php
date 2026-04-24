<?php
require_once('../Modelo/Usuarios.php');
if ($_POST) {
    $ModeloUsuario = new Usuarios(); 
    $tipoDocUsuario = $_POST["tipoDocUsuario"];
    $numdocUsuario = $_POST["numdocUsuario"];
    $nombreUsuario = $_POST["nombreUsuario"];
    $apellidoUsuario = $_POST["apellidoUsuario"];
    $direccionUsuario = $_POST["direccionUsuario"];
    $telefonoUsuario = $_POST["telefonoUsuario"];
    $correoUsuario = $_POST["correoUsuario"];
    $passwordUsuario = $_POST["passwordUsuario"];
    $estadoUsuario = $_POST["estadoUsuario"];
    $id_RolUsuario_fk = $_POST["id_RolUsuario_fk"];
    
    // No es necesario pasar $idUsuario si es un campo autoincremental
if ($ModeloUsuario->Agregar($tipoDocUsuario, $numdocUsuario, $nombreUsuario, $apellidoUsuario, $direccionUsuario, $telefonoUsuario, $correoUsuario, $passwordUsuario, $estadoUsuario, $id_RolUsuario_fk)) {
    header('Location:../vista/iniciarse.php');
} else {
      header('Location:../vista/index.php'); // O utiliza die("Error en el registro");
}

