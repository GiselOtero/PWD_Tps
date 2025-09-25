<?php
include_once "../Estructura/cabecera.php";
/* include_once "../../configuracion.php";
    include_once "../../Control/infoAuto/ABMPersona.php"; */

$datos = data_submitted();
$obj = new ABMPersona();
$listaPersonas = $obj->buscar(null);
if (isset($datos["NroDni"])) {
    $listaPersonas = $obj->buscar($datos);
}

if (count($listaPersonas) > 0) {
?>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-primary">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Nro Dni</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha Nac</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Domicilio</th>
                    <th scope="col">Opcion</th>

                </tr>
            </thead>

            <tbody>


                <?php
                foreach ($listaPersonas as $unaPersona) {
                    echo "<tr>";
                    echo "<td>" . $unaPersona->getNroDni() . "</td>";
                    echo "<td>" . $unaPersona->getApellido() . "</td>";
                    echo "<td>" . $unaPersona->getNombre() . "</td>";
                    echo "<td>" . $unaPersona->getFechaNac() . "</td>";
                    echo "<td>" . $unaPersona->getTelefono() . "</td>";
                    echo "<td>" . $unaPersona->getDomicilio() . "</td>";
                ?>

                    <td>
                        <div class="btn-group">
                            <a href="accionBuscarPersonaAuto.php?NroDni=<?php echo $unaPersona->getNroDni() ?>" class="btn btn-primary active" aria-current="page">Ver Auto</a>
                            <a href="formPersona.php?NroDni=<?php echo $unaPersona->getNroDni() ?>" class="btn btn-primary">Editar</a>
                            <!--<a href="#" class="btn btn-primary">Link</a> -->
                            <a href="eliminarPersona.php?NroDni=<?php echo $unaPersona->getNroDni() ?>" class="btn btn-danger">Eliminar</a>
                        </div>
                    </td>
                    </tr>
                <?php

                    /*  echo "</tr>"; */
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
            }
            ?>

            </tbody>

        </table>

    </div>
    <a class="btn btn-primary" type="btn" href="index.php">Menu</a>
    <?php
    include_once "../Estructura/footer.php";
    ?>