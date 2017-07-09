<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donar extends CI_Controller {

	public function index()
	{
		$asociacion = $this->input->get('nombre_asociacion');
		$data['nombre_asociacion'] = $asociacion;
		$this->load->view('Donar/donar', $data);
	}
}
