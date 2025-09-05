<?php
include_once "../Estructura/cabecera.php";
//include_once "../../utiles/funciones.php";
//include_once "../../Control/TP1/ControlTP1.php";

$datos = data_submitted();
$control = new ControlTP1();
$respuesta = $control->ejercicio8($datos);

//echo " el precio es: ".$respuesta;


?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-2">
            <p class="fs-4 text-center">El precio es de <?php echo $respuesta; ?> </p>

            <div class="text-center">
                <a type="btn" class="btn btn-primary" href="Ejercicio8.php">Volver</a>
                <a type="btn" class="btn btn-primary" href="menuTp1.php">Ejercicios</a>
            </div>
        </div>
    </div>
</div>


<?php
//footer
?>