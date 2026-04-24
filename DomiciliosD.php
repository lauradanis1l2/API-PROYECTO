<?php
require_once('../Modelo/Domicilios.php');
require_once('../Modelo/Login.php');
$ModeloLogin=new Login();
$ModeloLogin->validateSession();
$model=new Domicilio();
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
</head>
<body>
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

            <a class="boton" href="AgregarDomicilio.php">Nuevo Domicilio</a><!--INDICA QUE EL CONTROLADOR Y QUE ACCION EJECUTAR, EN ESTE CASO LLAMARIA AL ARCHIVO AGREGARUSUARIO.PHP--->
            <a class="boton" href="reporteDo.php">Generar Reporte</a>
            <a class="boton" href="inicioD.php">Inicio</a><!--PERMITE VOLVER A LA VISTA EL MENU--->
</div>
</div> <!-- Fin del contenedor "message" -->
            
</div>
<table class="formulario">
<thead>
    <tr>
        <th style="width:0px";>Id del Domicilio</th>
        <th style="width:150px;">Hora del Domicilio</th>
       <th style="width:130px;">Estado</th>
        <th style="width:100px";>Id del Pedido</th>
        <th style="width:150px;">Id del Domiciliario</th>
        <th style="width:60px;"></th>
        <th style="width:60px;"></th>
        
       

<?php
$Domicilio=$model->Listar();
if($Domicilio!=null){
    foreach ($Domicilio as $r){
/* LA VARIABLE model ES UNA INSTANCIA DE LA CLASE USUARIO Y SU VEZ LLAMA A LA FUNCION
LISTAR DE USUARIO.PHP DE LA CARPETA MODELO*/?>
<tr>
    <td><?php echo $r['idDomicilio']; ?></td>
    <td><?php echo $r['horaDomicilio']; ?></td>
    <td><?php echo $r['estadoDomicilio']== 1 ? 'Activo' :  'Inactivo'; ?></td>
    <td><?php echo $r['idPedidoFK']; ?></td>
    <td><?php echo $r['idDomiciliarioFK']; ?></td>
     
    <td>
        <a href="EditarDomicilio.php?idDomicilio=<?php echo $r['idDomicilio'];?>">Editar</a><!--INDICA QUE CONTROLADOR Y QUE ACCION EJECUTAR,
        EN ESTE CASO LLAMARIA AL ARCHIVO EDITAUSUARIO.PHP PASANDO EL ID COMO PARAMETRO---> 
    </td>
    <td>
        <a href="EliminarDomicilio.php?idDomicilio=<?php echo $r['idDomicilio'];?>">Eliminar</a><!--INDICA QUE CONTROLADOR Y QUE ACCION
        EJECUTAR, EN ESTE CASO LLAMARIA AL ARCHIVO ELIMINARUSUARIO.PHP PASANDO
        EL ID COMO PARAMETRO---> 
    </td>
    </tr>
    <?php
    }

    }
    ?>
    </tbody>
</table>
<hr />

</div>
</div>
</body>
</html>