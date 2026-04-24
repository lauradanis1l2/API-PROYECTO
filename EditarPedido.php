<?php
require_once('../Modelo/Pedidos.php');
require_once('../Modelo/Login.php');
// SI SE LLEGASE A ACOPIAR LA URL DE ESTA PAGINA, PRIMERO VERIFICA CON LA FUNCION DE VALIDATESSION
//DE LO CONTRARIO REDIRECCION AL LOGIN Y SALE DE LA APLICACION
$ModeloLogin=new Login();
$ModeloLogin->validateSession();
$model=new Pedido();
$model->idPedido=$_GET["idPedido"];
$Pedido=$model->Obtener($model->idPedido);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>TIENDA JC</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/estilos.css" />
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
<h2 class="page-header">PEDIDOS</h2>
<?php
if($Pedido!=null){
    foreach($Pedido as $datos){
?>
<ol class="breadcrumb">
<li><a href="Pedidos.php">Pedido</a></li><!--LLAMA A LA VISTA< USUARIOS.PHP---> 
<li class="active"><?php echo $datos["idPedido"] != null ? $datos["fechaPedido"] : 'Nuevo Pedido'; ?></li>
</ol>
<form id="frm-pedido" action="../Controlador/EditarPedido.php" method="POST"
enctype="multipart/form-data"><!--INDICA QUE CONTROLADOR Y QUE ACCION EJECUTAR, EN ESTE CASO LLAMARIA AL ARCHIVO EDITARUSUARIO.PHP ---> 
<input type="hidden" name="idPedido" value="<?php echo $datos["idPedido"]; ?>" /><!--LA CLAVE PRINICIPAL ESTA OCULTA Y TOMA COMO VALOR EL ID DE LA VARIABLE $datos["id"]--->
<div class="form-group">
    <label>Fecha del Pedido </label>
    <input type="date" name="fechaPedido" value="<?php echo $datos["fechaPedido"]; ?>"
    class="form-control" placeholder="ingrese la fecha del pedido" required="true" />
</div>

<div class="form-group">
    <label>Hora del Pedido </label>
    <input type="number" name="horaPedido" value="<?php echo $datos["horaPedido"]; ?>"
    class="form-control" placeholder="ingrese la hora del pedido" required="true" />
</div>
<div class="form-group">
    <label>Total del Pedido</label>
    <input type="number" name="totalPedido" value="<?php echo $datos["totalPedido"]; ?>"
    class="form-control" placeholder="ingrese el total del pedido" required="true" />
</div>

<div class="form-group">
    <label>Estado</label>
    <select name="estadoPedido" class="form-control" required="true">
        <option <?php echo $datos["estadoPedido"] == 1 ? 'selected' : '';?> value="1">Activo</option>
        <option <?php echo $datos["estadoPedido"] == 2 ? 'selected' : '';?> value="2">Inactivo</option>
    </select>
</div>
<div class="form-group">
    <label>Id del Usuario</label>
    <input type="number" name="idUsuarioFK" value="<?php echo $datos["idUsuarioFK"]; ?>"
    class="form-control" placeholder="ingrese el id del usuario" required="true" />
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