<?php
class ABMPersona{


    public function abmAccion($datos){
        $resp = false;
        if($datos['accion']=='editar'){
            if($this->modificacion($datos)){
                $resp = true;
            }
        }
        if($datos['accion']=='borrar'){
            if($this->baja($datos)){
                $resp =true;
            }
        }
        if($datos['accion']=='nuevo'){
            if($this->alta($datos)){
                $resp =true;
            }
            
        }
        return $resp;

    }
    
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Persona
     */
    private function cargarObjeto($param){
        $obj = null;

        if( array_key_exists('NroDni',$param) and array_key_exists('Apellido',$param) and array_key_exists('Nombre',$param) and array_key_exists('fechaNac',$param) and array_key_exists('Telefono',$param) and array_key_exists('Domicilio',$param)){
            
            $obj = new Persona();
            $obj->setear($param['NroDni'], $param['Apellido'],$param['Nombre'],$param['fechaNac'],$param['Telefono'],$param['Domicilio']);
        }
        return $obj;
    }


    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Persona
     */
    private function cargarObjetoConClave($param){
        $obj = null;
        
        if(isset($param['NroDni']) ){

            $obj = new Persona();
            
            $obj->setear($param['NroDni'],null, null,null,null,null);
            
        }
        return $obj;
    }


    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    private function seteadosCamposClaves($param){
        $resp = false;

        if (isset($param['NroDni']))
            $resp = true;
        return $resp;
    }


    /**
     * 
     * @param array $param
     */
    public function alta($param){
        $resp = false;
        $unObjPersona = $this->cargarObjeto($param);

        if ($unObjPersona!=null and $unObjPersona->insertar()){
            $resp = true;
        }
        return $resp;  
    }

    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        
        if ($this->seteadosCamposClaves($param)){
            $unObjPersona = $this->cargarObjetoConClave($param);
            //verEstructura($unObjPersona);
            if ($unObjPersona!=null and $unObjPersona->eliminar()){
                $resp = true;
            }
        }
        
        return $resp;
    }



    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        $resp = false;
        
        if ($this->seteadosCamposClaves($param)){
            $unObjPersona = $this->cargarObjeto($param);
            //verEstructura($unObjPersona);
            if($unObjPersona != null and $unObjPersona->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }



    /**
     * permite buscar un objeto
     * @param array $param
     * @return array
     */
    public function buscar($param){
        $where = " true ";

        if ($param<>NULL){
            if  (isset($param['NroDni']))
                $where.=" and NroDni ='".$param['NroDni']."'";
            if  (isset($param['Apellido']))
                 $where.=" and Apellido ='".$param['Apellido']."'";
            if  (isset($param['Nombre']))
                 $where.=" and Nombre ='".$param['Nombre']."'";
        }

        $arreglo = Persona::listar($where);  
        return $arreglo;
    }

    public function eliminarPersona($param){
        $salida = array(
            "guardado" => false,
            "respuesta" => "",
            "error" => "",
            "link" => "",
        );

        $controlAuto = new ABMAuto();
        $buscarAuto["DniDuenio"] = $param["NroDni"];
        $listaAuto = $controlAuto->buscar($buscarAuto);


        if(count($listaAuto)>0){

            $salida["respuesta"] = " No se puede eliminar esta persona porque tiene autos registrados. Elimine primero los autos asociados.";
            
            $salida["link"] = "accionBuscarPersonaAuto.php?NroDni=".$param["NroDni"];

            $salida ["error"] = "";

        }else{
            $param["accion"] = "borrar";
            if($this->abmAccion($param)){
                $salida["respuesta"] = " Los datos se eliminaron correctamente ";
                $salida["guardado"] = true ;
                $salida["link"] = "listaPersona.php";
            }else{

                $salida["respuesta"] = " Los datos no se eliminaron correctamente ";
                $salida["guardado"] = false ;
                $salida["link"] = "listaPersona.php";

            }


        }
        return $salida;


    }

}
?>