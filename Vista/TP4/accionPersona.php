<?php
include_once "../Estructura/cabecera.php";

$datos = data_submitted();
//print_r($datos);
$controlPersona = new ABMPersona();
$accion = $controlPersona->abmAccion($datos);


if($accion){
    echo "La accion ".$datos["accion"]." se realizo correctamente";
}else{
    echo "La accion ".$datos["accion"]." no se realizo correctamente";

} 

?>