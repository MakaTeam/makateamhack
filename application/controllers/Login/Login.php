<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->model("Usuario");
		$correo = $this->input->post('email');
		$pwd = $this->input->post('psw');

		$usuario_login = $this->Usuario->iniciarSesion($correo, $pwd);
		if ($usuario_login[0]) {
			foreach ($usuario_login[1] as $row) {
				$data['alias'] = $row->alias;
			}
		} else {
			$data['mensaje'] = "Falló el inicio de sesión: ".$usuario_login[1];
		}
		
		$this->load->view('Login/login', $data);
	}
}
