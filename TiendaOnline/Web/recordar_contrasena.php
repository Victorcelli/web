<?php
	include('../Plantillas/cabeceraWeb.php');
?>


<!-- div que muestra las opciones  de la opción principal elegida de la web -->

<div id="divSubMenu">  

    <div id="divOpcionesSubMenuRegistro" class="divOpciones">
    
        <div id="divOpcionRegAlta" class="divOpcionMenu"> <a id="aOpcionRegAlta" href="registrate.php"> alta </a> </div> 
                  
        <div id="divOpcionRegRec" class="divOpcionMenu" > <a id="aOpcionRegRec" href="recordar_contrasena.php" > recordar contrase&ntilde;a </a> </div>        
	</div>
</div>



<!-- div que muestra el resultado de cada opcion elegida -->

<div id="divContenedor">

    <!-- div para usuario que está registrado pero no se acuerda de las credenciales -->
    
    <div id="divRecUser" class="divRegistro">
    
        <div id="divTituloRec" class="divTitulo"> <span class="spanTitulo">  Usuario registrado </span> </div>
        
        <br /><br />
     
        
        <!-- div para formulario de recordatorio de credenciales -->
        
        <div id="divFormRecUser" class="divregistrate">
            
            <form id="formRecUser" method="post" >   
                
                <label> E-mail </label> 
                
                <input type="email" id="inputRecEmail" size="50" maxlength="50"/>
                
                <label id="labelErrRecEmail"></label>
                
                <br /><br />
                
                <input type="button" id="buttonRec" class="button" value="Enviar" onClick="enviar_email()" />
            </form>
        </div>
        
        <br /><br />
    </div>       
</div>


<?php
	include('../Plantillas/pieWeb.php');
?>



