<?php

class Cinema{
    public function datoscinema($datos){   
        $restricion = " ";
        switch($datos["restriccion"]){
            case "1":
                $restricion = "Apto para todo publico";
                break;
            case "2":
                $restricion = "Mayores de 7 años";
                break;
            case "3":
                $restricion = "Mayores de 18 años";
                break;
            default:
            $restricion = " ";
            break;

        }
        
        $datosCinema = array(
            "Titulo" => $datos["titulo"],
            "Actores" => $datos["actores"],
            "Director" => $datos["director"],
            "Guion" => $datos["guion"],
            "Produccion" => $datos["produccion"],
            "Año" => $datos["anio"],
            "Nacionalidad" => $datos["nacionalidad"],
            "Genero" => $datos["genero"],
            "Duracion" => $datos["duracion"],
            "Restricciones de edad" => $restricion
        );
        
        return $datosCinema;
    }
}

?>