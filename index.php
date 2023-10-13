<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    //Navbar
    include('Components/navbar.php');

    //title
    require('Components/title.php');
    mostrarEncabezado('Servicios', '¡Hola, soy Luis Ron! En esta sección, encontrarás mis servicios clave para tu éxito en línea. Desde presencias web impresionantes hasta aplicaciones personalizadas. ¡Contáctame para comenzar tu proyecto digital!');

    ?>

    <!-- Cards -->
    <main class="container py-3">
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Aplicación Web</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$200</h1>
                        <hr>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Desarrollo a medida</li>
                            <li>Diseño responsivo</li>
                            <li>Optimización de rendimiento</li>
                            <li>Soporte post-lanzamiento</li>
                        </ul>
                        <a href="Pages/Cliente/Registro.Cliente.php" t shadow hover-shadow-mdype="button" class="w-100 btn btn-lg btn-outline-dark">Elegir Este Servicio</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Aplicación Móvil</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$300</h1>
                        <hr>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Desarrollo para iOS y Android</li>
                            <li>Interfaz de usuario intuitiva</li>
                            <li>Notificaciones push</li>
                            <li>Integración de servicios en la nube</li>
                        </ul>
                        <a href="Pages/Cliente/Registro.Cliente.php" type="button" class="w-100 btn btn-lg btn-dark">Elegir Este Servicio</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-dark">
                    <div class="card-header py-3 text-bg-dark border-dark">
                        <h4 class="my-0 fw-normal">Aplicación de Escritorio</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$250</h1>
                        <hr>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Desarrollo multiplataforma</li>
                            <li>Interfaz de usuario intuitiva</li>
                            <li>Funciona sin conexión a internet</li>
                            <li>Soporte técnico dedicado</li>
                        </ul>
                        <a href="Pages/Cliente/Registro.Cliente.php" type="button" class="w-100 btn btn-lg btn-dark">Elegir Este Servicio</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>