<?php

//*******************************************************************************************************************************
// EDITAR DATOS CLIENTE
//*******************************************************************************************************************************





include('conexion_MySQL.php');


if(!session_id())
{
    session_start();
}

// nick, nombre, apellidos,nif, telefono, email, direccion, cp, provincia, municipio

$campos = array('nick'=>FILTER_SANITIZE_STRING, 'nombre'=>FILTER_SANITIZE_STRING, 
    'apellidos'=>FILTER_SANITIZE_STRING,
    'nif'=>FILTER_SANITIZE_STRING, 
    'telefono'=>FILTER_SANITIZE_NUMBER_INT, 
    'email'=>FILTER_SANITIZE_EMAIL, 
    'direccion'=>FILTER_SANITIZE_STRING, 
    'cp'=>FILTER_SANITIZE_STRING, 
    'provincia'=>FILTER_SANITIZE_STRING, 
    'municipio'=>FILTER_SANITIZE_STRING);


$datos = filter_input_array(INPUT_POST, $campos);

$contador = count($campos);

foreach( $campos as $nombre => $val ):
{
    $consulta[] = $nombre.'="'. $datos[$nombre].'"';
}
    
    
$consulta = implode(",",$consulta);   

$consulta = "UPDATE clientes SET ". $consulta . " WHERE id_cliente= ". $_SESSION['id_cliente'];

$con=$conexion->query($consulta);
 

if( $conexion->affected_rows > 0)
{
    echo 1;
	
    //limpiar sesion
	
    $_SESSION = array();
	
	
    foreach( $campos as $nombre => $val )
    {
        $_SESSION[$nombre] = $datos[$nombre];
    }
}
else
{
    echo 0;
}

?>
