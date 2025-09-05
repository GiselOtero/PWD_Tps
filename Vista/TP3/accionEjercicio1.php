<?php
include_once "../Estructura/cabecera.php";
//include_once "../../Control/TP3/file.php";

$datos = data_submitted();
$controlFile = new ControlFile();
//print_r($_FILES);
$respuesta = $controlFile->ejercicio1($datos);


?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-2">

        <?php
        if($respuesta["error"]==""){
            echo "<a href=".$respuesta["link"]." class='link-success'>Link</a>";
        }else{
            echo "<h4>".$respuesta["error"]."</h4>";
        }
        ?>
        </div>
    </div>
</div>