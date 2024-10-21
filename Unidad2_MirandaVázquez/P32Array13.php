<?php
/*CBTIS 89
  Programa que da de alta 3 productos.
  Jaime Eduardo Miranda Vázquez
  3°A de ProgramaciónT.M.
 */
$arrayproductos= array("Camisa", "Pantalon", "Cinturon", "Gorra", "Calcetines");

//orden ascendente
sort($arrayproductos);
var_export($arrayproductos);

echo "<p>";

//orden descendente
rsort($arrayproductos);
var_export($arrayproductos);
?>
