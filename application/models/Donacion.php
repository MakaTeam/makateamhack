<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Modelo Donacion
*/
class Donacion extends CI_Model
{
	/**/
	private $idDonacion;
	private $fecha;
	private $descripcion;
	private $cantidad;
	/*Llaves foraneas*/
	private $fk_idAsociacion;
	private $fk_idUsuario;

	function __construct()
	{
		$this->load->database();
	}

}

?>