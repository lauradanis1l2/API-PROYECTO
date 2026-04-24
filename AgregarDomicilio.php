<?php
require_once('../Modelo/Domicilios.php');
require_once('../Modelo/Login.php');
// SI SE LLEGASE A ACOPIAR LA URL DE ESTA PAGINA, PRIMERO VERIFICA CON LA FUNCION DE VALIDATESSION
//DE LO CONTRARIO REDIRECCION AL LOGIN Y SALE DE LA APLICACION
$ModeloLogin=new Login();
$ModeloLogin->validateSession();
$model=new ();
?>
<!DOCTYPE html>
<html lang="es">
    <meta charset="UTF-8"> <!-- Configura la codificación de caracteres a UTF-8 -->
    <meta http-equiv="X-UA-Compatible" content="IE=chrome"> <!-- Establece la compatibilidad con Internet Explorer en versiones específicas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura la vista de la página para dispositivos móviles -->
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/style1.css"><!-- Enlaza una hoja de estilo CSS externa llamada "style.css" -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Realiza una preconexión a "https://fonts.googleapis.com" -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Realiza una preconexión a "https://fonts.gstatic.com" con la especificación de crossorigin -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
     <body>
            <div class="container-form sign-up"> <!-- Un contenedor principal con una clase llamada "container-form" y "sign-up" -->
            <div class="welcome-back"> <!-- Un contenedor con la clase "welcome-back" -->
        
            <div class="message"> <!-- Un contenedor con la clase "message" -->
            
            <div class="logo"> <!-- Un contenedor con la clase "logo" -->
            <img src="./img/domicilio1.png" class="circle-image" alt="Imagen circular"> <!-- Una imagen circular con una clase "circle-image" y una ruta de origen ("src") -->
                
            </div> <!-- Fin del contenedor "logo" -->
            
            <h1>DOMICILIO</h1> <br> <!-- Encabezado de nivel 1 (h1) con el texto "Bienvenido a JC" -->
<br>
<br>
            <div class="well well-sm text-right">
                <li><a href="Domicilios.php">Domicilios</a></li><!--RETORNA A LA VISTA DONDE SE
     LISTAN LOS USUARIO---> 
    <li class="active">Nuevo Domicilio</li>
</div>
</div> <!-- Fin del contenedor "message" -->
            


<h2 class="page-header">
<ol class="breadcrumb">
    <li><a href="Domicilios.php">Domicilios</a></li><!--RETORNA A LA VISTA DONDE SE
     LISTAN LOS USUARIO---> 
    <li class="active">Nuevo Domicilio</li>
</ol>
<form id="frm-domicilio" action="../Controlador/AgregarDomicilio.php" method="post"
enctype="multipart/form-data"><!--INDICA QUE CONTROLADOR EJECUTR, EN ESTE CASO
LLAMARI L ARCHIVO AGREGARUSUARIO.PHP ---> 
<table class="formulario">
<form class="formulario" id="user-form">
    <label for="user-id">ID de Domicilio:</label>
    <input type="text" id="idDomicilio" name="idDomicilio" placeholder="Ingrese el ID del Domicilio"><br>

    <label for="user-id">Hora del Domicilio :</label>
    <input type="text" id="horaDomicilio" name="horaDomicilio" placeholder="Ingrese la hora del Domicilio"><br>

    <label for="user-id">Estado del Domicilio:</label>
    <input type="text" id="estadoDomicilio" name="estadoDomicilio" placeholder="Ingrese el estado del Domicilio"><br>

  <label for="user-tipodoc">ID del Pedido:</label>
    <input type="text" id="idPedidoFK" name="idPedidoFK" placeholder="Ingrese el ID del Pedido"></br>

      <label for="user-id">ID del Domiciliario:</label>
    <input type="text" id="idDomiciliarioFK" name="idDomiciliarioFK" placeholder="Ingrese el ID del Domiciliario"><br>

   
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