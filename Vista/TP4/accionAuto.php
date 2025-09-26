<?php
include_once "../Estructura/cabecera.php";

$datos = data_submitted();
$controlAuto = new ABMAuto();

if($datos["accion"]=="nuevo"){
    
    $salida = $controlAuto->nuevoAuto($datos);
    header("Location: listaAuto.php?mensaje=".$salida["respuesta"]);
   
exit;

}else if($datos["accion"]=="editar"){
    header("Location: listaAuto.php?mensaje=".$salida["respuesta"]);
    exit;
}


?>
<!-- <div>
    
    <p  class="text-center display-4"><?php echo $salida['respuesta']; ?></p>
    
    <a class="btn btn-primary" href="<?php echo $salida['link']; ?>">Ir</a>
</div> -->

<?php
?>