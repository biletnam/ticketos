<?php
/**
* Archivo encargado del manejo logico para trabajar MVC
*
* */

include("model/users.php");
include("model/tickets.php");


class TicketsControl {
	private $tabla = "tickets";

	/**
	* funcion inicial que genera un array de users
	* retorno: string con la vista a cargar
	* */
	public function inicio(){
		$ticketModel = new Ticket;
		$ticket = $ticketModel->listar();
		return "tickets";
	}

	/**
	* funcion que muestra el formulario para crear users
	* retorno: string con la vista a cargar
	* */
	public function createticket(){
		return "createtickets";
	}

	public function inserta(){
		$ticketModel = new Ticket;
		$ticketModel->crear($_POST);
		$ticket = $ticketModel->listar();
		return "tickets";
	}

	public function borrar(){
		$ticketModel = new Ticket;
		$ticketModel->borrar($_POST);
		$ticket = $ticketModel->listar();
		return "tickets";
	}

	public function editar(){
		$ticketModel = new Ticket;
		$ticketModel->buscar($_POST);
		return "createtickets";
	}

	public function guardar(){
		$ticketModel = new Ticket;
		$ticketModel->modificar($_POST);
		$ticket = $ticketModel->listar();
		return "tickets";
	}

	public function seguimiento(){
		$ticketModel = new Ticket;
		//$ticketModel->seguimiento($_POST);
		//$ticket = $ticketModel->listarSeguimiento();
		return "tickets";
	}



}
?>
