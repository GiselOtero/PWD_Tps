<?php
include_once "../Estructura/cabecera.php";
?>

<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3>Buscar Auto </h3>
            <form action="listaAuto.php" method="get" id="buscarAuto">
                <div class="form-group mb-3 col-4">
                    <label class="form-label" for="Patente">Ingrese la Patente</label>
                    <input class="form-control" type="text" name="Patente" id="Patente" required>
                </div>
                <div class="form-group mb-3">
                    <input class="btn btn-primary" type="submit" value="Buscar">
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