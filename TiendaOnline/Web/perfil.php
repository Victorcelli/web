<?php
	include('../Plantillas/cabeceraWeb.php');
        
        if( !isset($_SESSION['nick']) ) die('Acceso no permitido');
?>



<!-- div que muestra las opciones  de la opción principal elegida de la web -->

<div id="divSubMenu">
  
    <!-- Opciones para la pestaña  registrarse -->
    
    <div id="divOpcionesSubMenuPerfil" class="divOpciones">
        
        <div class="divOpcionMenu"> <a href="perfil.php"> editar perfil </a> </div> 
                    
        <div class="divOpcionMenu"> <a href="baja.php"> baja </a> </div>
    </div>
</div>


<!-- div que muestra el resultado de cada opcion elegida -->

<div id="divContenedor">


    <!-- div para editar datos de usuario -->
    
    <div id="divEditarUser">
    
        <div id="divTituloEditar" class="divTitulo"> <span class="spanTitulo"> datos usuario </span> </div>
        
        <br /> 
        
        
        <!-- div donde se muestran y modifican datos del cliente -->
        
        <div id="divDatosUser">
        
         <?php
            $campos = $_SESSION;
            unset($campos['id_cliente']);
         
            foreach( $campos as $dato => $valor ): 
         ?>   
            <label> <?= ucfirst($dato)?>: </label> 
                
            <input type="text" class="inpTextNuevo" id="<?=$dato?>"  value='<?=$valor?>'/> 
            
            
            
           
            <br /><br />
            
            
        <?php    
            endforeach; 
         ?>
            
            <input type="button" class="buttonEditarNick" value="Editar" onclick="solicitar_editar()"/>
            <!--
                       <label> Provincia: </label> 
        
            <select id="selectProvinciaNuevo" onFocus="solicitar_provincias(selectProvinciaNuevo)"> </select>
            
            <input type="button" id="buttonEditarPas" value="Editar"/>                
            

            <br /><br />
            
            <label> Municipio: </label> 
                  
            <select id="selectMunicipioNuevo" onFocus="solicitar_municipios(selectProvinciaNuevo, selectMunicipioNuevo)"> </select>
            
            <input type="button" id="buttonEditarMunicipio" value="Editar"/>
            -->
        </div>

    </div>
</div>


<?php
	include('../Plantillas/pieWeb.php');
?>
    


