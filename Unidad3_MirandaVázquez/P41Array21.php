<?php
/*CBTIS 89
  Programa que almacena en un arreglo llamado $Compras el valor de 6 compras, posteriormente en otros arreglos se debe almacenar información de acuerdo a las siguientes condiciones: El arreglo $Descuentos se llenará de la siguiente manera:
  Compra menor 300=0
  Compra mayor 300 y menor o igual 1000=10%
  Compra mayor 1000 y menor o igual a 2500=15%
  Compra mayor 2500 y menor o igual a 5000=20%
  Compra mayor de 5000=25%
  En el arreglo $Total se coloca la diferencia entre la compra y el descuento y en un arreglo $Porcentaje coloca el porcentaje que se le aplicó de descuento.
  Jaime Eduardo Miranda Vázquez
  3°A de ProgramaciónT.M.
 */

  $Compras=array(350,699,199,899,1999,135);
  $Descuento=array();
  $Subtotal=array();
  $Total=array();
  $Porcentaje=array();

for($i=0;$i<6;$i++){
  if ($Compras<300){
  	$Descuento[$i]=0;
    $Porcentaje[$i]=0;
  	$Total[$i]=$Compras[$i]-$Descuento[$i];
  } else if($Compras>300 && $Compras<=1000){
  	$Descuento[$i]=$Compras[$i]*0.10;
    $Porcentaje[$i]=10;
    $Total[$i]=$Compras[$i]-$Descuento[$i];
  }else if($Compras>1000 && $Compras<=2500){
  	$Descuento[$i]=$Compras[$i]*0.15;
    $Porcentaje[$i]=15;
    $Total[$i]=$Compras[$i]-$Descuento[$i];
  }else if($Compras>2500 && $Compras<=5000){
    $Descuento[$i]=$Compras[$i]*0.20;
    $Porcentaje[$i]=20;
    $Total[$i]=$Compras[$i]-$Descuento[$i];
  }else if($Compras>=5000){
  	$Descuento[$i]=$Compras[$i]*0.25;
    $Porcentaje[$i]=25;
    $Total[$i]=$Compras[$i]-$Descuento[$i];
  }
}

echo "Compras     ","Descuento      ","Porcentaje      ","Total";
echo "<br>";
for($i=0;$i<6;$i++){
  echo $Compras[$i]."          ".$Descuento[$i]."           ".$Porcentaje[$i]."           ".$Total[$i];
}
echo "<br>";
  ?>
