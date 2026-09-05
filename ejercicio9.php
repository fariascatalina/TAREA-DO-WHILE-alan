<?php
$numero_pedido=1;
$valor_pedido=3500;
do{
    $recaudacion=$numero_pedido*$valor_pedido;
    echo"Pedido".$numero_pedido."$=".recaudacion."<br>";
    $numero_pedido++;
}while($numero_pedido<=10);
echo"promocion finalizada2";
?>
