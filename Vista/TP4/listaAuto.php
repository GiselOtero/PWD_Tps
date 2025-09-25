<?php
include_once "../Estructura/cabecera.php";
//include_once "../../configuracion.php";
$datos = data_submitted();
$obj = new ABMAuto;
$listaAutos = $obj->buscar(null);
if (isset($datos["Patente"])) {
    $listaAutos = $obj->buscar($datos);
}

if (count($listaAutos) > 0) {
?>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-primary">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Patente</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Dueño</th>
                    <th scope="col"></th>

                </tr>
            </thead>

            <tbody>

                <?php
                foreach ($listaAutos as $unAuto) {
                    echo "<tr>";
                    echo "<td>" . $unAuto->getPatente() . "</td>";
                    echo "<td>" . $unAuto->getMarca() . "</td>";
                    echo "<td>" . $unAuto->getModelo() . "</td>";
                    echo "<td>" . $unAuto->getDuenio()->getApellido() . " " . $unAuto->getDuenio()->getNombre() . "</td>";
                ?>
                    <td>
                        <div class="btn-group">
                            <a href="formAuto.php?Patente=<?php echo $unAuto->getPatente() ?>" class="btn btn-primary">Editar</a>
                            <!--<a href="#" class="btn btn-primary">Link</a> -->
                        </div>
                    </td>


                <?php
                    echo "</tr>";
                } //fin foreach

            } else { ?>

                <div class="card border-danger mb-3" style="max-width: 18rem;">
                    <!-- <div class="card-header">Header</div> -->
                    <div class="card-body text-danger">
                        <h5 class="card-title">No hay datos ALmacenados</h5>
                        <!--  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    </div>
                </div>

            <?php
            } //fin if else
            ?>

            </tbody>

        </table>

    </div>
<a  class="btn btn-primary" type="btn" href="index.php">Menu</a>

    <?php
    include_once "../Estructura/footer.php";
    ?>