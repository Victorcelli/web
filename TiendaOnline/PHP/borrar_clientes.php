<?php

//*******************************************************************************************************************************
//  BORRAR CLIENTES
//*******************************************************************************************************************************




include('conexion_MySQL.php');




// Comprueba que existan todas las variables que se envían desde Javascript
//**************************************************************************
if(isset($_REQUEST['nick']) && isset($_REQUEST['pas']))
{
	$nick = $_REQUEST['nick'];
	
	$pas = $_REQUEST['pas'];
}
//**************************************************************************

$busqueda = "SELECT * 
			 FROM clientes
			 WHERE clientes.nick = '". $nick ."' AND clientes.pas = '". $pas ."'"; 
			 
$buscar_cliente = $conexion->query($busqueda);

$registros = $conexion->num_rows($buscar_cliente);


if($registros == 0)
{
	echo "El cliente y/o el password son incorrectos";
}
else
{
	$sentencia = "DELETE 
				  FROM clientes
				  WHERE clientes.nick = '". $nick ."'";
				  
	$borrar_cliente = $conexion->query($sentencia);		
	
	echo "Se ha dado de baja correctamente";	  	
}
?>