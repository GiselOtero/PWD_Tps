<?php
include_once "../Estructura/cabecera.php";

$datos = data_submitted();
$controlAuto = new AbmAuto();
$datos["DniDuenio"]=$datos["NroDni"];
$listaAuto = $controlAuto->buscar($datos);
$volverBuscar = true;



if(isset($datos["mensaje"])){
?>
<div class="my-2" id="mensaje-alert"> <?php echo $datos["mensaje"] ?></div>

<?php
}
?>
<h3>Listado de Autos</h3>
<table class="table table-striped table-hover mb-2">
    <thead>
        <tr>
            <th scope="col">Patente</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
        </tr>
    </thead>
    <?php
    if (count($listaAuto) > 0) {
        foreach ($listaAuto as $objAuto) {

            echo '<tr>';
            echo '<td >' . $objAuto->getPatente() . '</td>';
            echo '<td>' . $objAuto->getMarca() . '</td>';
            echo '<td>' . $objAuto->getModelo() . '</td>';
       
?>
<td>
    <div class="btn-group">
        <a class="btn btn-danger" href="accionEliminarAuto.php?Patente=<?php echo $objAuto->getPatente() ?>" >Eliminar</a>

    </div>
</td>
<?php
        }
    } else {
        echo '<h4>Aun no hay Autos cargados</h4>';
    }
    ?>
</table>
<div class="mt-4">
    <a class="btn btn-primary" href="listaPersona.php">Volver Lista</a>
    <a class="btn btn-secondary" href="index.php">Menu</a>
</div>
<?php
include_once("../estructura/footer.php");
?>