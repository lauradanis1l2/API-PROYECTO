<?php
require_once('../Modelo/Usuarios.php');
require_once('../Modelo/Login.php');

$ModeloLogin = new Login();
$ModeloLogin->validateSession();
$model = new Usuario();
$idUsuario = 1;
$Usuario = $model->Obtener($idUsuario);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
</head>
<body>

<div class="container-form sign-up">
    <div class="welcome-back">
        <div class="message">
            <div class="logo">
                <img src="./img/usuario1.png" class="circle-image" alt="Imagen circular">
            </div>

            <h1>PERFIL USUARIO</h1>
            <br><br>
            <a class="boton" href="inicioC.php">Inicio</a>
            <br><br><br>
        </div>
    </div>

    <table class="formulario">
        <thead>
            <tr>
                <th style="width:0px;">Id</th>
                <th style="width:150px;">Tipo Doc</th>
                <th style="width:150px;">Numero Doc</th>
                <th style="width:100px;">Nombre</th>
                <th style="width:150px;">Apellido</th>
                <th>Direccion</th>
                <th style="width:100px;">Telefono</th>
                <th style="width:100px;">Correo</th>
                <th style="width:100px;">Contraseña</th>
                <th style="width:130px;">Estado</th>
                <th style="width:60px;">Rol Usuario</th>
                <th style="width:60px;">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if($Usuario != null){
                foreach ($Usuario as $r){
            ?>
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
                <td><?php echo $r['estadoUsuario'] == 1 ? 'Activo' : 'Inactivo'; ?></td>
                <td><?php echo $r['id_RolUsuario_fk']; ?></td>
                <td>
                    <a href="../Vista/EditarUsuario.php?idUsuario=<?php echo $r['idUsuario']; ?>">Editar</a>
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

</body>
</html>                          