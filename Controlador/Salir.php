<?php

# Iniciar sesión (s1, aunque la vamos a destruir, primero se debe iniciar)
session_start();
#Después, destruirla
#Eso va a eliminar todo lo que haya en $_SESSION
session_destroy();
#Finalmente lo redireccionamos a la página index.html
header('Location:../index.php');

?>