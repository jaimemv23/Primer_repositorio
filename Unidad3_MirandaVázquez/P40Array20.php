<?php
/*CBTIS 89
  Programa que almacena por medio de un ciclo los números del 150 al 200 de la siguiente manera: En el arreglo1 van los números pares, en el arreglo2 van los números impares y en el arreglo3 va la suma de los números correspondientes al índice.
  Jaime Eduardo Miranda Vázquez
  3°A de ProgramaciónT.M.
 */

  $array1=array();
  $array2=array();
  $array3=array();

for($i=150;$i<=201;$i++){
	if($i%2==0){
		$array1[]=$i;
	}else {
		$array2[]=$i;
	}
}


echo "<br>";
echo "Pares      Impares      Suma <br>";
$i=0;
while($i<count($array1) && $i<count($array2)){
	$num1=($i<count($array1))? $array1[$i]:0;
	$num2=($i<count($array2))? $array2[$i]:0;
    $array3[]=$num1+$num2;

    echo $num1;
    echo "             ";
    echo $num2;
    echo "             ";
    echo $array3[$i];
    echo "<br>";

    $i++;
}

?>