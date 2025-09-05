<?php
include_once "../Estructura/cabecera.php";
?>


<div class="row justify-content-center">
    <div class="col-md-6 p-2">
        <div class="card p-2">
            <p class="card-text"> Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
            enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
            respuesta, que permita volver a la página anterior.
            </p>
                <form action="verNumero.php" method="get" id="verNum" name="verNum">
                    <div class="m-2">
                        <label class="form-label" for="num" >Ingrese Un numero</label>
                        <input class="form-control" type="text" name="num" id="num"  
                        
      
                        >
                        <div class="invalid-feedback" id="error">

                        </div>
                    </div>

                    <div class="m-2">
                        <input class="btn btn-primary" type="submit" value="Ver">
                        <a type="button" class="btn btn-primary" href="menuTp1.php">Ejercicios</a>
                    </div>
                    
                </form>
        </div>
    </div>
</div>
<!-- </body>
</html> -->
<?php
include_once "../Estructura/footer.php";
?>