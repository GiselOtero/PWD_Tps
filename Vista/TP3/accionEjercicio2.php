<?php
include_once "../Estructura/cabecera.php";
include_once "../../Control/TP3/file.php";

$datos = data_submitted();
$controlFile = new ControlFile();
//print_r($_FILES);
$respuesta = $controlFile->ejercicio2($datos);


?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card p-2">

        <?php
        if($respuesta["error"]!=""){
            echo "<h4>".$respuesta["error"]."</h4>";
        }else{
            ?>
        <textarea class="form-control" name="" id="" rows="17" readonly><?php echo $respuesta["contenido"]?> </textarea>    
        <?php
        }
        ?>
        </div>
    </div>
</div>