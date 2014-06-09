<?php

//*******************************************************************************************************************************
// INICIO SESIÓN CLIENTES
//*******************************************************************************************************************************




include('conexion_MySQL.php');


if(!session_id())
{
        session_start();
}




// Comprueba que existan todas las variables que se envían desde Javascript
//**************************************************************************
if(isset($_REQUEST['nick']) && isset($_REQUEST['pas']))
{
	$nick = $_REQUEST['nick'];
	
	$pas = $_REQUEST['pas'];
}
//**************************************************************************



$busqueda = "SELECT id_cliente ,nick, nombre, apellidos,nif, telefono, email, direccion, cp, provincia, municipio
             FROM clientes
             WHERE clientes.nick = '". $conexion->real_escape_string($nick) ."' AND clientes.pas = '". $conexion->real_escape_string($pas) ."'"; 
	
			 
$buscar_cliente = $conexion->query($busqueda);


while(($fila =  $buscar_cliente->fetch_object()) != NULL)
{
	if($nick == $fila->nick)
	{	
            foreach($fila as $campo=>$valor)
            {    
                $_SESSION[$campo] = $valor;
            }
                
		/*$_SESSION['nick'] = $fila->nick;
                $_SESSION['pas'] = $fila->pas;
		
		$_SESSION['nif'] = $fila->nif;
		
		$_SESSION['nombre'] = $fila->nombre;
		
		$_SESSION['apellidos'] = $fila->apellidos;
		
		$_SESSION['provincia'] = $fila->provincia;
		
		$_SESSION['municipio'] = $fila->municipio;
		
		$_SESSION['cp'] = $fila->cp;
		
		$_SESSION['direccion'] = $fila->direccion;
		
		$_SESSION['telefono'] = $fila->telefono;
		
		$_SESSION['email'] = $fila->email;*/

		
            echo $_SESSION['nick'];
	}
	else
	{
            echo 0;
	}
}
?>