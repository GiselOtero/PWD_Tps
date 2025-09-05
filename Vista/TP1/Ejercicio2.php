<?php 
include_once "../Estructura/cabecera.php";
?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-2">
            <p>Crear una página php que contenga un formulario HTML que permita ingresar las horas
de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
Enviar los datos del formulario por el método Get a otra página php que los reciba y
complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
se cursan por semana.
</p>
            <form action="accionEjercicio2.php" method="post" id="semana">
                <div class="m-2">
                    <label class="form-label" for="lunes">Lunes</label>
                    <input class="form-control" type="number" name="semana[]" id="lunes" value="0" >
                    <div class="invalid-feedback" id="error-lunes">

                    </div>
                
                </div>
                <div class="m-2">
                    <label class="form-label" for="martes">Martes</label>
                    <input class="form-control" type="number" name="semana[]" id="martes" value="0">
                    <div class="invalid-feedback" id="error-martes">

                    </div>
                
                </div>
                <div class="m-2">
                    <label class="form-label" for="miercoles">Miercoles</label>
                    <input class="form-control" type="number" name="semana[]" id="miercoles" value="0">
                    <div class="invalid-feedback" id="error-miercoles">

                    </div>
                
                </div>
                <div class="m-2">
                    <label class="form-label" for="jueves">Jueves</label>
                    <input class="form-control" type="number" name="semana[]" id="jueves" value="0">
                    <div class="invalid-feedback" id="error-jueves">

                    </div>
                
                </div>
                <div class="m-2">
                    <label class="form-label" for="viernes">Viernes</label>
                    <input class="form-control" type="number" name="semana[]" id="viernes" value="0">
                    <div class="invalid-feedback" id="error-viernes">

                    </div>
                
                </div>
                <div class="m-2">
                    
                    <input class="btn btn-primary"  type="submit" value="Ver">
                    <a  class="btn btn-primary" type="btn" href="menuTp1.php">Ejercicios</a>
                    
                </div>
            </form>
        </div>
    </div>
</div>
<?php 
include_once "../Estructura/footer.php";
?>