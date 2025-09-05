<?php
include_once "../../configuracion.php";

include_once "../Estructura/cabecera.php";

//include_once "../../Control/TP1/ControlTP1.php";

$datos = $_GET['num'];
$obj = new ControlTP1();
$salida = $obj->verNumeroEj1($datos);


/* if(is_numeric($datos)){ 
    if($datos>0){
        $salida= "El numero es positivo";
    }else if($datos<0){
        $salida= "El numero es negativo";
    }else if($datos==0){
        $salida= "el numero ingresado es 0";
    }
}else{
    $salida = "no es un numero";
} */

//echo "<p>".$salida."</p>";
/* echo '<a type="btn" href="Ejercicio1VerNum.php">Volver</a>';
echo '<a type="btn" href="MenuEjercicios.php">Ejercicios</a>'; */
?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-2">
            <p class="fs-4 text-center"><?php echo $salida; ?></p>

            <div class="text-center">
                <a type="btn" class="btn btn-primary" href="Ejercicio1VerNum.php">Volver</a>
                <a type="btn" class="btn btn-primary" href="menuTp1.php">Ejercicios</a>
            </div>
        </div>
    </div>
</div>
<?
//footer

?>