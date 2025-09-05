<?php
include_once "../Estructura/cabecera.php";
?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-2">
            <p class="card-text">
                Crear un formulario HTML que permita subir un archivo. En el servidor se deberá
controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño
máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo
cargado, en caso contrario mostrar un mensaje indicando el problema. 
            </p>
            <form action="accionEjercicio1.php" method="post" enctype="multipart/form-data" id="tp3ejercicio1" name="tp3ejercicio1">
                <div class="mb-3">
                  <label for="formFile" class="form-label">Ingrese un archivo</label>
                  <input class="form-control" type="file" name="upload" id="upload" accept=".doc,.docx,.pdf" required>
                </div>

                <input class="btn btn-primary" type="submit" value="Enviar">
            </form>
        </div>
    </div>
</div>

<?php
?>