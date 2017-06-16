<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('crud/Crud_estado');
        $this->load->model('crud/Crud_noticias');
        $this->load->model('crud/Crud_servicio');

    }

	public function index($bandera = NULL)
	{
        $this->load->view('admin/head_view');
        $dataSendNav = array(
            "datos" =>  array(
                'noticias' => $this->Crud_noticias->GetDatosTotales(5) 
            )
        );
        $datoNav = $this->load->view('admin/nav_view',$dataSendNav,TRUE);
        $datoDatos = $this->load->view('admin/adminJS/datos_js_equipo',null,TRUE);
        $dataSendFoot = array(
            "datos" => $datoDatos
        );
        $dataFooter = $this->load->view('admin/footer_view',$dataSendFoot,TRUE);
        switch ($bandera) {
            case -1:
                $mensaje = 'Carga Exitosa';
                $datosSlider = null;
            break;
            case -2:
                $mensaje = 'Carga Fallida intentelo de nuevo';
                $datosSlider = null;
            break;     
            case null:
                $mensaje = '';
                $datosSlider = null;
            break;  
            default:
                $mensaje = '';
                $where = array('servicio_id' => $bandera);
                $datosSlider = $this->Crud_servicio->GetDatos($where);
            break;
        }
        $dataSend = array(
            "footer" => $dataFooter,
            'nav' => $datoNav,
            'Slide' => $this->Crud_servicio->GetDatosTotal(),
            'DatosEstado' => $this->Crud_estado->GetDatosTotal(),
            'error' => $mensaje,
            'datosCarga' => $datosSlider
        );
        $this->load->view('admin/servicio_view',$dataSend);		
	}


    public function guardarServicio()
    {
        if (is_null($this->input->post('id'))) 
        {
            $datosSlide = array(
                'servicio_icono' => $this->input->post('icono'),
                'servicio_titulo' => $this->input->post('titulo'),
                'servicio_contenido' => $this->input->post('Descripcion'),
                'estado_id' => $this->input->post('Estado')
            );
            if ($this->Crud_servicio->Insertar($datosSlide)) {
                redirect('admin/Servicio/index/-1');
            }
            else
            {
                redirect('admin/Servicio/index/-2');
            }
        }
        else
        {  
            $datosSlide = array(
                'servicio_icono' => $this->input->post('icono'),
                'servicio_titulo' => $this->input->post('titulo'),
                'servicio_contenido' => $this->input->post('Descripcion'),
                'estado_id' => $this->input->post('Estado')
            );
            if ($this->Crud_servicio->editar($datosSlide,$this->input->post('id'))) {
                redirect('admin/Servicio/index/-1');
            } 
            else
            {
                redirect('admin/Servicio/index/-2');
            }
        }
    }    
}	
