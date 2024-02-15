<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if (!isset($_SESSION['email']) ) {
        header("Location: login.php"); 
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="Presentacion/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header class="contenedor-header">

        <div class="contenedor-header">
            <div class="logo">
                <img src="img/neotel.jpeg" alt="" srcset="">
                <h1 class="sombra">Gestion de registros</h1>
            </div>
        </div>

        <div class="count-user">
            <div class="nombre">
                <small>
                <?php
                    include("Negocio/get-nombre.php");
                    echo  $nombreRecortado. " " . $apellidoRecortado
                ?>
                </small>
            <!-- <a href="Datos/logout.php">Salir</a> -->
            </div>
            <div class="perfil">

            </div>
        </div>


    </header>
    <main>

    </main>
    <footer>

    </footer>
</body>

</html>