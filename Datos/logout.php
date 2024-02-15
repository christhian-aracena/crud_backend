<?php 
    session_start();
    session_destroy();

    // Verificar si la sesión se destruyó correctamente
    if (!isset($_SESSION['email'])) {
        echo 'La sesión se ha destruido correctamente.';
    } else {
        echo 'Error al destruir la sesión.';
    }

    // Una vez desrtuida la sesion  redirige al login
    header("Location: ../login.php");
    exit();
?>