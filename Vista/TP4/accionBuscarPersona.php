<?php
include_once "../Estructura/cabecera.php";

$datos = data_submitted();
$controlPersona = new ABMPersona();

$listaPersona = $controlPersona->buscar($datos);

?>
<?php
include_once "../Estructura/footer.php";
?>