<?php
/*CBTIS 89
  Programa que imprime el nombre de 6 personas y su edad.
  Jaime Eduardo Miranda Vázquez
  3°A de ProgramaciónT.M.
 */

 $nombres=array("Valentina"=>"16","Jaime"=>"16","Victor"=>"12","Esmeralda"=>"20","Esteban"=>"18","Gloria"=>"19");

 foreach ($nombres as $nombre => $edad) {
 	echo "El nombre de la persona es ". $nombre ." y tiene ". $edad ." años.";
 	echo "<br>";
 }
  	

 	?>