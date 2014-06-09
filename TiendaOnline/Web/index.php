<?php
	include('../Plantillas/cabeceraWeb.php');
?>



<!-- div que muestra las opciones  de la opción principal elegida de la web -->

<div id="divSubMenu">
  
	<script> document.getElementById("divSubMenu").style.display = "none"; </script>
</div>



<!-- div que muestra el resultado de cada opcion elegida -->

<div id="divContenedor">
    
    <div id="divImagenes">
        
        <img id="imgPortada" name="imgPortada" alt="imgPortada" />
    </div>
</div>


<?php
	include('../Plantillas/pieWeb.php');
?>