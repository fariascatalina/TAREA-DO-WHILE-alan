<?php
$cajas=12;
$precio_caja=2500;
do{
    $total=$cajas*$precio_caja;
    $texto_caja=($cajas==1)?"caja":"cajas";
    echo $cajas."".$texto_caja."=$".$total."<br>";
    $cajas--;
}while($cajas<=1);
?>
