<?php
require_once('../Modelo/Usuarios.php');
require_once('../Modelo/Login.php');
// SI SE LLEGASE A ACOPIAR LA URL DE ESTA PAGINA, PRIMERO VERIFICA CON LA FUNCION DE VALIDATESSION
//DE LO CONTRARIO REDIRECCION AL LOGIN Y SALE DE LA APLICACION
$ModeloLogin=new Login();
$ModeloLogin->validateSession();
$model=new Usuario();
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
            <img src="./img/usuario1.png" class="circle-image" alt="Imagen circular"> <!-- Una imagen circular con una clase "circle-image" y una ruta de origen ("src") -->
                
            </div> <!-- Fin del contenedor "logo" -->
            
            <h1>USUARIOS</h1> <br> <!-- Encabezado de nivel 1 (h1) con el texto "Bienvenido a JC" -->
<br>
<br>
            
            <div class="well well-sm text-right">

            <a class="boton" href="Usuarios.php">Usuario</a><!--INDICA QUE EL CONTROLADOR Y QUE ACCION EJECUTAR, EN ESTE CASO LLAMARIA AL ARCHIVO AGREGARUSUARIO.PHP--->      
</div>
</div> <!-- Fin del contenedor "message" -->
            
<h1></h1> <br>
<form id="frm-usuario" action="../Controlador/AgregarUsuario.php" method="post"
enctype="multipart/form-data"><!--INDICA QUE CONTROLADOR EJECUTR, EN ESTE CASO
LLAMARI L ARCHIVO AGREGARUSUARIO.PHP ---> 
<table class="formulario">
    <label for="user-id">ID de Producto:</label>
    <input type="text" id="idUsuario" name="idUsuario" placeholder="Ingrese el ID del producto"><br>

    <label for="user-id">Tipo de documento </label>
    <input type="text" id="tipoDocUsuario" name="tipoDocUsuario" placeholder="Ingrese el Tipo de documento del usuario"><br>

    <label for="user-id">Numero de documento:</label>
    <input type="text" id="numdocUsuario" name="numdocUsuario" placeholder="Ingrese su numero de documento"><br>

  <label for="user-tipodoc">Nombre usuario:</label>
    <input type="text" id="nombreUsuario" name="nombreUsuario" placeholder="Ingrese el nombre del usuario"></br>

      <label for="user-id">Apellido:</label>
    <input type="text" id="apellidoUsuario" name="apellidoUsuario" placeholder="Apellido"><br>

    <label for="user-name">Dirección usuario:</label>
    <input type="text" id="direccionUsuario" name="direccionUsuario" placeholder="Ingrese la direccion del usuario"><br>

  <label for="user-id">Correo:</label>
    <input type="email" id="correoUsuario" name="correoUsuario" placeholder="Correo del usuario"><br>

      <label for="user-id">Telefono usuario:</label>
    <input type="text" id="telefonoUsuario" name="telefonoUsuario" placeholder="Ingrese el Telefono del usuario"><br>

    <label for="user-email">Contraseña del Usuario:</label>
    <input type="password" id="passwordUsuario" name="passwordUsuario" placeholder="Ingrese la contraseña del usuario"><br>

     <label for="product-price">Estado usuario:</label>
    <input type="text" id="estadoUsuario" name="estadoUsuario" placeholder="Estado usuario"><br>

    <label for="product-price">Id rol usuario:</label>
    <input type="text" id="id_RolUsuario_fk" name="id_RolUsuario_fk" placeholder="Estado usuario"><br>

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