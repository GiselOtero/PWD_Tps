<?php
include_once "../Estructura/cabecera.php";

$datos = data_submitted();
$controlAuto = new ABMAuto();

if($datos["accion"]=="nuevo"){
    
    $salida = $controlAuto->nuevoAuto($datos);
}else if($datos["accion"]=="editar"){
    $salida = $controlAuto->editarAuto($datos);
}


?>
<div>
    
    <p  class="text-center display-4"><?php echo $salida['respuesta']; ?></p>
    
    <a class="btn btn-primary" href="<?php echo $salida['link']; ?>">Ir</a>
</div>

<?php
?>