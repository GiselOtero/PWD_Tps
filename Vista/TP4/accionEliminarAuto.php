<?php
include_once "../Estructura/cabecera.php";
$datos = data_submitted();

$controlAuto = new ABMAuto();


$salida = $controlAuto -> eliminarAuto($datos);

header("Location: listaAuto.php?mensaje=".$salida["respuesta"]);

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