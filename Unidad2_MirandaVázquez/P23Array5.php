<?php
/* CBTIS 89 
   Programa que calcula cuanto cuesta el kilo de fruta
   Jaime Eduardo Miranda Vázquez
   3°A Programación T.M.
*/
  $kilo=array("manzana"=>"$25","mango"=>"$40","limón"=>"$35","naranja"=>"$20");

  echo "** FRUTERÍA DEL SUR **","<br>","<br>";
  foreach($kilo as $fruta=>$precio)
  	{ echo "El kilo de " . $fruta . " cuesta " . $precio;
echo "<br>","<br>";
}
?>
