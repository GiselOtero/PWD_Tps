<?php

class ControlTP1{

    public function verNumeroEj1($datos){
        $salida = " ";
        if(is_numeric($datos)){ 
            if($datos>0){
                $salida = "El numero es positivo";
            }else if($datos<0){
                $salida = "El numero es negativo";
            }else if($datos==0){
                $salida = "el numero ingresado es 0";
            }
        }else{
            $salida = "no es un numero";
        }

        return $salida;
    }


    public function ejercicio2($datos){
        //suma la cantidad de horas de la semana
        $suma = 0;
        
        foreach($datos['semana'] as $dias){
            if(is_numeric($dias)){
                $suma = $suma + $dias;
            }
        }
        return $suma;
    }

    public function ejercicio3($datos){
        //mostrar datos 
        $salida = " Hola";
        if( $this->noEsVacio($datos['nombre']) && $this->noEsVacio($datos['apellido'])){
            $salida .= " soy " . $datos['nombre']. ", ".$datos['apellido'];
        }

        if($this->esNumero($datos['edad'])){
            $salida .= " tengo ".$datos['edad'];
        }

        
        
        /* 
        $salida = "Hola, yo soy ".$datos['nombre'].", ".$datos['apellido']." tengo ".$datos['edad']." años y vivo en ". $datos['direccion']; 
        */

        return $salida;
    }

    public function ejercicio4($datos){
        //mostrar datos 
        $salida = " ";
        $salida .= $this->ejercicio3($datos);
        if(is_numeric($datos['edad'])){
            
            if ($datos['edad'] > 18){
                $salida .= " soy mayor de edad "  ;
            }else{
                $salida .= " soy menor de edad";
            }
        }

        return $salida;
    }

    public function ejercicio5($datos){

        $resp = " ";
        $resp .= $this->ejercicio3($datos);

        switch($datos['estudios']){
            case 1:  $estudio = " Sin estudios ";
            break;
            case 2: $estudio = " Primario completo ";
            break;
            case 3: $estudio = " Secundario completo";
            break;
            default: $estudio = "  ";
            break;
        }
        
        switch($datos['genero']){
            case 1: $sexo = " Femenino ";
            break;
            case 2: $sexo = " masculino ";
            break;
            default: $sexo = " prefiere no decir ";
            break;
        }

        $salida = $resp." ".$estudio." ". $sexo;

        return $salida;
    }

    function ejercicio6($datos){
        $salida = $this->ejercicio3($datos);
        foreach ($datos['deportes'] as $deporte){
            $deporte = " ".$deporte.", ";
        }

        $salida .= " Deportes: ".$deporte;

        return $salida;
    }

    function ejercicio7($datos){

        $resultado = 0;
        switch ($datos['operacion']){
            case 'suma':
                $resultado = $datos['num1'] + $datos['num2'];
                break;
            case 'resta':
                $resultado = $datos['num1'] - $datos['num2'];
                break;
            case 'multiplicacion':
                $resultado = $datos['num1'] * $datos['num2'];
        
                break;
            default:
            break;
        }
        
        return $resultado;
        
    }

    function ejercicio8($datos){
        $precio = 0;
        if($datos['estudiante'] == "no"){
            $precio = 300;
        }else{
            
            if($datos['edad'] <= 12){
                $precio = 160;
            }else{
                $precio = 180;
            }
        }

        return $precio;
         
    }


    /* verificacion */
    public function esNumero($dato){
        $salida = false;
        if(is_numeric($dato)){
            $salida = true;
        }
        return $salida;
    }

    public function esString($dato){
        /* 
        La expresión regular /^[A-Za-z]+$/ coincide con cualquier cadena que contenga solo letras mayúsculas o minúsculas.
        */
        $salida = false;
        $pattern = "/^[A-Za-z]+$/";

        /* 
        La función preg_match(expresionReg,string) realiza una comparación con una cadena usando una expresión regular.
        */
        if(preg_match($pattern, $dato)){
            $salida = true;
            //"tiene solo letras";
        }

        return $salida;
    }

    public function noEsVacio($dato){
        $salida = false;

        if(isset($dato)){
            $salida = true;
        }

        return $salida;

    }
}
?>