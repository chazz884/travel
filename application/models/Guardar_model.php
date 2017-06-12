<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guardar_model extends CI_Model {

	public function guardar($data){
		$this->db->insert("viaje_db",$data);
	}

}