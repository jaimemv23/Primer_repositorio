<?php
/*CBTIS 89
  Programa que almacena diversos datos en un arreglo y posteriormente los imprime
  Jaime Eduardo Miranda Vázquez
  3°A de ProgramaciónT.M.
 */
  $equipo=array("portero"=>"Julio","defensa"=>"Diego","medio"=>"Jair","delantero"=>"Rafa");

  echo "** SELECCIÓN NACIONAL **","<br>","<br>";
  foreach($equipo as $posicion=>$jugador)
  	{ echo "El jugador " . $jugador . " es el " . $posicion;
echo "<br>","<br>";
}
?>