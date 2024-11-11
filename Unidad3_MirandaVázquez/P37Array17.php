<?php
/*CBTIS 89
  Programa que suma, resta, multiplicación y división.
  Jaime Eduardo Miranda Vázquez
  3°A de ProgramaciónT.M.
 */

 $arraynumeros=array("-4","8","17","-11","-3","1","20","-30","21","50","-73","-7","-10","-8");
 $arraypositivos=array();
 $arraynegativos=array();

 foreach ($arraynumeros as $numero) {
   if ($numero>0){
    $arraypositivos[]=$numero;
   } else if ($numero<0){
    $arraynegativos[]=$numero;
   }
 }

$sumapositivos=array_sum($arraypositivos);
$sumanegativos=array_sum($arraynegativos);
echo "SUMA DE LOS POSITIVOS <br>";
foreach ($arraypositivos as $positivo){
  echo $positivo . "<br>";
}
echo "La suma es: " . $sumapositivos . "<br>";
echo "SUMA DE LOS NEGATIVOS <br>";
foreach ($arraynegativos as $negativo){
  echo $negativo . "<br>";
}
echo "La suma es: " . $sumanegativos . "<br>";
?>