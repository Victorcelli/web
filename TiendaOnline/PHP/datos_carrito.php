<?php

    include('conexion_MySQL.php');
    
    $carrito = $_POST['carrito'];
    
    $carrito = json_decode($carrito);
    
    foreach ($carrito->carrito as $productos)
	{
        $_SESSION['carrito'] = $productos;
  
	}
    
?>

