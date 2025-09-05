<?php
include_once "../Estructura/cabecera.php";
include_once "../../utiles/funciones.php";
//include_once "../../Control/TP1/ControlTP1.php";

$datos = data_submitted();
$control = new ControlTP1();
$respuesta = $control->ejercicio6($datos);

echo " ".$respuesta;


/* echo "Hola, yo soy ".$datos['nombre'].", ".$datos['apellido']." tengo ".$datos['edad']." años y vivo en ". $datos['direccion'];
//echo "  estudios ".$datos['estudios'];
switch($datos['estudios']){
    case 1: echo " No tiene estudios ";
    break;
    case 2: echo " Primario completo ";
    break;
    case 3: echo " Secundario completo";
    break;
    default: echo "  ";
    break;
}

switch($datos['sexo']){
    case 1: echo " Femenino ";
    break;
    case 2: echo " masculino ";
    break;
    default: echo " prefiere no decir ";
    break;
}

foreach ($datos['deportes'] as $deporte){
    echo " ".$deporte.", ";
} */


?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-2">
            <p class="fs-4 text-center">Son en total de <?php echo $respuesta; ?> horas en la semana</p>

            <div class="text-center">
                <a type="btn" class="btn btn-primary" href="Ejercicio6.php">Volver</a>
                <a type="btn" class="btn btn-primary" href="menuTp1.php">Ejercicios</a>
            </div>
        </div>
    </div>
</div>

<?php
//footer
?>