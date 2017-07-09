<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Modelo Direccion
*/
class Direccion extends CI_Model
{
	/**/
	private $idDireccion;
	private $latitud;
	private $longitud;
	private $calle;
	private $numero;
	private $colonia;
	private $cp;
	private $delegacion;
	private $estado;
	/*Llaves foraneas*/

	function __construct()
	{
		$this->load->database();
	}

}

?>