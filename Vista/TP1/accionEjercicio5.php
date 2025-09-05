<?php
include_once "../Estructura/cabecera.php";
include_once "../../utiles/funciones.php";
//include_once "../../Control/TP1/ControlTP1.php";
$datos = data_submitted();
$control = new ControlTP1();
$salida = $control->ejercicio5($datos);

/* echo "  ".$salida;
 */
?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-2">
            <p class="fs-4 text-center"><?php echo $salida; ?> </p>

            <div class="text-center">
                <a type="btn" class="btn btn-primary" href="Ejercicio5.php">Volver</a>
                <a type="btn" class="btn btn-primary" href="menuTp1.php">Ejercicios</a>
            </div>
        </div>
    </div>
</div>
<?php
//footer
?>