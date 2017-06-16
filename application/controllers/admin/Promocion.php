<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promocion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('crud/Crud_estado');
        $this->load->model('crud/Crud_noticias');
        $this->load->model('crud/Crud_promocion');

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
                $where = array('promocion_id' => $bandera);
                $datosSlider = $this->Crud_promocion->GetDatos($where);
            break;
        }
        $dataSend = array(
            "footer" => $dataFooter,
            'nav' => $datoNav,
            'Slide' => $this->Crud_promocion->GetDatosTotal(),
            'DatosEstado' => $this->Crud_estado->GetDatosTotal(),
            'error' => $mensaje,
            'datosCarga' => $datosSlider
        );
        $this->load->view('admin/promocion_view',$dataSend);     
    }


    public function guardarPromocion()
    {
        if (is_null($this->input->post('id'))) 
        {
            $datosSlide = array(
                'promocion_titulo' => $this->input->post('titulo'),
                'promocion_subtitulo' => $this->input->post('subtitulo'),
                'promocion_contenido' => $this->input->post('Descripcion'),
                'promocion_imagen' => $this->input->post('URL'),
                'estado_id' => $this->input->post('Estado')
            );
            if ($this->Crud_promocion->Insertar($datosSlide)) {
                redirect('admin/Promocion/index/-1');
            }
            else
            {
                redirect('admin/Promocion/index/-2');
            }
        }
        else
        {  
            $datosSlide = array(
                'promocion_titulo' => $this->input->post('titulo'),
                'promocion_subtitulo' => $this->input->post('subtitulo'),
                'promocion_contenido' => $this->input->post('Descripcion'),
                'promocion_imagen' => $this->input->post('URL'),
                'estado_id' => $this->input->post('Estado')
            );
            if ($this->Crud_promocion->editar($datosSlide,$this->input->post('id'))) {
                redirect('admin/Promocion/index/-1');
            } 
            else
            {
                redirect('admin/Promocion/index/-2');
            }
        }
    }
       
}   
