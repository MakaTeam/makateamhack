<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Modelo Evento
*/
class Evento extends CI_Model
{
	/**/
	private $idEvento;
	private $lugar;
	private $latitud;
	private $longitud;
	private $fecha;
	private $hora;
	private $link;
	/*Llaves foraneas*/
	private $fk_asociacion;


	function __construct()
	{
		$this->load->database();
	}
}

?>