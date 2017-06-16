<?php

if (!defined('BASEPATH'))
    exit('No ingrese directamente es este script');
class Crud_servicio extends CI_Model {

    //constructor de la clase
    public function __construct() {
        parent::__construct();
        
    }

    public function GetDatos($whereArray = null){

        if (is_null($whereArray)) {
            $where = array('estado_id' => 1);
        }
        else
        {
            $where=array('estado_id' => 1)+$whereArray;
            $where=$whereArray;  
        }
        return $this->Crud_model->obtenerRegistros('produccion_servicio',$where,'*');
    }
    public function GetDatosTotal(){
        return $this->Crud_model->obtenerRegistros('produccion_servicio',null,'*');
    }
    public function Insertar($arrayInsertar)
    {
        return $this->Crud_model->agregarRegistro('produccion_servicio',$arrayInsertar);
    }
    public function editar($pArrayActualizar,$id)
    {
        return $this->Crud_model->actualizarRegistro('produccion_servicio',$pArrayActualizar,array('servicio_id' => $id));
    }
    
}

?>