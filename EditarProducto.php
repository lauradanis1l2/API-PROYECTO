<?php
require_once('../Modelo/Productos.php');
require_once('../Modelo/Login.php');
// SI SE LLEGASE A ACOPIAR LA URL DE ESTA PAGINA, PRIMERO VERIFICA CON LA FUNCION DE VALIDATESSION
//DE LO CONTRARIO REDIRECCION AL LOGIN Y SALE DE LA APLICACION
$ModeloLogin=new Login();
$ModeloLogin->validateSession();
$model=new Producto();
$model->idProducto=$_GET["idProducto"];
$Producto=$model->Obtener($model->idProducto);
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
<h2 class="page-header">PRODUCTOS</h2>
<?php
if($Producto!=null){
    foreach($Producto as $datos){
?>
<ol class="breadcrumb">
<li><a href="Productos.php">Producto</a></li><!--LLAMA A LA VISTA< USUARIOS.PHP---> 
<li class="active"><?php echo $datos["idProducto"] != null ? $datos["descripProducto"] : 'Nuevo Producto'; ?></li>
</ol>
<form id="frm-producto" action="../Controlador/EditarProducto.php" method="POST"
enctype="multipart/form-data"><!--INDICA QUE CONTROLADOR Y QUE ACCION EJECUTAR, EN ESTE CASO LLAMARIA AL ARCHIVO EDITARUSUARIO.PHP ---> 
<input type="hidden" name="idProducto" value="<?php echo $datos["idProducto"]; ?>" /><!--LA CLAVE PRINICIPAL ESTA OCULTA Y TOMA COMO VALOR EL ID DE LA VARIABLE $datos["id"]--->
<div class="form-group">
    <label>Descripción del Producto </label>
    <input type="text" name="descripProducto" value="<?php echo $datos["descripProducto"]; ?>"
    class="form-control" placeholder="ingrese la descripción del producto" required="true" />
</div>

<div class="form-group">
    <label>Precio del Producto </label>
    <input type="text" name="precioProducto" value="<?php echo $datos["precioProducto"]; ?>"
    class="form-control" placeholder="ingrese el precio del producto" required="true" />
</div>
<div class="form-group">
    <label>Categoría del Producto</label>
    <input type="text" name="categoriaProducto" value="<?php echo $datos["categoriaProducto"]; ?>"
    class="form-control" placeholder="ingrese su nombre" required="true" />
</div>

<div class="form-group">
    <label>Estado</label>
    <select name="estadoProducto" class="form-control" required="true">
        <option <?php echo $datos["estadoProducto"] == 1 ? 'selected' : '';?> value="1">Activo</option>
        <option <?php echo $datos["estadoProducto"] == 2 ? 'selected' : '';?> value="2">Inactivo</option>
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