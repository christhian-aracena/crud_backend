<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
    <link rel="stylesheet" type="text/css" href="formulario.css">
    

</head>
<body>


    <div class="formulario-container">
        <form id="miFormulario">
            <h1>Formulario de Datos</h1>

            <label for="nombreCompleto">Nombre Completo:</label>
            <input type="text" id="nombreCompleto" name="nombreCompleto" required>

            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required>

            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" required>

            <label for="campana">Campaña:</label>
            <select id="campaña" name="select">
                <option value="Sonap">Sonap </option>
                <option value="Egra">Egra</option>
                <option value="Cross ahorro">Cross ahorro</option>
            </select>

            <label for="rut">RUT:</label>
            <input type="text" id="rut" name="rut" required>

            <div class="row">
                <label for="checkboxRutExtranjero">¿RUT Extranjero?</label>
                <input type="checkbox" id="checkboxRutExtranjero" name="checkboxRutExtranjero">
            </div>

            <label for="rutExtranjero">RUT Extranjero:</label>
            <input type="text" id="rutExtranjero" name="rutExtranjero">

            <label for="supervisor">Supervisor:</label>
            <select id="supervisor" name="select">
                <option value="Antonio">Antonio </option>
                <option value="Valeria">Valeria</option>
                <option value="Leslie">Leslie</option>
                <option value="Rodrigo">Rodrigo</option>
                <option value="Barbara">Barbara</option>
            </select>

            <button type="button" onclick="agregarUsuario()">Enviar</button>
        </form>
    </div>

    <br>
    
    <div>
        <table id="tablaUsuarios">
            <tr>
                <th >Nombre completo</th>
                <th>Usuario</th>
                <th>PASS</th>
                <th>Campaña</th>
                <th>RUT</th>
                <th>RUT Extranjero</th>
                <th>Supervisor</th>
                
            </tr>
        </table>
    </div>

    <script src="formulario.js"></script>

    <div class="button-container">
        <a id="btn-boton1" href="http://192.168.110.11/ecrm/" target="_blank">Registrar Usuario</a>
        <a id="btn-boton" href="login.html">Inicio</a>
    </div>

    <form id="miFormulario" action="guardar_usuario.php" method="post">
        <!-- ... tu formulario actual ... -->
        <button type="submit">Enviar</button>
    </form>
    
    
    
</html>