<?php

//include("dao/connect.php");

$conn = new connect;

class Ticket {

	public function listar(){
		global $conn, $ticket;
		$result = $conn->ejecutar("SELECT * FROM tickets");
		while($row = pg_fetch_array($result))
			$ticket[] = $row;
	}

	public function buscar($datos){
		global $conn, $ticket;
		$result = $conn->ejecutar("SELECT * FROM tickets WHERE id = $datos[id]");
		$ticket = pg_fetch_array($result);
	}

	public function crear($datos){
		global $conn;
		$conn->ejecutar("INSERT INTO tickets (name, description, priority, id_user_creator, id_user_resolve) VALUES ('$datos[name]', '$datos[description]', $datos[priority], $datos[id_user_creator], $datos[id_user_resolve])");
	}

	public function modificar($datos){
		global $conn;
		$conn->ejecutar("UPDATE tickets SET state='$datos[state]', state='$datos[id_user_resolv]' WHERE id = $datos[id]");
	}
}
?>
