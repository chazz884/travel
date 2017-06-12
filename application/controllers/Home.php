<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		$this->load->model("Guardar_model");		
	}

	public function index($mensaje = NULL)
	{
		$data['mensaje'] = $mensaje;

		$this->load->view('head');
		$this->load->view('nav_view');
		$this->load->view('servicio_view');
		$this->load->view('destino_view');
		$this->load->view('promocion_view');
		$this->load->view('equipo_view');
		$this->load->view('contacto_view',$data);
		$this->load->view('footer_view');
	}

	public function guardar(){
		$nombre = $this->input->post("nombre");
		$email = $this->input->post("email");
		$telefono = $this->input->post("telefono");
		$pasajeros = $this->input->post("pasajeros");
		$pregunta = $this->input->post("pregunta");
		$date = $this->input->post("date");
		$date2 = $this->input->post("date2");
		$promo = $this->input->post("promo");

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('telefono', 'Telefono', 'required');
        $this->form_validation->set_rules('pasajeros', 'Pasajeros', 'required');
        $this->form_validation->set_rules('pregunta', 'Preguntas');
        $this->form_validation->set_rules('date', 'Fecha de salida','required');
        $this->form_validation->set_rules('date2', 'Fecha de llegada','required');

        $this->form_validation->set_message('required','El campo %s es obligatorio'); 

        if ($this->form_validation->run() === TRUE) {
			$datos = array(
				"nombre_contacto" => $nombre,
				"email_contacto" => $email,
				"telefono_contacto" => $telefono,
				"pasajero_numero" => $pasajeros,
				"fecha_salida" => $date,
				"pregunta_contacto" => $pregunta,
				"fecha_llegada" => $date2,
				"promo_contacto" => $promo,
				);

			    $this->Guardar_model->guardar($datos); 

				echo "<script>alert('Tu mensaje ha sido enviado con éxito, espera la llamada de nuestro asesor.');</script>";

 				redirect('#contact', 'refresh');
			
			        	
        }else{
        	echo "<script>alert('los campos con (*) son obligatorios');</script>";
                
                redirect('#contact', 'refresh');
        }
		
	}
}