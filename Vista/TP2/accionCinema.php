<?php
include_once "../Estructura/cabecera.php";
include_once "../../Control/TP2/cinema.php";

$datos = data_submitted();
$control = new Cinema();
$respuesta = $control->datoscinema($datos);

?>
<div class="row justify-content-center">
    <div class="col-sm-12 col-md-8">
        <div class="card text-bg- p-4" style="background:rgb(187, 255, 187);">
            <p class="fs-3 card-title text-primary">La pelicula Introducida es</p>
            <div class="card-body ">
                <?php
                foreach ($respuesta as $clave => $valor) {

                ?>
                    <p class=" text-success"><strong><?php echo $clave; ?></strong> : <?php echo $valor; ?> </p>

                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
//include_once "../Estructura/footer.php";
?>