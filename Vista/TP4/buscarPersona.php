<?php
include_once "../Estructura/cabecera.php";
?>

<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3>Buscar Datos Persona</h3>
            <form action="listaPersona.php" method="post" id="buscarPersona">
                <div class="form-group mb-2 col-4">
                    <label class="form-label" for="NroDni">Ingrese el Dni</label>
                    <input class="form-control" type="text" name="NroDni" id="NroDni" required>
                </div>
                <div class="form-group mt-2">
                    <input class="btn btn-primary" type="submit" value="Buscar">
                    <a  class="btn btn-primary" type="btn" href="index.php">Menu</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include_once "../Estructura/footer.php";
?>