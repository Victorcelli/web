<?php

//*******************************************************************************************************************************
//  INSERTAR CLIENTES
//*******************************************************************************************************************************




include('conexion_MySQL.php');




// Comprueba que existan todas las variables que se envían desde Javascript
//**************************************************************************
if(isset($_REQUEST['nick']) && isset($_REQUEST['pas']) && isset($_REQUEST['nif']) && isset($_REQUEST['nombre']) && isset($_REQUEST['apellidos']) && isset($_REQUEST['provincia']) && isset($_REQUEST['municipio']) && isset($_REQUEST['cp']) && isset($_REQUEST['direccion']) && isset($_REQUEST['email']) && isset($_REQUEST['telefono']))
{
	$nick = $_REQUEST['nick'];
	$pas = $_REQUEST['pas'];
	$nif = $_REQUEST['nif'];
	$nombre = $_REQUEST['nombre'];
	$apellidos = $_REQUEST['apellidos'];
	$provincia = $_REQUEST['provincia'];
	$municipio = $_REQUEST['municipio'];
	$cp = $_REQUEST['cp'];
	$direccion = $_REQUEST['direccion'];
	$email = $_REQUEST['email'];
	$telefono = $_REQUEST['telefono'];
}	
//**************************************************************************




$busqueda = "SELECT clientes.nif, clientes.nick, clientes.nombre, clientes.apellidos, clientes.email
			 FROM clientes
			 WHERE clientes.nif = '". $nif ."' OR clientes.nick = '". $nick ."' OR (clientes.nombre = '". $nombre. "' AND clientes.apellidos = '". $apellidos ."') OR clientes.email = '". $email ."'";
		 


$buscar_cliente = $conexion->query($busqueda);

$registros = $conexion->num_rows;


if ($registros == 0)
{
	$insertar = "INSERT INTO clientes (nick, pas, nif, nombre, apellidos, provincia, municipio, cp, direccion, telefono, email) VALUES 
				('". $nick ."', '". $pas ."', '". $nif ."', '". utf8_decode($nombre) ."', '". utf8_decode($apellidos) ."', '". utf8_decode($provincia) ."', '". utf8_decode($municipio) ."', '". $cp ."', '". utf8_decode($direccion) ."', ". $telefono .", '". $email ."')";

	$insertar_cliente = $conexion->query($insertar);
	
	echo 1;
}
else
{
	echo 0;
}

?>