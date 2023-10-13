<?php
require("../../../Config/Conexion.php");

$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Telefono = $_POST['Telefono'];
$Email = $_POST['Email'];


$sql = "INSERT INTO cliente (Nombre, Apellido, Telefono, Email) 
        VALUES (?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);

if ($stmt) {
    $stmt->bind_param("ssss", $Nombre, $Apellido, $Telefono, $Email);

    if ($stmt->execute()) {
        header("Location: ../../Servicio/servicio.form.php");
        exit;
    } else {
        echo "Error al guardar los datos en la base de datos.";
    }

    $stmt->close();
} else {
    echo "Error al preparar la consulta.";
}

$conexion->close();
?>
