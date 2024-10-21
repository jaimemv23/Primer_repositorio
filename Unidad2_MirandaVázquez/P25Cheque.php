<?php
/* CBTIS 89 
   Programa que saca el residuo de un cheque
   Jaime Eduardo Miranda Vázquez
   3°A Programación T.M.
*/

$Cheque=56738
$B1000=floor($Cheque/1000);
$residuo=$Cheque%1000;
$B500=floor($Cheque/500);
$residuo=$Cheque%500;
$B200=floor($Cheque/200);
$residuo=$Cheque%200;
$B100=floor($Cheque/100);
$residuo=$Cheque%100;
$B50=floor($Cheque/50);
$residuo=$Cheque%50;
$B20=floor($Cheque/20);
$residuo=$Cheque%20;
$M10=floor($Cheque/10);
$residuo=$Cheque%10;
$M5=floor($Cheque/5);
$residuo=$Cheque%5;
$M2=floor($Cheque/2);
$residuo=$Cheque%2;
$M1=floor($Cheque/1);
$residuo=$Cheque%1;



?>
