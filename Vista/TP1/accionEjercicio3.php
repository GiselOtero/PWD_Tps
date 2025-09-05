<?php
include_once "../Estructura/cabecera.php";
//include_once ("../../Control/TP1/control_tp1.php");

$datos = $_POST;
$control = new ControlTP1();

$salida = $control->ejercicio3($datos);

/* echo "".$salida; */
/* echo "Hola, yo soy ".$datos['nombre'].", ".$datos['apellido']." tengo ".$datos['edad']." años y vivo en ". $datos['direccion'];
 */
?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-2">
            <p class="fs-4 text-center"> <?php echo $salida; ?></p>

            <div class="text-center">
                <a type="btn" class="btn btn-primary" href="Ejercicio3.php">Volver</a>
                <a type="btn" class="btn btn-primary" href="menuTp1.php">Ejercicios</a>
            </div>
        </div>
    </div>
</div>

<?php
//footer

?>