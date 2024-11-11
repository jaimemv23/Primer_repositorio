<?php
/*CBTIS 89
  Programa que almacena datos en una arreglo multidimensional y posteriormente los imprime en diferentes posiciones.
  Jaime Eduardo Miranda Vázquez
  3°A de ProgramaciónT.M.
 */

  $datos=array(array(10,20,30),array(40,50,60),array(70,80,90));

  echo "NORMAL <br>";
  for ($i=0;$i<3;$i++)
  	{ for($j=0;$j<3;$j++)
  		{echo $datos[$i][$j]." ";}

  	echo "<br>";
  	}
 echo "<br>";
  	echo "FILAS A COLUMNAS <br>";
  	for ($i=0;$i<3;$i++)
  		{for ($j=0;$j<3;$j++)
  			{echo $datos[$j][$i]." ";}
  		echo "<br>";
    }
echo "<br>";
$datos=array(array(30,20,10),array(60,50,40),array(90,80,70));

    	echo "COLUMNAS INVERSAS <br>";
  	for ($i=0;$i<3;$i++)
  		{for ($j=0;$j<3;$j++)
  			{echo $datos[$i][$j]." ";}
  		echo "<br>";
    }
    echo "<br>";
    echo "FILAS INVERSAS <br>";
  	for ($j=0;$j<3;$j++)
  		{for ($i=0;$i<3;$i++)
  			{echo $datos[$i][$j]." ";}
  		echo "<br>";
    }

    ?>