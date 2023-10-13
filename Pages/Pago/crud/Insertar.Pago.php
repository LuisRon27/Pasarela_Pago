<?php
require("../../../Config/Conexion.php");

$ID = intval($_POST['ID']); // Convierte a entero
$Precio = floatval($_POST['Precio']); // Convierte a punto flotante


$sql = "INSERT INTO pago (IDTrabajo, Monto) 
        VALUES (?, ?)";

$stmt = $conexion->prepare($sql);

if ($stmt) {
    $stmt->bind_param("id", $ID, $Precio);

    if ($stmt->execute()) {
        header("Location: ../Pago.Realizado.php");
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