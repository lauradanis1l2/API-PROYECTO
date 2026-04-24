<!DOCTYPE html> <!-- Declaración del tipo de documento -->
<html lang="es"> <!-- Inicio del documento HTML con especificación de idioma -->
<head> <!-- Inicio de la cabeza del documento -->
    <meta charset="UTF-8"> <!-- Configuración de la codificación de caracteres a UTF-8 -->
    <meta http-equiv="X-UA-Compatible" content="IE=chrome"> <!-- Configuración para Internet Explorer -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configuración de la vista para dispositivos móviles -->
    <link rel="stylesheet" href="css/style.css"> 
     <link rel="stylesheet" href="css/style1.css"> <!-- Enlace a una hoja de estilo CSS externa -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Establece una preconexión a un dominio -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Establece una preconexión a otro dominio con permisos -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Enlace a una fuente de Google Fonts -->
</head> <!-- Fin de la cabeza del documento -->
<body> <!-- Inicio del cuerpo del documento -->
<div class="logo"> <!-- Un div con la clase "logo" -->
    <img src="img/logoe.png" class="circle1-image" alt="Imagen circular"> <!-- Una imagen circular con la clase "circle1-image" -->
</div> <!-- Fin del div "logo" -->
<div class="container"><h1 class="page-header"><div class="well well-sm text-center">
        P R O D U C T O S</h1><br>

<body> <!-- Esta etiqueta de apertura es redundante y debe eliminarse -->
<div class="fila"> <!-- Un div con la clase "fila" -->
<div class="product"> <!-- Un div con la clase "product" -->
    <img src="img/cat-cami.png" class="product"> <!-- Una imagen con la clase "product" -->
    <div class="categoria">Camisas</div><br> <!-- Un div con la clase "categoria" que muestra el nombre de la categoría -->
    <a class="boton" href="catcamisasc.php">Ir</a> <!-- Un enlace con la clase "boton" que redirige a la página de categoría de Cuidado Personal y Aseo -->
</div> <!-- Fin del div "product" -->

<div class="product"> <!-- Un div con la clase "product" -->
    <img src="img/cat-sacos.png" class="product"> <!-- Una imagen con la clase "product" -->
    <div class="categoria">Sacos</div><br> <!-- Un div con la clase "categoria" que muestra el nombre de la categoría -->
    <a class="boton" href="catsacosc.php">Ir</a> <!-- Un enlace con la clase "boton" que redirige a la página de categoría de Lácteos y Quesos -->
</div> <!-- Fin del div "product" -->
<div class="product">
    <img src="img/cat-pantalones.png" class="product">
    <div class="categoria">Pantalones</div><br>
     <a class="boton"href="catpantalonesc.php">Ir</a>

  </div> <!-- Un div con la clase "fila" -->
<div class="product">
    <img src="img/cat-faldas.png" class="product">
    <div class="categoria">Faldas</div><br>
      <a class="boton"href="catfaldasc.php">Ir</a>

  </div>

<div class="fila"> <!-- Un div con la clase "fila" -->
<div class="product" >
    <img src="img/cat-enfermeria.png" class="product">
    <div class="categoria">Enfermeria</div><br>
      <a class="boton"href="catenfermeriac.php">Ir</a>

  </div>

<div class="product"> <!-- Inicio del primer elemento con la clase "product" -->
    <img src="img/cat-blazers.png" class="product"> <!-- Imagen con clase "product" -->
    <div class="categoria">Blazers</div> <!-- Texto que indica la categoría -->
    <br> <!-- Salto de línea -->
     <a class="boton" href="catblazersc.php">Ir</a> <!-- Enlace "Ir" con clase "boton" -->
</div> <!-- Cierre del primer elemento "product" -->

<div class="product"> <!-- Inicio del segundo elemento con la clase "product" -->
    <img src="img/cat-gorros.png" class="product"> <!-- Imagen con clase "product" -->
    <div class="categoria">Gorros</div> <!-- Texto que indica la categoría -->
    <br> <!-- Salto de línea -->
   <a class="boton" href="catgorrosc.php">Ir</a> <!-- Enlace "Ir" con clase "boton" -->
</div> <!-- Cierre del segundo elemento "product" -->

<div class="product">
 <!-- Inicio del tercer elemento con la clase "product" -->
    <img src="img/cat-chalecos.png" class="product"> <!-- Imagen con clase "product" -->
    <div class="item">Chalecos</div> <!-- Texto que indica la categoría -->
    <br> <!-- Salto de línea -->
     <a class="boton" href="catchalecosc.php">Ir</a> <!-- Enlace "Ir" con clase "boton" -->
</div> <!-- Cierre del segundo elemento "product" -->
<div class="menu"> <!-- Un div con la clase "menu" -->
   <a class="boton2" href="Productos.php">Gestión de Productos</a> <!-- Un enlace con la clase "boton2" que redirige a la página de gestión de productos -->
    <a class="boton2" href="Usuarios.php">Gestión de Usuario</a> <!-- Un enlace con la clase "boton2" que redirige a la página de gestión de usuarios -->
    <a class="boton2" href="pedidos.php">Gestión de Pedidos</a> <!-- Un enlace con la clase "boton2" que redirige a la página de gestión de pedidos -->
    <a class="boton2" href="domicilios.php">Gestión de Domicilios</a> <!-- Un enlace con la clase "boton2" que redirige a la página de gestión de domicilios -->
    <a class="boton2" href="../index.php">Cerrar Sesión</a> <!-- Un enlace con la clase "boton2" que cierra la sesión y redirige a la página de inicio -->
</div> <!-- Fin del div "menu" -->



<script>
    const menu = document.querySelector('.menu');

    document.addEventListener('DOMContentLoaded', function() {
        menu.classList.add('show');
    });
</script> <!-- Un script JavaScript que agrega la clase "show" al menú cuando el documento se ha cargado -->
</body> <!-- Fin del cuerpo del documento HTML -->
</html> <!-- Fin del documento HTML -->



