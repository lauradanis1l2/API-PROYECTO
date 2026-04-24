<?php
require_once('../Modelo/Usuarios.php');
require_once('../Modelo/Login.php');
// SI SE LLEGASE A ACOPIAR LA URL DE ESTA PAGINA, PRIMERO VERIFICA CON LA FUNCION DE VALIDATESSION
//DE LO CONTRARIO REDIRECCION AL LOGIN Y SALE DE LA APLICACION
$ModeloLogin=new Login();
$ModeloLogin->validateSession();
$model=new Usuario();
$model->idUsuario=$_GET["idUsuario"];
$Usuario=$model->Obtener($model->idUsuario);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>TIENDA JC</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/estilos.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <div class="container">
        <h1 class="page-header">
            <div class="well well-sm text-center">
</h1>
<h1 class="page-header"></h1>
<h2 class="page-header">USUARIOS</h2>
<?php
if($Usuario!=null){
    foreach($Usuario as $datos){
?>
<ol class="breadcrumb">
<li><a href="Usuarios.php">Usuario</a></li><!--LLAMA A LA VISTA< USUARIOS.PHP---> 
<li class="active"><?php echo $datos["idUsuario"] != null ? $datos["nombreUsuario"] : 'Nuevo Registro'; ?></li>
</ol>
<form id="frm-usuario" action="../Controlador/EditarUsuario.php" method="POST"
enctype="multipart/form-data"><!--INDICA QUE CONTROLADOR Y QUE ACCION EJECUTAR, EN ESTE CASO LLAMARIA AL ARCHIVO EDITARUSUARIO.PHP ---> 
<input type="hidden" name="idUsuario" value="<?php echo $datos["idUsuario"]; ?>" /><!--LA CLAVE PRINICIPAL ESTA OCULTA Y TOMA COMO VALOR EL ID DE LA VARIABLE $datos["id"]--->
<div class="form-group">
    <label>Tipo Documento </label>
    <input type="text" name="tipoDocUsuario" value="<?php echo $datos["tipoDocUsuario"]; ?>"
    class="form-control" placeholder="ingrese su tipo de documento" required="true" />
</div>

<div class="form-group">
    <label>Numero Documento </label>
    <input type="text" name="numdocUsuario" value="<?php echo $datos["numdocUsuario"]; ?>"
    class="form-control" placeholder="ingrese su nombre" required="true" />
</div>
<div class="form-group">
    <label>Nombre</label>
    <input type="text" name="nombreUsuario" value="<?php echo $datos["nombreUsuario"]; ?>"
    class="form-control" placeholder="ingrese su nombre" required="true" />
</div>
<div class="form-group">
    <label>Apellido</label>
    <input type="text" name="apellidoUsuario" value="<?php echo $datos["apellidoUsuario"]; ?>"
    class="form-control" placeholder="ingrese su nombre" required="true" />
</div>

<div class="form-group">
    <label>Direccion</label>
    <input type="text" name="direccionUsuario" value="<?php echo $datos["direccionUsuario"]; ?>"
    class="form-control" placeholder="ingrese su apellido" required="true" />
</div>
<div class="form-group">
    <label>Telefono</label>
    <input type="text" name="telefonoUsuario" value="<?php echo $datos["telefonoUsuario"]; ?>"
    class="form-control" placeholder="ingrese su apellido" required="true" />
</div>
<div class="form-group">
    <label>Correo</label>
    <input type="email" name="correoUsuario" value="<?php echo $datos["correoUsuario"]; ?>"
    class="form-control" placeholder="ingrese su correo electronico" required="true" />
</div>

<div class="form-group">
    <label>Contraseña</label>
    <input typé="password" name="passwordUsuario" value="<?php echo $datos["passwordUsuario"]; ?>" class="form-control" placeholder="Ingrese su contraseña" required="true" />
</div>

<div class="form-group">
    <label>Id Rol Usuario </label>
    <input type="text" name="id_RolUsuario_fk" value="<?php echo $datos["id_RolUsuario_fk"]; ?>"
    class="form-control" placeholder="ingrese su id rol usuario" required="true" />
</div>

<div class="form-group">
    <label>Estado</label>
    <select name="estadoUsuario" class="form-control" required="true">
        <option <?php echo $datos["estadoUsuario"] == 1 ? 'selected' : '';?> value="1">Activo</option>
        <option <?php echo $datos["estadoUsuario"] == 2 ? 'selected' : '';?> value="2">Inactivo</option>
    </select>
</div>

<hr />
<div class="text-right">
    <button class="btn btn-succes">Guardar</button>
</div>
<?php

    }
}

?>
</form>
<hr />

</div>
</div>
</body>
</html>