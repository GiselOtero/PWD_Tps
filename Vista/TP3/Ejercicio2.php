<?php
include_once "../Estructura/cabecera.php";
?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-2">
            <p class="card-text">
                Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su
contenido en un textarea.

            </p>
            <form action="accionEjercicio2.php" method="post" enctype="multipart/form-data" id="tp3ejercio2" name="tp3ejercicio2">
                <div class="mb-3">
                  <label for="formFile" class="form-label">Ingrese un archivo</label>
                  <input class="form-control" type="file" name="upload" id="upload" accept=".txt,.TXT">
                </div>

                <input class="btn btn-primary" type="submit" value="Enviar">
            </form>
        </div>
    </div>
</div>

<?php
?>