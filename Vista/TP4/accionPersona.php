<?php
include_once "../Estructura/cabecera.php";

$datos = data_submitted();
//print_r($datos);
$controlPersona = new ABMPersona();
$accion = $controlPersona->abmAccion($datos);
$respuesta = "";

if($accion){
    $respuesta= "La accion ".$datos["accion"]." se realizo correctamente";
}else{
    $respuesta= "La accion ".$datos["accion"]." no se realizo correctamente";

} 

header("Location: listaPersona.php?mensaje=".$respuesta);
    exit;

?>