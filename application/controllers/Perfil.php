<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function index()
	{
		$tipo_usuario = $this->input->get('tipo_usuario');
		if (!is_null($tipo_usuario)) {
			switch ($tipo_usuario) {
				case 1:
					$this->load->view('Perfiles/PerfilUsuario');
					break;
				
				case 2:
					$this->load->view('Perfiles/PerfilAsociacion');
					break;
			}
		} elseif ($otroperfil = $this->input->get('ajeno')) {
			$this->load->view('Perfiles/PerfilAjeno');
		}
	}
}
