<?php
/*CBTIS 89
  Programa que ordena de forma ascendente y descedente números.
  Jaime Eduardo Miranda Vázquez
  3°A de ProgramaciónT.M.
 */
$arraynumerico= array("1", "4", "2", "0", "3");

//orden ascendente
sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>
