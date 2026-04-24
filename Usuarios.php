<?php
require_once('../Modelo/Usuarios.php');
require_once('../Modelo/Login.php');
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
    <link rel="stylesheet" href="css/style1.css"> <!-- Enlaza una hoja de estilo CSS externa llamada "style.css" -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Realiza una preconexión a "https://fonts.googleapis.com" -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Realiza una preconexión a "https://fonts.gstatic.com" con la especificación de crossorigin -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
</head>
<body>
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

            <a class="boton" href="AgregarUsuario.php">Nuevo Usuario</a><!--INDICA QUE EL CONTROLADOR Y QUE ACCION EJECUTAR, EN ESTE CASO LLAMARIA AL ARCHIVO AGREGARUSUARIO.PHP---> <br>
            <br>
            <br>
            <a class="boton" href="reporteU.php">Generar Reporte</a><br>
            <br>
            <br>
            <a class="boton" href="inicioc.php">Inicio</a><!--PERMITE VOLVER A LA VISTA EL MENU---> <br>
            <br>
            <br>
</div>
</div> <!-- Fin del contenedor "message" -->
            
</div>
<table class="formulario">
<thead>
    <tr>
        <th style="width:0px";>Id</th>
        <th style="width:150px;">Tipo Doc</th>
        <th style="width:150px;">Numero Doc</th>
        <th style="width:100px";>Nombre </th>
        <th style="width:150px";>Apellido</th>
        <th>Direccion</th>
        <th style="width:100px;">Telefono</th>
        <th style="width:100px;">Correo</th>
        <th style="width:100px;">Contraseña</th>
        <th style="width:130px;">Estado</th>
        <th style="width:60px;">Rol Usuario</th>
        <th style="width:60px;"></th>

<?php
$Usuario=$model->Listar();
if($Usuario!=null){
    foreach ($Usuario as $r){
/* LA VARIABLE model ES UNA INSTANCIA DE LA CLASE USUARIO Y SU VEZ LLAMA A LA FUNCION
LISTAR DE USUARIO.PHP DE LA CARPETA MODELO*/?>
<tr>
    <td><?php echo $r['idUsuario']; ?></td>
    <td><?php echo $r['tipoDocUsuario']; ?></td>
    <td><?php echo $r['numdocUsuario']; ?></td>
    <td><?php echo $r['nombreUsuario']; ?></td>
    <td><?php echo $r['apellidoUsuario']; ?></td>
    <td><?php echo $r['direccionUsuario']; ?></td>
    <td><?php echo $r['telefonoUsuario']; ?></td>
    <td><?php echo $r['correoUsuario']; ?></td>
    <td><?php echo $r['passwordUsuario']; ?></td>
    <td><?php echo $r['estadoUsuario'] == 1 ? 'Activo' :  'Inactivo'; ?></td>
    <td><?php echo $r['id_RolUsuario_fk']; ?></td>
        <td> <!-- Agregamos un espacio horizontal utilizando la entidad HTML &nbsp; -->
    &nbsp;
    &nbsp;

    </td>
    <td>
        <a class="boton" href="EditarUsuario.php?idUsuario=<?php echo $r['idUsuario'];?>">Editar</a><!--INDICA QUE CONTROLADOR Y QUE ACCION EJECUTAR,
        EN ESTE CASO LLAMARIA AL ARCHIVO EDITAUSUARIO.PHP PASANDO EL ID COMO PARAMETRO---> 
    </td>
    <td> <!-- Agregamos un espacio horizontal utilizando la entidad HTML &nbsp; -->
    &nbsp;
    &nbsp;

    </td>
    <td>
        <a class="boton" href="EliminarUsuario.php?idUsuario=<?php echo $r['idUsuario'];?>">Eliminar</a><!--INDICA QUE CONTROLADOR Y QUE ACCION
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</div>
</div>
</body>
</html>