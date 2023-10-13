<?php
require("../../../Config/Conexion.php");

$IDCliente = $_POST['IDCliente'];
$IDServicio = $_POST['IDServicio'];

$sql = "INSERT INTO trabajo (IDCliente, IDServicio) 
        VALUES (?, ?)";

$stmt = $conexion->prepare($sql);

if ($stmt) {
    $stmt->bind_param("ii", $IDCliente, $IDServicio);

    if ($stmt->execute()) {
        header("Location: ../../Pago/Pago.form.php");
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
