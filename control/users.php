<?php
/**
* Archivo encargado del manejo logico para trabajar MVC
*
* */

include("model/users.php");

class UsersControl {
	private $tabla = "users";

	/**
	* funcion inicial que genera un array de users
	* retorno: string con la vista a cargar
	* */
	public function inicio(){
		$userModel = new User;
		$user = $userModel->listar();
		return "users";
	}

	/**
	* funcion que muestra el formulario para crear users
	* retorno: string con la vista a cargar
	* */
	public function createuser(){
		return "createuser";
	}

	public function inserta(){
		$userModel = new User;
		$userModel->crear($_POST);
		$user = $userModel->listar();
		return "inicio";
	}

	public function borrar(){
		$userModel = new User;
		$userModel->borrar($_POST);
		$user = $userModel->listar();
		return "inicio";
	}

	public function editar(){
		$userModel = new User;
		$userModel->buscar($_POST);
		return "crear";
	}

	public function guardar(){
		$userModel = new User;
		$userModel->modificar($_POST);
		$user = $userModel->listar();
		return "inicio";
	}
}
?>
