<?php

//*******************************************************************************************************************************
// INICIA CONEXION A MYSQL
//*******************************************************************************************************************************




$conexion = mysqli_init(); 
        
        
$conexion->real_connect("127.0.0.1", "root","","tiendaonline");

//$conexion->select_db($conexion, "tiendaonline");



//$conexion->select_db($con)
// Comprueba la conexión. Si falla lanza un mensaje de aviso
//**************************************************************************

if(mysqli_connect_errno())
//if(!$conexion)
{
	echo "Error de conexión a la Base de Datos: ". $conexion->connect_error();
}
//**************************************************************************

?>
