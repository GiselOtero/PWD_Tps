<?php
include_once "../Estructura/cabecera.php";

$datos = data_submitted();

$unaPersona = null;
$editar = false;
$accion = "nuevo";

$abmPersona = new ABMPersona();
if (isset($datos["NroDni"])) {

    $listadoPersonas = $abmPersona->buscar($datos);
    if(count($listadoPersonas)>0){
        $unaPersona =$listadoPersonas[0];
        $accion = "editar";
        $editar = true;

    }

}

?>
<div class="container mt-2">
    <div class="row justify-content-center">
<div class="">

</div>
 <div class="text-center display-4">
    Ingresar datos
 </div>
        <div class="col-md-6">

            <form action="accionPersona.php" method="post" id="formPersona" name="formPersona">

                <div class="mt-2">
                    <label class="form-label" for="Dni">Dni</label>
                    <input class="form-control" type="text" name="NroDni" id="NroDni" value="<?php echo ($editar) ?  $unaPersona->getNroDni() : ''; ?>" >
                </div>
                <div class="mt-2">
                    <label class="form-label" for="Apellido">Apellido</label>
                    <input class="form-control" type="text" name="Apellido" id="Apellido" value="<?php echo ($editar) ?  $unaPersona->getApellido() : ''; ?>">
                </div>
                <div class="mt-2">
                    <label class="form-label" for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="Nombre" id="Nombre"  value="<?php echo ($editar) ?  $unaPersona->getNombre() : ''; ?>" >
                </div>
                <div class="mt-2">
                    <label class="form-label" for="fecha">Fecha Nacimiento</label>
                    <input class="form-control" type="date" name="fechaNac" id="fechaNac"  value="<?php echo ($editar) ?  $unaPersona->getFechaNac() : ''; ?>">
                </div>
                <div class="mt-2">
                    <label class="form-label" for="Telefono">Telefono</label>
                    <input class="form-control" type="text" name="Telefono" id="Telefono"   value="<?php echo ($editar) ?  $unaPersona->getTelefono() : ''; ?>" >
                </div>
                <div class="mt-2">
                    <label class="form-label" for="Domicilio">Domicilio</label>
                    <input class="form-control" type="text" name="Domicilio" id="Domicilio" value="<?php echo ($editar) ?  $unaPersona->getDomicilio() : ''; ?>">
    
                </div>
                <div>
                    <!-- Accion -->
                    <input type="hidden" name="accion" id="accion" value="<?php echo $accion; ?>">
                </div>


                <div class="mt-4">
                    <input class="btn btn-primary" type="submit" value="Enviar">
                    <input class="btn btn-danger" type="reset" value="Cancelar">
                    <a  class="btn btn-secondary" type="btn" href="index.php">Menu</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once "../Estructura/footer.php";
?>