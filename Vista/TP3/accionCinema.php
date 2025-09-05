<?php
include_once "../Estructura/cabecera.php";
//include_once "../../Control/TP2/cinema.php";

$datos = data_submitted();
$control = new Cinema();
$datosCinema = $control->datoscinema($datos);
$controlFile = new ControlFile();
$datoArchivo = $controlFile->ejercicio3($datos);

print_r($datoArchivo);
?>
<div class="row justify-content-center">
    <div class="col-sm-12 col-md-8">
        <div class="card text-bg- p-4" style="background:rgb(187, 255, 187);">
            <p class="fs-3 card-title text-primary">La pelicula Introducida es</p>
            <div class="card-body ">
                <?php
                foreach ($datosCinema as $clave => $valor) {
                    if ($clave != "upload") {
                ?>

                        <p class=" text-success"><strong><?php echo $clave; ?></strong> : <?php echo $valor; ?> </p>

                <?php
                    }
                }
                if ($datoArchivo['error'] != "") {
                    echo "<div class='row'>" . $datoArchivo["link"] . "</div>";
                } else { 
                    echo "<div class='row'>" . $datoArchivo['error'] . "</div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
//include_once "../Estructura/footer.php";
?>