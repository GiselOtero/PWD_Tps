<?php
include_once "../Estructura/cabecera.php";
?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-2">
            <p>La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
Agregar un botón para limpiar el formulario y volver a consultar.</p>
            
            <form action="accionEjercicio8.php" method="post" id="formEjercicio8">
                <div class="m-2">
                    <label class="form-label" for="nombre">Nombre</label>
                    <input  class="form-control" type="text" name="nombre" id="nombre">
                    <div class="invalid-feedback" id="error-nombre">

                    </div>
                </div>
                <div class="m-2">
                    <label class="form-label" for="edad">Edad</label>
                    <input  class="form-control" type="text" name="edad" id="edad">
                    <div class="invalid-feedback" id="error-edad">

                    </div>
                </div>
                <div class="m-2">
                    <label class="form-label" for="estudiante">Estudiante</label>
                    <select class="form-select"  name="estudiante" id="estudiante">
                        <option value="" select>Opcion</option>
                        <option value="si">SI</option>
                        <option value="no">NO</option>
                    </select>
                    <div class="invalid-feedback" id="error-estudiante">

                    </div>
                </div>
                <div class="m-2">
                    <input class="btn btn-primary" type="submit" value="Calcular">
                    <input class="btn btn-danger" type="reset" value="Limpiar">
                    <a class="btn btn-primary" type="btn" href="menuTp1.php">Ejercicios</a>
                </div>
            </form>

        </div>
    </div>
</div>

<?php
include_once "../Estructura/footer.php";
?>