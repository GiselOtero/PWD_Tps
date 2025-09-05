<?php
include_once "../Estructura/cabecera.php";
?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-2">
            <p>Crear una página con un formulario que contenga dos input de tipo text y un select. En
    los inputs se ingresarán números y el select debe dar la opción de una operación
    matemática que podrá resolverse usando los números ingresados. En la página que
    procesa la información se debe mostrar por pantalla la operación seleccionada, cada
    uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
    formulario:
    </p>
            <form action="accionEjercicio7.php" method="post" id="formEjercicio7">
                <div class="m-2">
                    <input class="form-control" type="text" name="num1" id="num1" value="0">
                    <div class="invalid-feedback" id="error-num1">

                    </div>
                </div>
                <div class="m-2">
                    <input class="form-control" type="text" name="num2" id="num2" value="0">
                    <div class="invalid-feedback" id="error-num2">

                    </div>
                </div>
                <div class="m-2">
                    <select class="form-select" name="operacion" id="operacion">
                        <option value="" select >Operacion</option>
                        <option value="suma">SUMA</option>
                        <option value="resta">RESTA</option>
                        <option value="multiplicacion">MULTIPLICACION</option>
                    </select>
                    <div class="invalid-feedback" id="error-operacion">

                    </div>
                </div>
                <div class="m-2">
                    <input class="btn btn-primary" type="submit" value="Calcular">
                    <a class="btn btn-primary" type="btn" href="menuTp1.php">Ejercicios</a>
                </div>
            </form>
            
            
           
        </div>
    </div>
</div>


<?php
include_once "../Estructura/footer.php";
?>