<?php

include("dao/connect.php");

$conn = new connect;

class User {

	public function listar(){
		global $conn, $user;
		$result = $conn->ejecutar("SELECT * FROM users");
		while($row = pg_fetch_array($result))
			$user[] = $row;
	}

	public function buscar($datos){
		global $conn, $user;
		$result = $conn->ejecutar("SELECT * FROM users WHERE id = $datos[id]");
		$user = pg_fetch_array($result);
	}

	public function crear($datos){
		global $conn;
		$conn->ejecutar("INSERT INTO users (codname, passwd, email, type, state) VALUES ('$datos[codname]', '$datos[passwd]', '$datos[email]', '$datos[type]','$datos[state]')");
	}

	public function borrar($datos){
		global $conn;
		$conn->ejecutar("DELETE FROM users WHERE id = $datos[id]");
	}

	public function modificar($datos){
		global $conn;
		$conn->ejecutar("UPDATE users SET codname='$datos[codname]', passwd='$datos[passwd]', email='$datos[email]', type='$datos[type]', state='$datos[state]' WHERE id = $datos[id]");
	}
}
?>
