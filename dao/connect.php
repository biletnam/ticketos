<?php
/**
* dao conexion php
*
* Clase encargada de la conexion a postgresql
* */
Class connect {
	public $conn;

	/**
	* funcion constructora encargada de realizar la conexion
	* retorno: connection resource o false
	* */
	function __construct() {
		global $baseDatos, $usuario;
		try {
			$this->conn = pg_connect("dbname=$baseDatos user=$usuario") or die(1);
			return true;
		}
		catch(Exception $e) {
			echo "Error de conexion";
			return false;
		}
	}

	/**
	* funcion encargada de ejecutar consultas
	* retorno: query source o false
	* */
	 public function ejecutar($query) {
		try {
			if($this->conn) {
				$result = pg_query($this->conn, $query);
				if($result)
					return $result;
				else
					return $false;
			}
			else
				echo "realice primero la conexion";
		}
		catch(Exception $e) {
			echo "Error ejecutando el query: ".$query;
			return false;
		}
	}
}
