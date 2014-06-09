<?php
	include('../Plantillas/cabeceraWeb.php');
?>



<!-- div que muestra las opciones  de la opción principal elegida de la web -->

<div id="divSubMenu">
 
    <div id="divOpcionesSubMenuProductos" class="divOpciones">
            
         <div id="divOpcionComprar" class="divOpcionMenu"> <a href="#" onClick="opcion_productos()"> ver productos </a> </div>
                    
         <div id="divOpcionCarrito" class="divOpcionMenu"> <a href="#" onClick="opcion_carrito()"> carrito </a> </div> 
    </div>
</div>



<!-- div que muestra el resultado de cada opcion elegida -->

<div id="divContenedor">


   	<!-- div inicial de pagina productos -->
  
 	<div id="divInicialProd"> 
    </div>
    
    
    
    <!-- div donde se pueden filtrar productos, segun el embutido, el tipo de embutido y procedencia-->
    
    <div id="divFiltrarProd">
    
        <div id="divTituloFiltrar" class="divTitulo"> <span class="spanTitulo"> Buscar productos </span> </div>


        <div id="divOpcionesFiltro" class="divregistrate">
        
            <label class="labelFiltrarEmbutido"> Embutido </label> 
            
            <select id="selectEmbutidos" onFocus="solicitar_embutidos()"> </select>
            
            
            <label class="labelFiltrarEmbutido"> Tipo </label> 
            
            <select id="selectTipos" onFocus="solicitar_tipos()"> </select>
            
            
            <input type="button" id="buttonBuscar" class="button" value="Buscar" onClick="solicitar_productos()" />
        </div>
    </div>
    
   
  
   	
    <!-- div contenedor donde se listan los productos-->

    <div id="divListaProd">	
    
        <div id="divTituloProductos" class="divTitulo"> <span class="spanTitulo"> productos </span> </div>
        
        
        <!-- div donde se muestran los productos -->  
        
        <div id="divMostrarProd"> </div>
	</div>
    
    
    
    <?php
    
	if(!isset($_SESSION['nick']))
	{ 
		die('Acceso no permitido. Debe registrarse en la web para tener acceso');
	}
	else
	{
		
	?>

    
    <!-- div donde se muestran los productos seleccionados por el cliente antes de comprar -->
    
    <div id="divCarrito">
    
		<div id="divTituloProductos" class="divTitulo"> <span class="spanTitulo"> productos seleccionados </span> </div>

        
        <!-- div donde se muestra la tabla de compra -->
        
        <div id="divTablaCarrito">
        
            <!-- Tabla donde se muestran productos seleccionados antes de comprar -->
            
            <table id="tablaCompra"> 
            
                <!-- Cabecera de la tabla -->
                
                <thead id="theadTablaCompra">
                
                    <tr id="filaCabecera">
                    
                        <th class="cabeceraTabla" id="columnaTabla"> Cantidad </th>
                        
                        <th class="cabeceraTabla"> Producto </th>
                        
                        <th class="cabeceraTabla"> Precio </th>
                    </tr>
                </thead>
                
                
                <!-- Cuerpo de la tabla, donde se muestran los productos seleccionados -->
                
                <tbody id="tbodyTablaCompra">
                </tbody>
            </table>
            
            
            <div id="divCompra">
            	hola
            </div>
        </div>
    </div>
    
	<?php
	
	}
	
	?>
</div>   
 
