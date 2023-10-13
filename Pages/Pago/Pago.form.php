<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pago</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    //Navbar
    include('../../Components/navbar.php');

    //title
    require('../../Components/title.php');
    mostrarEncabezado('Realizar Pago');

    ?>

    <div class="container py-3">
        <div class="row row-cols-1 row-cols-md-2 mb-3">

            <!-- Tarjeta de débito o crédito -->
            <div class="col">
                <form class="card mb-4 rounded-3 shadow-sm p-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">Tarjeta de débito o crédito</label>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="NumeroTarjeta" class="form-label">Número de la Tarjeta</label>
                        <input type="number" class="form-control" id="NumeroTarjeta" name="NumeroTarjeta"
                            placeholder="1234 1234 1234 1234" required>
                    </div>
                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombre completo como aparece en la tarjeta:</label>
                        <input type="text" class="form-control" id="Nombre" name="Nombre"
                            placeholder="Nombre en la tarjeta" required>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mb-3">
                            <label for="Expiracion" class="form-label">Expiración:</label>
                            <input type="text" class="form-control" id="Expiracion" name="Expiracion"
                                placeholder="MM/AA" required>
                        </div>
                        <div class="mb-3 ms-3">
                            <label for="CVC" class="form-label">CVC</label>
                            <input type="text" class="form-control" id="CVC" name="CVC" placeholder="CVC" required>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Detalle de Pago -->
            <div class="col">
                <form action="crud/Insertar.Pago.php" method="post" class="card mb-4 rounded-3 shadow-sm p-3">

                    <h4 class="card-title text-center my-2">Detalle de Pago</h4>

                    <hr>

                    <?php
                    require("../../Config/Conexion.php");

                    $sql = $conexion->query("SELECT T.IDTrabajo AS ID, C.Nombre AS Nombre, C.Apellido AS Apellido, S.Nombre AS Servicio, S.Descripcion AS Descripcion, S.Precio AS Precio, T.FechaInicio AS Fecha
                    FROM trabajo T
                    INNER JOIN cliente C ON T.IDCliente = C.IDCliente
                    INNER JOIN servicio S ON T.IDServicio = S.IDServicio
                    WHERE T.IDTrabajo = (SELECT MAX(IDTrabajo) FROM trabajo);
                    ");

                    while ($resultado = $sql->fetch_assoc()) {
                        ?>
                        <p>#:
                            <?php echo $resultado['ID'] ?>
                        </p>
                        <p>Fecha:
                            <?php echo $resultado['Fecha'] ?>
                        </p>
                        <p>Nombre:
                            <?php echo $resultado['Nombre'] ?>
                        </p>
                        <p>Apellido:
                            <?php echo $resultado['Apellido'] ?>
                        </p>

                        <hr>

                        <h4 class="card-title text-center my-2"><?php echo $resultado['Servicio'] ?></h4>
                        <p>Descripcion:
                            <?php echo $resultado['Descripcion'] ?>
                        </p>

                        <hr>
                        <h4 class="card-title my-2">Total a Pagar:<span>
                                <?php echo $resultado['Precio'] ?>
                            </span>$</h4>

                            
                            

                        <!-- IDTrabajo-->
                        <input type="hidden" class="form-control" id="ID" name="ID" value="<?php echo $resultado['ID'] ?>">
                        <!-- Monto / Precio-->
                        <input type="hidden" class="form-control" id="Precio" name="Precio"
                            value="<?php echo $resultado['Precio'] ?>">


                        <?php
                    }
                    ?>

                    <div class="text-center mb-3">
                        <button type="submit" class="btn btn-primary">Pagar</button>
                        <a href="../../index.php" onclick="return confirm('¿Seguro que desea cancelar el Pago?');"
                            class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>