<?php
$repeticion=1;
$peso_por_repeticion=15;
do{
    $total_kilos=$repeticion*$peso_por_repeticion;
    $texto_rep=($repeticion==1)?"repeticion":"repeticiones";
    echo $repeticion."".$texto_rep."=". $total_kilos."kg<br>";
    $repeticion++;
}while($repeticion<=12);
?>
