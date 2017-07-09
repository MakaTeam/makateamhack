<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$tipo_usuario = $this->input->get('tipo_usuario');
		if (!is_null($tipo_usuario)) {
			switch ($tipo_usuario) {
				case 1:
					$this->load->view('Perfiles/perfil');
					break;
				
				case 2:
					$this->load->view('Perfiles/perfilA');
					break;
			}
		} elseif ($otroperfil = $this->input->get('ajenoPerfil')) {
			$this->load->view('Perfiles/perfilUsuarioAjeno');
		} elseif ($this->input->get('ajenoAsociacion')) {
			$this->load->view('Perfiles/perfilAsociacionAjeno');
		}
	}
}
