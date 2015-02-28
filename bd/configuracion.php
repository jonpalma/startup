<?php

$configuracion['host']='localhost';
$configuracion['usuario']='root';
$configuracion['password']='';
$configuracion['nombre']='start_up';

foreach ( $configuracion as $k => $v){
	define(strtoupper($k), $v);
}

?>
