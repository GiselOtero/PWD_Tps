<?php
class ABMAuto{


    public function accion($datos){
        $resp = false;
        if ($datos['accion'] == 'editar') {
            if ($this->modificacion($datos)) {
                $resp = true;
            }
        }
        if ($datos['accion'] == 'borrar') {
            if ($this->baja($datos)) {
                $resp = true;
            }
        }
        if ($datos['accion'] == 'nuevo') {
            if ($this->alta($datos)) {
                $resp = true;
            }
           
        }


        return $resp;
    }


    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto


    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Auto
     */
    private function cargarObjeto($param){
        $obj = null;

        if (array_key_exists('Patente', $param) and array_key_exists('Marca', $param) and array_key_exists('Modelo', $param) and array_key_exists('DniDuenio', $param)) {
            $obj = new Auto();

            $unDuenio = new Persona();
            $unDuenio->setNroDni($param['DniDuenio']);
            $unDuenio->cargar();

            $obj->setear($param['Patente'], $param['Marca'], $param['Modelo'], $unDuenio);
        }

        return $obj;
    }



    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Auto
     */
    private function cargarObjetoConClave($param)
    {
        $obj = null;

        if (isset($param['Patente'])) {
            $obj = new Auto();
            $obj->setear($param['Patente'], null, null, null);
            //verEstructura($obj);
        }

        return $obj;
    }


    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    private function seteadosCamposClaves($param)
    {
        $resp = false;

        if (isset($param['Patente']))
            $resp = true;
        return $resp;
    }




    /**
     * 
     * @param array $param
     */
    public function alta($param){
        $resp = false;
        $unObjtAuto = $this->cargarObjeto($param);

        if ($unObjtAuto != null and $unObjtAuto->insertar()) {
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

        if ($this->seteadosCamposClaves($param)) {
            $unObjtAuto = $this->cargarObjetoConClave($param);
            if ($unObjtAuto != null and $unObjtAuto->eliminar()) {
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

        if ($this->seteadosCamposClaves($param)) {
            $unObjtAuto = $this->cargarObjeto($param);
            if ($unObjtAuto != null and $unObjtAuto->modificar()) {
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

        if ($param <> NULL) {
            if (isset($param['Patente']))
                $where .= " and Patente ='" . $param['Patente'] . "'";
            if (isset($param['Marca']))
                $where .= " and Marca ='" . $param['Marca'] . "'";
            if (isset($param['Modelo']))
                $where .= " and Modelo =" . $param['Modelo'] . "";
            if (isset($param['DniDuenio']))
                $where .= " and DniDuenio ='" . $param['DniDuenio'] . "'";
        }
        $arreglo = Auto::listar($where);

        return $arreglo;
    }


    public function nuevoAuto($param){

        $controlAuto = new ABMAuto();
        $controlPersona = new ABMPersona();


        $salida = array(
            "guardado" => false,
            "respuesta" => "",
            "link" => "",
        );

        if (!isset($param["DniDuenio"])) {
            $salida["respuesta"] = " Error al ingresar datos ";

        } else {

            $buscarpersona["NroDni"] = $param["DniDuenio"];
            $listaPersona = $controlPersona->buscar($buscarpersona);
            
            $buscarAuto['Patente'] = $param['Patente'];
            $listaAuto = $controlAuto->buscar($buscarAuto);

            if (count($listaPersona) <= 0) {
                $salida["respuesta"] = "No se encontro datos correspondientes al Dni";
                $dni = $param["DniDuenio"];
                $salida["link"] = 'formPersona.php?DniDuenio=' . $dni;

            } else if (count($listaAuto) > 0) {
                $salida["respuesta"] = "La patente ya existe";
                $salida["link"] = "formAuto.php";

            } else {

                /* if ($this->alta($param)) { */
                if ($this->accion($param)) {
                //$resp = true;
                    $salida["respuesta"] = "Se Guardo correctamente";
                    $salida["guardado"] =true;
                    $salida["link"] = "listaAuto.php";
                } else {
                    $salida["respuesta"] = "La accion" . $param['accion'] . " no pudo concretarse";
                    $salida["link"] = "formAuto.php";
                }
            }
        }

        return $salida;
    }

    public function editarAuto($param){
        $salida = array(
            "guardado" => false,
            "respuesta" => "",
            "link" => "",
        );

        if ($this->accion($param)) {
            $salida["respuesta"] = "Se Guardo correctamente";
            $salida["guardado"] =true;
            $salida["link"] = "listaAuto.php";
        } else {
            $salida["respuesta"] = "La accion" . $param['accion'] . " no pudo concretarse";
            $salida["link"] = "formAuto.php";
        }

        return $salida;

    }

    public function eliminarAuto($param){
        $salida = array(
            "guardado" => false,
            "respuesta" => "",
            "link" => "",
        );
        $param["accion"]= "borrar";
        if($this->accion($param)){
            $salida["guardado"] = true;
            $salida["respuesta"] = " Se Elimino correctamente ";
            $salida["link"]="listaAuto.php";
        }else{
             $salida["guardado"] = false;
            $salida["respuesta"] = " No se elimino correctamente ";
            $salida["link"]="listaAuto.php";
        }

        return $salida;
    }
}
