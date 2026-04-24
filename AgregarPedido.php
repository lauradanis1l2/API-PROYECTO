<?php
require_once('../Modelo/Pedidos.php');
require_once('../Modelo/Login.php');
// SI SE LLEGASE A ACOPIAR LA URL DE ESTA PAGINA, PRIMERO VERIFICA CON LA FUNCION DE VALIDATESSION
//DE LO CONTRARIO REDIRECCION AL LOGIN Y SALE DE LA APLICACION
$ModeloLogin=new Login();
$ModeloLogin->validateSession();
$model=new Pedido();
?>
<!DOCTYPE html>
<html lang="es">
    <meta charset="UTF-8"> <!-- Configura la codificación de caracteres a UTF-8 -->
    <meta http-equiv="X-UA-Compatible" content="IE=chrome"> <!-- Establece la compatibilidad con Internet Explorer en versiones específicas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura la vista de la página para dispositivos móviles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css"> <!-- Enlaza una hoja de estilo CSS externa llamada "style.css" -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Realiza una preconexión a "https://fonts.googleapis.com" -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Realiza una preconexión a "https://fonts.gstatic.com" con la especificación de crossorigin -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
    <div class="container">
        <h1 class="page-header">
            <div class="well well-sm text-center">TIENDA JC - PEDIDOS
</h1>

<h2 class="page-header">
<ol class="breadcrumb">
    <li><a href="Pedidos.php">Pedido</a></li><!--RETORNA A LA VISTA DONDE SE
     LISTAN LOS USUARIO---> 
    <li class="active">Nuevo Pedido</li>
</ol>
<form id="frm-producto" action="../Controlador/AgregarPedido.php" method="post" enctype="multipart/form-data"><!--INDICA QUE CONTROLADOR EJECUTR, EN ESTE CASO LLAMARI L ARCHIVO AGREGARUSUARIO.PHP ---> 
<form class="formulario" id="user-form">
    <label for="user-id">ID del Pedido:</label>
    <input type="text" id="idPedido" name="idPedido" placeholder="Ingrese el ID del Pedido"><br>

    <label for="user-id">Fecha del Pedido:</label>
    <input type="text" id="fechaPedido" name="fechaPedido" placeholder="Ingrese la fecha del pedido"><br>

    <label for="user-id">Hora del Pedido:</label>
    <input type="text" id="horaPedido" name="horaPedido" placeholder="Ingrese la hora del pedido"><br>

    <label for="user-tipodoc">Total del Pedido:</label>
    <input type="text" id="$totalPedido" name="$totalPedido" placeholder="Ingrese el total del pedido"></br>

    <label for="user-id">Estado del Pedido:</label>
    <input type="text" id="estadoPedido" name="estadoPedido" placeholder="Ingrese el estado del pedido"><br>

    <label for="user-id">Id del Usuario:</label>
    <input type="text" id="idUsuarioFK" name="idUsuarioFK" placeholder="Ingrese el id del usuario"><br>
   
<hr />
<div class="text-right">
    <center><button class="btn btn-success">Guardar</button></center>
</div>
</form>
<hr />  

</div>
</div>
</body>
</html>