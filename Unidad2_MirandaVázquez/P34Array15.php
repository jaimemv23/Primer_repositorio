<?php
/* CBTIS 89
Programa que convierte los datos de un arreglo en una cadena de texto, y de forma contraria es decir convierte una cadena de texto a elementos dento de un arreglo.
Jaime Eduardo Miranda Vázquez
3°A de Programación T.M.*/

$arraydatos=["Karina", "Rosales", "Orozco"];

$string=implode(" ",$arraydatos);
echo "Cadena de texto <br>";
echo $string;
echo "<br>","<br>";

$cadena="tercero de programación matutino";

$array=explode(" ",$cadena);

$longitud=count($array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";

for($i=0; $i<longitud; $i++)
{
	echo $array[$i];
	echo "<br>";
}

?>