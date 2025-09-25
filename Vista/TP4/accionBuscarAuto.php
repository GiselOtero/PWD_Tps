<?php
include_once "../Estructura/cabecera.php";

$datos = data_submitted();

$objContol = new ABMAuto();

$patente["Patente"]="eee 456";

$datoAuto = $objContol->buscar($patente);


  
if(count($datoAuto)>0){
?>
<div class="table-responsive">
   <table class="table table-striped table-hover table-primary">
        <thead>
            <tr class="table-dark">
                <th scope="col">Patente</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Dueño</th>

            </tr>
        </thead>

        <tbody>


<?php
    foreach($datoAuto as $unAuto){
        echo "<tr>";
        echo "<td>".$unAuto->getPatente()."</td>";
        echo "<td>".$unAuto->getMarca()."</td>";
        echo "<td>".$unAuto->getModelo()."</td>";
        echo "<td>".$unAuto->getDuenio()->getApellido()." ".$unAuto->getDuenio()->getNombre()."</td>";
        echo "</tr>";
    }
}else{
    echo "No se ha encontrado datos";
}
?>

        </tbody>

    </table>

</div>

<?php
include_once "../Estructura/footer.php";
?>