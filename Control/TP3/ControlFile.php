<?php
class ControlFile
{
    public function ejercicio1($datos)
    {
        $permitido = true;
        $target_dir = "../../Archivos/";
        $salida = array(
            "link" => "",
            "error" => ""
        );
        /* verefica el tamaño deñ archivo */
        //print_r($datos); 
        if ($_FILES["upload"]["size"] > 2000000) {
            $permitido = false;
            $salida["error"] = "El archivo Supera a los 2MB";
        }


        /* verifica el tipo de archivo si es .pdf  .doc */
        if ($_FILES["upload"]["type"] != "doc" && $_FILES["upload"]["type"] != "application/pdf") {
            $permitido = false;
            $salida["error"] = " archivo no permitido, deben ser tipo doc o pdf";
        }
        if ($permitido) {

            if (!copy($_FILES["upload"]["tmp_name"], $target_dir . $_FILES["upload"]["name"])) {
                $salida["error"] = "error al copiar carpeta..";
            } else {
                $salida["link"] = "" . $target_dir . $_FILES["upload"]["name"];
            }
        }
        return $salida;
    }

    /* 
    * 
    */
    public function ejercicio2($datos)
    {
        //print_r($datos); 
        $permitido = true;
        $target_dir = "../../Archivos/";
        $salida = array(
            "link" => "",
            "error" => "",
            "contenido" => ""
        );
        $nombreArchivo = $_FILES["upload"]["tmp_name"];

        if ($_FILES["upload"]["type"] != "text/plain") {
            $salida["error"] = " El archivo debe ser tipo .txt";
        } else {
            if (!copy($_FILES["upload"]["tmp_name"], $target_dir . $_FILES["upload"]["name"])) {
                $salida["error"] = "error al copiar carpeta..";
            } else {
                $puntero = fopen($target_dir . $_FILES["upload"]["name"], "r");
                $contenido = fread($puntero, filesize($nombreArchivo));
                fclose($puntero);
                $salida["contenido"] = $contenido;
            }
        }
        return $salida;
    }

    public function ejercicio3($datos)
    {
        $permitido = true;
        $target_dir = "../../Archivos/";
        $salida = array(
            "link" => "",
            "error" => ""
        );


        /* verifica el tipo de archivo si es .jpg */
        if ($_FILES["upload"]["type"] != "image/png" && $_FILES["upload"]["type"] != "image/jpeg" && $_FILES["upload"]["type"] != "image/jpg") {
            $permitido = false;
            $salida["error"] = "Archivo no permitido, debe ser tipo .jpg, .jpeg o .png";
        }
        if ($permitido) {

            if (!copy($_FILES["upload"]["tmp_name"], $target_dir . $_FILES["upload"]["name"])) {
                $salida["error"] = "Error al copiar el archivo.";
            } else {
                $salida["link"] = "".$target_dir . $_FILES["upload"]["name"];
            }
        }
        return $salida;
    }
}
