<?php
/*CBTIS 89
Programa que almacena el nombre de 6 personas y dependiendo su edad los contabiliza en diversos arreglos en diversos arreglos dependiendo sus condiciones: Menor de 18, Grupo1, entre 18 y menor de 49, Grupo2 y entre 50 o más Grupo3.
Jaime Eduardo Miranda Vázquez
3°A de Programación T.M. */

$Nombres=array("Paco","Mari","Lalo","Rosi","Paty","Beto");

$Edad=array(17,30,71,38,12,58);
$Grupo1=array();
$Grupo2=array();
$Grupo3=array();

for ($i=0;$i<count ($Edad);$i++)
	{$Grupo1[$i]=0;
		$Grupo2[$i]=0;
		$Grupo3[$i]=0;
		if($Edad[$i]<18){
			$Grupo1[$i]=1;
		} else if ($Edad[$i]>=18 && $Edad[$i]<49){
			$Grupo2[$i]=1;
		}elseif ($Edad[$i] >= 50) {
			$Grupo3[$i]=1;
		}
}
echo "CBTIS 89 <br>";
echo "Nom"," ","Edad"," ","Gpo1"," ","Gpo2"," ","Gpo3";
echo "<br>";{for($i=0;$i<count($Nombres);$i++)
	echo $Nombres[$i]."     ".$Edad[$i]."     ".$Grupo1[$i]."     ".$Grupo2[$i]."     ".$Grupo3[$i]."<br>";
}
	
?>