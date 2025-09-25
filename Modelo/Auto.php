<?php
class Auto extends BaseDatos
{
    private $patente;
    private $marca;
    private $modelo;
    private $duenio;
    private $mensajeoperacion;

    public function __construct()
    {
        parent::__construct();
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->duenio = null;
    }

    public function setear($patente, $marca, $modelo, $duenio)
    {
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setDuenio($duenio);
    }

    public function getPatente()
    {
        return $this->patente;
    }
    public function setPatente($valor)
    {
        $this->patente = $valor;
    }

    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($valor)
    {
        $this->marca = $valor;
    }

    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($valor)
    {
        $this->modelo = $valor;
    }

    public function getDuenio()
    {
        return $this->duenio;
    }
    public function setDuenio($valor)
    {
        $this->duenio = $valor;
    }
    public function getmensajeoperacion()
    {
        return $this->mensajeoperacion;
    }
    public function setmensajeoperacion($valor)
    {
        $this->mensajeoperacion = $valor;
    }

    public function cargar()
    {
        $resp = false;
        $sql = "SELECT * FROM auto WHERE patente = " . $this->getPatente();
        if ($this->Iniciar()) {
            $res = $this->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $this->Registro();

                    $unDuenio = new Persona();
                    $unDuenio->setNroDni($row['DniDuenio']);
                    $unDuenio->cargar();

                    $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $unDuenio);
                }
            }
        } else {
            $this->setmensajeoperacion("Auto->listar: " . $this->getError());
        }
        return $resp;
    }

    /* public function insertar(){
        $resp = false;
        //$base = new BaseDatos();
        $sql = "INSERT INTO auto(Marca,Modelo,DniDuenio)  VALUES('".$this->getMarca()."',".$this->getModelo().",'".$this->getDuenio()->getNroDni()."');";
        if ($this->Iniciar()) {
            
            if ($unaPatente = $this->Ejecutar($sql)) {
                $this->setPatente($unaPatente);
                $resp = true;
            }

            if ($this->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Auto->insertar: ".$this->getError());
            }
        } else {
            $this->setmensajeoperacion("Auto->insertar: ".$this->getError());
        }
        return $resp;
    } */


    public function insertar()
    {
        $resp = false;
        //$base = new BaseDatos();

        
        $sql = "INSERT INTO auto(Patente,Marca,Modelo,DniDuenio)  VALUES('" . $this->getPatente() . "','" . $this->getMarca() . "'," . $this->getModelo() . ",'" . $this->getDuenio()->getNroDni() . "');";
        if ($this->Iniciar()) {

            if ($this->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Auto->insertar: " . $this->getError());
            }
        } else {
            $this->setmensajeoperacion("Auto->insertar: " . $this->getError());
        }
        return $resp;
    }

    public function modificar()
    {
        $resp = false;
        //$base = new BaseDatos();
        $sql = "UPDATE auto SET Marca='" . $this->getMarca() . "', Modelo=" . $this->getModelo() . ", DniDuenio='" . $this->getDuenio()->getNroDni() . "' WHERE Patente='" . $this->getPatente() . "'";
        if ($this->Iniciar()) {
            if ($this->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Auto->modificar: " . $this->getError());
            }
        } else {
            $this->setmensajeoperacion("Auto->modificar: " . $this->getError());
        }
        return $resp;
    }

    public function eliminar()
    {
        $resp = false;
        //$base = new BaseDatos();
        $sql = "DELETE FROM auto WHERE Patente='" . $this->getPatente() . "'";

        if ($this->Iniciar()) {
            if ($this->Ejecutar($sql)) {

                return true;
            } else {
                $this->setmensajeoperacion("Auto->eliminar: " . $this->getError());
            }
        } else {
            $this->setmensajeoperacion("Auto->eliminar: " . $this->getError());
        }
        return $resp;
    }


    public static function listar($parametro = "")
    {
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto ";
        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }
        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {

                while ($row = $base->Registro()) {
                    $obj = new Auto();


                    $unDuenio = new Persona();
                    $unDuenio->setNroDni($row['DniDuenio']);
                    $unDuenio->cargar();


                    $obj->setear($row['Patente'], $row['Marca'], $row['Modelo'], $unDuenio);
                    array_push($arreglo, $obj);
                }
            }
        } else {
            // $this->setmensajeoperacion("Auto->listar: ".$this->getError());
        }
        return $arreglo;
    }
}
