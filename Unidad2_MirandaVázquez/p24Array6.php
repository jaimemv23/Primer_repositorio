<?php
/* CBTIS 89 
   Programa que muestra en que escuela esta cada alumno
   Jaime Eduardo Miranda Vázquez
   3°A Programación T.M.
*/
  $escuela=array("Valentina"=>"CBTIS 89 en 3°A de Logística","Jaime"=>"CBTIS 89 en 3°A de Programación","Marcos"=>"CBTIS 130 en 1°A de Arquitectura","Juan"=>"COBA en 5°A de Mecatrónica","Alejandra"=>"Lobos 5°A de Programación");

  echo "** ESCUELAS DE ALUMNOS **","<br>","<br>";
  foreach($escuela as $alumno=>$grupo)
  	{ echo "El alumno " . $alumno . " esta en " . $grupo;
echo "<br>","<br>";
}
?>
