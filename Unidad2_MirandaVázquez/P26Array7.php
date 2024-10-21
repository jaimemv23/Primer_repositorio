<?php
/*CBTIS 89
  Programa que muestra 3 ceros, 3 unos y 3 dos.
  Jaime Eduardo Miranda Vázquez
  3°A de ProgramaciónT.M.
 */
   $datos = array(
   array(0, 0, 0),array(1, 1, 1),array(2, 2, 2));

   foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }

?>