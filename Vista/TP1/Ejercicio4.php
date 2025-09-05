<?php
include_once "../Estructura/cabecera.php";
?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-2">
            <p>Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
persona es mayor de edad o no; (si la edad es mayor o igual a 18).
Enviar los datos usando el método GET y luego probar de modificar los datos
directamente en la url para ver los dos posibles mensajes.</p>
            <form action="accionEjercicio4.php" method="post" id="formEjercicio4">
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
                    <input class="form-control" type="number" name="edad" id="edad" min="0" max="111">
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
                    <input class="btn btn-primary" type="submit" value="Enviar">
                    <a class="btn btn-primary" type="btn" href="menuTp1.php">Ejercicios</a>  
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once "../Estructura/footer.php";
?>