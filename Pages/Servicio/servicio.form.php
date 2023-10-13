<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
// Incluye componentes necesarios
include('../../Components/navbar.php');
require('../../Components/title.php');

// Muestra el encabezado con el título "Servicios" y el servicio elegido
mostrarEncabezado('Elegir Servicio');
?>

<div class="container mt-3 card">
    <form action="crud/Insertar.Trabajo.php" method="post">
        <label for="Cliente" class="form-label">Cliente</label>
        <select class="form-select mb-3" name="IDCliente">
            <option selected disabled>--Seleccionar su Nombre--</option>
            <?php
            include("../../Config/Conexion.php");
            $sql = $conexion->query("SELECT IDCliente, CONCAT(Nombre, ' ', Apellido) AS Nombrecompleto FROM cliente;");
            while ($resultado = $sql->fetch_assoc()) {
                echo "<option value='" . $resultado['IDCliente'] . "'>" . $resultado['Nombrecompleto'] . "</option>";
            }
            ?>
        </select>
        
        <label for="Servivio" class="form-label">Servivio</label>
        <select class="form-select mb-3" name="IDServicio" id="IDServicio">
            <option selected disabled>--Seleccionar Servicio--</option>
            <?php
            $sql = $conexion->query("SELECT * FROM servicio");
            while ($resultado = $sql->fetch_assoc()) {
                echo "<option value='" . $resultado['IDServicio'] . "'>" . $resultado['Nombre'] . "</option>";
            }
            ?>
        </select>
        
        <!-- colocar el Precio -->
        <input type="hidden" name="Precio" id="Precio" readonly>
        


        <div class="text-center mb-3">
            <button type="submit" class="btn btn-primary">Continuar</button>
            <a href="../../index.php" onclick="return confirm('¿Seguro que desea cancelar?');" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>
</html>
