<?php
/*CBTIS 89
  Programa que muestra números del 1 al 100 y solo muestra los números pares.
  Jaime Eduardo Miranda Vázquez
  3°A de ProgramaciónT.M.
 */

$array=range(1,100);
for($i=1;$i<=100;$i++) {
	if($i%2==0){
		echo $i . "<br>";
	}


}

?>
