<?php
require_once('../Modelo/Domicilios.php');
require_once('../Modelo/Login.php');
// SI SE LLEGASE A ACOPIAR LA URL DE ESTA PAGINA, PRIMERO VERIFICA CON LA FUNCION DE VALIDATESSION
//DE LO CONTRARIO REDIRECCION AL LOGIN Y SALE DE LA APLICACION
$ModeloLogin=new Login();
$ModeloLogin->validateSession();
$model=new Domicilio();
$model->idDomicilio=$_GET["idDomicilio"];
$Domicilio=$model->Obtener($model->idDomicilio);
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
<h2 class="page-header">DOMICILIOS</h2>
<?php
if($Domicilio!=null){
    foreach($Domicilio as $datos){
?>
<ol class="breadcrumb">
<li><a href="Domicilios.php">Domicilio</a></li><!--LLAMA A LA VISTA< USUARIOS.PHP---> 
<li class="active"><?php echo $datos["idDomicilio"] != null ? $datos["horaDomicilio"] : 'Nuevo Domicilio'; ?></li>
</ol>
<form id="frm-domicilio" action="../Controlador/EditarDomicilio.php" method="POST"
enctype="multipart/form-data"><!--INDICA QUE CONTROLADOR Y QUE ACCION EJECUTAR, EN ESTE CASO LLAMARIA AL ARCHIVO EDITARUSUARIO.PHP ---> 
<input type="hidden" name="idDomicilio" value="<?php echo $datos["idDomicilio"]; ?>" /><!--LA CLAVE PRINICIPAL ESTA OCULTA Y TOMA COMO VALOR EL ID DE LA VARIABLE $datos["id"]--->
<div class="form-group">
    <label>Hora del Domicilio</label>
    <input type="text" name="horaDomicilio" value="<?php echo $datos["horaDomicilio"]; ?>"
    class="form-control" placeholder="ingrese la hora del Domicilio" required="true" />
</div>

<div class="form-group">
    <label>Estado</label>
    <select name="estadoDomicilio" class="form-control" required="true">
        <option <?php echo $datos["estadoDomicilio"] == 1 ? 'selected' : '';?> value="1">Activo</option>
        <option <?php echo $datos["estadoDomicilio"] == 2 ? 'selected' : '';?> value="2">Inactivo</option>
    </select>
</div><div class="form-group">
    <label>ID del Pedido</label>
    <input type="text" name="idPedidoFK" value="<?php echo $datos["idPedidoFK"]; ?>"
    class="form-control" placeholder="ingrese el ID del Pedido" required="true" />
</div>
<div class="form-group">
    <label>ID del Domiciliario</label>
   <input type="text" name="idUsuarioFK" value="<?php echo $datos["idUsuarioFK"] ?? ''; ?>"
   class="form-control" placeholder="ingrese el ID del Domiciliario" required="true" />
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