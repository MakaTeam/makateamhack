<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Modelo Asociacion
*/
class Asociacion extends CI_Model
{
	/**/
	private $idAsociacion;
	private $estado;
	private $telefono;
	private $correo;
	private $respuesta1;
	private $respuesta2;
	private $respuesta3;
	private $respuesta4;
	private $respuesta5;
	private $facebook;
	private $twitter;
	private $instagram;
	private $web;
	/*Llaves foraneas*/
	private $fk_direccion;

	function __construct()
	{
		$this->load->database();
	}

	public function getAsociacion($correo)
	{
	/*	$this->db->select('idAsociacion, estado, telefono, facebook, twitter, instagram, web');
		$this->db->where(array('correo' => $correo));
		$resultado = $this->db->get('Asociacion');
		return $resultado;*/
		return "Albergue para animales";
	}

	public function getEventos($value='')
	{
		# code...
	}

}

?>