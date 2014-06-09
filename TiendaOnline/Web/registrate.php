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


    <!-- div para nuevo usuario que no está registrado -->
    
    <div id="divNuevoUser">

         <div id="divTituloNuevoUser" class="divTitulo"> <span class="spanTitulo"> Nuevo Usuario </span> </div>
        
        <br />
        
        <!-- div  para formulario de registro de nuevo usuario -->
        
        <div id="divFormNuevoUser" class="divregistrate">
           
            <!-- Formulario nuevo registro -->
            
            <form id="formNuevoUser" method="post">
				
                <label> NickName </label> 
                
                <input type="text" id="inputTextNick" size="20" maxlength="20"/>
                
                <label id="labelErrNick"></label>
                
                <br /><br />
                                
                <label> Password </label> 
                
                <input type="password" id="inputTextPas" size="20" maxlength="20"/>
                
                <label id="labelErrPas"></label>
                
                <br /><br />
                
                <label> NIF </label> 
                
                <input type="text" id="inputTextNIF" size="9" maxlength="9"/>
                
                <label id="labelErrNIF"></label>
                
                <br /><br />
                
                <label> Nombre </label> 
                
                <input type="text" id="inputTextNombre" size="20" maxlength="50"/>
                
                <label id="labelErrNombre"></label>
                
                <br /><br />
                
                <label> Apellidos </label> 
                
                <input type="text" id="inputTextApellidos" size="50" maxlength="50"/>
                
                <label id="labelErrApellidos"></label>
                
                <br /><br />
                
                <label> Provincia </label> 
                
                <select id="selectProvincias" onFocus="solicitar_provincias()"> </select>
                
                <label id="labelErrProvincia"></label>
                
                <br /><br />
                
                <label> Poblaci&oacute;n </label> 
                
                <select id="selectMunicipios" onFocus="solicitar_municipios()"> </select>
                
                <label id="labelErrMunicipio"></label>
               
                <br /><br />
                
                <label> C.P. </label> 
                
                <input type="text" id="inputNumCP" size="5" maxlength="5"/>
                
                <label id="labelErrCP"></label>
                
                <br /><br />
                
                <label> Direcci&oacute;n </label> 
                
                <input type="text" id="inputTextDirec" size="70" maxlength="70"/> 
                
                <label id="labelErrDireccion"></label>
               
                <br /><br />
                
                <label> E-mail </label> 
                
                <input type="email" id="inputEmail" size="50" maxlength="50"/>
                
                <label id="labelErrEmail"></label>
                
                <br /><br />
                
                <label> Tel&eacute;fono </label> 
                
                <input type="tel" id="inputTel" size="9" maxlength="9"/>
                
                <label id="labelErrTelefono"></label>
                
                <br /><br />
                
                <input type="button" id="buttonFormAlta"  class="button" value="Aceptar" onClick="insertar_cliente()" />
           </form>
        </div>
        	
        <br /><br />
    </div>
</div>



<?php
	include('../Plantillas/pieWeb.php');
?>


