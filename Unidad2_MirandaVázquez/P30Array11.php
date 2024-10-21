<?php
/*CBTIS 89
  Programa que agrega un animal al codigo.
  Jaime Eduardo Miranda Vázquez
  3°A de ProgramaciónT.M.
 */
   $array_numerico_indexado = array(1, "Gato", 2, "Perro");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }

   array_push($array_numerico_indexado, 3, "Caballo");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }
?>