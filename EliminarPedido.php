<?php
require_once('../Modelo/Pedidos.php');
require_once('../Modelo/Login.php');
// SI SE LLEGASE A ACOPIAR LA URL DE ESTA PAGINA, PRIMERO VERIFICA CON LA FUNCION DE VALIDATESSION
//DE LO CONTRARIO REDIRECCION AL LOGIN Y SALE DE LA APLICACION
$ModeloLogin=new Login();
$ModeloLogin->validateSession();
$model=new Pedido();
$model->idPedido=$_GET["idPedido"];
?>
<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8"> <!-- Configura la codificación de caracteres a UTF-8 -->
    <meta http-equiv="X-UA-Compatible" content="IE=chrome"> <!-- Establece la compatibilidad con Internet Explorer en versiones específicas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura la vista de la página para dispositivos móviles -->
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/style1.css"><!-- Enlaza una hoja de estilo CSS externa llamada "style.css" -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Realiza una preconexión a "https://fonts.googleapis.com" -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Realiza una preconexión a "https://fonts.gstatic.com" con la especificación de crossorigin -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
</head>
<body>
    <div class="container">
        <h1 class="page-header">
            <div class="well well-sm text-center">TIENDA JC
            </h1>

<h2 class="page-header">PEDIDOS</h2>

<div class="well well-sm text-right">
<a class="btn btn-primary" href="Pedidos.php">Volver</a><!--PERMITE VOLVER A LA VISTA DONDE SE LISTAN LOS USUARIOS---> 
<form id="grm-pedido" action="../Controlador/EliminarPedido.php" method="post"enctype="multipart/form-data">
    <P>Esta a punto de eliminar un registro¿Desea Continuar?</P>
    <input type="hidden" name="idPedido" value="<?php echo $model->idPedido;?>">
<!--CON EL VALOR DEL ID DE USUARIO SE PUEDE LLAMAR AL CONTROLADOR
ELIMINARUSUARIOS.PHP---> 
<div class="text-center">
    <button class="btn btn-primary">Eliminar</button>
</div>
</div>
</form>
<hr />
</div>
</div>
</body>
</html>