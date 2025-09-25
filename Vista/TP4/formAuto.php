<?php
include_once "../Estructura/cabecera.php";

$datos = data_submitted();

$unAuto = null;
$editar = false;
$accion = "nuevo";

$abmAuto = new ABMAuto();
if (isset($datos["Patente"])) {

    $listadoAuto = $abmAuto->buscar($datos);
    if (count($listadoAuto) > 0) {
        $unAuto = $listadoAuto[0];
        $accion = "editar";
        $editar = true;
    }
}


?>



<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="text-center display-4">
                Ingresar datos
            </div>
            <form action="accionAuto.php" method="post" id="formAuto">

                <div class="form-group mb-2">
                    <label class="form-label">Dni Due&ntilde;o</label>
                    <input class="form-control" id="DniDuenio" name="DniDuenio" type="text"  value="<?php echo ($editar) ?  $unAuto->getDuenio()->getNroDni() : ''; ?>"   required />

                </div>

                <div class="form-group mb-2">
                    <label class="form-label">Patente</label>

                    <?php
                    if($editar){
                        ?>
                        <input class=" form-control-plaintext" id="Patente" name="Patente" type="text"  value="<?php echo ($editar) ?  $unAuto->getPatente() : ''; ?>"   readonly />
                        
                        <?php
                    }else{
                        ?>
                        <input class="form-control" id="Patente" name="Patente" type="text" required />
                        <?php
                    }
                    ?>
                </div>

                <div class="form-group mb-2">
                    <label class="form-label">Marca</label>
                    <input class="form-control" id="Marca" name="Marca" type="text" value="<?php echo ($editar) ?  $unAuto->getMarca() : ''; ?>"  required />
                </div>
                <div class="form-group mb-2">
                    <label class="form-label">Modelo</label>
                    <input class="form-control" id="Modelo" name="Modelo" type="text" value="<?php echo ($editar) ?  $unAuto->getModelo() : ''; ?>"  required />
                </div>

                <div>
                    <!-- Accion -->
                    <input type="hidden" name="accion" id="accion" value="<?php echo $accion; ?>">
                </div>
                <div class="form-group mb-2">
                    <!-- <input id="accion" name="accion" value="nuevo" type="hidden" /> -->
                    <input class="btn btn-primary" type="submit" value="<?php echo ($editar) ?  'Editar' : 'Crear'; ?>" />
                    <a class="btn btn-primary" type="btn" href="index.php">Menu</a>
                </div>
            </form>
        </div>
    </div>
</div>