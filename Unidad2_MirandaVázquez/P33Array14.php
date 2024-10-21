<?php
/*CBTIS 89
  Programa que ordena el nombre de 6 personas.
  Jaime Eduardo Miranda Vázquez
  3°A de ProgramaciónT.M.
 */

  $arraynombres=array("Juan","Pedro","Maria","Martha","Jose","Julian");
  echo "Datos del arreglo ordenados de forma ascendente por medio de un ciclo for","<br>";
  for($i = 0; $i<$arraynombres; $i++)
	{ 
		echo $arraynombres[$i];
		echo "<br>";
		
	}
//orden ascendente
sort($arraynombres);
var_export($arraynombres);
array_push($arraynombres,"Andrea","Angel","Carlos","Erick");

echo "<p>";

echo "Datos del arreglo ordenados de for,a descendente por medio de un ciclo for","<br>";
for($i = 0; $i<$arraynombres; $i++)
	{ 
		echo $arraynombres[$i];
		echo "<br>";
		
	}
//orden descendente
rsort($arraynombres);
var_export($arraynombres);
unset($arraynombres[6]);
unset($arraynombres[3]);

for($i = 0; $i<$arraynombres; $i++)
	{ 
		echo $arraynombres[$i];
		echo "<br>";
		
	}

?>
