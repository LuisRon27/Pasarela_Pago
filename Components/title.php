<?php
function mostrarEncabezado($titulo, $descripcion = null)
{
    echo '<div class="px-4 my-5 text-center">
            <h1 class="display-5 fw-bold text-body-emphasis">' . $titulo . '</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">' . $descripcion . '</p>
                </div>
           </div>';
}

?>