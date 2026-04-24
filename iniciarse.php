<!DOCTYPE html> <!-- Declaración del tipo de documento -->
<html lang="es"> <!-- Inicio del documento HTML con especificación de idioma -->
<head> <!-- Inicio de la cabeza del documento -->
    <meta charset="UTF-8"> <!-- Configuración de la codificación de caracteres a UTF-8 -->
    <meta http-equiv="X-UA-Compatible" content="IE=chrome"> <!-- Configuración para Internet Explorer -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configuración de la vista para dispositivos móviles -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Establece una preconexión a un dominio -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Establece una preconexión a otro dominio con permisos -->
    <title>Bienvenido a mi Formulario</title> <!-- Título de la página -->
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/style1.css"><!-- Enlace a una hoja de estilo CSS externa -->
</head> <!-- Fin de la cabeza del documento -->
<body> <!-- Inicio del cuerpo del documento -->

<div align='center'> <!-- Un div con alineación centrada -->
    <div class="regis-back"> <!-- Un div con la clase "regis-back" -->
        <div class="registro"> <!-- Un div con la clase "registro" -->
            <h1>Haz registrado tus datos correctamente</h1><br> <!-- Un encabezado de nivel 1 -->
            <h3>Ahora inicia sesión para acceder a la tienda</h3><br> <!-- Un encabezado de nivel 3 -->
            <a class="boton" href="iniciarsesion.php">Iniciar Sesion</a> <!-- Un enlace con la clase "boton" que lleva a la página de inicio de sesión "iniciarsesion.php" -->
        </div>
    </div>
 </div>

<script>
    const btnIniciarSesion = document.getElementById('btnIniciarSesion'); // Selecciona un elemento por su ID (que no existe en el código HTML)

    btnIniciarSesion.addEventListener('click', () => { // Agrega un evento de clic al elemento "btnIniciarSesion" (que no existe en el código HTML)
        window.location.href = 'iniciarsesion.php'; // Redirige a la página "iniciarsesion.php"
    });
</script> <!-- Un script JavaScript para redirigir a los usuarios -->
</body> <!-- Fin del cuerpo del documento HTML -->
</html> <!-- Fin del documento HTML -->
