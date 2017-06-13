<?php

/**
* Archivo encargado del manejo logico para trabajar MVC
*
* */

include("config.php");
if(count($_GET) > count($_POST))
	$_POST = $_GET;

$controlador = (isset($_POST['c']) && $_POST['c'] != "") ? $_POST['c'] : $controlador;
$accion = (isset($_POST['v']) && $_POST['v'] != "") ? $_POST['v'] : "inicio";

?>
