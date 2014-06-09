<?php
	include('../Plantillas/cabeceraWeb.php');
?>



<!-- div que muestra las opciones  de la opción principal elegida de la web -->

<div id="divSubMenu">
  
    <div id="divOpcionesSubMenuPerfil" class="divOpciones">
 
        <div class="divOpcionMenu"> <a href="perfil.php"> editar perfil </a> </div> 
                    
        <div class="divOpcionMenu"> <a href="baja.php"> baja </a> </div>
    </div>
</div>


<!-- div que muestra el resultado de cada opcion elegida -->

<div id="divContenedor">


    <!-- div para baja de usuario -->
    
    <div id="divBajaUser">
        
        <div id="divTituloEditar" class="divTitulo"> <span class="spanTitulo"> datos usuario </span> </div>
        
        <br /><br />
        
        
        <!-- div para formulario de baja -->
        
        <div id="divFormBajaUser">
        
            <!-- formulario para baja de usuario -->
            
            <form id="formBajaUser" method="post">
            
                <label> NickName </label> <input type="text" id="inputTextBajaNick" size="20" maxlength="20"/>
                
                <label id="labelErrBajaNick"> </label>
                    
                <br /><br />
                    
                <label> Password </label> <input type="password" id="inputTextBajaPas" size="20" maxlength="20"/>
                
                <label id="labelErrBajaPas"> </label>

                
                <br /><br />   
                
                <input type="button"  id="buttonBaja" class="button" value="Baja" onClick="borrar_cliente()"/>
            </form>
        </div>
    </div>
    
    <br /><br />
</div>



<?php
	include('../Plantillas/pieWeb.php');
?>
