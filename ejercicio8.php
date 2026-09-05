<?php
$entradas=20;
$precio_entrada=12000;
do{
    $recaudacion=$entradas*$precio_entrada;
    $texto_entrada=($entradas==1)?"entrada":"entradas";
    echo $entradas."".$texto_entrada."=$". $recaudacion."<br>";
    $entradas--;
}while($entradas>=1);
?>


