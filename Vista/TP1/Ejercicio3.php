<?php
include_once "../Estructura/cabecera.php";
?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-2">
            <p class="">Crear una página php que contenga un formulario HTML como el que se indica en la
imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
Cambiar el método Post por Get y analizar las diferencias
</p>
            <form action="accionEjercicio3.php" method="post" id="formEjercicio3">
                <div class="m-2">
                    <label class="form-label" for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="nombre" id="nombre">
                    <div class="invalid-feedback" id="error-nombre">

                    </div>
                </div>
                <div class="m-2">
                    <label class="form-label" for="apellido">Apellido</label>
                    <input class="form-control" type="text" name="apellido" id="apellido">
                    <div class="invalid-feedback" id="error-apellido">

                    </div>
                </div>
                <div class="m-2">
                    <label class="form-label" for="edad">Edad</label>
                    <input class="form-control" type="text" name="edad" id="edad">
                    <div class="invalid-feedback" id="error-edad">

                    </div>

                </div>
                <div class="m-2">
                    <label class="form-label" for="direccion">Direccion</label>
                    <input class="form-control" type="text" name="direccion" id="direccion">
                    <div class="invalid-feedback" id="error-direccion">

                    </div>
                </div>
                <div class="m-2">
                    <input class="btn btn-primary"  type="submit" value="Enviar">
                    <a  class="btn btn-primary" type="btn" href="menuTp1.php">Ejercicios</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once "../Estructura/footer.php";
?>