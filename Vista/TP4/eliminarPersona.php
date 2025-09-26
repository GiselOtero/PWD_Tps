<?php
include_once "../Estructura/cabecera.php";

$datos = data_submitted();

$contolPersona = new ABMPersona();


$salida = $contolPersona -> eliminarPersona($datos);



if($salida["autosAsociados"]){

    $link = "accionBuscarPersonaAuto.php?NroDni=".$param["NroDni"];
    header("Location: ".$salida["link"]."&mensaje=".$salida["respuesta"]);
    exit;
}else{
    header("Location: listaPersona.php?mensaje=".$salida["respuesta"]);
    exit;
}

?>
<!-- 
<div>
    <p  class="text-center display-6">
        <?php echo $salida['respuesta']; ?>

    </p>

    <a class="btn btn-primary" href="<?php echo $salida['link']; ?>">Ir</a>

</div> -->




<?php
include_once "../Estructura/footer.php";
?>