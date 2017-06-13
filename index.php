<?php

/**
* Front Controller
*
* */


include("dao/route.php");

include("control/$controlador.php");

$objeto = new UsersControl;

$vista = $objeto->$accion();

include("views/$vista.php");

?>
