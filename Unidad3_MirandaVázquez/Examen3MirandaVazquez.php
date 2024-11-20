<?php
/* CBTIS 89
   Programa que almacena el nombre de cuetro artículos en un arreglo llamado $Productos y en otro arreglo multidimensional llamado $Precios almacena los precios correspondientes de 3 meses, esto se hace por medio de filas y columnas.
   Jaime Eduardo Miranda Vázquez
   3°A de Programación T.M.
   */

   $Productos=array("Vestido","Pantalón","Cinturón","Camiseta");
   $Precios=array(array(500,600,550),array(800,700,600),array(400,200,300),array(500,200,500));
   $Subtotal=array();
   $Promedio=array();

   echo "TIENDA DE ROPA <br>";
   for($i=1;$i<4;$i++){
  	$Subtotal[$i]=$Subtotal;
    $Promedio[$i]=$Promedio;}

  	echo "<br>";
echo "Productos","------- ","Precios","------ ","Subtotal","------ ","Promedio";
echo "<br>";
for($i=1;$i<4;$i++){
  echo $Productos[$i]."---------- ".$Precios[$i]."---------- ".$Subtotal[$i]."---------- ".$Promedio[$i]. "<br>";
}
echo "<br>";
  echo "PRECIOS <br>";
  for ($i=0;$i<4;$i++){
  	 for($j=0;$j<4;$j++){
  		echo $Precios[$i][$j]." ";}
}
  ?>
