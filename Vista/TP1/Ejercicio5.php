<?php
include_once "../Estructura/cabecera.php";
?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-2">
            <form action="accionEjercicio5.php" method="post" id="formEjercicio5">
                <div class="m-2">
                    <label class="form-label" for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" >
                    <div class="invalid-feedback" id="error-nombre"></div>
                </div>
                <div class="m-2">
                    <label class="form-label" for="apellido">Apellido</label>
                    <input class="form-control" type="text" name="apellido" id="apellido" >
                    <div class="invalid-feedback" id="error-apellido"></div>
                </div>
                <div class="m-2">
                    <label class="form-label" for="edad">Edad</label>
                    <input class="form-control" type="number" name="edad" id="edad" min="0" max="111" >
                    <div class="invalid-feedback" id="error-edad"></div>
                </div>
                <div class="m-2">
                    <label class="form-label" for="direccion">Direccion</label>
                    <input class="form-control" type="text" name="direccion" id="direccion">
                    <div class="invalid-feedback" id="error-direccion"></div>
                </div>
                <div class="m-2 form-group">
                    <div><label class="form-label" for="estudios">Nivel de Estudios</label></div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estudios" id="1" value="1">
                        <label class="form-check-label" for="1">No tiene estudios</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estudios" id="2" value="2">
                        <label class="form-check-label" for="2">Primaria</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estudios" id="3" value="3">
                        <label class="form-check-label" for="3">Secundario</label>
                    </div>
                    <div class="invalid-feedback" id="error-estudios"></div>
                </div>
                <div class="m-2 form-group" id="grupo-genero">

                    <div><label class="form-label radioGenero" for="genero" >Sexo</label></div>
                    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" id="femenino" value="1">
                            <label class="form-check-label" for="1">Femenino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" id="masculino" value="2">
                            <label class="form-check-label" for="2">Masculino</label>
                        </div>
                    

                    <div class="invalid-feedback" id="error-genero"></div>

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