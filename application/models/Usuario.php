<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Modelo Usuario
*/
class Usuario extends CI_Model
{
	/**/
	private $idUsuario;
	private $alias;
	private $correo;
	private $pwd;
	private $Nombre;
	private $Foto;
	/*Llaves foraneas*/
	private $idTipo; // Tipo de Usuario
	/*Usuario Administrador*/
	private $idAdmin;
	/*Usuario empresa*/
	private $idEmpresa;
	private $generales;
	private $registro;
	/*Usuario Fisico*/
	private $idFisico;
	private $nivel;

	function __construct()
	{
		$this->load->database();
	}

	public function getUsuario($correo)
	{
		$sql = "SELECT id_usuario FROM usuario WHERE correo = ?";
		$query = $this->db->query($sql, array($correo));
		$usuario = $query->result('array');
		if (!empty($usuario)) {
			$this->idUsuario = $usuario[0]['id_usuario'];
		}
	}

	public function iniciarSesion($correo, $pwd)
	{
		$this->getUsuario($correo);
		if ($this->idUsuario) {
			$sql = "SELECT alias, Nombre, Foto FROM usuario WHERE id_usuario = ? AND pwd = ?";
			$query = $this->db->query($sql, array($this->idUsuario, $pwd));
			$resultado = $query->result();
			if ($resultado) {
				return array(true, $resultado);
			} else {
				return array(false, "La contraseña no es correcta");
			}
		} else {
			return array(false, "El Usuario no se encuentra registrado");
		}
	}

	public function getTipoUsuario($id_usuario)
	{
		$sql = "SELECT usuario_id_tipo FROM usuario WHERE id_usuario = ?";
		$query = $this->db->query($sql, array($idUsuario));
		$resultado = $query->result('array');
		if ($resultado) {
			$usuario_id_tipo = $resultado[0]['usuario_id_tipo'];
			switch ($usuario_id_tipo) {
				case 1:
					$tipo_usuario = "Standar";
					break;
				
				default:
					$tipo_usuario = "Premium";
					break;
			}
		}
		return $tipo_usuario;
	}
}

?>