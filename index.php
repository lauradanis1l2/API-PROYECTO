<!DOCTYPE html> <!-- Declaración del tipo de documento, en este caso, HTML5 -->
<html lang="es"> <!-- Etiqueta HTML que define el idioma de la página, en este caso, español -->

<head> <!-- Etiqueta que inicia la sección de encabezado de la página -->

    <meta charset="UTF-8"> <!-- Metaetiqueta que especifica la codificación de caracteres (UTF-8, que es ampliamente compatible) -->
    
    <meta http-equiv="X-UA-Compatible" content="IE=chrome"> <!-- Metaetiqueta que establece el modo de compatibilidad con Internet Explorer, en este caso, para versiones de Chrome -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Metaetiqueta que configura la escala inicial y el ancho del viewport, importante para la visualización en dispositivos móviles -->

    <link rel="stylesheet" href="vista/css/style.css"> <!-- Enlace a una hoja de estilos CSS para aplicar estilos a la página -->

    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Establece una conexión previa al servidor de fuentes de Google Fonts para cargar fuentes personalizadas -->

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Establece una conexión previa al servidor de fuentes de Google Fonts con atributo "crossorigin" -->

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Enlace a una fuente personalizada de Google Fonts -->

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> <!-- Enlace a una hoja de estilos de Boxicons para iconos -->

    <title>Bienvenido a mi Formulario</title> <!-- Título de la página que se mostrará en la pestaña del navegador -->

</head> <!-- Fin de la sección de encabezado (head) de la página -->

 <div class="container-form sign-up"> <!-- Un contenedor principal con una clase llamada "container-form" y "sign-up" -->
    
        <div class="welcome-back"> <!-- Un contenedor con la clase "welcome-back" -->
        
            <div class="message"> <!-- Un contenedor con la clase "message" -->
            
            <div class="logo"> <!-- Un contenedor con la clase "logo" -->
            
                <img src="vista/img/logoe.png" class="circle-image" alt="Imagen circular"> <!-- Una imagen circular con una clase "circle-image" y una ruta de origen ("src") -->
                
            </div> <!-- Fin del contenedor "logo" -->
            
                <h1>Bienvenido a Tejidos Ahertex</h1> <!-- Encabezado de nivel 1 (h1) con el texto "Bienvenido a JC" -->
                
                <p>Si ya tienes una cuenta, inicia sesión aquí</p> <!-- Párrafo (p) con un mensaje -->
                
                <button id="btnIniciarSesion" class="sign-up-btn">Iniciar Sesión</button> <!-- Botón con un ID "btnIniciarSesion" y una clase "sign-up-btn" -->
                
    </div> <!-- Fin del contenedor "message" -->
            
</div> <!-- Fin del contenedor "welcome-back" -->
       
    <form class="formulario" action="vista/iniciarse.php" method="post">
        <h1 class="create-account">Crear una cuenta</h1><br>
    <p>Si aún no tienes una cuenta, regístrate aquí</p><br>
    <label for="user-tipodoc">Tipo de documento:</label>
    <select id="user-tipodoc" name="tipoDocUsuario" required>
        <option value="Cedula De Ciudadanía">CC</option>
        <option value="Tarjeta de Identidad">TI</option>
    </select>

    <input type="text" name="numdocUsuario" placeholder="Número de documento" required>
    <input type="text" class="form-control" name="nombreUsuario" placeholder="Nombre"required>
    <input type="text" name="apellidoUsuario" placeholder="Apellido" required>
    <input type="text" name="direccionUsuario" placeholder="Dirección" required>
    <input type="text" name="telefonoUsuario" placeholder="Teléfono" required>
    <input type="email" name="correoUsuario" placeholder="Email" required>
    <input type="password" name="passwordUsuario" placeholder="Contraseña" required>
    <input type="text" name="estadoUsuario" placeholder="Estado" required>
    <select id="id_RolUsuario_fk" name="id_RolUsuario_fk" required>
        <option value="Cliente">1</option>
        <option value="Administrador">2</option>
    </select>
    <input type="submit" value="Registrarse">
</form>

</div>
<div class="container-form sign-in">
    <!-- Formulario para iniciar sesión -->
    <form class="formulario" action="vista/iniciarsesion.php" method="post">
        
        <!-- Script JavaScript para redirigir a la página de inicio de sesión al hacer clic en el botón -->
        <script>
            const btnIniciarSesion = document.getElementById('btnIniciarSesion');
            
            btnIniciarSesion.addEventListener('click', () => {
                window.location.href = 'vista/iniciarsesion.php';
            });
        </script>
    </form>
</div>
</body>
</html>

