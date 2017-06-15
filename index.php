<?php

/**
* Front Controller
*
* */


include("route.php");

include("control/$controlador.php");

$className = ucfirst($controlador) . "Control";



$objeto = new $className;

$vista = $objeto->$accion();

include("views/$vista.php");

?>
