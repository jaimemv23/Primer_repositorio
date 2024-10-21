<?php
/*CBTIS 89
  Programa que almacena los nombres de 6 personaas en un arreglo y posteriormente los imprime por medio de un ciclo for
  Jaime Eduardo Miranda Vázquez
  3°A de ProgramaciónT.M.
 */
  $arraynombres=array("Jose","Juan","Pedro","Esteban","Elena","Ana");
  //Se obtiene el número de elementos 
  $longitud=count($arraynombres);

  //Recorre todos los elementos
  for($i=0;$i<$longitud;$i++)
  	{//Se obtiene el valor de cada elemento
  		echo $arraynombres[$i];
  		echo "<br>";
  	}
  	?>