<!DOCTYPE html> <!-- Declaración del tipo de documento -->
<html lang="es"> <!-- Inicio del documento HTML con especificación de idioma -->
<head> <!-- Inicio de la cabeza del documento -->
    <meta charset="UTF-8"> <!-- Configuración de la codificación de caracteres a UTF-8 -->
    <meta http-equiv="X-UA-Compatible" content="IE=chrome"> <!-- Configuración para Internet Explorer -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configuración de la vista para dispositivos móviles -->
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/style1.css"><!-- Enlace a una hoja de estilo CSS externa -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Establece una preconexión a un dominio -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Establece una preconexión a otro dominio con permisos -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Enlace a una fuente de Google Fonts -->
</head> <!-- Fin de la cabeza del documento -->
<body> <!-- Inicio del cuerpo del documento -->

<div class="logo"> <!-- Un div con la clase "logo" -->
    <img src="img/logoe.png" class="circle1-image" alt="Imagen circular"> <!-- Una imagen circular con la clase "circle1-image" -->
</div> <!-- Fin del div "logo" -->

<body> <!-- Esta etiqueta de apertura es redundante y debe eliminarse -->

<title>Bienvenido a mi Formulario</title> <!-- Título de la página -->

<link rel="stylesheet" href="style.css"> <!-- Enlace a otra hoja de estilo CSS externa -->

<form class="formulario" action="../Controlador/Login.php" method="post"> <!-- Un formulario con la clase "formulario" que envía datos a "inicio.php" mediante el método POST -->
    <h2 class="create-account">Inicia Sesión</h2> <!-- Un encabezado de nivel 2 con la clase "create-account" -->
    <div> <!-- Un div -->
        <input type="email" name="email" placeholder="Email" required="true"> <!-- Un campo de entrada para el correo electrónico -->
        <input type="password" name="password" placeholder="Contraseña" required="true"> <!-- Un campo de entrada para la contraseña (de tipo contraseña) -->
        <select id="id_RolUsuario_fk" name="id_RolUsuario_fk" required>
            <option value="1">Cliente</option>
            <option value="2">Administrador</option>
            <option value="3">Domiciliario</option>
        </select>
        <input type="submit" name="Ingresar" class="boton" value="Iniciar Sesión">
    </div>
</form>
        <!-- Un botón de envío del formulario con la clase "boton" y el valor "Iniciar Sesión" -->
    </div> <!-- Fin del div -->
</form> <!-- Fin del formulario -->

</body> <!-- Fin del cuerpo del documento HTML -->
</html> <!-- Fin del documento HTML -->
