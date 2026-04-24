<?php
require_once('../Modelo/Productos.php');
require_once('../Modelo/Login.php');
// SI SE LLEGASE A ACOPIAR LA URL DE ESTA PAGINA, PRIMERO VERIFICA CON LA FUNCION DE VALIDATESSION
//DE LO CONTRARIO REDIRECCION AL LOGIN Y SALE DE LA APLICACION
$ModeloLogin=new Login();
$ModeloLogin->validateSession();
$model=new Producto();
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
            <img src="./img/productos2.png" class="circle-image" alt="Imagen circular"> <!-- Una imagen circular con una clase "circle-image" y una ruta de origen ("src") -->
                
            </div> <!-- Fin del contenedor "logo" -->
            
            <h1>PRODUCTOS</h1> <br> <!-- Encabezado de nivel 1 (h1) con el texto "Bienvenido a JC" -->
<br>
<br>
            
</div>


<h2 class="page-header">
<ol class="breadcrumb">
    <li><a href="Productos.php">Producto</a></li><!--RETORNA A LA VISTA DONDE SE
     LISTAN LOS USUARIO---> 
    <li class="active">Nuevo Producto</li>
</ol>
<form id="frm-producto" action="../Controlador/AgregarProducto.php" method="post"
enctype="multipart/form-data"><!--INDICA QUE CONTROLADOR EJECUTR, EN ESTE CASO
LLAMARI L ARCHIVO AGREGARUSUARIO.PHP ---> 
<form class="formulario" id="user-form">
    <label for="user-id">ID de Producto:</label>
    <input type="text" id="idProducto" name="idProducto" placeholder="Ingrese el ID del Producto"><br>

    <label for="user-id">Descripción del producto  </label>
    <input type="text" id="descripProducto" name="descripProducto" placeholder="Ingrese la descripcion del Producto"><br>

    <label for="user-id">Precio del producto:</label>
    <input type="text" id="precioProducto" name="precioProducto" placeholder="Ingrese el precio del producto"><br>

  <label for="user-tipodoc">Categoria del Prodcuto:</label>
    <input type="text" id="categoriaProducto" name="categoriaProducto" placeholder="Ingrese la categoría del producto"></br>

      <label for="user-id">Estado del Producto:</label>
    <input type="text" id="estadoProducto" name="estadoProducto" placeholder="Ingrese el estado del producto"><br>

   
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