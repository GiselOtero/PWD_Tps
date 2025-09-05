<?php header('Content-Type: text/html; charset=utf-8');
header ("Cache-Control: no-cache, must-revalidate ");

/////////////////////////////
// CONFIGURACION APP//
/////////////////////////////

$PROYECTO ='TP_PWD';


//variable que almacena el directorio del proyecto
$ROOT =$_SERVER['DOCUMENT_ROOT']."/$PROYECTO/";

include_once($ROOT.'utiles/funciones.php'); 


// // variable que define la pagina principal del proyecto (menu principal)
// $PRINCIPAL = "Location:http://".$_SERVER['HTTP_HOST']."/$PROYECTO/principal.php";


$_SESSION['ROOT']=$ROOT;




$GLOBALS['ROOT'] =$_SERVER['DOCUMENT_ROOT'] ."/$PROYECTO/";
//include_once("utiles/funciones.php");

?>