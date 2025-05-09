<?php
// DOCUMENTO PARA CERRAR LA SESIÓN 
// Se inicia la sesión para recibir los datos.
session_start();
// Eliminar los datos de la sesión anterior.
session_unset();
// Destruir la sesión por completo.
session_destroy(); 
// Redirigir al login de vuelta para que puedan iniciar sesión de nuevo.
header('Location: ../vistas/login.php'); 
exit();
?>
