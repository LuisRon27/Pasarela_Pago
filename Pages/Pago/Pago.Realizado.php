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
    mostrarEncabezado('Pago Realizado');

    ?>
    <div class="container text-center">
    
        <img src="../../Img/Success.svg" class="px-4 text-center mb-4" alt="Success" width="500"
                        loading="lazy">
        
    </div>


    <div class="text-center mb-3">
            <a href="../../index.php" class="btn btn-primary mx-2">Comprar otro Servicio</a>
            <a href="" class="btn btn-success mx-2">Ver Historial Trabajos</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>